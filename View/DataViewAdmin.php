<?php
require_once('libs/smarty/Smarty.class.php');

class DataViewAdmin{
    private $smarty;
    
    
    public function __construct(){
        $this->smarty = new Smarty();
    }


    public function ShowLogin(){
        $this->smarty->assign('titulo', 'LOGIN' );
        $this->smarty->assign('nombre', 'NOMBRE');
        $this->smarty->assign('contrasenia', 'CONTRASEÑA');
        
        $this->smarty->display('templates/login.tpl');

    }


    public function ProductosAdmin($Categorias, $productos){
        $this->smarty->assign('titulo', "LISTA DE PRODUCTOS");
        $this->smarty->assign('nombre', "NOMBRE");
        $this->smarty->assign('color', "COLOR");
        $this->smarty->assign('especificacion', "ESPECIFICACION");
        $this->smarty->assign('precio', "PRECIO");
        $this->smarty->assign('TituloCategoria', "CATEGORIA");

        
        $this->smarty->assign('Categorias', $Categorias);
        $this->smarty->assign('productos', $productos);
        $this->smarty->display('templates/tp.tpl');
        

    }



















}
?>