<?php
require_once("Model/DataModel.php");
require_once("View/DataView.php");
require_once("RouteAvanzado.php");


class db_controller {
    
    private $model;
    private $view;

    public function __construct(){
        $this->model = new DataModel();
        $this->view = new DataView();
    }

    public function home(){
        $this->view->ShowHome();


    }

    public function ShowProductos(){   // nos muestra todos los productos
        $productos = $this->model->GetProduct();
        $Categorias = $this->model->GetCategoria();
        $this->view->ShowProductos($productos, $Categorias);
    }

    public function InsertProduct(){  // agregamos un producto desde la view del admin
        //if(isset ($_POST['InsertNombre'] && $_POST['InsertColor'] && $_POST['InsertPrecio'] && $_POST['InsertCategoria'])){  
            $this->model->InsertProduct($_POST['InsertNombre'],$_POST['InsertColor'],$_POST['InsertEspecificaciones'],$_POST['InsertPrecio'],$_POST['InsertCategoria']);
            
        //}
        // $this->view->ShowError(      );

        $this->view->ShowPredeterminado();

    }
    public function GetProductFiltro($filtro = null){
        $filtro = $filtro[':ID'];
        $productos = $this->model->GetProductFiltro($filtro);
        $this->view->ShowAlone($productos);
        
        //$this->view->ShowPredeterminado();
    }

    public function Delete($id = null){
        $id = $id[':ID'];
        $productos = $this->model->DeleteProduct($id);

        $this->view->ShowPredeterminado();

    }

    public function editarProducto($id = null){
       // $id = $id[':ID'];
       // $productos = $this->model->GetProductFiltro($id);

       
        $this->model->EditarProducto($_POST['EditNombre'],$_POST['EditColor'],$_POST['EditEspecificacion'],$_POST['EditPrecio'],$_POST['EditIdCategoria'],$_POST['EditId']);
        
        $this->view->ShowPredeterminado();
    }
}
/*
$contenedor = GetProduct();



$filtro = 2;

$contenedor_filtro = GetProductFiltro($filtro);

var_dump ($contenedor_filtro);
*/










?>