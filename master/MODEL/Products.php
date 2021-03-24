<?php

require_once "ModelBase.php";

class Products extends ModelBase
{
    public function __construct()
    {
        //Inicializamos el nombre de la tabla
        $this->table_name = 'produktuak';

        //Llamamos al constructor de la clase ModelBase
        parent::__construct();

    }
}