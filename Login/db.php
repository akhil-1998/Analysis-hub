<?php
$servername = "us-cdbr-east-05.cleardb.net";
$username = "b781a5b1926da3";
$password = "a1efd39a";
$dbname = "heroku_4fef4b01f5dd94d";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
echo "success";
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$connectionInfo = array( "Database"=>"heroku_4fef4b01f5dd94d", "UID"=>"b781a5b1926da3", "PWD"=>"a1efd39a");
$con = sqlsrv_connect( $serverName, $connectionInfo);
if( $con ) {
    echo "Connection established.<br />";
}else{
    echo "Connection could not be established.<br />";
    die( print_r( sqlsrv_errors(), true));
}



?>