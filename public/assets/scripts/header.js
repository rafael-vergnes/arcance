/* SELECTION ET CREATION DE VARIABLE */

let menu_burger = document.body.querySelector("#menu_burger");
console.log(menu_burger);

let inside_burger = document.body.querySelector("#inside_burger");
console.log(inside_burger);

let isClicked_burger = false;

/* ALGO */

menu_burger.addEventListener("click",(clickEvent)=>{
    inside_burger.style.display = isClicked_burger ? "flex" : "none";
    isClicked_burger = !isClicked_burger;
})

