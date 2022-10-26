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
   protected $libraryName = "Adu Kütüphane"; /* Dışardan erişilemez */
   protected const YEAR = 1980; /* Dışardan erişilemez */

   protected function getInfo() /* Dışardan erişilemez */
   {
     $text = "Kütüphane hergün 08:00 - 17:00 arasında hizmet vermektedir.";
     return $text;
   }

}

$nesne = new Kutuphane;

echo " Kütüphanenin Adı:" . $nesne->libraryName; /*  private oldugu için hata fırlatır */
echo "<br>";
echo "Kütüphanin Kuruluş Yılı:" . $nesne::YEAR;  /*  private oldugu için hata fırlatır */
echo "<br>";

echo $nesne->getInfo();  /*  private oldugu için hata fırlatır */





?>