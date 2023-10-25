<?php
session_start();
include '../../Back_End/db_conn.php';

$query = sprintf("SELECT date_created, amount FROM orders where client_id ='1' ORDER BY date_created");

$result = mysqli_query($conn, $query);


$data = array();
foreach($result as $row){
    $data[] = $row;
}

$result->close();

print json_encode($data);