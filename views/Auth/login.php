<!DOCTYPE html>
<html lang="fr">

<head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Login</title>
     <link rel="stylesheet" href="../assets/style.css">
</head>

<body>
     <?php include '../views/partials/navbar.php'; ?>
     <main>
        
          <div class="card">
               <form action="" method="">
                    <h2>AUTHENTIFICATION</h2>
                    <input type="text" placeholder="Username">
                    <input type="password" placeholder="Password">
                    <p class="forget">Mot de passe oublié ? <a href="#">Cliquez ici</a></p>
                    <button class="btn">Connexion</button>
               </form>
             
          </div>
          <!-- <span>Cliquez ici si pour créer un compte<a href="inscription.php"> Inscription </a></span> -->
     </main>
     <?php include '../views/partials/footer.php' ?>
</body>

</html>