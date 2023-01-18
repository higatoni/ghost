
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
        
            public function getall($id) {
                $req = $this->_db->prepare("SELECT nom, couleur, velocite, pv FROM ghost WHERE nom = :nom");
                $req->execute(array(":nom" => $nom));
                
                $result = $req->fetchAll(PDO::FETCH_ASSOC);
                
                foreach($result as $info){
                    
                }
            }
        
            public function getList() {
                // Retourne la liste de toutes les entrées
            }
        
            public function update($obj) {
                // Exécute une requête de type UPDATE
                // $sql = $this->_db->prepare("UPDATE ghost SET nom=:nom, couleur=:couleur, velocite=:velocite, pv=:pv where id=:id")
                // $query=$sql
                // $query->bindValue(':nom',$nom, PDO::PARAM_STR);
                // $query->bindValue(':couleur',$couleur, PDO::PARAM_STR);
                // $query->bindValue(':velocite',$velocite, PDO::PARAM_INT);
                // $query->bindValue(':pv',$pv, PDO::PARAM_INT);
                // $query->bindValue(':id',$id, PDO::PARAM_INT);
                // $query->execute();
            }
        
            public function setDb(PDO $db) {
                $this->_db = $db;
            }
        }
    ?>
