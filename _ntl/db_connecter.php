<?php
error_reporting(E_ALL);

// Zum Aufbau der Verbindung zur Datenbank
define ( 'MYSQL_HOST',      'localhost' );
define ( 'MYSQL_BENUTZER',  'serverstatusv2' );
define ( 'MYSQL_KENNWORT',  '86@wj7zK' );
define ( 'MYSQL_DATENBANK', 'serverstatusv2' );

$db_link = mysqli_connect (MYSQL_HOST, 
                           MYSQL_BENUTZER, 
                           MYSQL_KENNWORT, 
                           MYSQL_DATENBANK);

if ( $db_link )
{
    echo 'Verbindung erfolgreich: ';
    print_r( $db_link);
}
else
{
    die('keine Verbindung möglich: ' . mysqli_error());
}
?>

