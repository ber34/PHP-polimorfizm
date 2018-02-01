<?php

  ####### Book ########
 
 $tytulBook = "Book Manager Wydobycia";
 $autorBook = "Adam Ber Book";
 
   $book1 = new Book();
  
 $book1->setTytul($tytulBook);
 // Tytul
 echo $book1->getTytul()."<br>";
 
  $book1->setAutor($autorBook);
 // Autor
 echo $book1->getAutor()."<br>";

