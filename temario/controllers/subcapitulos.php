<?php

class Subcapitulos extends Controller{


    function __construct(){
        parent::__construct();
        
    }

    function render(){
        $this->view->render('subcapitulos/index');
    }
    
    function crearSubcapitulo(){
        //echo "Subcapitulo creado";
        //$this->model->insert();
        $id_subcapitulo=$_POST['id_subcapitulo'];
        $numero_capitulo=$_POST['numero_capitulo'];
        $titulo_subcapitulo=$_POST['titulo_subcapitulo'];

        $this->model->insert(['id_subcapitulo' => $id_subcapitulo,'numero_capitulo' => $numero_capitulo,'titulo_subcapitulo' => $titulo_subcapitulo]);    
        $this->render();
    }
}

?>