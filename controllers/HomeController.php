<?php

class HomeController{

    public function indexAction($hola="hola")
    {
      // Controlador principal en esta carpeta crear los demas controladores.
        return new View("home/index", ["title" => "Framework", "layout" => "on", "nameLayout" => "layout"]);
    }

}
