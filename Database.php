<?php
// EXPORTATION DES VARIABLES D'ENVIRONNEMENTS

require_once("./config/env.php");

abstract class DataBase {
     
//CONNECTION A LA BASE DE DONNEE.
protected function connectDb()
{

     try {
          $bdd = new PDO("mysql:host=" . $_ENV['host'] . ";dbname=" . $_ENV['dbname'], $_ENV['username'], $_ENV['password']);
          $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
          echo "connexion ok";
          return $bdd;
     } catch (PDOException $e) {
          echo $e->getMessage();
     }
}
//INSERTION DANS LA BASE DE DONNEE
protected function insertDb($data, $sql)
{
     try {
          $objBdd = $this->connectDb();
          $sql = "INSERT INTO  users (username,password) VALUES (?,?)";
          $req = $objBdd->prepare($sql);
          $req->execute($data);
          echo "Utilisateur ajouter avec succès...";
     } catch (PDOException $th) {
          echo $th->getMessage();
     }
}

// $sql = "INSERT INTO users (username ,password) VALUE (?,?)";
// $username ="Jaures";
// $password ="Azerty";
// $data = [$username,$password];
// insertDb($data,$sql);

// FONCTION POUR RECUPERER UN USER
protected function getOneData($sql, $data)
{
     try {
          $objBdd = $this->connectDb();
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
          $objBdd = $this->connectDb();
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
          $objBdd = $this->connectDb();
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
          $objBdd = $this->connectDb();
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
