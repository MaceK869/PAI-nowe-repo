<?php
class uczen {
    public $nazwisko;
    public $imie;
    public $data_urodzenia;
    public $PESEL;
  }
$uczen = new uczen();
$uczen->nazwisko = "Kaczmarek";
$uczen->imie = "Mikolaj";
$uczen->data_urodzenia = 2002;
$uczen->PESEL = 123456789;
echo "DANE<br>Nazwisko " . $uczen->nazwisko . "<br>Imie "  . $uczen->imie . "<br>Data urodzenia" . $uczen->data_urodzenia . "<br>PESEL "  . $uczen->PESEL;

?>