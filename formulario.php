<?php 
    require_once("class.crud.php"); 
    $datos = array('cliente_nombre'=>'', 'cliente_dni'=>'', 'localidad_id'=>'0','localidad_nombre'=>'', 'provincia_id'=>'0','provincia_nombre'=>'','cliente_id'=>''); 
    require_once("get.php");
?>
<header><h1>ANATOD - <small>Sistema de Gestion de Clientes</small></h1></header>
<form action="post.php" method="post">
    <input type="text" name="nombre" value="<?php echo $datos['cliente_nombre']; ?>" placeholder="Nombre" required="required">
    <input type="number" name="dni" value="<?php echo $datos['cliente_dni']; ?>" placeholder="DNI" required="required">
    <?php echo $datos['provincia_nombre'];?>
    <select name="provincia" id="lista_provincia">
        <option  value="<?php echo $datos['provincia_id'];?>"><?php echo $datos['provincia_nombre'];?></option>
    </select>
    
    <select name="localidad" id="lista_localidad"></select>      
    
    <input type="hidden" name="accion" value="insert">
    <input type="submit" name="submit" value="Enviar">        
</form>
<?php include 'tabla.listarclientes.php'; ?>


    