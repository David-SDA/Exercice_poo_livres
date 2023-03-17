<?php
    class Auteur{
        private string $_nom;
        private string $_prenom;
        private $_livreEcrit = array();

        /* Methode __construct */
        public function __construct(string $nom, string $prenom){
            $this->_nom = $nom;
            $this->_prenom = $prenom;
        }

        /* Getter et Setter du nom */
        public function getNom() : string{
            return $this->_nom;
        }
        public function setNom(string $nom){
            $this->_nom = $nom;
        }

        /* Getter et Setter du prénom */
        public function getPrenom() : string{
            return $this->_prenom;
        }
        public function setPrenom(string $prenom){
            $this->_prenom = $prenom;
        }

        /* Getter et Setter des livres écrits */
        public function getLivreEcrit(){
            return $this->_livreEcrit;
        }
        public function setLivreEcrit(Livre $livreEcrit){
            array_push($this->_livreEcrit, $livreEcrit);
        }

        /* Methode pour afficher la bibliographie de l'auteur */
        public function afficherBibliographie(){
            $result = "<b>Livres de " . $this->__toString() . "</b><br><br>";
            foreach($this->getLivreEcrit() as $livre){
                $result .= "$livre<br>";
            }
            return $result;
        }

        /* Methode __toString */
        public function __toString(){
            return $this->getPrenom() . " " . $this->getNom();
        }
    }
?>