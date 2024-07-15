<?php
// EXPORTATION DES VARIABLES D'ENVIRONNEMENTS

require_once("./config/env.php");

abstract class DataBase {
     protected $db;
     public function __construct() {
          
     try {
          $this->db = new PDO("mysql:host=" . $_ENV['host'] . ";dbname=" . $_ENV['dbname'], $_ENV['username'], $_ENV['password']);
          $this->db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
          echo "connexion ok";
          return $this->db ;
     } catch (PDOException $e) {
          echo $e->getMessage();
     }
     }

//INSERTION DANS LA BASE DE DONNEE
protected function insertDb($data, $sql)
{
     try {
          $objBdd = $this->db;
          $sql = "INSERT INTO  users (username,password) VALUES (?,?)";
          $req = $objBdd->prepare($sql);
          $req->execute($data);
          echo "Utilisateur ajouter avec succès...";
     } catch (PDOException $th) {
          echo $th->getMessage();
     }
}

// FONCTION POUR RECUPERER UN USER
protected function getOneData($sql, $data)
{
     try {
          $objBdd = $this->db;
          $req = $objBdd->prepare($sql);
          $req->execute($data);
          $reponse = $req->fetch(PDO::FETCH_ASSOC);
          return $reponse;
          echo "Requete reussie";
     } catch (PDOException $ta) {
          echo $ta->getMessage();
     }
}



//RECUPERER TOUS LES USERS

protected function getManyData($sql, $data=null)
{
     try {
          $objBdd = $this->db;
          $req = $objBdd->prepare($sql);
          $req->execute($data);
          $reponse = $req->fetchAll(PDO::FETCH_ASSOC);
          return $reponse;
          echo "Requête réussie";
     } catch (PDOException $ta) {
          echo $ta->getMessage();
     }
}

protected function deleteData($sql, $data){
     try {
          $objBdd = $this->db;
          $req = $objBdd->prepare($sql);
          $req->execute($data);
          $reponse = $req->fetch(PDO::FETCH_ASSOC);
          return $reponse;
          echo "suppression réussie";
     } catch (PDOException  $th) {
          echo $th ->getMessage();
     }
}
protected function updateData($sql,$data){
     try {
          $objBdd = $this->db;
          $req = $objBdd->prepare($sql);
          $req->execute($data);
          $reponse = $req->fetch(PDO::FETCH_ASSOC);
          return $reponse;
          echo "Mise à jour effectuer";
     } catch (PDOException $th) {
          echo $th->getMessage();
     }
}

}