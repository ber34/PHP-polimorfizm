<?php

require_once(dirname(__FILE__) ."/Class-Extends-Polimorf.php");
  ####### Book ########
 
 $tytulBook = "Book Manager Wydobycia";
 $autorBook = "Adam Ber Book";
 $isbn      = "12-234-97-0";
 
   $book1 = new Book();
  
 $book1->setTytul($tytulBook);
 // Tytul
 echo $book1->getTytul()."<br>";
 
  $book1->setAutor($autorBook);
 // Autor
 echo $book1->getAutor()."<br>";

   $book1->setIsbn($isbn);
 // Isbn
 echo $book1->getIsbn()."<br>";
