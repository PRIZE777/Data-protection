<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 10.09.2017
 * Time: 19:49
 */

$alfavit = array('а','б','в','г','д','е','ё','ж','з','и','й','к','л','м','н','о','п','р','с','т','у','ф','х','ц','ч','ш','щ','ъ','ы','ь','э','ю','я');
$alfavit1 = array('я','б','в','г','д','е','ё','ж','з','и','й','к','л','м','н','о','п','р','с','т','у','ф','х','ц','ч','ш','щ','ъ','ы','ь','э','ю','а');

$allalfavit = array($alfavit,$alfavit1);

$text = "абвгд";





$text1 = preg_split('//u',$text,-1,PREG_SPLIT_NO_EMPTY);


foreach ($text1 as $value){
    for ($i=0;$i<1;$i++){
        for ($j=0;$j<1;$j++){
            if ($value==$allalfavit[0][$j]){
                $value = $allalfavit[1][$j];
               # echo "Ты молодец";
                #echo $value." - ".$allalfavit[1][$j]."<br>";

            }
            #else echo "Ты сука";
            #echo ' | '.$allalfavit[1][$j];
        }
    }
}
/*
for ($i=0;$i<1;$i++){
    for ($j=0;$j<33;$j++){
        echo ' | '.$allalfavit[1][$j];
    }
}




foreach ($text as $value){
    for ($i=0;$i<32;$i++){

    }
}

if ($text1[0] == $allalfavit[0][0]){
    $text1[0]= $allalfavit[1][0];
}

else echo "Ты сука";


echo "<br>".$text1[0];
*/

#echo $dlinna;
echo "<pre>";


print_r($text1);

echo "<pre>";

echo "<pre>";


print_r($allalfavit);

echo "<pre>";



