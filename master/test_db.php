<?php
require_once "./controller/Controller.php";

//1) Mostramos todos los datos de la tabla
$result = $classic->getAll();

echo "<b>MOSTRAMOS TODOS LOS ELEMENTOS DE LA TABLA CLASSIC</b> <br>";
echo "Referencias encontradas: " . count($result) . "<hr>";

//Leemos los datos
foreach ($result as $row) {
    $author = $row['author'];
    $title = $row['title'];
    $category = $row['category'];
    $year = $row['year'];
    $isbn = $row['isbn'];

    echo "<div>";
    echo "Author:   $author <br>";
    echo "Title:    $title <br>";
    echo "Category: $category <br>";
    echo "Year:     $year <br>";
    echo "ISBN:     $isbn <br>";
    echo "<hr>";
    echo "</div>";

}

//2) Mostramos todos los datos de la tabla que contengan author = 'mark twain'
$result = $classic->getAllByColumn("author", "Mark twain");
echo "<b>MOSTRAMOS TODOS LOS ELEMENTOS DE LA TABLA CLASSIC QUE CONTENGAN AUTHOR = 'MARK TWAIN'</b> <br>";
echo "Referencias encontradas: " . count($result) . "<hr>";

//Leemos los datos
foreach ($result as $row) {
    $author = $row['author'];
    $title = $row['title'];
    $category = $row['category'];
    $year = $row['year'];
    $isbn = $row['isbn'];

    echo "<div>";
    echo "Author:   $author <br>";
    echo "Title:    $title <br>";
    echo "Category: $category <br>";
    echo "Year:     $year <br>";
    echo "ISBN:     $isbn <br>";
    echo "<hr>";
    echo "</div>";
}

//3) Añadimos un elemento nuevo a la tabla
echo "<b>AÑADIMOS UN ELEMENTO NUEVO A LA TABLA CLASSIC</b> <br>";
echo "<hr>";

$newClassic['author'] = 'JRR Tolkien';
$newClassic['title'] = 'Lord of the rings';
$newClassic['category'] = 'Fiction';
$newClassic['year'] = '1954';
$newClassic['isbn'] = "7534534565770";

$result = $classic->addNew($newClassic);

//4) Mostramos todos los datos de la tabla
$result = $classic->getAll();

echo "<b>MOSTRAMOS TODOS LOS ELEMENTOS DE LA TABLA CLASSIC</b> <br>";
echo "Referencias encontradas: " . count($result) . "<hr>";

//Leemos los datos
foreach ($result as $row) {
    $author = $row['author'];
    $title = $row['title'];
    $category = $row['category'];
    $year = $row['year'];
    $isbn = $row['isbn'];

    echo "<div>";
    echo "Author:   $author <br>";
    echo "Title:    $title <br>";
    echo "Category: $category <br>";
    echo "Year:     $year <br>";
    echo "ISBN:     $isbn <br>";
    echo "<hr>";
    echo "</div>";

}