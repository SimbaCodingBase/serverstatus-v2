<?php
$db_link = mysqli_connect (
                     MYSQL_HOST, 
                     MYSQL_BENUTZER, 
                     MYSQL_KENNWORT, 
                     MYSQL_DATENBANK
                    );
$sql = "SELECT * FROM server";
$db_erg = mysqli_query( $db_link, $sql );
while ($zeile = mysqli_fetch_array( $db_erg, MYSQLI_ASSOC)) {
?>

<?php echo($zeile['id']) ?>

<?php
} mysqli_free_result( $db_erg );
?>
