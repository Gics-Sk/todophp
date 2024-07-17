<?php 
require_once('../Model/Database.php');
class TaskModel extends DataBase {
     

     public function getTask(){
          $sql = "SELECT * FROM task";
          $task = $this->getAllTask($sql);
          return $task;
     }
     public function addTask($data)
     {
          $sql = "INSERT INTO task (task_text) VALUES (?)";
          $task = $this->setTask($data, $sql);
          print_r($task);
          ?>
          <script>
               alert("Tâche ajoutée avec succès");
          </script>
          <?php
     }
     public function deleteTask($data)
     {
          $sql = "DELETE task WHERE id= ? ";
          $task = $this->setTask($data, $sql);
          print_r($task);
          ?>
          <script>
               alert("Tâche supprimée avec succès");
          </script>
          <?php
     }
 
}