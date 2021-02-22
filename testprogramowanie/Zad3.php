<?php
class prostokat {
    public $a;
    public $b;
    public $obwod;
    public $pole;
  }
$prostokat = new prostokat();
$prostokat->a = (rand(1,100));
$prostokat->b = (rand(1,100));
$prostokat->obwod = 2 * $prostokat->a + 2 * $prostokat->b ;
$prostokat->pole = $prostokat->a * $prostokat->b;
echo "Liczba A " . $prostokat->a . "<br>Liczba B "  . $prostokat->b . "<br>Obwod " . $prostokat->obwod . "<br>Pole "  . $prostokat->pole;


?>