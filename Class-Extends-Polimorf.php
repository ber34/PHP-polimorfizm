<?php

class Ksiegarnia{
 
 public $tytul;
 public $autor;
 
 
   // Tytuł
      public function getTytul(){
			 
		return  $this->tytul;
	    }
		
	 public function setTytul($tytul){
			 
		  $this->tytul = $tytul;
	    }
	// Autor	
	public function getAutor(){
			 
		return  $this->autor;
	    }
		
	 public function setAutor($autor){
			 
		  $this->autor = $autor;
	    }
 }
 
 class Book extends Ksiegarnia{
 
    public function setTytul($tytul){
			 
		  $this->tytul = $tytul;
	    }
		
	public function setAutor($autor){
			 
		  $this->autor = $autor;
	    }
 }
