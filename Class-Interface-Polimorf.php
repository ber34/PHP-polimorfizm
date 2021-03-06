<?php

 interface Ksiegarnia{
	 
	 public function getTytul();
	 public function setTytul($tytul);
	 public function getCena();
	 public function setCena($cena);
	 public function getAutor();
	 public function setAutor($autor);
	 public function getISBN();
	 public function setISBN($isbn);
         public function getPolka();
	 public function setPolka($ktoraPolka);
 }
 
 class Book implements Ksiegarnia{
	 
   public $tytul;
   public $autor;
   public $cena;
   public $isbn;
   public $polka;
   
	 public function getTytul(){
			 
		return  $this->tytul;
	    }
		
	 public function setTytul($tytul){
			 
		  $this->tytul = $tytul;
	    }
		
	public function getAutor(){
			 
		return  $this->autor;
	    }
		
	public function setAutor($autor){
			 
		  $this->autor = $autor;
	    }

   public function getCena(){
		 
		 return  $this->cena;
	   }

 public function setCena($cena){
		 
		 $this->cena = $cena;
	   }	 
	 
	 public function getISBN(){
		return  $this->isbn;
	 }
	 
	  public function setISBN($isbn){
	      $this->isbn = $isbn;
	  }
	 
	public function getPolka(){
		
		return $this->polka;
		
	} 
	
	public function setPolka($polka){
		
		 $this->polka = $polka;	
		 
	} 
 }
 

 class Komiks implements Ksiegarnia{
	 
   public $tytul;
   public $autor;
   public $cena;
   public $isbn;
   public $polka;
   public $seriesNumber;
   
	  public function setTytul($tytul){
			 
		  $this->tytul = $tytul;
	    }
	 
	  public function getTytul(){
			 
		return  $this->tytul;
	    }
	 
	  public function setAutor($autor){
			 
		  $this->autor = $autor;
	    }
		
	  public function getAutor(){
			 
		return  $this->autor;
	    }
	 
	  public function setCena($cena){
		 
		 $this->cena = $cena;
	  }

          public function getCena(){
		 
		 return  $this->cena;
	  }	
	 
	  public function setISBN($isbn){
	      $this->isbn = $isbn;
	  }
	 
	  public function getISBN(){
			 
		return  $this->isbn;		
	 }
	 
	 
	  public function setPolka($polka){
		
		 $this->polka = $polka;	
	} 
	 
	  public function getPolka(){
		
		return $this->polka;
	} 
	
	  public function setSeriesNumber($seriesNumber){
		
		 $this->seriesNumber = $seriesNumber;	
	} 
	 
	  public function getSeriesNumber(){
		
		return $this->seriesNumber;
	}  
 }
 
  
 class GryPC implements Ksiegarnia{
	 
   public $tytul;
   public $autor;
   public $cena;
   public $isbn;
   public $polka;
   
	 public function getTytul(){
			 
		return  $this->tytul;
	    }
		
	 public function setTytul($tytul){
			 
		  $this->tytul = $tytul;
	    }	
		
		public function getAutor(){
			 
		return  $this->autor;
	    }
		
	 public function setAutor($autor){
			 
		  $this->autor = $autor;
	    }

    public function getCena(){
		 
		 return  $this->cena;
	 }

    public function setCena($cena){
		 
		 $this->cena = $cena;
	 }		
	 
	  public function getISBN(){
			 
		return  $this->isbn;
	 }
	 
	  public function setISBN($isbn){
	      $this->isbn = $isbn;
	  }
	 
	public function getPolka(){
		
		return $this->polka;
	} 
	
	public function setPolka($polka){
		
		 $this->polka = $polka; 
	} 
 }
