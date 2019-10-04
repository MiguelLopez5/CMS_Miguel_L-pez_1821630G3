<?php
    class Publication extends Database{
        public function show(){
            try{
                $resu = parent::connect()->prepare("SELECT * FROM publication AS p INNER JOIN users AS u ON p.id_user = u.id");
                $resu->execute();
                return $resu->fetchAll();
            }
            catch(Exception $e){
                die($e->getMessage());
            }
        }
        public function register($data, $url){
            try{
                $resu = parent::connect()->prepare("INSERT INTO publication (title, description, url_image, id_user) VALUES (?,?,?,?)");
                $resu->bindParam(1, $data['titulo'], PDO::PARAM_STR);
                $resu->bindParam(2, $data['descri'], PDO::PARAM_STR);
                $resu->bindParam(3, $url, PDO::PARAM_STR);
                $varsession=1;
                $resu->bindParam(4, $varsession, PDO::PARAM_INT);
                return $resu->execute();
            }
            catch(Exception $e){
                die("Error en publi->register".$e->getMessage());
            }
        }
        public function search($data){
            try{
                $resu = parent::connect()->prepare("SELECT * FROM publication AS p INNER JOIN users AS u ON p.id_user=u.id WHERE idP=?");
                $resu->bindParam(1, $data, PDO::PARAM_INT);
                $resu->execute();
                return $resu->fetch();
            }
            catch(Exception $e){
                die($e->getMessage());
            }
        }
        public function update_data($data, $url){
            try{
                $resu = parent::connect()->prepare("UPDATE publication SET title=?, description=?, url_image=? WHERE idP=?");
                $resu->bindParam(1, $data['titulo'], PDO::PARAM_STR);
                $resu->bindParam(2, $data['descri'], PDO::PARAM_STR);
                $resu->bindParam(3, $url, PDO::PARAM_STR);
                $resu->bindParam(4, $data['idpub'], PDO::PARAM_INT);
                return $resu->execute();
            }
            catch(Exception $e){
                die('Error en publi->update_data'.$e->getMessage());
            }
        }
        public function delete_data($data){
            try{
                $resu = parent::connect()->prepare("DELETE FROM publication WHERE idP=?");
                $resu->bindParam(1, $data, PDO::PARAM_INT);
                return $resu->execute();
            }
            catch(Exception $e){
                die('Error en publi->delete_data'.$e->getMessage());
            }
        }
    }
?>