<?php

//index.php distpatcher ou routeur: pour aiguiller
define('WEBROOT', str_replace("index.php", "", $_SERVER["REQUEST_URI"]));
define('ROOT', str_replace("index.php", "", $_SERVER["SCRIPT_FILENAME"]));
// echo "WEBROOT : " . WEBROOT . "<br>";
// echo "ROOT : ".ROOT."<br>";
//phpinfo()

require(ROOT . 'config/conf.php');
require(ROOT . 'core/model.php');
require(ROOT . 'core/controller.php');
require(ROOT . 'core/session.php');

$chemin = explode("/", WEBROOT);
// echo "<PRE>";
// print_r($chemin);
// echo "</PRE>";


define('WEBROOT2', $chemin[1]);
// echo "WEBROOT2 : ".WEBROOT2."<br>";


if (empty($chemin[2])) {
    $controller = "accueil";
} else {
    $controller = $chemin[2];
    // echo "controller : ".$controller."<br>";
}

if (empty($chemin[3])) {
    $action = "index";
} else {
    $action = $chemin[3];
    //echo "action : ".$action."<br>";
}


require(ROOT . 'controllers/' . $controller . '.php');

//instanciation de mon controlleur
$controller = new $controller();

//verificationd de l'existence de l'action demandée
if (method_exists($controller, $action)) {

    //$controller->$action();
    unset($chemin[0]);
    unset($chemin[1]);
    unset($chemin[2]);
    unset($chemin[3]);
    // 1er parametrer : un tableau (objet, méthode)
    // 2eme parametre : un tableau contrenant de 0 à n paramètres
    call_user_func_array(array($controller, $action), $chemin);
} else {
    echo "<h1>erreur 404</h1>";
}
