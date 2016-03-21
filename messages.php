<?php
$set = false;
$domain = "";
$from = "";
$to = "";
date_default_timezone_set('America/New_York');

$sessions = array("user", "fishbowl", "normal");

foreach ($sessions as $session) {
        if (isset($_SESSION[$session])) {
            $domain = $session;
            $from = $_SESSION[$session];
            $set = true;
            break;
        }
    }

    if (!$set) {
    $_SESSION['login'] = 'choose';
    header('Location: name.php');
    }

//if (isset($_SESSION['user'])) {
//    $domain = "user";
//    $from = $_SESSION['user'];
//    }


if (isset($_POST['message'])) {

    $message_in = $_POST['message'];
    $to = $_POST['to'];


//    $file = 'files/messages.txt';
//
//    $current = file_get_contents($file);
//
//    $current .= $message_in.';;'.$from.';;'.$domain.';;'.$to.';;'.date('D, M jS y @ h:i a T').';;;\n';
    $file = fopen('files/messages.txt', 'a');
    fwrite($file, $message_in.';;'.$from.';;'.$domain.';;'.$to.';;'.date('D, M jS y @ h:i a T').';;;');
    fclose($file);
    unset($_POST);
    file_put_contents($file, $current);
    header("Location: email.php");

    }





                }
                ?>