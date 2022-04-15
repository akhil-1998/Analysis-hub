<?php
    include "db.php";

    $sql = "SELECT name FROM user";
    $stmt = sqlsrv_query( $conn, $sql );
    echo 'hi';
    if( $stmt === false) {
        die( print_r( sqlsrv_errors(), true) );
        }

    while( $row = sqlsrv_fetch_array( $stmt, SQLSRV_FETCH_ASSOC) ) {
                                                                 
        echo "<tr><td>".$row['name']."</td></tr>";                                               
                                               

        }

    sqlsrv_free_stmt( $stmt);

?>