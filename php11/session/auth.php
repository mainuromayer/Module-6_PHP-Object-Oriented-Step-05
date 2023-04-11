<?php
session_name('form');
session_start([
    'cookie_lifetime'=>300, // 5 minutes
]);
$error = false;


$_SESSION['loggedin'] = false;
if (isset($_POST['username']) && isset($_POST['password'])){
    if ('admin' == $_POST['username'] && '827ccb0eea8a706c4c34a16891f84e7b' == md5($_POST['password'])){
        $_SESSION['loggedin'] = true;
    }else{
        $error = true;
        $_SESSION['loggedin'] = false;
    }
}

if (isset($_POST['logout'])){
    $_SESSION['loggedin'] = false;
    session_destroy();
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>
    <link rel="stylesheet" href="//fonts.googleapis.com/css?family=Roboto:300,300italic,700,700italic">
    <link rel="stylesheet" href="//cdn.rawgit.com/necolas/normalize.css/master/normalize.css">
    <link rel="stylesheet" href="//cdn.rawgit.com/milligram/milligram/master/dist/milligram.min.css">
    <style>
        body{
            margin-top: 30px;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="column column-60 column-offset-20">
                <h2>Simple Login Form</h2>
            </div>
        </div>
        <div class="row">
            <div class="column column-60 column-offset-20">
                <?php
//                echo md5("12345") . "<br>";
//                echo sha1("12345") . "<br>";
//                echo hash('sha256',"12345") . "<br>";

                if (true == $_SESSION['loggedin']){
                    echo "Hello Admin, Welcome!";
                }else{
                    echo "Hello Stranger, Login Below!";
                }
                ?>
            </div>
        </div>
        <div class="row" style="margin-top:100px;">
            <div class="column column-60 column-offset-20">

                <?php
                    if ($error){
                        echo "<blockquote>username and password didn't match</blockquote>";
                    }

                    if (false == $_SESSION['loggedin']):
                ?>
                <form method="POST">
                    <label for="username">Username</label>
                    <input type="text" name="username" id="username">
                    <label for="password">Password</label>
                    <input type="password" name="password" id="password">
                    <button type="submit" class="button-primary" name="submit">Log In</button>
                </form>

                <?php
                    else:
                ?>
<!--                <form action="auth.php?logout=true" method="POST">-->
                <form action="auth.php" method="POST">
                    <input type="hidden" name="logout" value="1">

                    <button type="submit" class="button-primary" name="submit">Log Out</button>
                </form>

                <?php
                    endif;
                ?>
                
            </div>
        </div>
    </div>
</body>
</html>