<?php

include("config.inc.php");

$account = test_input($_POST['account']);
// $timestamp = $_POST['timestamp'];
// $reason = $_POST['reason'];
// $RE = $_POST['RE'];
// $balance = $_POST['balance'];
// $pay_method = $_POST['pay_method'];

echo $account;

function test_input($data){
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}


?>