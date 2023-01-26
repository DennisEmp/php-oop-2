<?php
    class Product{
        protected $price; //proprietà per il prezzo del prodotto
    
        public function __construct($price)
        {
            $this->setPrice($price);   
        }
        public function setPrice($price){
            $this->price = $price; // impostare il prezzo del prodotto
        }
        public function getPrice(){
            return $this->price; //recuperare il prezzo del prodotto
        }
        public function getHtml(){
            echo '<div>' . $this->price . ' €</div>'; //stampa del prezzo
        }
    }
    
?>