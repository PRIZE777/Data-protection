<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 10.09.2017
 * Time: 19:49
 */

$alfavit = array('а','б','в','г','д','е','ё','ж','з','и','й','к','л','м','н','о','п','р','с','т','у','ф','х','ц','ч','ш','щ','ъ','ы','ь','э','ю','я');
$alfavit1 = array();

$lol = array('5' => '1', '3' => '2');


foreach ($alfavit as $key => $value){
    $b = $key;
    $b = (integer)$b; // Переводим в int, так как кей нам возвращает string
    $alfavit1[] = $b;

}




echo "<pre>";


print_r($alfavit1);

echo "<pre>";

