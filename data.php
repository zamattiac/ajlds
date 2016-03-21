<?php
$messages = array("meeting 2/5 canceled");

$information = array("none");

$users = array('mak2vr','afj5jz','iap5fk','rsa5dt');
$passwords = array('glhkj','mexico','khourtney','rarty');

$names = array('matthew keitelman', 'andrew jacobson', 'ilya pantyuhin', 'rohan ahluwahlia');

if (isset($_POST["message"])) {

    $message_in = $_POST["message"];
    $from = $_SESSION['user'];

    $message = $message_in . ' from: ' . $from;

    array_push($messages, $message);
    header("location: members/index.html");
    }

?>

