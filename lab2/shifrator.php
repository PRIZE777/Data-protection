<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 23.09.2017
 * Time: 11:30
 */

namespace shifrirovanie;


class shifrator
{
    private static $alfavit = array('00000' => 'а','00001' => 'б','00010' => 'в','00011' => 'г','00100' => 'д','00101' => 'е','00110' => 'ж','00111' => 'з','01000' => 'и','01001' => 'й','01010' => 'к','01011' => 'л','01100' => 'м','01101' => 'н','01110' => 'о','01111' => 'п','10000' => 'р','10001' => 'с','10010' => 'т','10011' => 'у','10100' => 'ф','10101' => 'х','10110' => 'ц','10111' => 'ч','11000' => 'ш','11001' => 'щ','11010' => 'ъ','11011' => 'ы','11100' => 'ь','11101' => 'э','11110' => 'ю','11111' => 'я');

    public static function shifrirovanie($test){
        $strlower = mb_strtolower($test);
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

        $stroka_shifrmass = implode($shifrmass); // Массив в строку
        $end = iconv_strlen($stroka_shifrmass); // Кол-во символов в строке для создания ключа
        $shifrmass1 = preg_split('//u',$stroka_shifrmass,-1,PREG_SPLIT_NO_EMPTY); // Наш массив по символьно

        /*
         * Создаем ключ шифрования
         */
        for ($i=0;$i<$end;$i++){
            $key_mass[$i] = mt_rand(0,1);
        }

        /*
         * Шифруем наш текст
         */
        foreach ($shifrmass1 as $value3){
            foreach ($key_mass as $value4){
                if ($value3 == $value4){
                    $result[] = 0;
                }
                if ($value3 != $value4){
                    $result[] = 1;
                }
                break;
            }
        }
        /*
         * Переводим символы в буквы
         */
        $result_last = implode($result);
        $result_last_last = str_split($result_last,5);
        foreach ($result_last_last as $key5 => $value5){
            foreach (self::$alfavit as $key6 => $value6){
                if ($value5 == $key6){
                    $result_last_last_last[] = $value6;
                }
            }
        }
        $the_end = implode($result_last_last_last);

        return $the_end;



    }
}


