<?php 

namespace View;

use View\View;

class ViewHeader{

    private ?string $title;
    private ?string $linkJs;
    private ?string $linkCss;
    private ?string $buffer = "";


    public function __construct(?string $title = "", ?string $linkCss = "", ?string $linkJs = "") {
        $this->title = $title;
        $this->linkJs = $linkJs;
        $this->linkCss = $linkCss;
    }

    //METHODS
    public function launchBuffer():self {
        ob_start();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $this->title ?></title>
    <link rel="stylesheet" href="./assets/styles/header_footer.css">
    <link rel="stylesheet" href="<?= $this->linkCss ?>">
    <script defer type="module" src="./assets/scripts/header.js"></script>
    <script defer type="module" src="<?= $this->linkJs ?>"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Assistant:wght@200..800&family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
</head>

<body>

    <header aria-label="menu de navigation">
        <button id="menu_burger" aria-label="ouvrir la navigation"><img id="logo_burger" src="./assets/img/menu_burger.svg" alt="logo menu burger"></button>
        <button aria-label="revenir à l'accueil"><img id= "logo_arcance" src="./assets/img/logo_arcance.svg" alt="logo d'arcance"></button>
        <a href="#" aria-label="revenir à l'accueil">Accueil</a>
        <a href="#" aria-label="aller sur la page offres">Offres</a>
        <a href="#" aria-label="aller sur la page corbeille">Corbeille</a>
        <button aria-label="ouvrir le menu du compte"><img id="logo_compte" src="./assets/img/logo_compte.svg" alt="logo compte"></button>
    </header>

    <div id="inside_burger">
        <a class="link_inside_burger" href="#" aria-label="revenir à l'accueil">Accueil</a>
        <a class="link_inside_burger" href="#" aria-label="aller sur la page offres">Offres</a>
        <a class="link_inside_burger" href="#" aria-label="aller sur la page corbeille">Corbeille</a>
    </div>

<?php 

        $this->buffer = ob_get_clean();
        return $this;
    }

    public function display(): void {
        echo $this->buffer;
    }
}