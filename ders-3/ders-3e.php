<?php
/******
 * 
                Acess Modifier (Erişim Belirliyiciler)
                   public    : Genel hryerden erişime açık olduğunu ifade eder.
                   Private   : Özel, yanlıcza sınıf içerisinden erişebilmektedir.
                   Protected : Korumalı, sınıf içerisinden ve türetilen sınıflardan erişilebilir.

                   Static    : Sabit sınıf içerisindeki herhangi bir özellik veya metoda sınıf çağırılmadan erişilebilir.

                   $this     : Bu sınıfta şekilnde sınıfı işaret etmek için kullanılır.
                   self      : Kendi sınıfımda, şeklinde sınıfı ifade etmek için kullanlır.
                   parent::  : Ebebeyn sınıfımda, şeklinde ifade etmek için kullanılır. 


 */


class Kutuphane
{
   private $libraryName = "Adu Kütüphane"; 
   private const YEAR = 1980; 
   
   public function getInfo() 
   {
     $text      = "Kütüphane hergün 08:00 - 17:00 arasında hizmet vermektedir.";

     $isim      = $this->libraryName; /* Sınıf içinde ama scope dışında bulunan bir özelliğe erişmek için kullanılır */

     $kurulus  = self::YEAR; /* Sabit bir özelliiği (değişken) sınıf içerisinden erişmek için self kulanılır */

     return "$text - $isim ($kurulus)";
   }

}

$nesne = new Kutuphane;


echo $nesne->getInfo();  





?>