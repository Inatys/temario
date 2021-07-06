<?php

class SubcapitulosModel extends Model{

    public function __construct(){
        parent::__construct();
    }

    public function insert($datos){
        // insertar datos en la BD
        //echo "Insertar datos";
        echo "Subcapitulo creado";
        $query = $this->db->connect()->prepare('INSERT INTO temario (id_subcapitulo, numero_capitulo, titulo_subcapitulo) VALUES(:id_subcapitulo,:numero_capitulo, :titulo_subcapitulo)');
        $query->execute([
            'id_subcapitulo' => $datos['id_subcapitulo'],
            'numero_capitulo' => $datos['numero_capitulo'],
            'titulo_subcapitulo' => $datos['titulo_subcapitulo']
        ]);
    }
}

?>