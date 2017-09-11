<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 10.09.2017
 * Time: 19:49
 */

/*

$text = fopen('test.txt','a+');

if ($text){
    while (!feof($text)){
        $mytext = fgetc($text);
        $lol[] = $mytext;
    }
}
else echo "Ошибка при открытии файла";


print_r($lol);
*/

$t = file_get_contents('test.txt');
$get  = mb_detect_encoding($t, array('utf-8', 'cp1251'));
$lol = iconv($get,'UTF-8',$t);
$lol = mb_strtolower($lol);
$text1 = preg_split('//u',$lol,-1,PREG_SPLIT_NO_EMPTY); // разделяем текст посимвольно и вставляем в массив

print_r($text1);

/*
$text = file_get_contents('test.txt');
$text = mb_convert_encoding($text,'utf-8');
$text = preg_split('//u',$text,-1,PREG_SPLIT_NO_EMPTY); // разделяем текст посимвольно и вставляем в массив
$text1 = array_map('strtolower', $text); // переводит массив в нижний регистр

print_r($text1);
*/
/*

if ($text){
    while (!feof($text)){
        $mytext = fgetc($text);
        echo $mytext."<br>";
    }
}
else echo "Ошибка при открытии файла";
fclose($text);


print_r($lol);

*/