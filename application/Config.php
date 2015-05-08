<!--
This program is developed by David Israel Becerra Jimenez, 
is prohibited the partial or total distribution of this code 
without permission developer of this code
-->
<?php
date_default_timezone_set('America/Lima');
/*******************************************************************************
 * SYSTEM
 ******************************************************************************/
define('BASE_URL', 'http://localhost:8008/sci/');
define('DEFAULT_CONTROLLER', 'index');
define('DEFAULT_LAYOUT', 'twb');
define('DEFAULT_CHARSET','utf8');
define('APP_NAME', 'sci');
define('APP_SLOGAN', 'Sistema de Control de Inventarios');
define('APP_COMPANY', 'Agrovalko');
define('APP_VERSION','1.0');
define('SESSION_TIME', 10);
define('HASH_KEY', '4f6a6d832be79');
define('APP_LANGUAGE','Spanish');
define('NUMBER_ROWSBYPAGE',15);
define('NUMBER_MAXIMUN_ROWSBYPAGE',100);
define('NUMBER_LINKPAGINATOR',20);
define('MODE_DEVELOPMENT',0);//1=Execution;0=Implementation
define('APP_MAINTENANCE',0);//1=yes;0=not
/*******************************************************************************
 * SESSION
 ******************************************************************************/
define('DEFAULT_USERLOGIN','admin');
define('DEFAULT_USERPASSWORD','admin');
define('NUMBER_MAXIMUNLOGINFAILURES',5);
define('NUMBER_MINUTESLOCKED',3);//1 TO MORE;0=It must unlocked manually
define('SECURE_IMAGE',0);//0=not;1=yes
define('LIFETIME_SESSION',1800);//TIME IN SECONDS
define('TYPE_USER_WEBMASTER', 1);
define('PK_USER_WEBMASTER',1);

/*******************************************************************************
 * DATABASE
 ******************************************************************************/
define('DB_HOST', 'localhost');
define('DB_USER', 'root');
define('DB_PASS', '45246533');
define('DB_NAME', 'agrovalko_db');
define('DB_CHAR', 'utf8');
define('DB_TYPE','Mysl');//Mysl;Sql;PostgreSQL;oracle
define('DB_PREFIX','sci');
define('DB_PORT','3306');
define('DB_USER_MULTIPLE',0);

define('DB_TYPE_USER',0);
define('DB_USER_SELECT','');
define('DB_USER_INSERT','');
define('DB_USER_UPDATE','');
define('DB_USER_DELETE','');

define('DB_PASS_SELECT','');
define('DB_PASS_INSERT','');
define('DB_PASS_UPDATE','');
define('DB_PASS_DELETE','');
/*******************************************************************************
 * OPERATIONS
 ******************************************************************************/
define('OPERATION_DELETE', 'delete');
define('OPERATION_UPDATE', 'change');
define('OPERATION_ADD', 'add');
define('OPERATION_SUCCESSFULL', 'ok');
define('OPERATION_FAILURE', 'notOk');
define('OPERATION_FAILURE_SQL', 'notOkSQL');
define('ASCENDING_ORDER', 'asc');
define('DESCENDING_ORDER', 'desc');
define('OPERATION_REGISTER_INACTIVE', 'inactive');
define('INSERT_ACTION', 1);
define('UPDATE_ACTION', 2);
define('DELETE_ACTION', 3);
define('LIST_ACTION', 4);
define('REPORT_ACTION', 5);
define('VIEW_ACTION', 6);
/*******************************************************************************
 * REPORTS
 ******************************************************************************/
define('REPORT_PDF_FORMAT','pdf');
define('REPORT_XLS_FORMAT','xls');
/*******************************************************************************
 * MAILINGS
 ******************************************************************************/
$config['developerEmail'] = 'jasoftsolutions-soporte@googlegroups.com';
$config['sendMailFrom'] = 'apache@jasoftserver.com';
$config['replyTo'] = 'soporte@jasoftsolutions.com';
/*******************************************************************************
 * MAILINGS BY SMTP
 ******************************************************************************/
define('NOTIFICATION_PORT',26);
define('NOTIFICATION_HOST','smtp.gmail.com');
define('NOTIFICATION_SMTPAUTH',true);
define('NOTIFICATION_USERNAME','david.becerrajimenez@gmail.com');
define('NOTIFICATION_PASS','db3c3rr445246533');
define('NOTIFICATION_SMTPSECURE','ssl');//ssl o tls
define('NOTIFICATION_SEND',0);// 0=Mailings to developer;1=Mailings to end users
define('MAIL_SENDMODE',1);// 0= Sent by smtp;1= Sent by mail
?>