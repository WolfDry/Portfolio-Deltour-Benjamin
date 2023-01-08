<?php

class accueil extends controller
{
    function index()
    {
        $d = [];
        if (isset($_POST)) {
            if (!empty($_POST)) {
                extract($_POST);
                if ($post == true) {
                    $d['responce'] = true;
                } else {
                    $d['responce'] = false;
                }
            }
        }
        $this->set($d);
        $this->render('accueil');
    }
}
