<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 12.09.2017
 * Time: 13:09
 */

class analysis
{
    private static $alfavit = array('а','б','в','г','д','е','ё','ж','з','и','й','к','л','м','н','о','п','р','с','т','у','ф','х','ц','ч','ш','щ','ъ','ы','ь','э','ю','я');
    private static $count0=0;
    private static $count1=0;
    private static $count2=0;
    private static $count3=0;
    private static $count4=0;
    private static $count5=0;
    private static $count6=0;
    private static $count7=0;
    private static $count8=0;
    private static $count9=0;
    private static $count10=0;
    private static $count11=0;
    private static $count12=0;
    private static $count13=0;
    private static $count14=0;
    private static $count15=0;
    private static $count16=0;
    private static $count17=0;
    private static $count18=0;
    private static $count19=0;
    private static $count20=0;
    private static $count21=0;
    private static $count22=0;
    private static $count23=0;
    private static $count24=0;
    private static $count25=0;
    private static $count26=0;
    private static $count27=0;
    private static $count28=0;
    private static $count29=0;
    private static $count30=0;
    private static $count31=0;
    private static $count32=0;

    public static function analysator()
    {
        $t = file_get_contents('text.txt');
        $get  = mb_detect_encoding($t, array('utf-8', 'cp1251'));
        $lol = iconv($get,'UTF-8',$t);
        $lol = mb_strtolower($lol);
        $kek = preg_replace('/[^абвгдеёжзийклмнопрстуфхцчшщъыьэюя]/','',$lol); // убираем все лишние символы
        $text1 = preg_split('//u',$kek,-1,PREG_SPLIT_NO_EMPTY);
        $lastkey =
      #  echo self::$alfavit[14];

       foreach ($text1 as $key => $value){
           switch ($value){
               case self::$alfavit[0]:
                   self::$count0++;
                   break;
           }
           switch ($value){
               case self::$alfavit[1]:
                   self::$count1++;
                   break;
           }
           switch ($value){
               case self::$alfavit[2]:
                   self::$count2++;
                   break;
           }
           switch ($value){
               case self::$alfavit[3]:
                   self::$count3++;
                   break;
           }
           switch ($value){
               case self::$alfavit[4]:
                   self::$count4++;
                   break;
           }
           switch ($value){
               case self::$alfavit[5]:
                   self::$count5++;
                   break;
           }
           switch ($value){
               case self::$alfavit[6]:
                   self::$count6++;
                   break;
           }
           switch ($value){
               case self::$alfavit[7]:
                   self::$count7++;
                   break;
           }
           switch ($value){
               case self::$alfavit[8]:
                   self::$count8++;
                   break;
           }
           switch ($value){
               case self::$alfavit[9]:
                   self::$count9++;
                   break;
           }
           switch ($value){
               case self::$alfavit[10]:
                   self::$count10++;
                   break;
           }
           switch ($value){
               case self::$alfavit[11]:
                   self::$count11++;
                   break;
           }
           switch ($value){
               case self::$alfavit[12]:
                   self::$count12++;
                   break;
           }
           switch ($value){
               case self::$alfavit[13]:
                   self::$count13++;
                   break;
           }
           switch ($value){
               case self::$alfavit[14]:
                   self::$count14++;
                   break;
           }
           switch ($value){
               case self::$alfavit[15]:
                   self::$count15++;
                   break;
           }
           switch ($value){
               case self::$alfavit[16]:
                   self::$count16++;
                   break;
           }
           switch ($value){
               case self::$alfavit[17]:
                   self::$count17++;
                   break;
           }
           switch ($value){
               case self::$alfavit[18]:
                   self::$count18++;
                   break;
           }
           switch ($value){
               case self::$alfavit[19]:
                   self::$count19++;
                   break;
           }
           switch ($value){
               case self::$alfavit[20]:
                   self::$count20++;
                   break;
           }
           switch ($value){
               case self::$alfavit[21]:
                   self::$count21++;
                   break;
           }
           switch ($value){
               case self::$alfavit[22]:
                   self::$count22++;
                   break;
           }
           switch ($value){
               case self::$alfavit[23]:
                   self::$count23++;
                   break;
           }
           switch ($value){
               case self::$alfavit[24]:
                   self::$count24++;
                   break;
           }
           switch ($value){
               case self::$alfavit[25]:
                   self::$count25++;
                   break;
           }
           switch ($value){
               case self::$alfavit[26]:
                   self::$count26++;
                   break;
           }
           switch ($value){
               case self::$alfavit[27]:
                   self::$count27++;
                   break;
           }
           switch ($value){
               case self::$alfavit[28]:
                   self::$count28++;
                   break;
           }
           switch ($value){
               case self::$alfavit[29]:
                   self::$count29++;
                   break;
           }
           switch ($value){
               case self::$alfavit[30]:
                   self::$count30++;
                   break;
           }
           switch ($value){
               case self::$alfavit[31]:
                   self::$count31++;
                   break;
           }
           switch ($value){
               case self::$alfavit[32]:
                   self::$count32++;
                   break;
           }
       }

    }

}

analysis::analysator();