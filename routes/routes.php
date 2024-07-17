<?php
require_once "../controllers/loginController.php";
require_once "../controllers/taskController.php";
require_once "../controllers/registerController.php";
require_once "../controllers/userController.php";
require_once "../controllers/pageController.php";

$route = $_SERVER["REQUEST_URI"];

if (strlen($route) > 1) {
     $route = substr($route, 1);
}

$route = explode("-", $route);

$controller = $route[0] ?? "/";

$action = $route[1] ?? "home";





// var_dump($route);

if (isset($controller)) {
     switch ($controller) {
          case '/':
               $controllerInstance = new pageController();
               $controllerInstance->index();
               break;
          case 'task':
               // Appel du controlleur des tâches
               $controllerInstance = new taskController();
               // $controllerInstance->HomePage();

               break;
          case 'user':
               // Appel du controlleur des tâches
               $controllerInstance = new userController();
               // $controllerInstance->HomePage();

               break;
          case 'login':
               $controllerInstance = new loginController();
               // $controllerInstance->HomePage();

               break;
          case 'register':
               $controllerInstance = new registerController();
               // $controllerInstance->HomePage();

               break;

          default:
               echo "Route non valide";
               break;
     }
}
// echo "<pre>";
// echo "$controller";
// echo " $action";
// echo "$route";
// Determiner l'action/la méthode du controlleur a appeler

if (isset($action)) {
     switch ($action) {
          case 'home':

               $controllerInstance->HomePage();
               break;
          case 'create':

               $controllerInstance->create();

               break;
          case 'update':


               $controllerInstance->update();

               break;
          case 'delete':

               $controllerInstance->delete();

               break;

          default:
               echo "Route non valide";
               break;
     }
}
