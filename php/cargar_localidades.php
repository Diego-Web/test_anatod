<?php 
require_once("../config/class.database.php");
//require_once("../formulario.php");

function getListaLocalidades(){
    $db = new class_db;
    // para evitar inyeccion sql probar con msqli real_escape_string($_POST['id'])
    $id  = $_POST['id'];
    $sql = "SELECT * FROM localidades l WHERE l.localidad_provincia=$id;";
    $res = mysqli_query($db->conn,$sql);
    $listadol='<option value= "0">Elige una Localidad</option>';
    // $resCheck = mysqli_num_rows($res);            
    // if($resCheck>0){
        while ($row = mysqli_fetch_assoc($res)){                           
                $listadol .= "<option value='$row[localidad_id]'>$row[localidad_nombre]</option>";
        }
    // }
    return $listadol;
}

echo getListaLocalidades();
?>