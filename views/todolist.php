<?php
require_once "../Model/TaskModel.php";

if ($_SERVER['REQUEST_METHOD'] == "POST" && $_POST["enregistrer"] == "Enregistrer") {
     $task_text = htmlspecialchars($_POST['task']);
     // Insertion d'une tâche 
     $instanciation = new TaskModel();
     $instanciation->addTask([$task_text]);
}
?>

<!DOCTYPE html>
<html lang="fr">

<head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Todo list</title>
     <link rel="stylesheet" href="../assets/style.css">
</head>

<body>
     <?php include '../views/partials/navbar.php'; ?>
     <main>
          <div class="contain">
               <div class="card">
                    <div class="form">
                         <form action="/todolist" method="POST">
                              <input type="text" name="task" id="task" placeholder="Entrer la tâche" class="input" required>
                              <input type="submit" class="btn" value="Enregistrer" name="enregistrer">
                         </form>
                    </div>
               </div>
               <div class="task">
                    <ul>
                         <?php
                         $ist = new TaskModel();
                         $tasks = $ist->getTask();
                         foreach ($tasks as $task) :
                          ?>
                              <li>
                                   <div class="cards">
                                        <input type="checkbox" name="select" id="select" />
                                        <span><?= $task['task_text'] ?></span>
                                        <span class="statut"><?= $task["statut"]; ?></span>

                                        <div class="action">
                                             <span>
                                                  <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#4ea8de">
                                                       <path d="M200-200h57l391-391-57-57-391 391v57Zm-80 80v-170l528-527q12-11 26.5-17t30.5-6q16 0 31 6t26 18l55 56q12 11 17.5 26t5.5 30q0 16-5.5 30.5T817-647L290-120H120Zm640-584-56-56 56 56Zm-141 85-28-29 57 57-29-28Z" />
                                                  </svg>
                                             </span>
                                             <span>
                                                  <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#e25858">
                                                       <path d="M280-120q-33 0-56.5-23.5T200-200v-520h-40v-80h200v-40h240v40h200v80h-40v520q0 33-23.5 56.5T680-120H280Zm400-600H280v520h400v-520ZM360-280h80v-360h-80v360Zm160 0h80v-360h-80v360ZM280-720v520-520Z" />
                                                  </svg>
                                             </span>
                                        </div>
                                   </div>
                              </li>
                         <?php endforeach; ?>
                    </ul>

               </div>



          </div>
     </main>

</body>

</html>