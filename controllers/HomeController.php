<?php

class HomeController{

    public function indexAction()
    {
      // Controlador principal en esta carpeta crear los demas controladores.
    	$token = Security::getEncrypt($GET_["password"]);
        return new View("home/index", ["title" => "Framework", "layout" => "on", "nameLayout" => "layout", "token" => $token]);
    }

}
