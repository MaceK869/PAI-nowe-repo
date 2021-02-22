<?php
class uczen {
    public $nazwisko;
    public $imie;
    public $data_urodzenia;
    public $PESEL;
    public $identyfikator_klasy;
    public $rok_rozpoczecia_nauki;
  }
  class nauczyciel {
    public $nazwisko;
    public $imie;
    public $data_urodzenia;
    public $PESEL;
    public $nauczany_przedmiot;
    public $rok_rozpoczecia_pracy;
  }

$uczen = new uczen();
$uczen->nazwisko = "Kaczmarek";
$uczen->imie = "Mikolaj";
$uczen->data_urodzenia = 2002;
$uczen->PESEL = 123456789;
$uczen->identyfikator_klasy = "PI";
$uczen->rok_rozpoczecia_nauki = 2012;

$nauczyciel = new nauczyciel();
$nauczyciel->nazwisko = "Sluzarek";
$nauczyciel->imie = "Andrzej";
$nauczyciel->data_urodzenia = 1995;
$nauczyciel->nauczany_przedmiot = "Chemia";
$nauczyciel->rok_rozpoczecia_pracy = 2019;

echo "Uczen<br>Nazwisko: " .$uczen->nazwisko . "<br>Imie "  . $uczen->imie . "<br>Data Urodzenia " . $uczen->data_urodzenia . "<br>PESEL "  . $uczen->PESEL . "<br>Identyfikator klasy "  . $uczen->identyfikator_klasy . "<br>Rok rozpoczecia nauki "  . $uczen->rok_rozpoczecia_nauki;

echo "<br>Nauczyciel<br>Nazwisko: " .$nauczyciel->nazwisko . "<br>Imie "  . $nauczyciel->imie . "<br>Data Urodzenia " . $nauczyciel->data_urodzenia . "<br>Nauczany przedmiot "  . $nauczyciel->nauczany_przedmiot . "<br>Rok rozpoczecia pracy "  . $nauczyciel->rok_rozpoczecia_pracy;
?>