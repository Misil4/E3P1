var theObject = new XMLHttpRequest();
        theObject.open('POST', './../Crud/Crear Tablas.php', true);
        theObject.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');

        theObject.onreadystatechange = function() {
          if(theObject.readyState === 4 & theObject.status === 200) {
            document.getElementById('container').innerHTML += theObject.responseText;
          }
        }

        theObject.send('Tabla');

// Crear tablas
document.getElementById('container').innerHTML += '<table border="1px">';

//Crear las colunas
for(i = 0; i < 2; i++)
{
    document.getElementById('container').innerHTML += '<tr>';
    for(i = 0; i < 10; i++)
    {
        document.getElementById('container').innerHTML += '<td>';
        document.getElementById('container').innerHTML += '1';
        document.getElementById('container').innerHTML += '</td>';
    }
    document.getElementById('container').innerHTML += '</tr>';
}

document.getElementById('container').innerHTML += '</table>';