<?php
    class Livre{
        private string $_titre;
        private int $_nbPages;
        private int $_anneeParution;
        private int $_prix;
        private Auteur $_auteur;

        /* Methode __construct */
        public function __construct(string $titre, int $nbPages, int $anneeParution, int $prix, Auteur $auteur){
            $this->_titre = $titre;
            $this->_nbPages = $nbPages;
            $this->_anneeParution = $anneeParution;
            $this->_prix = $prix;
            $this->_auteur = $auteur;
            $this->_auteur->setLivreEcrit($this);
        }

        /* Getter et Setter du titre */
        public function getTitre() : string{
            return $this->_titre;
        }
        public function setTitre(string $titre){
            $this->_titre = $titre;
        }

        /* Getter et Setter du nombre de pages */
        public function getNbPages() : int{
            return $this->_nbPages;
        }
        public function setNbPages(int $nbPages){
            $this->_nbPages = $nbPages;
        }

        /* Getter et Setter de l'année de parution */
        public function getAnneeParution() : int{
            return $this->_anneeParution;
        }
        public function setAnneeParution(int $anneeParution){
            $this->_anneeParution = $anneeParution;
        }

        /* Getter et Setter du prix */
        public function getPrix() : int{
            return $this->_prix;
        }
        public function setPrix(int $prix){
            $this->_prix = $prix;
        }

        /* Getter et Setter de l'auteur */
        public function getAuteur() : Auteur{
            return $this->_auteur;
        }
        public function setAuteur(Auteur $auteur){
            $this->_auteur = $auteur;
        }

        /* Methode __toString */
        public function __toString(){
            return $this->getTitre() . " (" .$this->getAnneeParution() . ") : " . $this->getNbPages() . " pages /  " . $this-> getPrix() . " €" ;
        }
    }
?>