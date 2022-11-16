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

<section class="content">
    <h1>Alternant en développement informatique</h1>
    <p>
        Durant mes années de collège/lycée je souhaitais intégrer dans la police scientifique et plus précisement la branche informatique. Je me suis donc orienté en BTS Services Informatiques aux Organisations qui propose des cours de cybersécurité. Toutefois ce BTS m’a également fait découvrir le développement informatique et notamment le développement web qui m'a énormement plu. Je suis actuellement en 3ème année de Bachelor développement web dans l'école MyDigitalSchool de Lyon.
    </p>
    <a href="" role="button" data-target="#modal" data-toggle="modal">Contactez moi</a>

    <div class="modal" id="modal" role="dialog">
        <div class="modal-content">
            <div class="modal-close" data-dismiss="dialog">
                <i class="las la-times"></i>
            </div>
            <div class="form-container" id="contact">
                <div class="login-box">
                    <h2>Contact</h2>
                    <form action="#" method="POST">
                        <div class="form-data">
                            <div class="user-box">
                                <input type="text" name="name" required="">
                                <label>Nom</label>
                            </div>
                            <div class="user-box">
                                <input type="password" name="surname" required="">
                                <label>Prénom</label>
                            </div>
                        </div>
                        <div class="user-box">
                            <input type="mail" name="mail" required="">
                            <label>E-mail</label>
                        </div>
                        <div class="user-box">
                            <textarea name="message" required=""></textarea>
                            <label>Entrez votre message</label>
                        </div>
                        <input type="hidden" name="post" value="true">
                        <button type="submit">
                            <span></span>
                            <span></span>
                            <span></span>
                            <span></span>
                            Envoyer
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <h2 id="competences">Mes compétences :</h2>
    <section class="competences">
        <h3>Languages :</h3>
        <div class="competence">
            <div class="card">
                <div class="face face1">
                    <div class="content">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512">
                            <path d="M0 32l34.9 395.8L191.5 480l157.6-52.2L384 32H0zm308.2 127.9H124.4l4.1 49.4h175.6l-13.6 148.4-97.9 27v.3h-1.1l-98.7-27.3-6-75.8h47.7L138 320l53.5 14.5 53.7-14.5 6-62.2H84.3L71.5 112.2h241.1l-4.4 47.7z" />
                        </svg>
                        <h3>HTML</h3>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="face face1">
                    <div class="content">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512">
                            <path d="M0 32l34.9 395.8L192 480l157.1-52.2L384 32H0zm313.1 80l-4.8 47.3L193 208.6l-.3.1h111.5l-12.8 146.6-98.2 28.7-98.8-29.2-6.4-73.9h48.9l3.2 38.3 52.6 13.3 54.7-15.4 3.7-61.6-166.3-.5v-.1l-.2.1-3.6-46.3L193.1 162l6.5-2.7H76.7L70.9 112h242.2z" />
                        </svg>
                        <h3>CSS</h3>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="face face1">
                    <div class="content">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 512">
                            <path d="M320 104.5c171.4 0 303.2 72.2 303.2 151.5S491.3 407.5 320 407.5c-171.4 0-303.2-72.2-303.2-151.5S148.7 104.5 320 104.5m0-16.8C143.3 87.7 0 163 0 256s143.3 168.3 320 168.3S640 349 640 256 496.7 87.7 320 87.7zM218.2 242.5c-7.9 40.5-35.8 36.3-70.1 36.3l13.7-70.6c38 0 63.8-4.1 56.4 34.3zM97.4 350.3h36.7l8.7-44.8c41.1 0 66.6 3 90.2-19.1 26.1-24 32.9-66.7 14.3-88.1-9.7-11.2-25.3-16.7-46.5-16.7h-70.7L97.4 350.3zm185.7-213.6h36.5l-8.7 44.8c31.5 0 60.7-2.3 74.8 10.7 14.8 13.6 7.7 31-8.3 113.1h-37c15.4-79.4 18.3-86 12.7-92-5.4-5.8-17.7-4.6-47.4-4.6l-18.8 96.6h-36.5l32.7-168.6zM505 242.5c-8 41.1-36.7 36.3-70.1 36.3l13.7-70.6c38.2 0 63.8-4.1 56.4 34.3zM384.2 350.3H421l8.7-44.8c43.2 0 67.1 2.5 90.2-19.1 26.1-24 32.9-66.7 14.3-88.1-9.7-11.2-25.3-16.7-46.5-16.7H417l-32.8 168.7z" />
                        </svg>
                        <h3>PHP</h3>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="face face1">
                    <div class="content">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                            <path d="M400 32H48C21.5 32 0 53.5 0 80v352c0 26.5 21.5 48 48 48h352c26.5 0 48-21.5 48-48V80c0-26.5-21.5-48-48-48zM243.8 381.4c0 43.6-25.6 63.5-62.9 63.5-33.7 0-53.2-17.4-63.2-38.5l34.3-20.7c6.6 11.7 12.6 21.6 27.1 21.6 13.8 0 22.6-5.4 22.6-26.5V237.7h42.1v143.7zm99.6 63.5c-39.1 0-64.4-18.6-76.7-43l34.3-19.8c9 14.7 20.8 25.6 41.5 25.6 17.4 0 28.6-8.7 28.6-20.8 0-14.4-11.4-19.5-30.7-28l-10.5-4.5c-30.4-12.9-50.5-29.2-50.5-63.5 0-31.6 24.1-55.6 61.6-55.6 26.8 0 46 9.3 59.8 33.7L368 290c-7.2-12.9-15-18-27.1-18-12.3 0-20.1 7.8-20.1 18 0 12.6 7.8 17.7 25.9 25.6l10.5 4.5c35.8 15.3 55.9 31 55.9 66.2 0 37.8-29.8 58.6-69.7 58.6z" />
                        </svg>
                        <h3>JavaScript</h3>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="face face1">
                    <div class="content">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 50 50">
                            <path d="M 25 2.0019531 C 24.284625 2.0019531 23.570141 2.1805625 22.931641 2.5390625 L 6.0898438 12.003906 C 4.8018437 12.727906 4 14.081109 4 15.537109 L 4 34.464844 C 4 35.919844 4.8008437 37.272094 6.0898438 37.996094 L 22.931641 47.460938 C 23.569641 47.818937 24.285 47.998047 25 47.998047 C 25.715 47.998047 26.430359 47.819937 27.068359 47.460938 L 43.910156 37.998047 C 45.199156 37.272047 46 35.917891 46 34.462891 L 46 15.537109 C 46 14.081109 45.198156 12.727906 43.910156 12.003906 L 27.068359 2.5390625 C 26.430359 2.1805625 25.715375 2.0019531 25 2.0019531 z M 25 13 C 28.78 13 32.275969 14.754234 34.542969 17.740234 L 30.162109 20.277344 C 28.844109 18.837344 26.973 18 25 18 C 21.14 18 18 21.14 18 25 C 18 28.86 21.14 32 25 32 C 26.973 32 28.844109 31.162656 30.162109 29.722656 L 34.542969 32.259766 C 32.275969 35.245766 28.78 37 25 37 C 18.383 37 13 31.617 13 25 C 13 18.383 18.383 13 25 13 z M 35 20 L 37 20 L 37 22 L 39 22 L 39 20 L 41 20 L 41 22 L 43 22 L 43 24 L 41 24 L 41 26 L 43 26 L 43 28 L 41 28 L 41 30 L 39 30 L 39 28 L 37 28 L 37 30 L 35 30 L 35 28 L 33 28 L 33 26 L 35 26 L 35 24 L 33 24 L 33 22 L 35 22 L 35 20 z M 37 24 L 37 26 L 39 26 L 39 24 L 37 24 z" />
                        </svg>
                        <h3>C#</h3>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="face face1">
                    <div class="content">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512">
                            <path d="M277.74 312.9c9.8-6.7 23.4-12.5 23.4-12.5s-38.7 7-77.2 10.2c-47.1 3.9-97.7 4.7-123.1 1.3-60.1-8 33-30.1 33-30.1s-36.1-2.4-80.6 19c-52.5 25.4 130 37 224.5 12.1zm-85.4-32.1c-19-42.7-83.1-80.2 0-145.8C296 53.2 242.84 0 242.84 0c21.5 84.5-75.6 110.1-110.7 162.6-23.9 35.9 11.7 74.4 60.2 118.2zm114.6-176.2c.1 0-175.2 43.8-91.5 140.2 24.7 28.4-6.5 54-6.5 54s62.7-32.4 33.9-72.9c-26.9-37.8-47.5-56.6 64.1-121.3zm-6.1 270.5a12.19 12.19 0 0 1-2 2.6c128.3-33.7 81.1-118.9 19.8-97.3a17.33 17.33 0 0 0-8.2 6.3 70.45 70.45 0 0 1 11-3c31-6.5 75.5 41.5-20.6 91.4zM348 437.4s14.5 11.9-15.9 21.2c-57.9 17.5-240.8 22.8-291.6.7-18.3-7.9 16-19 26.8-21.3 11.2-2.4 17.7-2 17.7-2-20.3-14.3-131.3 28.1-56.4 40.2C232.84 509.4 401 461.3 348 437.4zM124.44 396c-78.7 22 47.9 67.4 148.1 24.5a185.89 185.89 0 0 1-28.2-13.8c-44.7 8.5-65.4 9.1-106 4.5-33.5-3.8-13.9-15.2-13.9-15.2zm179.8 97.2c-78.7 14.8-175.8 13.1-233.3 3.6 0-.1 11.8 9.7 72.4 13.6 92.2 5.9 233.8-3.3 237.1-46.9 0 0-6.4 16.5-76.2 29.7zM260.64 353c-59.2 11.4-93.5 11.1-136.8 6.6-33.5-3.5-11.6-19.7-11.6-19.7-86.8 28.8 48.2 61.4 169.5 25.9a60.37 60.37 0 0 1-21.1-12.8z" />
                        </svg>
                        <h3>Java</h3>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="face face1">
                    <div class="content">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                            <path d="M439.8 200.5c-7.7-30.9-22.3-54.2-53.4-54.2h-40.1v47.4c0 36.8-31.2 67.8-66.8 67.8H172.7c-29.2 0-53.4 25-53.4 54.3v101.8c0 29 25.2 46 53.4 54.3 33.8 9.9 66.3 11.7 106.8 0 26.9-7.8 53.4-23.5 53.4-54.3v-40.7H226.2v-13.6h160.2c31.1 0 42.6-21.7 53.4-54.2 11.2-33.5 10.7-65.7 0-108.6zM286.2 404c11.1 0 20.1 9.1 20.1 20.3 0 11.3-9 20.4-20.1 20.4-11 0-20.1-9.2-20.1-20.4.1-11.3 9.1-20.3 20.1-20.3zM167.8 248.1h106.8c29.7 0 53.4-24.5 53.4-54.3V91.9c0-29-24.4-50.7-53.4-55.6-35.8-5.9-74.7-5.6-106.8.1-45.2 8-53.4 24.7-53.4 55.6v40.7h106.9v13.6h-147c-31.1 0-58.3 18.7-66.8 54.2-9.8 40.7-10.2 66.1 0 108.6 7.6 31.6 25.7 54.2 56.8 54.2H101v-48.8c0-35.3 30.5-66.4 66.8-66.4zm-6.7-142.6c-11.1 0-20.1-9.1-20.1-20.3.1-11.3 9-20.4 20.1-20.4 11 0 20.1 9.2 20.1 20.4s-9 20.3-20.1 20.3z" />
                        </svg>
                        <h3>Python</h3>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="face face1">
                    <div class="content">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 50 50">
                            <path d="M25.128,21.48c-0.811,0-1.215,1.515-1.215,3.42c-0.016,2.055,0.345,3.51,1.215,3.51c0.824,0,1.154-1.455,1.154-3.555 C26.282,22.965,25.998,21.48,25.128,21.48z M43.48,4H6.52C5.131,4,4,5.131,4,6.52v36.96C4,44.869,5.131,46,6.52,46h36.96 c1.389,0,2.52-1.131,2.52-2.52V6.52C46,5.131,44.869,4,43.48,4z M17.883,30.09c-0.811,0-1.605-0.21-1.936-0.405l0.285-1.695 c0.405,0.225,1.095,0.39,1.665,0.39c0.93,0,1.38-0.48,1.38-1.14c0-0.735-0.45-1.095-1.305-1.65c-1.38-0.84-1.905-1.905-1.905-2.82 c0-1.62,1.08-2.97,3.195-2.97c0.66,0,1.29,0.18,1.59,0.36l-0.315,1.695c-0.284-0.18-0.72-0.345-1.29-0.345 c-0.84,0-1.244,0.51-1.244,1.05c0,0.6,0.3,0.915,1.395,1.575c1.335,0.81,1.83,1.83,1.83,2.895 C21.228,28.875,19.862,30.09,17.883,30.09z M28.112,31.65c-0.87-0.36-1.845-0.87-2.595-1.32c-0.225-0.12-0.39-0.21-0.479-0.21 c-1.966,0-3.165-1.905-3.165-5.205c0-2.715,1.095-5.145,3.345-5.145c2.444,0,3.12,2.685,3.12,4.995c0,2.505-0.57,4.065-1.516,4.575 v0.075c0.646,0.285,1.351,0.51,1.98,0.75L28.112,31.65z M34.143,30h-4.56V19.891h1.965v8.444h2.595V30z" />
                        </svg>
                        <h3>SQL</h3>
                    </div>
                </div>
            </div>
        </div>
        <h3>Framework</h3>
        <div class="competence">
            <div class="card">
                <div class="face face1">
                    <div class="content">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                            <path d="M333.5,201.4c0-22.1-15.6-34.3-43-34.3h-50.4v71.2h42.5C315.4,238.2,333.5,225,333.5,201.4z M517,188.6 c-9.5-30.9-10.9-68.8-9.8-98.1c1.1-30.5-22.7-58.5-54.7-58.5H123.7c-32.1,0-55.8,28.1-54.7,58.5c1,29.3-0.3,67.2-9.8,98.1 c-9.6,31-25.7,50.6-52.2,53.1v28.5c26.4,2.5,42.6,22.1,52.2,53.1c9.5,30.9,10.9,68.8,9.8,98.1c-1.1,30.5,22.7,58.5,54.7,58.5h328.7 c32.1,0,55.8-28.1,54.7-58.5c-1-29.3,0.3-67.2,9.8-98.1c9.6-31,25.7-50.6,52.1-53.1v-28.5C542.7,239.2,526.5,219.6,517,188.6z M300.2,375.1h-97.9V136.8h97.4c43.3,0,71.7,23.4,71.7,59.4c0,25.3-19.1,47.9-43.5,51.8v1.3c33.2,3.6,55.5,26.6,55.5,58.3 C383.4,349.7,352.1,375.1,300.2,375.1z M290.2,266.4h-50.1v78.4h52.3c34.2,0,52.3-13.7,52.3-39.5 C344.7,279.6,326.1,266.4,290.2,266.4z" />
                        </svg>
                        <h3>Bootstrap</h3>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="face face1">
                    <div class="content">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                            <path d="M256 8C119 8 8 119 8 256s111 248 248 248 248-111 248-248S393 8 256 8zm133.74 143.54c-11.47.41-19.4-6.45-19.77-16.87-.27-9.18 6.68-13.44 6.53-18.85-.23-6.55-10.16-6.82-12.87-6.67-39.78 1.29-48.59 57-58.89 113.85 21.43 3.15 36.65-.72 45.14-6.22 12-7.75-3.34-15.72-1.42-24.56 4-18.16 32.55-19 32 5.3-.36 17.86-25.92 41.81-77.6 35.7-10.76 59.52-18.35 115-58.2 161.72-29 34.46-58.4 39.82-71.58 40.26-24.65.85-41-12.31-41.58-29.84-.56-17 14.45-26.26 24.31-26.59 21.89-.75 30.12 25.67 14.88 34-12.09 9.71.11 12.61 2.05 12.55 10.42-.36 17.34-5.51 22.18-9 24-20 33.24-54.86 45.35-118.35 8.19-49.66 17-78 18.23-82-16.93-12.75-27.08-28.55-49.85-34.72-15.61-4.23-25.12-.63-31.81 7.83-7.92 10-5.29 23 2.37 30.7l12.63 14c15.51 17.93 24 31.87 20.8 50.62-5.06 29.93-40.72 52.9-82.88 39.94-36-11.11-42.7-36.56-38.38-50.62 7.51-24.15 42.36-11.72 34.62 13.6-2.79 8.6-4.92 8.68-6.28 13.07-4.56 14.77 41.85 28.4 51-1.39 4.47-14.52-5.3-21.71-22.25-39.85-28.47-31.75-16-65.49 2.95-79.67C204.23 140.13 251.94 197 262 205.29c37.17-109 100.53-105.46 102.43-105.53 25.16-.81 44.19 10.59 44.83 28.65.25 7.69-4.17 22.59-19.52 23.13z" />
                        </svg>
                        <h3>Symfony</h3>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <h2 id="projets">Projets réalisés :</h2>
    <section class="projects">
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
        <!--<div class="project">
            <h3>Burn out Spirit</h3>
            <p>janvier - fevrier 2022</p>
            <div class="slider2 slider" data-slider="1">
                <img src="/<?= WEBROOT2 ?>/webroot/img/projets/burnoutspirit1.png" alt="burnoutspirit" class="img_slider2 active" data-slider="1">
                <img src="/<?= WEBROOT2 ?>/webroot/img/projets/burnoutspirit2.png" alt="burnoutspirit" class="img_slider2" data-slider="1">
                <img src="/<?= WEBROOT2 ?>/webroot/img/projets/burnoutspirit3.png" alt="burnoutspirit" class="img_slider2" data-slider="1">
            </div>
            <p class="desc">Site internet de Burn Out Spirit que j'ai réalisé durant mon stage de deuxième année de BTS SIO. Le but de ce stage était de réaliser un site internet afin d'accompagner ma maitre de stage dans le lancement de sa micro-entreprise.</p>
        </div>-->
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
    </section>
</section>