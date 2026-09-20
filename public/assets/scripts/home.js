let input = document.querySelector("#recherche");
console.log(input);

input.addEventListener("keyup",(event)=>{
    console.log(input.value);
    fetch("/search?recherche=" + input.value)
    .then(response => {
        let data = response.json();
        return data;
    })
    .then(data => {
        const container = document.querySelector("#files_container");
        container.innerHTML = "";
        if(data.length === 0) {
            container.innerHTML = "<p>Aucun document trouvé</p>";
        }
        data.forEach((file) => {
            container.innerHTML += '<a aria-label="accéder au document" href="' + file.url + '"><div><img class="pdf" src="./assets/img/logo_pdf.svg" alt="logo document pdf"><p>' + file.name + '</p></div><button aria-label="options du document" ><img src="./assets/img/menu_kebab.svg" alt="logo menu kebab"></button></a>';
        }); 
    });
})