<?php
require_once "./../controller/Controller.php";
if ($_SESSION['Ventana_Crud'] == 'Clientes')
{

echo 
'
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
  ' . $Texto['Filtro_4'] . '
</button>

<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">' . $Texto['Filtro_4'] . '</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">

        <form action="./../PHP/register_form.php?Crud=1" method="POST">
            <div class="form-group">
                <label for="exampleInputEmail1">Email address</label>
                <input type="email" class="form-control" name="username" placeholder="Enter email">
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Password</label>
                <input type="pass" class="form-control" name="pass" placeholder="Password">
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Password</label>
                <input type="pass" class="form-control" name="con-pass" placeholder="Password">
            </div>
        

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
        <button type="submit" class="site-btn register-btn">Enviar</button>
        </form>
      </div>
    </div>
  </div>
</div>
';
}


else
{
echo
'
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
  ' . $Texto['Filtro_4'] . '
</button>

<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">' . $Texto['Filtro_4'] . '</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">

        <form action="./Funciones/Nuevo_Producto.php" method="GET">
            <div class="form-group">
                <label for="exampleInputEmail1">Codigo Producto</label>
                <input type="Text" class="form-control" name="Nuevo_Producto[produktuKodea]" placeholder="Codigo Producto">
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Nombre Euskera</label>
                <input type="Text" class="form-control" name="Nuevo_Producto[izenaEus]" placeholder="Nombre Euskera">
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Nombre Español</label>
                <input type="Text" class="form-control" name="Nuevo_Producto[izenaEs]" placeholder="Nombre Español">
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Nombre Inglés</label>
                <input type="Text" class="form-control" name="Nuevo_Producto[izenaEn]" placeholder="Nombre Inglés">
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Descripción Euskera</label>
                <input type="Text" class="form-control" name="Nuevo_Producto[deskribapenaEus]" placeholder="Descripción Euskera">
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Descripción Español</label>
                <input type="Text" class="form-control" name="Nuevo_Producto[deskribapenaEs]" placeholder="Descripción Español">
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Descripción Inglés</label>
                <input type="Text" class="form-control" name="Nuevo_Producto[deskribapenaEn]" placeholder="Descripción Inglés">
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Ingredientes Euskera</label>
                <input type="Text" class="form-control" name="Nuevo_Producto[osagaiakEus]" placeholder="Ingredientes Euskera">
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Ingredientes Español</label>
                <input type="Text" class="form-control" name="Nuevo_Producto[osagaiakEs]" placeholder="Ingredientes Español">
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Ingredientes Inglés</label>
                <input type="Text" class="form-control" name="Nuevo_Producto[osagaiakEn]" placeholder="Ingredientes Inglés">
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Stock</label>
                <input type="number" class="form-control" name="Nuevo_Producto[stock]" placeholder="Stock">
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Tamaño</label>
                <input type="number" class="form-control" name="Nuevo_Producto[tamaina]" placeholder="Tamaño">
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Descuento</label>
                <input type="number" step="any" class="form-control" name="Nuevo_Producto[beherapena]" placeholder="Descuento">
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Precio</label>
                <input type="number" step="any" class="form-control" name="Nuevo_Producto[prezioa]" placeholder="Precio">
            </div>
            <div class="form-group">
              <label for="exampleInputPassword1">Codigo de marca</label>
              <select class="form-control" name="Nuevo_Producto[markaKodea]">';
                
                foreach($products->Ver_Marcas_Productos() as $Array)
                {
                  foreach($Array as $Dato)
                  {
                    echo '<option value="' . $Dato .'">' . $Dato . '</option>';
                  }
                }
            echo '</select>
          </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
        <button type="submit" class="site-btn register-btn">Enviar</button>
        </form>
      </div>
    </div>
  </div>
</div>
';
}
?>