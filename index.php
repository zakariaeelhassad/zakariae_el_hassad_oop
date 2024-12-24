<?php

class utilsateur{

    protected $nom;
    protected $prenom;
    protected $type_utilisateur;

    public function __construct($nom, $prenom, $type_utilisateur){
        $this->nom = $nom;
        $this->prenom = $prenom;
        $this->type_utilisateur = $type_utilisateur;
    }

    public function afficherNomComplet(){
        return $this->nom . ' ' . $this->prenom;
    }

    public function changerNom($nom){
        $this->nom = $nom;
    }
    public function changerPrenom($prenom){
        $this->prenom =$prenom ;
    }
}

class patient extends utilsateur {
    private $rendez_vous;

    public function __construct($rendez_vous,$nom, $prenom, $type_utilisateur){
        parent::__construct($nom, $prenom, $type_utilisateur);
        $this -> rendez_vous = $rendez_vous;
    }
    public function prendreRendezVous(){
        return "" . $this->rendez_vous;
    }
}

class Medecin extends utilsateur {
    private $specialite;

    public function __construct($specialite,$nom, $prenom, $type_utilisateur){
        parent::__construct($nom, $prenom, $type_utilisateur);
        $this -> specialite = $specialite;
    }
    public function consulterPatient(){
        return " " . $this -> specialite;
    }
}

?>