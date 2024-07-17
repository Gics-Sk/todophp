<?php 
require_once "../Model/UsersModel.php";

if ($_SERVER['REQUEST_METHOD']=="POST" && $_POST["subscribe"]== "S'inscrire") {
     $user_username =htmlspecialchars( $_POST['username']);
     $user_email =htmlspecialchars( $_POST['email']);
     $user_password =htmlspecialchars( $_POST['password']);
     // $user_password2 =htmlspecialchars( $_POST['password']);

     // Insertion d'un utilisateur 
     $instanciation = new UsersModel();
     $instanciation->addUsers([$user_username, $user_email,  password_hash($user_password, PASSWORD_DEFAULT)]);
}
?>
<!DOCTYPE html>
<html lang="fr">

<head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Login</title>
     <link rel="stylesheet" href="../assets/style.css">
</head>

<body>
<?php include '../views/partials/navbar.php' ; ?>
<main> 
         <div class="card">
         <form action="/register" method="POST">
                    <h2>INSCRIPTION</h2>
                    <input type="text" placeholder="Username" name="username" required>
                    <input type="mail" placeholder="E-mail" name="email" required>
                    <input type="password" placeholder="Password" name="password" required>
                    <!-- <input type="password" placeholder="Confirm Password" name="password"> -->
                    <input type="submit" value="S'inscrire" class="btn" name="subscribe" required> 
                    <input type="reset" value="Annuler" class="btn">
          </form>
         </div>
          <!-- <span>Cliquez ici si pour créer un compte<a href="inscription.php"> Inscription </a></span> -->
     </main>
     <?php include'../views/partials/footer.php' ?>
</body>

</html>