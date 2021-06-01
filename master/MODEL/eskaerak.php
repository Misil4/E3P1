<?php

require_once "modelBase.php";

class Eskaerak extends ModelBase
{
    public function __construct()
    {
        //Inicializamos el nombre de la tabla
        $this->table_name = 'eskaerak';

        //Llamamos al constructor de la clase ModelBase
        parent::__construct();
    }
    public function getKodea($mail)
    {           
        $query = "SELECT erabiltzaileKodea from erabiltzaileak WHERE emaila='".$mail."'";
        echo $query;
        $result = $this->conexion->query($query);
        $array = $this->createArray($result);
        return $array;
    }
     public function sartuEskaera($eskaeraegoera,$mail) //Checkout
    {
        require "./controller/Controller.php";
        $row = $erabiltzaileak->getErabiltzaileKode($mail);
        $query = "INSERT INTO eskaerak (eskaeraEgoera, erosketaData, entregaData, abiatzeData, erabiltzaileKodea, ezabatua) VALUES ('" . $eskaeraegoera . "', DATE_ADD(CURRENT_TIMESTAMP,INTERVAL +2 HOUR), DATE_ADD(CURRENT_TIMESTAMP,INTERVAL 10 DAY), DATE_ADD(CURRENT_TIMESTAMP,INTERVAL 5 DAY), '" . $row['erabiltzaileKodea'] . "', '0')";
        $result = $this->conexion->query($query);

    }
    public function getEskaeraKodea() {
        $query = "SELECT eskaeraKodea FROM eskaerak ORDER BY eskaeraKodea DESC LIMIT 1";
        $result = $this->conexion->query($query);
        $row = mysqli_fetch_assoc($result);
        return $row;
    }
        public function UpdateState($eskaeraKodea) {
        $query = "UPDATE ".$this->table_name." SET eskaeraEgoera='Completed' WHERE eskaeraKodea='".$eskaeraKodea."'";
        $result = $this->conexion->query($query);
    }
}