<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 12.11.2017
 * Time: 21:18
 */

class rsashifr
{
    private static function prostoe(){ // метод генерации простого числа
        while (1){
            $z=0;
            $a=1+mt_rand(1,20);
            for ($i=2;$i<$a;$i++){
               if ($a%$i==1)
                   continue;
               if ($a%$i==0){
                   $z=1;
                   break;
               }
            }
            if ($z==0){
                break;
            }
        }
        return $a;
    }

    private static function evklid($a,$b){ // алгоритм Евклида вычисления НОД
        while ($a && $b){
            if ($a >= $b){
                $a %= $b;
            }
            else
                $b %= $a;
            return $a | $b;
        }
    }

    public static function main($P){
            $p = self::prostoe(); // певрое простое число
            $q = self::prostoe(); // второе простое число
            $n = $p * $q;
            $fi = ($p - 1)*($q - 1); // функция эйлера
            $fitest = $fi; // эта функция эйлера для генерации
            $i = 0;
            while ($i==0){ // генерация открытой экспоненты
                $e = self::prostoe();
                $test =$e; // копия открытой экспоненты
                if ($e<$fitest){ // проверка на взаимную простату
                    while ($e!=$fitest){
                        if ($e>$fitest){
                            $e = $e - $fitest;
                        }
                        else{
                            $fitest = $fitest - $e;
                        }
                    }
                    if ($e==1){
                        $i=1;
                    }
                }
            }
            echo $p." | ".$q."<br>";
            echo $fi."<br>";
            echo "{ $test, $n } - это открытый ключ! <br>";
            $d=1; // генерация закрытой экспоненты
            while(($test*$d)%$fi!=1){
                $d++;
            }
            echo "{ $d, $n } - это закрытый ключ! <br>";

            $shifr = ($P**$test)%$n;
            echo $shifr."- Зашифрованный текст <br>";

            $rasshifr = ($shifr**$d)%$n;
            echo $rasshifr;


    }

}

$test = 1;

rsashifr::main($test);