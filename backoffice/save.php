<?php

include("config.inc.php");

$account = test_input($_POST['account']);
$timestamp = $_POST['timestamp'];
$reason = $_POST['reason'];
$RE = $_POST['RE'];
$balance = $_POST['balance'];
$pay_method = $_POST['pay_method'];

$sql = "INSERT INTO entries (`account`,`reason`,`RE`,`balance`,`pay_method`) VALUES ('$account','$reason',$RE,$balance,$pay_method)";
if(mysqli_query($conn,$sql)){
    echo "success insert data";
}else{
    echo "Error" . mysqli_error($conn);
}


function test_input($data){
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}


?>