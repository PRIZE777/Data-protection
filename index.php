<?php

class shifrator {
    private static $alfavit = array('а','б','в','г','д','е','ё','ж','з','и','й','к','л','м','н','о','п','р','с','т','у','ф','х','ц','ч','ш','щ','ъ','ы','ь','э','ю','я');
    private static $rand_chislo1 = array(); // сюда пихаем 7 рандомных чисел


    public static function randslovo()
    {
        for ($i=0; $i<7; $i++){ // цикл для создания 7ми рандомных чисел
            $rand_chislo = mt_rand(0,33);
            array_push(self::$rand_chislo1,$rand_chislo);

        }

        self::$rand_chislo1 = array_unique(self::$rand_chislo1);
        self::$rand_chislo1 = array_values(self::$rand_chislo1);

        foreach (self::$rand_chislo1 as $key => $value){ // выбираем ключи
            $a = $key."<br>";
            $a = (integer)$a; // Переводим в int, так как кей нам возвращает string
        }

        for ($a; $a<6; $a++){  // добавляем в массив недостающие элементы
            $rand_chislo = mt_rand(0,33);
            array_push(self::$rand_chislo1,$rand_chislo);
        }





            echo "<pre>";
            print_r(self::$rand_chislo1);

    }

}

shifrator::randslovo();

