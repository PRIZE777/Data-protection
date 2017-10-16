<?php
/*
setcookie("Num1", $_POST['num1'], time()-3600);
setcookie("Num2", $_POST['num2'], time()-3600);
setcookie("Num3", $_POST['num3'], time()-3600);
setcookie("Num4", $_POST['num4'], time()-3600);
setcookie("Num5", $_POST['num5'], time()-3600);
setcookie("Num6", $_POST['num6'], time()-3600);
setcookie("Num7", $_POST['num7'], time()-3600);
setcookie("Num8", $_POST['num8'], time()-3600);
*/
require ('encrypted.php');?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>3 LABA</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>
<div class="container-fluid maine">
    <div class="col-md-6 text-center fon">
        <h3>Первый пользователь</h3>
        <p>Выберете ваши секретные числа:</p><br>
        <form action="cook.php" method="post">
        <input name="num1" class="marg-bot" type="number" placeholder="1ое число"><br>
        <input name="num2" class="marg-bot" type="number" placeholder="2ое число"><br>
        <input name="num3" class="marg-bot" type="number" placeholder="3ее число"><br>
        <input name="otp1" type="submit" class="btn btn-danger marg-bot">
        </form>
    </div>
    <div class="col-md-6 text-center fon">
        <h3>Второй пользователь</h3>
        <p>Выберете ваши секретные числа:</p><br>
        <form action="cook.php" method="post">
        <input name="num4" class="marg-bot" type="number" placeholder="1ое число"><br>
        <input name="num5" class="marg-bot" type="number" placeholder="2ое число"><br>
        <input name="num6" class="marg-bot" type="number" placeholder="3ее число"><br>
        <input name="otp2" type="submit" class="btn btn-danger marg-bot">
        </form>
    </div>
</div>

<div class="container-fluid maine1">
    <div class="col-md-12  text-center">
        <div class="col-md-4 col-md-offset-4 fon">
        <form action="cook.php" method="post">
            <h4>Введите общие числа:</h4>
            <input name="num7" class="marg-bot" type="number" placeholder="Общее число 1"><br>
            <input name="num8" class="marg-bot" type="number" placeholder="Общее число 2"><br>
            <input name="otp3" type="submit" class="btn btn-danger marg-bot">
        </form>
        </div>
    </div>
</div>

<div class="container-fluid maine1 marg-bot">
    <div class="col-md-4 col-md-offset-4 fon">
        <h4>Лог событий: </h4>
        <?php
        @session_start();
        $g= $_SESSION['Num7'];
        $p= $_SESSION['Num8'];
        $a= $_SESSION['Num1'];
        $b= $_SESSION['Num2'];
        $c= $_SESSION['Num3'];
        $d= $_SESSION['Num4'];
        $e= $_SESSION['Num5'];
        $f= $_SESSION['Num6'];
        if ( gettype($g)=='NULL' ||  gettype($g)=='NULL'){
            $g=5;
            $p=23;
        }
        if (isset($a,$b,$c,$d,$e,$f)){
            if ($g=='NULL' || $p=='NULL'){
                $g='5';
                $p='23';
            }
            echo encrypted::test($a,$b,$c,$d,$e,$f,$g,$p);
            session_unset();
        }
        ?>
    </div>

</div>

<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="js/bootstrap.min.js"></script>
</body>
</html>