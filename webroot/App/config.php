<?php 
//------------Conexion a BD--------------
//define ( 'DBSERVER' , 'localhost' );
//define ( 'DBNAME' , 'roomview' );
//define ( 'DBUSER' , 'root' );
//define ( 'DBPASSWORD' , 'root' );
//
//
//
define ( 'DBSERVER' , $_ENV['MYSQL_SERVICE_HOST'] );
define ( 'DBNAME' , $_ENV['DATABASE_NAME'] );
define ( 'DBUSER' , $_ENV['DATABASE_USER'] );
define ( 'DBPASSWORD' , $_ENV['DATABASE_PASSWORD'] );
?>
