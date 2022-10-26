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
    protected $libraryName = "Adu Kütüphane"; 
    protected const YEAR = 1980; 
}

class CalismaOdasi extends Kutuphane
{
   /* kutuphane sınıfı CalismaOdasi sınıfını kapsar
   yani CalismaOdasi Kutuphane sınıfının bir alt uyesidir */
   
    public function getInfo() 
   {
     $text      = "Kütüphane hergün 08:00 - 17:00 arasında hizmet vermektedir.";

     $isim      = $this->libraryName; /* exend denilen sınıfın içersindeki protected değişkenlere $this ile erişilebilir */
   
     $kurulus   = self::YEAR; /* exend edilen sınıfın içerisindeki protected sabitlere self:: ile erişilebilir */

     return "$text - $isim($kurulus)";
   }

}

$nesne = new CalismaOdasi;

echo $nesne->getInfo();

?>