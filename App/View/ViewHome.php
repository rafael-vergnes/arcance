<?php

namespace View;

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

    <?php
        foreach($this->getData() as $row) {
    ?>
            <a aria-label="accéder au document" href="<?= $row["url"] ?>"><div><img class="pdf" src="./assets/img/logo_pdf.svg" alt="logo document pdf"><p><?= $row["name"] ?></p></div><button aria-label="options du document" ><img src="./assets/img/menu_kebab.svg" alt="logo menu kebab"></button></a>
    <?php
        }
    ?>

    <div id="conteneur_bouton_plus">
        <button aria-label="ajouter un document"><img id= "bouton_plus" src="./assets/img/logo_plus.svg" alt="bouton plus"></button>
    </div>

</main>

<?php
        $this->setBuffer(ob_get_clean());
        return $this;
    }
}