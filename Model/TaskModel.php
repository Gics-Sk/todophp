<?php 
require_once('../Model/Database.php');
class TaskModel extends DataBase {
     
     public function addTask($data)
     {
          $sql = "INSERT INTO task (task_text) VALUES (?)";
          $task = $this->setData($data, $sql);
          print_r($task);
          ?>
          <script>
               alert("Tâche ajouter avec succès");
          </script>
          <?php
     }
     public function getTask(){
          $sql = "SELECT * FROM task";
          $task = $this->getAllTask($sql);
          return $task;
     }
}