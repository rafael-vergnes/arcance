<?php

namespace View;

use View\View;

class ViewHome extends View {
    //ATTRIBUT

    //CONSTRUCTOR


    //GETTER ET SETTER


    //METHODS
    public function launchBuffer(): self {
        ob_start();
?>

<main aria-label="menu principal">
    <div id="head_main">
        <h3>Bienvenue Rafaël</h3>
        <label for="recherche" method="HOST"></label>
        <input aria-label="rechercher" type="text" name="recherche" id="recherche" placeholder="Recherche">
    </div>
    <a aria-label="accéder au document" href="./assets/img/lorem_pdf.pdf"><div><img class="pdf" src="./assets/img/logo_pdf.svg" alt="logo document pdf"><p>RIB</p></div><button aria-label="options du document" ><img src="./assets/img/menu_kebab.svg" alt="logo menu kebab"></button></a>
    <a aria-label="accéder au document" href="./assets/img/lorem_pdf.pdf"><div><img class="pdf" src="./assets/img/logo_pdf.svg" alt="logo document pdf"><p>Relevés de notes 2024</p></div><button aria-label="options du document"><img src="./assets/img/menu_kebab.svg" alt="logo menu kebab"></button></a>
    <a aria-label="accéder au document" href="./assets/img/lorem_pdf.pdf"><div><img class="pdf" src="./assets/img/logo_pdf.svg" alt="logo document pdf"><p>Bulletin de salaire - Mars 2026</p></div><button aria-label="options du document"><img src="./assets/img/menu_kebab.svg" alt="logo menu kebab"></button></a>
    <a aria-label="accéder au document" href="./assets/img/lorem_pdf.pdf"><div><img class="pdf" src="./assets/img/logo_pdf.svg" alt="logo document pdf"><p>Carte nationale d'identité</p></div><button aria-label="options du document"><img src="./assets/img/menu_kebab.svg" alt="logo menu kebab"></button></a>
    <a aria-label="accéder au document" href="./assets/img/lorem_pdf.pdf"><div><img class="pdf" src="./assets/img/logo_pdf.svg" alt="logo document pdf"><p>Contrat de location</p></div><button aria-label="options du document"><img src="./assets/img/menu_kebab.svg" alt="logo menu kebab"></button></a>

    <a aria-label="accéder au document" href="./assets/img/lorem_pdf.pdf"><div><img class="pdf" src="./assets/img/logo_pdf.svg" alt="logo document pdf"><p>RIB</p></div><button aria-label="options du document"><img src="./assets/img/menu_kebab.svg" alt="logo menu kebab"></button></a>
    <a aria-label="accéder au document" href="./assets/img/lorem_pdf.pdf"><div><img class="pdf" src="./assets/img/logo_pdf.svg" alt="logo document pdf"><p>Relevés de notes 2024</p></div><button aria-label="options du document"><img src="./assets/img/menu_kebab.svg" alt="logo menu kebab"></button></a>
    <a aria-label="accéder au document" href="./assets/img/lorem_pdf.pdf"><div><img class="pdf" src="./assets/img/logo_pdf.svg" alt="logo document pdf"><p>Bulletin de salaire - Mars 2026</p></div><button aria-label="options du document"><img src="./assets/img/menu_kebab.svg" alt="logo menu kebab"></button></a>
    <a aria-label="accéder au document" href="./assets/img/lorem_pdf.pdf"><div><img class="pdf" src="./assets/img/logo_pdf.svg" alt="logo document pdf"><p>Carte nationale d'identité</p></div><button aria-label="options du document"><img src="./assets/img/menu_kebab.svg" alt="logo menu kebab"></button></a>
    <a aria-label="accéder au document" href="./assets/img/lorem_pdf.pdf"><div><img class="pdf" src="./assets/img/logo_pdf.svg" alt="logo document pdf"><p>Contrat de location</p></div><button aria-label="options du document"><img src="./assets/img/menu_kebab.svg" alt="logo menu kebab"></button></a>

    <div id="conteneur_bouton_plus">
        <button aria-label="ajouter un document"><img id= "bouton_plus" src="./assets/img/logo_plus.svg" alt="bouton plus"></button>
    </div>

</main>

<?php
        $this->setBuffer(ob_get_clean());
        return $this;
    }
}