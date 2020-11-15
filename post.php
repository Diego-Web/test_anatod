<?php
include 'class.crud.php';
if (isset($_POST['submit'])) {
   //para controlar el input accion (hidden) que va a ver si inserta o actualiza
   //print_r($_POST);
   if ($_POST['accion']='insert'){

        $nom = $_POST['nombre'];
        $dni = $_POST['dni'];
        $loc = $_POST['localidad'];

        $crud = new Crud($nom, $dni, $loc);

        $crud->insert();
   }

   if ($_POST['accion']='update'){       
   }

}else{
    //si accede por url lo redirige a index.php
    header("location: index.php");
}
?>