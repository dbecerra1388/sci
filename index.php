<!--
This program is developed by David Israel Becerra Jimenez, 
is prohibited the partial or total distribution of this code 
without permission developer of this code
-->
<?php

ini_set('display_errors', 1);

define('DS', DIRECTORY_SEPARATOR);
define('ROOT', realpath(dirname(__FILE__)) . DS);
define('APP_PATH', ROOT . 'application' . DS);

try{
    require_once APP_PATH . 'Autoload.php';
    require_once APP_PATH . 'Config.php';

    Session::init();
    
    $registry = Registry::getInstancia();
    $registry->_request = new Request();
    $registry->_db = new Database();
    $registry->_acl = new ACL();
    
    Bootstrap::run($registry->_request);    
    $stmt="INSERT INTO sexo VALUES(NULL,'Otros','ot',1,NOW()),(NULL,'Otros2','ot',1,NOW())";
    $registry->_db->execute_query($stmt);
    echo $registry->_db->get_num_affected_rows();

}
catch(Exception $e){
    echo $e->getMessage();
}

?>