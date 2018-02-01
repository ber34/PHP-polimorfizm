<?php
trait Ksiegarnia {

  public $tytul;
  public $autor;
  public $kategoria;
  public $cena;
  public $polka;
  
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
    // Kategoria 
    public function getKategoria(){
			 
		return  $this->kategoria;
	    }
		
	 public function setKategoria($kategoria){
			 
		  $this->kategoria = $kategoria;
	    }
		
	// Cena	
	public function getCena(){
		 
		 return  $this->cena;
	 }

    public function setCena($cena){
		 
		 $this->cena = $cena;
	 }
	 // Gdzie znajduje się w Księgarni
   public function getPolka(){
		
		return $this->polka;
   	} 
	
	public function setPolka($polka){
		
		 $this->polka = $polka;	
	} 
 }
 
 trait Ksiegarnia_nr_Isbn {
 
   public $isbn;
   
    public function getISBN(){
			 
		return  $this->isbn;
	 }
	 
  public function setISBN($isbn){
	      $this->isbn = $isbn;
	  } 
 }
 
 trait Ksiegarnia_Wiek_Gracza{
 
  public $wiekGraczy;
   
	public function getWiekGraczy(){
			 
		return  $this->wiekGraczy;
	 }
	 
	public function setWiekGraczy($wiek){
	      $this->wiekGraczy = $wiek;
	  }
 }
 
  class Book{
    use Ksiegarnia, Ksiegarnia_nr_Isbn; 
  
  }
  
  class Komiks{
     use Ksiegarnia, Ksiegarnia_nr_Isbn;
	 
	 public $figurka;
    
	 public function getKomiksZFigurka(){
			 
		return  $this->figurka;
		
	 }
	 
	public function setKomiksZFigurka($figurka){
	      $this->figurka = $figurka;
	  }
   }
  
  class GryPC{
    use Ksiegarnia, Ksiegarnia_Wiek_Gracza;
	
  }
  
  class GryLinux{
    use Ksiegarnia, Ksiegarnia_Wiek_Gracza; 
	
	
  }

