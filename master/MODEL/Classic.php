<?php

require_once "ModelBase.php";

class Classic extends ModelBase
{
    public function __construct()
    {
        //Inicializamos el nombre de la tabla
        $this->table_name = 'classics';

        //Llamamos al constructor de la clase ModelBase
        parent::__construct();

    }
}