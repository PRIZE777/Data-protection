<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 06.10.2017
 * Time: 11:11
 */

class encrypted
{
    private static $alfavit = array('1' => 'а','2' => 'б','3' => 'в','4' => 'г','5' => 'д','6' => 'е','7' => 'ж','8' => 'з','9' => 'и','10' => 'й','11' => 'к','12' => 'л','13' => 'м','14' => 'н','15' => 'о','16' => 'п','17' => 'р','18' => 'с','19' => 'т','20' => 'у','21' => 'ф','22' => 'х','23' => 'ц','24' => 'ч','25' => 'ш','26' => 'щ','27' => 'ъ','28' => 'ы','29' => 'ь','30' => 'э','31' => 'ю','32' => 'я');

    public static function shifrirovanie($text){
        $strlower = mb_strtolower($text);
        $strlower = preg_split('//u',$strlower,-1,PREG_SPLIT_NO_EMPTY);

        /*
        * Кодируем наш алфавит
        */
        foreach ($strlower as $key => $value){
            foreach (self::$alfavit as $key1 => $value1){
                if ($value == $value1){
                    $shifrmass[] = $key1;
                }
            }
        }

        /*
        $prostoe_chislo = 23; // здесь общее число для ключа шифрования
        $generator = 5; // здесь общее число для ключа шифрования
        $first_number = 6; // Здесь тайное число первого абонента
        $second_number = 5; // Здесь тайное число второго абонента
        $secret = 2; // секретное сообщение
        $alisa = $generator ** $first_number % $prostoe_chislo;
        $bob = $generator ** $second_number % $prostoe_chislo;

        $alisa_vicheslyaet = $bob ** $first_number % $prostoe_chislo;
        $bob_vicheslyaet= $alisa ** $second_number % $prostoe_chislo;

        echo "Алисен секретный ключ: $alisa <br>";
        echo "Бобов секретный ключ: $bob <br>";
        echo "Алиса расшифровывает ключ Боба: $alisa_vicheslyaet <br>";
        echo "Боб расшифровывает клю Алисы: $bob_vicheslyaet <br>";
        */
        $g = 5;
        $p = 23;
        $chislo_alisi= 7;
        $chislo_boba = 3;

        $a = $g ** $chislo_alisi % $p; // Передаем бобу
        $b = $g ** $chislo_boba % $p; // Передаем алисе

        echo $a." | ".$b."<br>";

        $lol = $b ** $chislo_alisi % $p;
        $lol1 = $a ** $chislo_boba % $p;

        echo $lol." | ".$lol1;





    }

}

$test="Это тествоый текст!";

encrypted::shifrirovanie($test);