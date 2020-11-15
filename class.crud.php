<?php
/* clase para manejar Crud  */
require_once("config/class.database.php");

class Crud{
    protected $cliente_id;
    protected $cliente_nombre;
    protected $cliente_dni;
    protected $cliente_localidad;

    public function __construct($nom, $dni, $loc, $id =''){
        $this->cliente_nombre = $nom;
        $this->cliente_dni = $dni;
        $this->cliente_localidad = $loc;
        $this->cliente_id = $id;
    }

    static function sinDatos(){
        return new self('', '', '');
    }

    static function soloPorId($id){
        return new self('','','',$id);
    }

    public function insert(){
        $db = new class_db;        
        $sql = "INSERT INTO clientes(cliente_nombre,cliente_dni,cliente_localidad) VALUES ('$this->cliente_nombre','$this->cliente_dni', '$this->cliente_localidad');";
        mysqli_query($db->conn,$sql) ? header("location: index.php?res=insertado") : header("location: index.php?res=error");
    }

    public function update(){
        $db = new class_db;        
        $sql = "";
        mysqli_query($db->conn,$sql) ? header("location: index.php?res=insertado") : header("location: index.php?res=error");
    }

    public function selectPorId(){
        $db = new class_db();         
        $sql = "SELECT c.cliente_id, c.cliente_nombre, c.cliente_dni, l.localidad_id, l.localidad_nombre , p.provincia_id, p.provincia_nombre
        FROM test_anatod.clientes c 
        INNER JOIN test_anatod.localidades l ON (c.cliente_localidad = l.localidad_id)
        INNER JOIN test_anatod.provincias p ON (l.localidad_provincia=p.provincia_id) 
        WHERE c.cliente_id= $this->cliente_id;";
        $res = mysqli_query($db->conn,$sql);
        return $res;        

    }    

    public function mostrarClientes(){
        $db = new class_db();
        //$sql = 
        $sql = "SELECT c.cliente_id, c.cliente_nombre, c.cliente_dni, l.localidad_nombre,p.provincia_nombre 
                FROM clientes c 
                INNER JOIN localidades l ON (c.cliente_localidad = l.localidad_id)                
                INNER JOIN provincias p ON (l.localidad_provincia=p.provincia_id);";
        $res = mysqli_query($db->conn,$sql);
        return $res;        
    }
}
?>