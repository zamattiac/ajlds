
<html>
<head>
    <title>employee-facing registry content</title>
    <style>
        h1 {
        vertical-align:middle;
        text-align:middle;
        font-family:Verdana;
        padding:50px;
        }

        form {
        width:60%;
        margin:auto;
        padding:50px;
        }

        select {
            padding:10px;
            height:35px;
            margin: 0;
            -webkit-border-radius:0;
            -moz-border-radius:0;
            border-radius:0;
            -webkit-box-shadow: 0 3px 0 #ccc, 0 -1px #fff inset;
            -moz-box-shadow: 0 3px 0 #ccc, 0 -1px #fff inset;
            box-shadow: none;
            background: #f8f8f8;
            color:#888;
            border:none;
            outline:none;
            display: inline-block;
            -moz-appearance:none;
            appearance:none;
            cursor:pointer;
    }


        input[type="text"], input[type="password"] {
        padding: 10px;
        margin:3px;
        width:40%;
        border: none;
        border-bottom: solid 2px #c9c9c9;
        transition: border 0.3s;
        }
        input[type="text"]:focus, input[type="password"]:focus,
        input[type="text"].focus, input[type="password"].focus {
        outline:none;
        border-bottom: solid 2px #969696;
        }

        input[type="submit"] {
        border-radius:0;
        color:white;
        border:none;
        padding:10px;
        margin:10px;
        background-color:gray;
        }

        #container {
        width:60vw;
        height:60vh;
        margin:auto;
        margin-top:10vh;
        background-color:yellow;
        border: thick dotted black;
        }

        body {
        background: linear-gradient(yellow,red);
        }
    </style>

</head>

<body>


<img style="position:absolute;bottom:10;" src="white.png" width="90px">

<?php
    session_start();
    echo '<div id="container"><h1> verify your identity.</h1><form name="login" method="POST" action="name.php"><input type="text" name="user"  placeholder="CompID"><input type="password" name="pass" placeholder="Password"><input type="submit" id="submit" name="submit" value="login"></form></div>
';
    echo 'services normal';

    include('data.php');

    function login() {
        global $users, $passwords;
        if (isset($_POST['user'])) {
            $user_in = $_POST['user'];
            $pass_in = $_POST['pass'];

            if (in_array($user_in, $users)) {
                $index = array_search($user_in, $users);
                if ($passwords[$index] == $pass_in) {
                    echo 'success';
                    $_SESSION['user'] = $user_in;
                    header('Location: /ajlds/members/index.html');
                }
                else {
                    echo "wrong password";
                }
            }

            else  {
                echo "<br>try again.";
            }
        }
    }

    if (!isset($_SESSION['user'])) {
    login();
    }
    if (isset($_SESSION['user'])) {
    header('Location: members/index.html');
    }
?>


</body>
</html>
