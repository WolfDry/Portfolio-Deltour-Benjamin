<?php
if (isset($responce)) {
?>
    <div class="content-responce">

        <?php
        if ($responce) {
        ?>
            <div class="responce">
                <h4>Votre mail a bien été envoyé</h4>
            </div>
        <?php
        } else {
        ?>
            <div class="responce error">
                <h4>Votre mail n'a pu être envoyé</h4>
            </div>
        <?php
        }
        ?>
    </div>
<?php
}
?>

<div class="content">
    <h1>Etudiant en développement informatique</h1>
    <p>
        Durant mes années de collège/lycée je souhaitais intégrer dans la police scientifique et plus précisement la branche informatique. Je me suis donc orienté en BTS Services Informatiques aux Organisations qui propose des cours de cybersécurité. Toutefois ce BTS m’a également fait découvrir le développement informatique et notamment le développement web qui m'a énormement plu. Par conséquent j’envisage de poursuivre mes études afin d’approfondir mes connaissances dans ces domaines.
    </p>
    <a href="" role="button" data-target="#modal" data-toggle="modal">Contactez moi</a>
    <div class="modal" id="modal" role="dialog">
        <div class="modal-content">
            <div class="modal-close" data-dismiss="dialog">
                <i class="las la-times"></i>
            </div>
            <div class="modal-header">
                <h2>Contactez-moi</h2>
            </div>
            <div class="modal-body">
                <form action="#" method="POST">
                    <div class="infos">
                        <input type="text" placeholder="Entrez votre nom" name="name">
                        <input type="text" placeholder="Entrez votre prenom" name="surname">
                        <input type="mail" placeholder="Entrez votre mail" name="mail">
                    </div>
                    <div class="content_form">
                        <input type="text" placeholder="Entrez le sujet de votre message" name="subject">
                        <textarea placeholder="Entrez votre message" name="message"></textarea>
                    </div>
            </div>
            <div class="modal-footer">
                <input type="hidden" name="post" value="true">
                <button class="btn" type="submit">Envoyer</button>
                </form>
            </div>
        </div>
    </div>
    <h2 id="competences">Mes compétences :</h2>
    <div class="competences">
        <h3>Languages :</h3>
        <div class="competence">
            <div class="content_competence">
                <img src="/<?= WEBROOT2 ?>/webroot/img/languages/html.png" alt="html">
                <h2>HTML</h2>
            </div>
            <div class="content_competence">
                <img src="/<?= WEBROOT2 ?>/webroot/img/languages/css.png" alt="css">
                <h2>CSS</h2>
            </div>
            <div class="content_competence">
                <img src="/<?= WEBROOT2 ?>/webroot/img/languages/php.png" alt="php">
                <h2>PHP</h2>
            </div>
            <div class="content_competence">
                <img src="/<?= WEBROOT2 ?>/webroot/img/languages/js.png" alt="javascript">
                <h2>JavaScript</h2>
            </div>
            <div class="content_competence">
                <img src="/<?= WEBROOT2 ?>/webroot/img/languages/csharp.png" alt="c#">
                <h2>C#</h2>
            </div>
            <div class="content_competence">
                <img src="/<?= WEBROOT2 ?>/webroot/img/languages/java.png" alt="java">
                <h2>Java</h2>
            </div>
            <div class="content_competence">
                <img src="/<?= WEBROOT2 ?>/webroot/img/languages/python.png" alt="python">
                <h2>Python</h2>
            </div>
            <div class="content_competence">
                <img src="/<?= WEBROOT2 ?>/webroot/img/languages/sql.png" alt="sql">
                <h2>SQL</h2>
            </div>
        </div>
        <h3>Framework</h3>
        <div class="competence">
            <div class="content_competence">
                <img src="/<?= WEBROOT2 ?>/webroot/img/languages/bootstrap.png" alt="bootstrap">
                <h2>Bootstrap</h2>
            </div>
            <div class="content_competence">
                <img src="/<?= WEBROOT2 ?>/webroot/img/languages/symfony.png" alt="symfony">
                <h2>Symfony</h2>
            </div>
        </div>
    </div>
    <h2 id="projets">Projets réalisés :</h2>
    <div class="projects">
        <div class="project">
            <h3>Le gite d'auzon</h3>
            <p>juin 2021</p>
            <div class="slider1 slider" data-slider="0">
                <img src="/<?= WEBROOT2 ?>/webroot/img/projets/legitedauzon1.png" alt="legitedauzon" class="img_slider1 active" data-slider="0">
                <img src="/<?= WEBROOT2 ?>/webroot/img/projets/legitedauzon2.png" alt="legitedauzon" class="img_slider1" data-slider="0">
                <img src="/<?= WEBROOT2 ?>/webroot/img/projets/legitedauzon3.png" alt="legitedauzon" class="img_slider1" data-slider="0">
            </div>
            <p class="desc">Site internet du gite d'Auzon que j'ai réalisé durant mon stage de première année de BTS SIO. Les propriétaires souhaitaient un site plus actuel pour mettre en valeur leur location saisonnière.</p>
        </div>
        <div class="project">
            <h3>Burn out Spirit</h3>
            <p>janvier - fevrier 2022</p>
            <div class="slider2 slider" data-slider="1">
                <img src="/<?= WEBROOT2 ?>/webroot/img/projets/burnoutspirit1.png" alt="burnoutspirit" class="img_slider2 active" data-slider="1">
                <img src="/<?= WEBROOT2 ?>/webroot/img/projets/burnoutspirit2.png" alt="burnoutspirit" class="img_slider2" data-slider="1">
                <img src="/<?= WEBROOT2 ?>/webroot/img/projets/burnoutspirit3.png" alt="burnoutspirit" class="img_slider2" data-slider="1">
            </div>
            <p class="desc">Site internet de Burn Out Spirit que j'ai réalisé durant mon stage de deuxième année de BTS SIO. Le but de ce stage était de réaliser un site internet afin d'accompagner ma maitre de stage dans le lancement de sa micro-entreprise.</p>
        </div>
        <div class="project">
            <h3>Portfolio</h3>
            <p>mars 2022</p>
            <div class="slider3 slider" data-slider="2">
                <img src="/<?= WEBROOT2 ?>/webroot/img/projets/portfolio1.png" alt="Deltour Benjamin" class="img_slider3 active" data-slider="2">
                <img src="/<?= WEBROOT2 ?>/webroot/img/projets/portfolio2.png" alt="Deltour Benjamin" class="img_slider3" data-slider="2">
                <img src="/<?= WEBROOT2 ?>/webroot/img/projets/portfolio3.png" alt="Deltour Benjamin" class="img_slider3" data-slider="2">
            </div>
            <p class="desc">Site internet sur lequel vous êtes présentant mes compétences et mes projets.</p>
        </div>
    </div>
</div>