<!DOCTYPE html>
<html lang="lv">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sākuma lapa</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">

</head>
<body>
    <div class="page-container">
<header>
    <div class="logo">
    <a href="index.html"> IT ir spēks! </a>
    </div>

<nav class="navbar">
    <a href="index.php" onload="enableOverflow()">Sākums</a>
    <a href="aktualitates.php">Aktualitātes</a>
    <a href="vakances.php">Vakances</a>
    <a href="kontakti.php">Kontakti</a>
    <a id="login-btn" onclick="openForm()"><i class="fas fa-sign-in"></i></a>
    
    <div class="login-popup">
        <div class="close" onclick="closeForm()">×</div>
        <h2>Pieslēgties</h2>
        <form action="" method="POST">
          <input type="text" placeholder="Lietotājvārds" name="username" required>
          <input type="password" placeholder="Parole" name="password" required>
          <button type="submit" name="login">Autorizēties</button>
        </form>
      </div>

      <?php
                    /*
                    session_start();
                    if(isset($_SESSION['lietotajvards'])){
                        echo "<a href='logout.php'><b>{$_SESSION['lietotajvards']}</b>  <i class='fas fa-power-off'></i></a>";
                    }else{
                        header("Refresh:1; url=login.php");
                    }
                    */
                ?>


      <div class="page-container">
</nav>
<div id="menu-btn" class="fas fa-bars"></div>
</header>