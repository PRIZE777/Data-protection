<?php

/**
 * return array
 *
 *Функция возвращает массив с ключами в алфавитном порядке и перемешанными значениями.
 */
function newAlfabet(){
//Формируем алфавит, по желанию набор символов может быть иным
    $alfa = range('A','Z');
    shuffle($alfa);

    $keys = array();

    foreach ($alfa as $key => $value){
        $keys[chr($key+65)] = $value;
    }
    return $keys;
}

/**
 * @param $text - текст, который шифруем
 * @param $newalfabet - сгенерированный массив с алфавитом
 * return array|string
 */
function enCode($text, $newalfabet){

    $text = strtoupper($text);
    $len = strlen($text);

    for($i = 0; $i <$len; $i++){

        foreach ($newalfabet as $key => $value){
            if($text[$i] == $key){
                $text[$i] = $value;
                break;
//с break у меня была загвоздка - без него функция пробегается до конца массива и может
//повторно заменить букву. Восстановлению в этом случае текст не подлежит.
            }
        }

    }
    return $text;
}

/**
 * @param $text - зашифрованный текст
 * @param $keys - строка с ключом (она выводится при шифровании текста)
 * return array
 */
function deCode($text, $keys){
    foreach ($keys as $key => $value){
        $alfabet[chr($key+65)] = $value;
    }

    $len = strlen($text);

    for($i = 0; $i <$len; $i++){

        foreach ($alfabet as $key => $value){
            if($text[$i] == $value){
                $text[$i] = $key;
                break;
            }
        }

    }
    return $text;
}
http://www.pvsm.ru/php-2/8953