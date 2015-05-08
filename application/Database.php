<!--
This program is developed by David Israel Becerra Jimenez, 
is prohibited the partial or total distribution of this code 
without permission developer of this code
-->
<?php
class Database
{
    public $_result;
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
        if(DB_TYPE=='Mysl'){ 
            $this->_result=$this->connect()->query($stmt);
        }
    }
    /*
     * Function to get query result
     */
    public function get_query_result()
    {
        if(DB_TYPE=='Mysl'){             
            return $this->_result->fetch_assoc();
        }
    }
    /*
     * Function to get number of rows affected
     */
    public function get_num_affected_rows()
    {
        if(DB_TYPE=='Mysl'){    
            $n=$this->_result->affected_rows;
            return $n;
        }
    }
    /*
     * Function to get number of rows in result
     */
    public function get_num_rows()
    {
        if(DB_TYPE=='Mysl'){                     
            return $this->_result->num_rows;
             
        }
    }
    /*
     * Function to execute procedure
     */

    public function execute_procedure($name,$array=null)
    {
        if(DB_TYPE=='Mysl'){ 
            $this->_resultado=$this->connect()->query("CALL $name($array)");
            return $this->_resultado->fetch_assoc();
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
    /*
     * Function to change user database
     */
    public function change_user_db($typeUser)
    {
        if(DB_TYPE=='Mysl'){ 
            if(DB_TYPE_USER<>0){
                if($typeUser=1){
                    $this->_resultado=$this->connect()->change_user(DB_USER_SELECT, DB_PASS_SELECT, DB_NAME );
                }elseif ($typeUser=2) {
                    $this->_resultado=$this->connect()->change_user(DB_USER_UPDATE, DB_PASS_UPDATE, DB_NAME );
                }elseif ($typeUser=3) {
                    $this->_resultado=$this->connect()->change_user(DB_USER_INSERT, DB_PASS_INSERT, DB_NAME );
                }elseif ($typeUser=3) {
                    $this->_resultado=$this->connect()->change_user(DB_USER_DELETE, DB_PASS_DELETE, DB_NAME );
                }
            }         
           
        }
    }    
}