
    <?php
         class Ghost {
             // Attributs
             private $_nom;
             private $_couleur;
             private $_velocite=1;
             private $_pv=10;

             // getters $ setters
             public function __construct(array $valeurs) {
                $this->hydrate($valeurs);
            }

            public function hydrate(array $donnees) {
                foreach ($donnees as $key => $value)
                {
                // On récupère le nom du setter correspondant à l'attribut.
                $method = 'set'.ucfirst($key);
                // Si le setter correspondant existe.
                if (method_exists($this, $method)){
                    // On appelle le setter.
                    $this->$method($value);
                }else{
                    echo $method." introuvable";
                }
                }
            }

            public function getNom(){
                return $this->_nom;
            }
            public function setNom($Nom){
                $this->_nom=$Nom;
                return $this;
            }
            public function getCouleur(){
                return $this->_couleur;
            }
            public function setCouleur($couleur){
                $this->_couleur=$couleur;
                return $this;
            }
            public function getVelocite(){
                return $this->_velocite;
            }
            public function setVelocite($velocite){
                $this->_velocite=$velocite;
                return $this;
            }
            public function getPv(){
                return $this->_pv;
            }
            public function setPv($pv){
                $this->_pv=$pv;
                return $this;
            }

            // Méthodes
            public function manger($miam){
                $this->setPv($this->getPv()+$miam);
                return $this;
            }
            public function diminuer($miam) {
                $this->setPv($this->getPv()-$miam);
                return $this;
            }
        
            public function isAlive(){
                if ($this->getPv()<=0) {
                    return $this->getNom()." est mort.";
                }
            }
            public function info() {
                return "Mon nom est ".$this->getNom().", j'ai ".$this->getPv()."PV, ma couleur est ".$this->getCouleur()." et ma vélocité est de ".$this->getVelocite()."<br>".$this->isAlive()."<br>";
            }
        }
        // $clyde=new ghost(array("nom"=>"clyde","couleur"=>"jaune","velocite"=>1,"pv"=>10));
        // echo $clyde->info();

        // $dolly=(new ghost(array("nom"=>"dolly","couleur"=>"rose","velocite"=>1,"pv"=>10)))
        //     ->manger(5)
        //     ->setVelocite(3);
        // echo $dolly->info();

        // $clyde->diminuer(3);
        // $clyde->diminuer(9);
        // echo $clyde->info();

        // $casper=new ghost(array("nom"=>"casper","couleur"=>"orange","velocite"=>1,"pv"=>10));
        // echo $casper->info();
    ?>
