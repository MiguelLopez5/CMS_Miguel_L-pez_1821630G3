<?php
//Herencia
class User extends Database{

    public function all(){
        try{
            $result = parent::connect()->prepare("SELECT * FROM users AS u INNER JOIN roles AS r ON u.id_role=r.id_role");
            $result->execute();
            return $result->fetchAll();
        }catch(Exception $e){
            die($e->getMessage());
        }
    }

    public function register($data){
        try{
            $result = parent::connect()->prepare("INSERT INTO users (name, email, password, id_role) VALUES (?,?,?,?)");
            $result->bindParam(1, $data['name'], PDO::PARAM_STR);
            $result->bindParam(2, $data['email'], PDO::PARAM_STR);
            $result->bindParam(3, $data['password'], PDO::PARAM_STR);
            $result->bindParam(4, $data['role'], PDO::PARAM_INT);
            return $result->execute();
        }catch (Exception $e){
           die("Error User->register() " . $e->getMessage());
        }
    }

    public function find($id){
        try{
            $result = parent::connect()->prepare("SELECT * FROM users WHERE id = ?");
            $result->bindParam(1, $id, PDO::PARAM_INT);
            $result->execute();
            return $result->fetch();
        }catch(Exception $e){
            die($e->getMessage());
        }
    }

    public function update_register($data){
        try{
            $result = parent::connect()->prepare("UPDATE users SET name = ?, email = ? WHERE id = ?");
            $result->bindParam(1, $data['name'], PDO::PARAM_STR);
            $result->bindParam(2, $data['email'], PDO::PARAM_STR);
            $result->bindParam(3, $data['id'], PDO::PARAM_INT);
            return $result->execute();
        }catch (Exception $e){
            die("Error User->update_register() " . $e->getMessage());
        }
    }
    public function delete_register($data){
        try{
            $result = parent::connect()->prepare("DELETE FROM users WHERE id = ?");
            $result->bindParam(1, $data, PDO::PARAM_INT);
            return $result->execute();
        }catch (Exception $e){
            die("Error User->delete_register() " . $e->getMessage());
        }
    }
}
