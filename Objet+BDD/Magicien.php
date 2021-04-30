<?php
class Magicien extends Personnage{
    private $_ptsMagique;

    public function __construct($id,$pdo)
    {
        parent::__construct($id,$pdo);
        $req = "SELECT * FROM `Magiciens` WHERE `idPersonnes`=$id";
        $reponse=$pdo->query($req);
         $tab=$reponse->fetch();
        $this->_ptsMagique=$tab["PtsMagique"];
    }
    public function presenteToi(){
        
        return parent::presenteToi()." et je suis un mage.";
    }

    public function lancerSort(){
        return "Je lance un sort, Vous avez ".$this->_ptsMagique." Points Magiques.";
    }
}
?>