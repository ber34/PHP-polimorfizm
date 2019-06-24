<?php
require_once(dirname(__FILE__) ."/Class-Abstract-Polimorf.php");

 $tytulBook = "Manager Wydobycia";
 $cenaBook = "100 zł";
 $autorBook = "Adam Ber";
 $isbnBook = "ISBN: 45345345546456456456";
 $polkaBook = "Półka nr 14 ";
 
 ####### Book ########
 
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
 
 $book1->setPolka($polkaBook);
 // która półka
 echo $book1->getPolka()."<br><br>";
 
 
 ####### Komiks ########
 
 $tytulKomiks = "Komiks Manager Wydobycia";
 $autorKomiks = "Adam Ber Komiks";
 $cenaKomiks = "10 zł";
 $isbnKomiks = "ISBN: 99995345546456456456";
 $polkaKomiks = "Półka nr 15 ";
 
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
 
 $komiks1->setPolka($polkaKomiks);
 // która półka
 echo $komiks1->getPolka()."<br>";

