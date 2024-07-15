<?php
require_once("./Database.php");
class UsersModel extends DataBase
{
     public function addUsers($data)
     {
          $sql = "INSERT INTO users (username ,password) VALUES (?,?)";
          $user = $this->insertDb($data, $sql);
          print_r($user);
     }
     public function getOneUsers($username)
     {
          $sql = "SELECT * FROM users WHERE username=?";
          $data = array($username);
          $user = $this->getOneData($sql, $data);
          print_r($user);
     }
     public function getAllUsers()
     {
          $sql = "SELECT * FROM users";
          $user = $this->getManyData($sql);
          print_r($user);
     }

     public function deleteUsers($data)
     {
          $sql = "DELETE from users WHERE id=? ";
          $user = $this->deleteData($sql, $data);
          print_r($user);
     }
     public function updateUsers($data)
     {
          $sql = "UPDATE users SET username=?, password=? WHERE id=? ";
          $reponse = $this->updatedata($sql, $data);
          print_r($reponse);
     }
}
$instanciation = new UsersModel();
// $instanciation->getAllusers();
$instanciation->addUsers(['Aaron', '123456']);
// $instanciation->getOneUsers();
// $instanciation->deleteUsers([2]);
// $instanciation->updateUsers(['gbossa','142542','3']);
