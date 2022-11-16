<?php

class controller
{

    var $vars = array();

    var $layout = "default";

    function __construct()
    {
        // chargement de tous nos modèles en mémoire
        if (isset($this->models)) {
            foreach ($this->models as $m) {
                $this->loadmodel($m);
            }
        }
        $this->Session = new Session();
    }


    //méthode statique load (bien pratique)
    function loadmodel($name)
    {
        //chargement du model
        require ROOT . "models/" . strtolower($name) . ".php";
        //je retourne une instance de ma classe passée en paramètre
        $this->$name = new $name();
    }

    function render($filename)
    {

        extract($this->vars);

        //je démarre une mise en mémoire tampon
        ob_start();

        //get_class($this) : retourne le nom de l'objet : category
        require(ROOT . 'views/' . get_class($this) . '/' . $filename . '.php');

        $content_for_layout = ob_get_clean();

        //Si on n'a pas de layout
        if ($this->layout == false) {
            echo $content_for_layout;
        } else {
            require(ROOT . 'views/layout/' . $this->layout . '.php');
        }
    }

    function set($d)
    {
        //fusion des données à envoyer avec les données déjà présentes dans $vars
        $this->vars = array_merge($this->vars, $d);
    }
}
