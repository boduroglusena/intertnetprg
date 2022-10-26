<?php

  class Dersler
  {
    public function java()
    {
        return "java kurs içeriği";
    }

    public function css()
    {
        return "css kurs içeriği";
    }
  
    public function php()
    {
        return "php kurs içeriği";
    }
  }


class Egitmenler extends Dersler
{

    public function java(){
        $kim = "Erkan Güler - " . parent::java();
        return $kim;
    }

    public function css(){
        $kim = "Taner Karataş - " . parent::css();
        return $kim;
    }

    public function php(){
        $kim = "Mehmet Can Hanaylır - " . parent::php();
        return $kim;
    }
}
  
$nesne = new Egitmenler;

echo $nesne->java();
echo "<br>";
echo $nesne->css();
echo "<br>";
echo $nesne->php();

?>