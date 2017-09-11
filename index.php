<?php

class shifrator {
    private static $alfavit = array('а','б','в','г','д','е','ё','ж','з','и','й','к','л','м','н','о','п','р','с','т','у','ф','х','ц','ч','ш','щ','ъ','ы','ь','э','ю','я');
    private static $rand_chislo1 = array(); // сюда пихаем 7 рандомных чисел
    private static $rand_slovo = array(); // здесь будет 7 рандомных букв
    private static $rand_alfavit = array(); // здесь будет 7 рандомных букв


    public static function randslovo()
    {
        /*
         * Здесь функция создания 7ми случайных не повторяющихся чисел
         */
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

        self::$rand_chislo1 = array_unique(self::$rand_chislo1);
        self::$rand_chislo1 = array_values(self::$rand_chislo1);
        self::$rand_chislo1=array_flip(self::$rand_chislo1);
    }

    public static function shiftalfavir() {

        shifrator::randslovo();
        /*
         * Здесь будем выбирать рандомные буквы из русского алфавита
         * и собирать добавлять наши буквы в начало алфавита
         *
         */

        self::$rand_slovo=array_intersect_key(self::$alfavit,self::$rand_chislo1); // берем пересечение масивов
        self::$rand_slovo=array_values(self::$rand_slovo); // переназначем ключи
        self::$rand_alfavit=array_merge(self::$rand_slovo,self::$alfavit);
        self::$rand_alfavit=array_unique(self::$rand_alfavit);
        self::$rand_alfavit=array_values(self::$rand_alfavit); // наш рандомный алфавит

        echo "<pre>";
        print_r(self::$rand_alfavit);


    }

}



shifrator::shiftalfavir();