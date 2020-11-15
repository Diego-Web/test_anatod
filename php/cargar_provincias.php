<?php 
require_once("../config/class.database.php");
//require_once("../formulario.php");  si dejo esta linea agrega las opciones de otro combo por ejemplo

function getListaProvincias(){
    $db = new class_db;
    $sql = "SELECT * FROM provincias p;";
    $res = mysqli_query($db->conn,$sql);
    $listadop='<option value= "0">Elige una Provincia</option>';
    // $resCheck = mysqli_num_rows($res);            
    // if($resCheck>0){
        while ($row = mysqli_fetch_assoc($res)){                           
                $listadop .= "<option value='$row[provincia_id]'>$row[provincia_nombre]</option>";
        }
    // }
//    print_r($datos['provincia_id']);
    return $listadop;
}

echo getListaProvincias();
?>