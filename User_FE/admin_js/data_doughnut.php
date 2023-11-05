<?php
session_start();
include '../../Back_End/db_conn.php';

$query1 = sprintf("SELECT COUNT(status) FROM orders WHERE status = '0' AND client_id ='4'");
$query2 = sprintf("SELECT COUNT(status) FROM orders WHERE status = '1' AND client_id ='4'");
$query3 = sprintf("SELECT COUNT(status) FROM orders WHERE status = '2' AND client_id ='4'");
$query4 = sprintf("SELECT COUNT(status) FROM orders WHERE status = '5' AND client_id ='4'");
$query5 = sprintf("SELECT COUNT(status) FROM orders WHERE status = '3' AND client_id ='4'");
$query6 = sprintf("SELECT COUNT(status) FROM orders WHERE status = '4' AND client_id ='4'");
$query7 = sprintf("SELECT COUNT(status) FROM orders WHERE status = '6' AND client_id ='4'");

$result1 = mysqli_query($conn, $query1);
$result2 = mysqli_query($conn, $query2);
$result3 = mysqli_query($conn, $query3);
$result4 = mysqli_query($conn, $query4);
$result5 = mysqli_query($conn, $query5);
$result6 = mysqli_query($conn, $query6);
$result7 = mysqli_query($conn, $query7);


$data = array();
foreach($result1 as $row){
    $data['Pending'] = $row['COUNT(status)'];
}
foreach($result2 as $row){
    $data['Packed'] = $row['COUNT(status)'];
}
foreach($result3 as $row){
    $data['Out for Delivery'] = $row['COUNT(status)'];
}
foreach($result4 as $row){
    $data['Picked up'] = $row['COUNT(status)'];
}
foreach($result5 as $row){
    $data['Delivered'] = $row['COUNT(status)'];
}
foreach($result6 as $row){
    $data['Cancelled'] = $row['COUNT(status)'];
}
foreach($result7 as $row){
    $data['Raya Aidilfitri Celebration'] = $row['COUNT(status)'];
}

$result1->close();
$result2->close();
$result3->close();
$result4->close();
$result5->close();
$result6->close();
$result7->close();

print json_encode($data);