<?php

/*Access Modifier(Erişim belirleyiciler )
  
Public    : Genel heryerden erişime açık olduğunu ifade eder.
Private   : Özel,yanlızca sınıf içerisinden erişilebilir.
Protected :Korumalı,sınıf içerisinden ve türetilenn sınıflardan erişilebilir.

Static : Sabit sınıf içerisindeki herhangi bir özellik veya metoda sınıf çağırılmadan erişilebilir.

$this  : Bu sınıfta şeklinde sınıfı işaret etmek için kullanılır.
self   : Kendi sınıfımda , şeklinde sınıfı işaret etmek için kullanılır.
parent : Ebeveyn sınıfımda, şeklinde sınıfı işaret etmek için kullanılır.
*/

class Kutuphane
{
  protected $LibraryName ="Adu Kütüphane";
  protected const YEAR = 1980;

  public function kitapSay()
  {
    return "Kitaplar Sayılıyor.";
  }

}

class CalismaOdasi extends Kutuphane{
/Kutuphane Sınıfı CalismaOdasi sinifini kapsar.Yani CalisaOdasi Kutuphane sinifinin bir alt üyesidir./    
    

public function getInfo()
  {
    $text    = "Kütüphane hergün 08:00-17:00 arasında hizmet vermektedir.";
    
    $isim    = $this->LibraryName;
    
    $kurulus = self::YEAR;
    
    $sayim   = parent::kitapSay();
    /*Dahil olunan sınıfın içindeki metodu çalıştırır. */
    
    return "$text - $isim($kurulus) - $sayim";
  }
}

$nesne = new CalismaOdasi;
echo $nesne->getInfo();

?>