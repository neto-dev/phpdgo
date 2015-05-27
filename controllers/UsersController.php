<?php

class UsersController{

    public function indexAction()
    {
      // Controlador principal en esta carpeta crear los demas controladores.
        return new View("users/index", ["title" => "Framework", "layout" => "on", "nameLayout" => "layout"]);
    }

    public function verelregistroAction()
    {
      // Controlador principal en esta carpeta crear los demas controladores.
        return new View("users/show", ["title" => "Framework", "layout" => "on", "nameLayout" => "layout"]);
    }

}
