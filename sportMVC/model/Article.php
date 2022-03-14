<?php

class Article {

    public string $titre;
    public int $prix;
    public int $prixBarre;
    public string $nouveau ;
    public string $description;
    public int $note;
    public string $image;
    public int $actif;
    

    
    public function __construct( string $titre, int $prix, int $prixBarre, string $description,int $note,string $image,int $actif){
        $this->titre=$titre;
        $this->prix=$prix;
        $this->prixBarre=$prixBarre;
        $this->image=$image;
        $this->actif=$actif;
        
        
        $this->note=$note;
    }
        
    
   
    function activation(){
      if ($this->actif=1){
        $this->actif=0;

      }elseif ($this->actif=0){
        $this->actif=1;
      }
     }
     
    




  }


?>