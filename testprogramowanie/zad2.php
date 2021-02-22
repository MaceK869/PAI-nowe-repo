<?php
class prostopadloscian {
    public $a;
    public $b;
    public $c;
    public $obwod;
    public $pole;
  }
$prostopadloscian = new prostopadloscian();
$prostopadloscian->a = 2;
$prostopadloscian->b = 3;
$prostopadloscian->c = 4;
$prostopadloscian->obwod = 4 * $prostopadloscian->a + 4 * $prostopadloscian->b + 4 * $prostopadloscian->c;
$prostopadloscian->pole = 2 * $prostopadloscian->a * $prostopadloscian->b + 2 * $prostopadloscian->a * $prostopadloscian->c + 2 * $prostopadloscian->b * $prostopadloscian->c;
echo "Prostopadloscian<br>Liczba A " . $prostopadloscian->a . "<br>Liczba B "  . $prostopadloscian->b . "<br>Liczba C " . $prostopadloscian->c . "<br>Obwod "  . $prostopadloscian->obwod . "<br>Pole "  . $prostopadloscian->pole;

?>