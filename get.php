<?php 
//print_r($_GET);
if ( (isset($_GET['action'])) && (isset($_GET['id'])) && ($_GET['action'] == 'editar')) {
    
    // echo $_GET['id'];

    $id = $_GET['id'];
    
    $crud = Crud::soloPorId($id);

    $array = $crud->selectPorId();

    $datos = $array->fetch_array();
}

if ( (isset($_GET['action'])) && (isset($_GET['id'])) && ($_GET['action']=='eliminar')) {
    // echo 'eliminar';
    // echo $_GET['id'];
}

?>