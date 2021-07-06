<?php

class CapitulosModel extends Model{

    public function __construct(){
        parent::__construct();
    }

    public function insert($datos){
        // insertar datos en la BD
        //echo "Insertar datos";   
       try{
        $query = $this->db->connect()->prepare('INSERT INTO capitulo (numero_capitulo, titulo_capitulo) VALUES(:numero_capitulo, :titulo_capitulo)');
        $query->execute([
            'numero_capitulo' => $datos['numero_capitulo'],
            'titulo_capitulo' => $datos['titulo_capitulo']
        ]);
        return true;
        //echo "Capitulo creado";       
       }catch(PDOException $e){
        //echo $e->getMessage();
        //echo "ya creado";
        return false;
       }
        
    }
}

?>