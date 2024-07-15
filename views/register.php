<!DOCTYPE html>
<html lang="fr">

<head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Login</title>
     <link rel="stylesheet" href="style.css">
</head>

<body>
<?php include './partials/navbar.php' ; ?>
<main> 
         <div class="card">
         <form action="" method="">
                    <h2>INSCRIPTION</h2>
                    <input type="text" placeholder="Username">
                    <input type="mail" placeholder="E-mail">
                    <input type="password" placeholder="Password">
                    <input type="password" placeholder="Confirm Password">
                    <button>Valider</button> 
          </form>
         </div>
          <!-- <span>Cliquez ici si pour créer un compte<a href="inscription.php"> Inscription </a></span> -->
     </main>
     <?php include'./partials/footer.php' ?>
</body>

</html>