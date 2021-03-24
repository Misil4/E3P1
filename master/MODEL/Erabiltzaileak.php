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
    public function Login($search_name, $search_value)
    {
        $query = $this->selectDB($this->table_name, "*", $search_name, $search_value);
        $result = $this->conexion->query($query);
        $array = $this->createArray($result);
        print_r($array);
        if ($array['emaila'] == $search_value) {
            echo "login ok";
        } else {
            echo '<p class="error">Username password combination is wrong!</p>';
            echo $array['emaila'], $search_value;
        }

    }
}