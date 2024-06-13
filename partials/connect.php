
<?php
$servername = "localhost";
$username = "mamp";
$password = "123";
$basename = "projekt";
$dbc = mysqli_connect($servername, $username, $password, $basename) or die('Error connecting to MySQL server.' . mysqli_connect_error());
mysqli_set_charset($dbc, "utf8");
?>

