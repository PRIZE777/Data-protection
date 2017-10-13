<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 06.10.2017
 * Time: 11:11
 */

class encrypted
{
    private static function degree($a,$b){ // функция для возведения в степень
        $sum=1;
        for ($i=0;$i<$b;$i++){
            $sum*=$a;
        }
        return $sum;
    }

    private static function prostoechislo($n){ // функция Эйлера

        $ret = 1;
        for ($i=2;$i*$i<=$n;++$i){
            $p = 1;
            while ($n % $i == 0){
                $p *= $i;
                $n /= $i;
            }
            if (($p/=$i)>=1)
                $ret *= $p*($i-1);
        }

        return --$n ? $n*$ret : $ret;

    }

    public static function primitiveroot($g,$m){
        $phi=self::prostoechislo($m);
        $arr[] = $phi;
        $size = 0;
        $b = true;
        for ($i=0;($i<=$phi-1 && $b);$i++){
            $num=(self::degree($g,$i)%$m);
            for ($u=0;$u<$size;$u++){
                if ($arr[$u] == $num){
                    $b = false;
                }
            }
            $arr[$size]=$num;
            $size++;
        }
        #echo "Данное число ".$g." Является примитивным корнем по модулю ".$m.": ".$b;
        return $b;
    }

    public static function mod($a,$b,$c){

    }

    public static function test($a,$b,$g='5',$p='23'){
       # $g = 5;
        #$p = 23;
        if (self::primitiveroot($g,$p) == true){

            if ($a <= 10 && $b <= 10){


                $A = $g ** $a % $p; // Передаем бобу
                echo "Передаём второму собеседнику число $A <br>";
                $B = $g ** $b % $p; // Передаем алисе
                echo "Передаём первому собеседнику число $B <br>";
                $lol = $B ** $a % $p;
                echo "Первый собеседник получает число $lol <br>";
                $lol1 = $A ** $b % $p;
                echo "Второй собеседник получает число $lol1 <br>";
            }

            else
                echo "Выбирите другие секретные числа!";


        }
        else
            echo "Выбирите другие общие числа!";

    }


}



echo encrypted::test(5,6);

#echo encrypted::primitiveroot(7,11);