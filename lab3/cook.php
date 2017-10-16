<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 16.10.2017
 * Time: 14:09
 */

session_start();

if (isset($_POST['otp1'])){
    $_SESSION['Num1']=$_POST['num1'];
    $_SESSION['Num2']=$_POST['num2'];
    $_SESSION['Num3']=$_POST['num3'];
    /*
    setcookie("Num1", $_POST['num1'], time()+3600);
    setcookie("Num2", $_POST['num2'], time()+3600);
    setcookie("Num3", $_POST['num3'], time()+3600);
    */
    header('Location: http://data-protection/lab3/');
}

if (isset($_POST['otp2'])){
    $_SESSION['Num4']=$_POST['num4'];
    $_SESSION['Num5']=$_POST['num5'];
    $_SESSION['Num6']=$_POST['num6'];
    /*
    setcookie("Num4", $_POST['num4'], time()+3600);
    setcookie("Num5", $_POST['num5'], time()+3600);
    setcookie("Num6", $_POST['num6'], time()+3600);
    */
    header('Location: http://data-protection/lab3/');
}

if (isset($_POST['otp3'])){
    $_SESSION['Num7']=$_POST['num7'];
    $_SESSION['Num8']=$_POST['num8'];
    /*
    setcookie("Num7", $_POST['num7'], time()+3600);
    setcookie("Num8", $_POST['num8'], time()+3600);
    */
    header('Location: http://data-protection/lab3/');
}