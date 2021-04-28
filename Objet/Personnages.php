<?php
// Classe Personnage
    class Personnages{
        //Propriété
        private $_nom;
        private $vie;
        private $armure;
        private $Degats;
        //Méthodes
        public function __construct($NewNom){
            $this->_nom=$NewNom;
        }
        public function Attaque(){

        }
        public function PresenteToi(){
            echo 'Je suis '.$this->_nom." ";
        }
    }
?>