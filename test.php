<?php
require_once 'shifrator.php';
require_once 'analysis.php';
require_once 'deshifrator.php';
?>

    <html>
    <head>
        <title>LABS DB</title>
        <style>
            body {
                background: : #2196f3; /* Цвет фона */
                color: #fc0; /* Цвет текста */
            }
        </style>
    </head>
    <body>


    <form action="index.php" method="post" enctype="multipart/form-data">
        <textarea name="text"></textarea>
        <input type="submit" name="otpr">
    </form>
    <!--Import jQuery before materialize.js-->



    </body>

    </html>









<?php

if (isset($_POST['otpr'])){
    $text = $_POST['text'];
    $lol = shifrator::shifrirovanie($text);// Здесь наш зашифрованный текст
    echo $lol;
    analysis::analysator($text);
    deshifrator::deshifrirovanie($lol);
}



?>


<?php

if (isset($_POST['otpr'])){
    $text = $_POST['text'];

    $lol = shifrator::shifrirovanie($text);// Здесь наш зашифрованный текст
    echo $lol;
    #analysis::analysator($text);
    #deshifrator::deshifrirovanie($lol);
}



?>
