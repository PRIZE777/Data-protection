<?php
require_once 'shifrator.php';
require_once 'analysis.php';
require_once 'deshifrator.php';
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>LABS DB</title>
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
</head>
<body>

<nav class="navbar" style="background: #03a9f4; -webkit-box-shadow: 0px 1px 6px 0px rgba(0,0,0,0.75);
-moz-box-shadow: 0px 1px 6px 0px rgba(0,0,0,0.75);
box-shadow: 0px 1px 6px 0px rgba(0,0,0,0.75); margin: 0px; border-radius: 0px;">
    <a href="#" style="text-decoration: none;"><h2 class="text-center" style="color: white;">LABS DB ROMAN BARKOV IVBO-07-14</h2></a>
</nav>
<div class="container-fluid" style="background: #2196f3;">
<div class="container" style="margin-top: 30px;">
    <div class="row">
        <div class="col-md-6 col-md-offset-3">
            <form class="form-horizontal" action="index.php" method="post">
                <div class="form-group">
                    <label for="comment" style="color: white;">Введите текст:</label>
                    <textarea class="form-control" rows="10" name="text"></textarea>
                    <div class="col-md-2 col-md-offset-5" style="margin-top: 5px;">
                    <input class="btn-primary" type="submit" name="otpr" value="Зашифровать">
                    </div>
                </div>

            </form>
        </div>
    </div>
</div>
<div CLASS="container">
    <div class="row">
        <div class="col-md-6 col-md-offset-3">
            <form class="form-horizontal" action="index.php" method="post">
                <div class="form-group">
                    <label for="comment" style="color: white;">Ваш результат:</label>
                    <textarea class="form-control" rows="10" name="text">
                        <?php
                        if (isset($_POST['otpr'])){
                            $text = $_POST['text'];

                            $lol = shifrator::shifrirovanie($text);// Здесь наш зашифрованный текст
                            echo $lol;
                            analysis::analysator($text);
                        }
                        ?>
                    </textarea>
                </div>

            </form>
        </div>
    </div>
</div>
</div>
<nav class="navbar" style="background: #ef5350; -webkit-box-shadow: 0px 1px 6px 0px rgba(0,0,0,0.75);
-moz-box-shadow: 0px 1px 6px 0px rgba(0,0,0,0.75);
box-shadow: 0px 1px 6px 0px rgba(0,0,0,0.75); margin: 0px; border-radius: 0px;">
    <a href="#" style="text-decoration: none;"><h2 class="text-center" style="color: white;">LABS DB ROMAN BARKOV IVBO-07-14</h2></a>
</nav>
<div class="container-fluid" style="background: #ef5350;">
    <div class="container" style="margin-top: 30px;">
        <div class="row">
            <div class="col-md-6 col-md-offset-3">
                <form class="form-horizontal" action="index.php" method="post">
                    <div class="form-group">
                        <label for="comment" style="color: white;">Введите текст:</label>
                        <textarea class="form-control" rows="10" name="text1"></textarea>
                        <div class="col-md-2 col-md-offset-5" style="margin-top: 5px;">
                            <input class="btn btn-danger" type="submit" name="otpr1" value="Расшифровать">
                        </div>
                    </div>

                </form>
            </div>
        </div>
    </div>
    <div CLASS="container">
        <div class="row">
            <div class="col-md-6 col-md-offset-3">
                <form class="form-horizontal" action="index.php" method="post">
                    <div class="form-group">
                        <label for="comment" style="color: white;">Ваш результат:</label>
                        <textarea class="form-control" rows="10" name="text">
                        <?php
                        if (isset($_POST['otpr1'])){
                            $text1 = $_POST['text1'];
                            deshifrator::deshifrirovanie($text1);
                        }
                        ?>
                    </textarea>
                    </div>

                </form>
            </div>
        </div>
    </div>
</div>


<script src="http://code.jquery.com/jquery-latest.js"></script>
<script src="js/bootstrap.min.js"></script>
</body>
</html>