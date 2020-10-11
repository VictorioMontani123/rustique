<?php
    require_once 'Controller/db_controller.php';
    require_once 'Controller/db_controllerAdmin.php';
    require_once 'RouterClass.php';
    
    // CONSTANTES PARA RUTEO
    define("BASE_URL", 'http://'.$_SERVER["SERVER_NAME"].':'.$_SERVER["SERVER_PORT"].dirname($_SERVER["PHP_SELF"]).'/');

    $r = new Router();

    // // "ruta", "VERBO", "Controlador", "metodo"
    
    $r->addRoute("home", "GET", "db_controller", "Home");

    //$router->setDefaultRoute("db_controller", "Home");

    
    // Formulario para dar de alta una propiedad
    $r->addRoute("productos", "GET", "db_controller", "ShowProductos"); // todos

    $r->addRoute("registrado", "POST", "db_controller", "ShowVistaAdmin");

    
    //$r->addRoute("mostrar", "GET", "db_controller", "ShowProductoEspecifico"); //
    $r->addRoute("login", "GET", "db_controllerAdmin", "login");
    
    $r->addRoute("edit", "POST", "db_controller", "editarProducto");

    $r->addRoute("verificado", "POST", "db_controllerAdmin", "verificaradmin");

    $r->addRoute("insert", "POST", "db_controller", "InsertProduct");

    $r->addRoute("ver/:ID", "GET", "db_controller", "GetProductFiltro");

    $r->addRoute("delete/:ID", "GET", "db_controller", "Delete");
    // >recibe datos del Form  para dar de alta una propiedad
    //$r->addRoute("insert", "POST", "rStateController", "insertProp");
  
 /* // Mostrar todos
 $router->addRoute("dinosaurios", "GET", "DinosaurioController", "getAll");
 // Acá podría tener un formulario de inserción

 //
 $router->addRoute("dinosaurio/:ID", "GET", "DinosaurioController", "get");
 // Acá podría tener un formulario de edición

 // Formulario para nuevo dinosaurio
 $router->addRoute("dinosaurio", "GET", "DinosaurioController", "formNew");

 // Acción formulario nuevo dinosaurio
 $router->addRoute("dinosaurio", "POST", "DinosaurioController", "new");

 // Acción de editar dinosaurio
 $router->addRoute("dinosaurio/:ID", "POST", "DinosaurioController", "edit");

 // Elimina un dinosaurio
 $router->addRoute("dinosaurio/:ID", "DELETE", "DinosaurioController", "delete");
 $router->addRoute("dinosaurio/:ID/delete", "GET", "DinosaurioController", "delete");
 
 // Por defecto mostrar todos
 $router->setDefaultRoute("DinosaurioController", "getAll");
 */
    //Advance
   //  $r->addRoute("autocompletar", "GET", "rStateController", "AutoCompletar");

    //run
    $r->route($_GET['action'], $_SERVER['REQUEST_METHOD']); 
   
    
?>