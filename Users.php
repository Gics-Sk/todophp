<?php
require_once("./Database.php");
class Users extends DataBase
{
     public function addUsers($data)
     {
          $sql = "INSERT INTO users (username ,password) VALUES (?,?)";
          $user = $this->insertDb($data, $sql);
          print_r($user);
     }
     public function getAllusers()
     {
          $sql = "SELECT * FROM users";
          $user = $this->getManyData($sql);
          print_r($user);
     }
     public function getUsers($data)
     {
          $sql = "SELECT * FROM users WHERE username=?";
          $user = $this->getOneData($sql, $data);
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
$instanciation = new Users();
// $instanciation->getAllusers();
$instanciation->addUsers(['Aaron', '123456']);
// $instanciation->getUsers();
// $instanciation->deleteUsers([2]);
// $instanciation->updateUsers(['gbossa','142542','3']);
