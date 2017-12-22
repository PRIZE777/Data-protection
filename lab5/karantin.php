<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 22.12.2017
 * Time: 14:05
 */

class karantin
{
    public static function fail(){
        $fp = fopen("test.txt","r");
        if ($fp){
            while (!feof($fp)){
                while (fgetc($fp) != " "){
                    echo fgetc($fp)."<br>";
                    break;
                }
            }
        }
        else echo "Ошибка при открытии файла";
        fclose($fp);
    }
}


karantin::fail();