<?php

require_once "ModelBase.php";

class Erabiltzaileak extends ModelBase
{
    public function __construct()
    {
        //Inicializamos el nombre de la tabla
        $this->table_name = 'erabiltzaileak';

        //Llamamos al constructor de la clase ModelBase
        parent::__construct();

    }
    public function CreateAccount($erabiltzaile, $pasahitza, $email)
    {
        $query = $this->insertDB($this->table_name, $array);

        $result = $this->conexion->query($query);
    }
    function Login($search_name, $search_value)
    {
        $query = $this->selectDB($this->table_name, "*", "emaila", $search_value);
        $result = $this->conexion->query($query);

        //Creamos el array asociativo para devolver los datos
        $array = $this->createArray($result);

        $result->close();
        return $array;

    }
}