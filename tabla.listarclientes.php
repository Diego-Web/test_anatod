<?php
/*
        # A) Campos a mostrar en la tabla de clientes
        1) ID Cliente
        2) Nombre de cliente
        3) Dni de cliente
        4) Nombre de la localidad.
        5) Nombre de la Provincia
*/
?>
<table>
    <th>ID</th>
    <th>Nombre</th>
    <th>DNI</th>
    <th>Localidad</th>
    <th>Provincia</th>
    <th>Editar</th>
    <th>Eliminar</th>
<?php 

$crud = Crud::sinDatos(); 

$data = $crud->mostrarClientes();

while ($row = $data->fetch_array()){
    echo '<tr>';
    echo '<td>',$row['cliente_id'],'</td>';
    echo '<td>',$row['cliente_nombre'],'</td>';
    echo '<td>',$row['cliente_dni'],'</td>';
    echo '<td>',$row['localidad_nombre'],'</td>';
    echo '<td>',$row['provincia_nombre'],'</td>';
    echo "<td> <a href=\"index.php?action=editar&&id=$row[cliente_id]\">Editar</a> </td>";
    echo "<td> <a href=\"index.php?action=eliminar&&id=$row[cliente_id]\">Eliminar</a> </td>";
    echo '</tr>';
}       
?>
</table>
