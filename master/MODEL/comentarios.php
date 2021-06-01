<?php

require_once "modelBase.php";

class Iritziak extends ModelBase
{
    public function __construct()
    {
        //Inicializamos el nombre de la tabla
        $this->table_name = 'iritziak';

        //Llamamos al constructor de la clase ModelBase
        parent::__construct();
    }

    public function getContenidoPorFecha()
    {           
        $query="SELECT * FROM iritziak ORDER BY eguna";
        echo $query;
        $resultado=$this->conexion->query($query);
        $array=$this->createArray($resultado);
        return $array;
    }
    
    public function GetAllFromComentariosByProduct($product_id) 
    {
        $query="SELECT * FROM iritziak ORDER BY eguna DESC";
        $result = $this->conexion->query($query);
        return $result;

    }
    public function InsertarComentario($fecha,$elcomentario,$laimagen,$valoracion,$nombre) 
    {
        $query ="INSERT INTO iritziak (eguna, komentarioa, irudia, balorazioa, publikatu, izena) VALUES ('" . $fecha . "', '" . $elcomentario . "', '" . $laimagen . "', '" . $valoracion ."', '1', '" . $nombre . "')";
        echo $query;
        $result = $this->conexion->query($query);
    }
}