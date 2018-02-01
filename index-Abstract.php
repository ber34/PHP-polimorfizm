<?php

  ####### Book ########
 
 $tytulBook = "Book Manager Wydobycia";
 $autorBook = "Adam Ber Book";
 $cenaBook  = "10 zł";
 
   $book1 = new Book();
  
   $book1->setTytul($tytulBook);
 // Tytul
 echo $book1->getTytul()."<br>";
 
   $book1->setAutor($autorBook);
 // Autor
 echo $book1->getAutor()."<br>";
 
  $book1->setCena($cenaBook);
   // Cena 
 echo $book1->getCena()."<br><br>";
 
  ####### Komiks ########
 
 $tytulKomiks = "Komiks Manager Wydobycia";
 $autorKomiks = "Adam Ber Komiks";
 $cenaKomiks  = "5 zł";
 
   $komiks1 = new Komiks();
  
   $komiks1->setTytul($tytulKomiks);
 // Tytul
 echo $komiks1->getTytul()."<br>";
 
  $komiks1->setAutor($autorKomiks);
 // Autor
 echo $komiks1->getAutor()."<br>";
 
  $komiks1->setCena($cenaKomiks);
   // Cena 
 echo $komiks1->getCena()."<br><br>";
