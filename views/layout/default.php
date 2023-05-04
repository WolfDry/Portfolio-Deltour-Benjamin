<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="apple-touch-icon" sizes="180x180" href="/<?= WEBROOT2 ?>/webroot/img/favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/<?= WEBROOT2 ?>/webroot/img/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/<?= WEBROOT2 ?>/webroot/img/favicon/favicon-16x16.png">
    <link rel="manifest" href="/<?= WEBROOT2 ?>/webroot/img/favicon/site.webmanifest">
    <link rel="stylesheet" href="/<?= WEBROOT2 ?>/webroot/css/style.css">
    <link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">
    <script src="/<?= WEBROOT2 ?>/webroot/js/script.js"></script>
    <title>DELTOUR Benjamin</title>
</head>

<body>
    <header>
        <div id="title">
            <div class="img">
                <img src="/<?= WEBROOT2 ?>/webroot/img/photo.jpg" alt="Picture">
            </div>
            <a href="/<?= WEBROOT2 ?>/" class="btn-shine">DELTOUR Benjamin</a>
        </div>
        <div id="links">
            <button class="mobile-nav-toggle" aria-controls="nav_links" aria-expanded="false">
                <span class="sr-only"></span>
            </button>
            <div class="nav_links" data-visible="false">
                <a id="linkedin" href="https://github.com/WolfDry" target="new" aria-hidden="true"><i class="lab la-github"></i></a>
                <a id="linkedin" href="https://www.linkedin.com/in/benjamin-deltour-42312020b/" target="new" aria-hidden="true"><i class="lab la-linkedin-in"></i></a>
                <a href="#competences" aria-hidden="true">Mes compétences</a>
                <a href="#projets" aria-hidden="true">Mes projets</a>
                <a href="/<?= WEBROOT2 ?>/webroot/pdf/CV_Deltour_Benjamin.pdf" target="new" aria-hidden="true">Mon CV</a>
            </div>
        </div>
    </header>
    <?php

    echo $content_for_layout;

    ?>
    <footer>
        <div class="footer">
            <div class="txt">
                <h2>Contact :</h2>
                <p><a href="mailto:benjamindeltour22@gmail.com"><i class="las la-envelope"></i> Benjamin Deltour</a></p>
                <p><a href="https://www.linkedin.com/in/benjamin-deltour-42312020b/"><i class="lab la-linkedin-in"></i> Linkedin</a></p>
            </div>
            <div class="picture">
                <img src="/<?= WEBROOT2 ?>/webroot/img/photo.jpg" alt="Picture">
            </div>
        </div>
        <p>© 2022 Benjamin DELTOUR / <a href="/<?= WEBROOT2 ?>/mentions">Mentions Légales</a></p>
    </footer>
</body>

</html>