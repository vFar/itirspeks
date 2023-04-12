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
    <?php

              
    ?>
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

      <a href="logout.php" class="logout"><i class="fas fa-sign-out"></i></a>

      <?php

        if(isset($_POST["login"])){
            require("connect_db.php");
            session_start();

            $Lietotajvards = mysqli_real_escape_string($savienojums, $_POST["username"]);
            $Parole = mysqli_real_escape_string($savienojums, $_POST["password"]);

            $lietotaja_atrasana_SQL = "SELECT * FROM lietotaji WHERE lietotajvards = '$Lietotajvards'";
            $atrasanas_rezultats = mysqli_query($savienojums, $lietotaja_atrasana_SQL);

            if(mysqli_num_rows($atrasanas_rezultats) == 1){
                while($ieraksts = mysqli_fetch_assoc($atrasanas_rezultats)){
                    if(password_verify($Parole, $ieraksts["parole"])){
                        $_SESSION["lietotajvards"] = $ieraksts["lietotajvards"];
                        echo "<style>#login-btn {display: none}</style>";
                        echo "<style>.logout {display: inline-block}</style>";
                        
                        #header("Refresh: 3");
                    }else{
                        echo "Nepareizs lietotājvārds un/vai parole!";
                    }
                }
                
            }else{
                echo "Nepareizs lietotājvārds un/vai parole!";
            }
        }

        
        if(isset($GET['logout'])){
            session_destroy();
        }
        
?>


      <div class="page-container">
</nav>
<div id="menu-btn" class="fas fa-bars"></div>
</header>