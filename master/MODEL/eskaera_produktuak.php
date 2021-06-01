<?php

require_once "modelBase.php";

class Eskaera_Produktuak extends ModelBase
{
    public function __construct()
    {
        //Inicializamos el nombre de la tabla
        $this->table_name = 'eskaera_produktuak';

        //Llamamos al constructor de la clase ModelBase
        parent::__construct();
    }
    public function sartuProduktuEskaera($produktuKodea,$erosketaKopurua,$eskaeraKodea) //Checkout
    {
        require "./controller/Controller.php";
        $query = "INSERT INTO eskaera_produktuak (eskaeraKodea, produktuKodea, erosketaKopurua, bueltatzeDataMax) VALUES ('".$eskaeraKodea."','".$produktuKodea."', '".$erosketaKopurua."', DATE_ADD(CURRENT_DATE,INTERVAL 30 DAY))";
        $result = $this->conexion->query($query);
    }
}