<!--
This program is developed by David Israel Becerra Jimenez, 
is prohibited the partial or total distribution of this code 
without permission developer of this code
-->
<?php
class Database
{
    public function __construct() {
        $this->connect();
                
    }
    
    /*
    * Function that performs the database connection
    */      
    private function connect()
    {
        if(DB_TYPE=='Mysl'){ 
            try{
                $conexion = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);
                if($conexion->connect_errno){
                    echo "Falló la conexión a la base de datos: (" . $conexion->connect_errno . ") " . $conexion->connect_error;
                    exit;
                }else{
                    $conexion->set_charset("utf8");
                    return ($conexion);
                }
            }catch(Exception $e){
                echo $e->getMessage();
            }
        }elseif(DB_TYPE=='Sql'){

        }elseif(DB_TYPE=='PostgreSQL'){

        }else{
        //oracle    
        }
    }
    
    /*
     * Function to execute queries
     */
    public function execute_query($stmt)
    {
        $this->_resultado=$this->connect()->query($stmt);
        return $this->_resultado->fetch_assoc();
    }
   

    public function execute_procedure($stmt){
        
   /* Sentencia preparada, etapa 1: preparación */
    if (!($sentencia = $mysqli->prepare("INSERT INTO test(id) VALUES (?)"))) {
        echo "Falló la preparación: (" . $mysqli->errno . ") " . $mysqli->error;
    } 
        
    }

   /*
    * Método para obtener una fila de resultados de la sentencia sql
    */
   public function obtener_registros($stmt){
        $this->_resultado=$this->connect()->query($stmt);
      return $this->_resultado->fetch_assoc();
   }

   /*
    * Devuelve el último id del insert introducido
    */
   public function lastID(){
     
      return mysql_insert_id($this->link);
   }
}

?>
