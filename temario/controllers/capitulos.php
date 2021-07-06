<?php

class Capitulos extends Controller{


    function __construct(){
        parent::__construct();
        $this->view->mensaje="";
    }

    function render(){
        $this->view->render('capitulos/index');
    }
    
    function crearCapitulo(){
        //echo "Capitulo creado";
        //$this->model->insert();
        $numero_capitulo=$_POST['numero_capitulo'];
        $titulo_capitulo=$_POST['titulo_capitulo'];
        $mensaje="";


//valida si hace el insert correctamente
        if($this->model->insert(['numero_capitulo' => $numero_capitulo,'titulo_capitulo' => $titulo_capitulo])){
            $mensaje="Capitulo nuevo creado";
        }else{
            $mensaje="Este capitulo ya existe";
        }
        //envio de mensaje a la vista capitulo y hacer la funcion render
        $this->view->mensaje=$mensaje;
        $this->render();
    }
}

?>