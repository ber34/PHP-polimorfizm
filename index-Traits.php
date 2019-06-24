<?php
require_once(dirname(__FILE__) ."/Class-Traits-Polimorf.php");
 ####### Book ########

 $tytulBook = "Book Manager Wydobycia";
 $autorBook = "Adam Ber Book";
 $cenaBook = "10 zł";
 $isbnBook = "ISBN: 34523211345546456456456";
 $kategoriaBook = "Informatyka";
 $polkaBook = "Półka nr 14 ";

  $book1 = new Book();
  
 $book1->setTytul($tytulBook);
 // Tytul
 echo $book1->getTytul()."<br>";
 
  $book1->setAutor($autorBook);
 // Autor
 echo $book1->getAutor()."<br>";
 
  $book1->setCena($cenaBook);
   // Cena 
 echo $book1->getCena()."<br>";
 
    $book1->setISBN($isbnBook);
     // nr ISBN
 echo $book1->getISBN()."<br>";

$book1->setKategoria($kategoriaBook);
 // kategoria
 echo $book1->getKategoria()."<br>";

 $book1->setPolka($polkaBook);
 // która półka
 echo $book1->getPolka()."<br>";

 ####### Komiks ########
 
 $tytulKomiks = "Komiks Manager Wydobycia";
 $autorKomiks = "Adam Ber Komiks";
 $cenaKomiks = "5 zł";
 $isbnKomiks = "ISBN: 99995345546456456456";
 $kategoriaKomiks = "Kajko i Ko";
 $polkaKomiks = "Półka nr 15 ";
 $figurka     = "Prezent do komiksu";
 
  $komiks1 = new Komiks();
  
 $komiks1->setTytul($tytulKomiks);
 // Tytul
 echo $komiks1->getTytul()."<br>";
 
  $komiks1->setAutor($autorKomiks);
 // Autor
 echo $komiks1->getAutor()."<br>";
 
  $komiks1->setCena($cenaKomiks);
   // Cena 
 echo $komiks1->getCena()."<br>";
 
    $komiks1->setISBN($isbnKomiks);
     // nr ISBN
 echo $komiks1->getISBN()."<br>";

 $komiks1->setKategoria($kategoriaKomiks);
 // kategoria
 echo $komiks1->getKategoria()."<br>";

 $komiks1->setKomiksZFigurka($figurka);
     // Prezent do komiksu 
 echo $komiks1->getKomiksZFigurka()."<br>";;
  
 $komiks1->setPolka($polkaKomiks);
 // która półka
 echo $komiks1->getPolka()."<br>";

##### Gry PC ########
 $tytulPC = "Gra PC Manager Wydobycia";
 $autorPC = "Adam Ber Gra PC";
 $cenaPC = "1 zł";
 $wiekGraczyPC = "Od 14 Lat";
 
 
$gryPc = new GryPC();

$gryPc->setTytul($tytulPC);
 // Tytul
 echo $gryPc->getTytul()."<br>";
 
 $gryPc->setAutor($autorPC);
 // Autor
 echo $gryPc->getAutor()."<br>";
 
 $gryPc->setCena($cenaPC);
   // Cena 
 echo $gryPc->getCena()."<br>";

$gryPc->setWiekGraczy($wiekGraczyPC);
   // Wiek Graczy 
 echo $gryPc->getWiekGraczy()."<br>";

