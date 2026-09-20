<?php 

namespace View;

class ViewFooter{
    
    private ?string $buffer = "";

    public function launchBuffer():self {
        ob_start();

?>

<footer aria-label="menu de navigation inférieur">

        <div id="barre_violette"></div>

        <div id="conteneur_footer">

        <div aria-label="section réseaux sociaux" id="reseaux_sociaux">
            <a href="#"><img class="logo_reseaux" src="./assets/img/logo_instagram.svg" alt="logo instagram"></a>
            <a href="#"><img class="logo_reseaux" src="./assets/img/logo_facebook.svg" alt="logo facebook"></a>
            <a href="#"><img class="logo_reseaux" src="./assets/img/logo_x.svg" alt="logo X"></a>
        </div>

        <div aria-label="section mentions légales" id="mentions_legales">
            <a href="#">Mentions légales</a>
            <a href="#">Conditions générales d'utilisation</a>
            <a href="#">Politique de protection des données</a>
            <a href="#">Politique et gestion des cookies</a>
            <a href="#">Accessibilité</a>
        </div>

        <div aria-label="plan du site" id="plan_site">
            <p>Plan du site</p>
            <a href="#">Accueil</a>
            <a href="#">Offres</a>
            <a href="#">Corbeille</a>
            <a href="#">Profil</a>
        </div>

        </div>

    </footer>
    

</body>
</html>

<?php 

        $this->buffer = ob_get_clean();
        return $this;
    }

    public function display(): void {
        echo $this->buffer;
    }
}