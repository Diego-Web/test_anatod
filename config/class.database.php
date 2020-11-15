<?php
/*
 * anatod ® - ©
 */
?>
<?php
//require_once("config\datos.conn.php");
class class_db {           
    PUBLIC  $conn=NULL;
    CONST   user      =   'root',
            pass      =   'diego',
            db        =   'test_anatod',
            serverip  =   'localhost';
    
    public function __construct(){
        if(!$this->conn){
            try {
                $this->conn = new mysqli(SELF::serverip,SELF::user,SELF::pass,SELF::db); 
                $this->conn->set_charset("utf8");
                if (!$this->conn) {die('No se pudo conectar.');}
            } catch (Exception $exc) {
                echo $exc->getTraceAsString();
            }
        }
    }
}
?>
