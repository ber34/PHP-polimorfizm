<?php

abstract class Ksiegarnia{
 
          public $tytul;
	  public $autor;
	  public $cena;
 
     public abstract function setTytul($tytul);
	
     public function getTytul(){
	 
	   return  $this->tytul;
	     
	 }
	 
	 public abstract function setAutor($autor);
	
	 public function getAutor(){
	 
	 return  $this->autor;
		 
	 }
	 
	 public abstract function setCena($cena);
	
	 public function getCena(){
	 
	 return  $this->cena;
		 
	 }
 }
 
 class Book extends Ksiegarnia{
 
	 private $isbn;
	 
        public function setTytul($tytul){
			 
		  $this->tytul = $tytul;
	    }
		
	public function setAutor($autor){
			 
		  $this->autor = $autor;
	    }

        public function setCena($cena){
		 
		 $this->cena = $cena;
	    }	
	 
	 public function setIsbn($isbn){
			 
		  $this->isbn = $isbn;
	    }

         public function getIsbn(){
		 
		 return $this->isbn;
	    }	
 }
 
 class Komiks extends Ksiegarnia{
 
	 private $seriesNumber; 
	 
        public function setTytul($tytul){
			 
		  $this->tytul = $tytul;
	    }
		
	public function setAutor($autor){
			 
		  $this->autor = $autor;
	    }

        public function setCena($cena){
		 
		 $this->cena = $cena;
	    }
	 
	 public function setSeriesNumber($seriesNumber){
			 
		  $this->seriesNumber = $seriesNumber;
	    }

          public function getSeriesNumber(){
		 
		 return $this->seriesNumber;
	    }
 }
