<?php
$route=$_SERVER["REQUEST_URI"];
if(isset($route)){
     switch ($route) {
          case '/':
               require_once '../views/index.php';
               break;
          case '/todo-list':
               require_once '../views/todolist.php';
               break;
          case '/login':
               require_once '../views/Auth/login.php';
               break;
          case '/register':
               require_once '../views/Auth/register.php';
               break;
          
          default:
               echo "Route non valide";
               break;
     }
}
