<?php 
$current_page = basename($_SERVER['PHP_SELF']);
?>
<header>
     <img src="./assets/images/logoipsum-330.svg" alt="">
     <nav class="navbar">
    <ul>
        <li <?php if ($current_page == '/') echo 'class="active"'; ?>><a href="/">Accueil</a></li>
        <li <?php if ($current_page == 'login-home') echo 'class="active"'; ?>><a href="login-home">Connexion</a></li>
        <li <?php if ($current_page == 'register-home') echo 'class="active"'; ?>><a href="register-home">Inscription</a></li>
        <li <?php if ($current_page == 'task-home') echo 'class="active"'; ?>><a href="task-home">Tâches</a></li>
    </ul>
</nav>
</header>