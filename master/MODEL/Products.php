<?php
require_once "modelBase.php";
class Products extends ModelBase
{
    public function __construct()
    {
        //Inicializamos el nombre de la tabla
        $this->table_name = 'produktuak';

        //Llamamos al constructor de la clase ModelBase
        parent::__construct();

    }
    protected function selectDB_AND($table, $columns = "*", $name = "", $value = "", $name1, $value1)
    {
        $query = "SELECT $columns FROM $table";
        if ($name != "" && $value != "") 
        {
            $query .= " WHERE $name = '$value' AND $name1 = $value1";
        }

        return $query;
    }
    protected function selectDB_AND_LIMIT($table, $columns = "*", $name = "", $value = "", $name1, $value1, $value2)
    {
        $query = "SELECT $columns FROM $table";
        if ($name != "" && $value != "") 
        {
            $query .= " WHERE $name = '$value' AND $name1 = $value1 LIMIT $value2, 6";
        }

        return $query;
    }
    protected function selectDB_AND_ALL($table, $columns = "*", $name = "", $value = "", $value1)
    {
        $query = "SELECT $columns FROM $table";
        if ($name != "" && $value != "") 
        {
            $query .= " WHERE $name = $value LIMIT $value1, 6";
        }

        return $query;
    }
    public function languageChoose()
    {
        if ($_SESSION['lang'] == "es") {
            $lang = "Es";
        } else if ($_SESSION['lang'] == "en") {
            $lang = "En";
        } else if ($_SESSION['lang'] == "eus") {
            $lang = "Eus";
        }
        return $lang;
    }
    public function Product_Count_By_Brand($brand)
    {
        $query = $this->selectDB_AND($this->table_name . ",markak", "izena,produktuKodea", "izena", $brand, "markak.markaKodea", $this->table_name . ".markaKodea");
        $result = $this->conexion->query($query);
        $array = $this->createArray($result);
        return count($array);
    }
    public function list_products($brand)
    {
        $start = 0;
        $query = $this->selectDB_AND($this->table_name . ",markak", "produktuak.izenaEUS,produktuak.prezioa", "izena", $brand, "markak.markaKodea", $this->table_name . ".markaKodea");
        $result = $this->conexion->query($query);
        $array = $this->createArray($result);
        return $array;
    }
    public function list_pages($brand, $start)
    {
        $lang = $this->languageChoose();
        $query = ('SELECT irudiak.ruta, produktuak.izena' . $lang . ', produktuak.prezioa, produktuak.deskribapena' . $lang . ', markak.izena
        FROM irudiak
        JOIN produktuak ON irudiak.produktuKodea = produktuak.produktuKodea
        JOIN markak ON produktuak.markaKodea = markak.markaKodea
        WHERE markak.izena = "' . $brand . '" LIMIT ' . $start . ', 6');
        $result = $this->conexion->query($query);
        return $result;
    }

    //Productos
    public function list_pages_filter_Productos($start,$Filtro)
    {
        $lang = $this->languageChoose();
        $query = ('SELECT DISTINCT irudiak.ruta, produktuak.izena' . $lang . ', produktuak.prezioa, produktuak.deskribapena' . $lang . ', markak.izena
        FROM produktuak
        JOIN irudiak ON produktuak.produktuKodea=irudiak.produktuKodea
        JOIN markak ON produktuak.markaKodea=markak.markaKodea
        JOIN produktu_kategoriak ON produktu_kategoriak.produktuKodea=produktuak.produktuKodea 
        JOIN kategoriak ON kategoriak.kategoriaKodea=produktu_kategoriak.kategoriaKodea ');


        //Precio
        $query .= 'where produktuak.prezioa > '. $Filtro['Min_Precio'] .' and produktuak.prezioa < '. $Filtro['Max_Precio'] . ' and ';
        
        unset($Filtro['Min_Precio']);
        unset($Filtro['Max_Precio']);
        unset($Filtro['Activo']);
        unset($Filtro['Productos']);
        

        // Filtro Categorias
        foreach($Filtro as $Valor)
        {
            $query .= ' produktu_kategoriak.kategoriaKodea=' . "'$Valor'" .' and ';
        }
        $query = trim($query, 'and ');
        
        $result = $this->conexion->query($query);
        return $result;
    }

    //Marca
    public function list_pages_filter($brand, $start,$Filtro)
    {
        $lang = $this->languageChoose();
        $query = ('SELECT DISTINCT irudiak.ruta, produktuak.izena' . $lang . ', produktuak.prezioa, produktuak.deskribapena' . $lang . ', markak.izena
        FROM produktuak
        JOIN irudiak ON produktuak.produktuKodea=irudiak.produktuKodea
        JOIN markak ON produktuak.markaKodea=markak.markaKodea
        JOIN produktu_kategoriak ON produktu_kategoriak.produktuKodea=produktuak.produktuKodea 
        JOIN kategoriak ON kategoriak.kategoriaKodea=produktu_kategoriak.kategoriaKodea ');

        //Marca
        $query .= 'WHERE markak.izena = "' . $brand . '" AND ';

        //Precio
        $query .= 'produktuak.prezioa > '. $Filtro['Min_Precio'] .' and produktuak.prezioa < '. $Filtro['Max_Precio'] . ' and ';
        
        unset($Filtro['Min_Precio']);
        unset($Filtro['Max_Precio']);
        unset($Filtro['Activo']);

        // Filtro Categorias
        foreach($Filtro as $Valor)
        {
            $query .= ' produktu_kategoriak.kategoriaKodea=' . "'$Valor'" .' and ';
        }
        $query = trim($query, 'and ');

        //Limite de resultados
        $query .= ' LIMIT ' . $start . ', 6';
        echo $query;
        $result = $this->conexion->query($query);
        return $result;
    }
    
    public function list_all($start)
    {
        $lang = $this->languageChoose();
        $query = ('SELECT produktuak.produktuKodea, irudiak.ruta, produktuak.izena' . $lang . ', produktuak.prezioa, produktuak.deskribapena' . $lang . ', markak.izena
        FROM irudiak
        JOIN produktuak ON irudiak.produktuKodea = produktuak.produktuKodea
        JOIN markak ON produktuak.markaKodea = markak.markaKodea LIMIT ' . $start . ', 6');
        $result = $this->conexion->query($query);
        return $result;
    }
    public function total_products_by_brand($brand)
    {
        $result = $this->conexion->query('SELECT COUNT(*) as total_products FROM produktuak,markak WHERE markak.markaKodea=produktuak.markaKodea AND markak.izena="' . $brand . '"');
        $row = $result->fetch_assoc();
        $num_total_rows = $row['total_products'];
        return $row;
    }
    public function totalProducts()
    {
        $result = $this->conexion->query('SELECT COUNT(*) as total_products FROM produktuak,markak WHERE markak.markaKodea=produktuak.markaKodea');
        $row = $result->fetch_assoc();
        $num_total_rows = $row['total_products'];
        return $row;
    }
    public function LastAddedProducts()
    {
        $lang = $this->languageChoose();
        $result = $this->conexion->query('SELECT irudiak.ruta, produktuak.izena'.$lang.', produktuak.prezioa, produktuak.deskribapena'.$lang.'
                                        FROM irudiak
                                        JOIN produktuak ON irudiak.produktuKodea = produktuak.produktuKodea 
                                        ORDER BY publikazioData DESC');
        return $result;
    }
    public function SelectStock($name) {
        $lang = $this->languageChoose();
        $query = "SELECT stock FROM produktuak WHERE izena".$lang."='".$name."';";
        $result = $this->conexion->query($query);
        $array = mysqli_fetch_assoc($result);
        return $array;
    }
    public function UpdateStock($name,$count) {
        $lang = $this->languageChoose();
        $query = "UPDATE produktuak SET stock=stock-".$count." WHERE izena".$lang."='".$name."';";
        $result = $this->conexion->query($query);
    }
    public function search($term)
    {
        $lang = $this->languageChoose();
        $query = 'SELECT irudiak.ruta,izena' . $lang . ',produktuak.deskribapena' . $lang . ',prezioa,markak.izena FROM irudiak JOIN produktuak ON irudiak.produktuKodea = produktuak.produktuKodea JOIN markak ON markak.markaKodea=produktuak.markaKodea WHERE izena' . $lang . ' LIKE "' . $term . '%" LIMIT 10';
        $result = $this->conexion->query($query);
        return $result;
    }
     public function GetProductCode($name) 
     {
        $lang = $this->languageChoose();
        $query = 'SELECT produktuKodea FROM produktuak WHERE izena'.$lang.'="'.$name.'"';
        $result = $this->conexion->query($query);
        $row = mysqli_fetch_assoc($result);
        return $row;

    }

    //Crud
    public function Todos_Datos()
    {
        $query = $this->selectDB($this->table_name, "*", "" );
        $result = $this->conexion->query($query);
        $array = $this->createArray($result);
        return $array;
    }

    public function Todos_Datos_Con_Limite($Limite)
    {
        $query = $this->selectDB($this->table_name, "*", "" );
        $result = $this->conexion->query($query);
        $array = $this->createArray($result);
        return $array;
    }

    public function Todos_Datos_Filtro($Condicion)
    {
        $query = $this->SelectWithFilter($this->table_name, $Condicion);
        echo $query;
        $result = $this->conexion->query($query);
        $array = $this->createArray($result);
        return $array;
    }

    public function Borrar($Condition_Column, $Condicion)
    {
        $query = $this->BorrarBD($this->table_name, $Condition_Column,$Condicion);
        echo $query;
        $result = $this->conexion->query($query);
    }

    public function Ver_Marcas_Productos()
    {
        $query = "SELECT markaKodea FROM `markak` WHERE 1";
        echo $query;
        $result = $this->conexion->query($query);
        $array = $this->createArray($result);
        return $array;
    }

    public function Nuevo_Producto($Datos)
    {
        $query = $this->insertDB($this->table_name, $Datos);
        echo $query;
        $result = $this->conexion->query($query);
    }

    public function Actualizar($Actualizar_Columna_Valor, $Columna_Condicion, $Columna_Condicion_Valor)
    {
        $query = $this->UpdateBD($this->table_name, $Actualizar_Columna_Valor, $Columna_Condicion, $Columna_Condicion_Valor);
        echo $query;
        $result = $this->conexion->query($query);
    }
    public function SelectRandom() {
        $lang = $this->languageChoose();
        $query= 'SELECT izena'.$lang.',deskribapena'.$lang.',prezioa,ruta FROM produktuak JOIN irudiak ON irudiak.produktuKodea=produktuak.produktuKodea  
        ORDER BY RAND ( )  
        LIMIT 1  ';
        $result = $this->conexion->query($query);
        $array = mysqli_fetch_assoc($result);
        return $array;
        
    }

}