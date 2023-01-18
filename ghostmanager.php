
    <?php
        class GhostManager {
            // Instance de PDO
            private $_db;
        
            public function __construct($db) {
                $this->setDb($db);
            }
        
            public function add($obj) {
                $req = $this->_db->prepare("INSERT INTO ghost (nom, couleur, velocite, pv)
                                           VALUES (:nom, :couleur, :velocite, :pv)");
                      
                $req->execute(array(
                    "nom" => $obj->getNom(),
                    "couleur" => $obj->getCouleur(),
                    "velocite" => $obj->getVelocite(),
                    "pv" => $obj->getPv()
                ));
            }
        
            public function delete($obj) {
                // Exécute une requête de type DELETE
                // $sql = $this->_db->prepare("DELETE FROM ghost where id=:id");
                // $query=$sql
                // $query->bindValue(':id',$id, PDO::PARAM_INT);
                // $query->execute();
            }
        
            public function getall() {
                $req = $this->_db->prepare("SELECT * FROM ghost ");
                $req->execute();
                
                $result = $req->fetchAll(PDO::FETCH_ASSOC);

                $listeFantomes=array();
                foreach ($result as $valeurs) {
                    $listeFantomes[]=new Ghost($valeurs);
                }
                //renvoie la liste
                return $listeFantomes; 
                
            }
            
            public function getid($id){
                $req = $this->_db->prepare("SELECT * FROM ghost where id=$id ");
                $req->execute();
                $result = $req->fetchAll(PDO::FETCH_ASSOC);
                return new ghost($result);
            }

            public function getList() {
                // Retourne la liste de toutes les entrées
            }
        
            public function update($obj) {
                // Exécute une requête de type UPDATE
                $req = $this->_db->prepare("UPDATE ghost SET nom=:nom, couleur=:couleur, velocite=:velocite, pv=:pv where id=:id");
                $req->execute(array(
                    "nom" => $obj->getNom(),
                    "couleur" => $obj->getCouleur(),
                    "velocite" => $obj->getVelocite(),
                    "pv" => $obj->getPv(),
                    "id" => $obj->getId()
                ));
            }
        
            public function setDb(PDO $db) {
                $this->_db = $db;
            }
        }
    ?>
