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
    <a href="index.php"> IT ir spēks! </a>
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
        <form>
          <input type="text" placeholder="Lietotājvārds" required>
          <input type="password" placeholder="Parole" required>
          <button type="submit">Autorizēties</button>
        </form>
      </div>
      <div class="page-container">
</nav>
<div id="menu-btn" class="fas fa-bars"></div>
</header>

<div class="home">
    <h1><span class="auto-type"></span></h1>
    <hr>
</div>



<div class="box-container">
    <?php
    require("connect_db.php");
    
    $HomeaktualitateQuery = "SELECT * from aktualitates order by aktualitate_id desc limit 1";
    $HomeatlasaAktualitates = mysqli_query($savienojums, $HomeaktualitateQuery);
    $akt_virsraksts="";
    $akt_apraksts="";
    if(mysqli_num_rows($HomeatlasaAktualitates)==1 ){
    while($ieraksts = mysqli_fetch_assoc($HomeatlasaAktualitates)){
        $akt_virsraksts = $ieraksts['virsraksts'];
        $akt_apraksts = $ieraksts['apraksts'];
        }
    }else{
        echo "Izveidojusies kļūda";
    }

    echo "<div class='box'>
<h2>Jaunākā aktualitāte</h2>
<hr>
<a href='aktualitate.php'><h3 id='head3'>$akt_virsraksts</h3></a>
<p>$akt_apraksts</p>
    </div>";



    $HomevakanceQuery = "SELECT * from vakances order by vakance_id desc limit 1";
    $HomeatlasaVakances = mysqli_query($savienojums, $HomevakanceQuery);
    $vak_virsraksts="";
    $vak_apraksts="";
    if(mysqli_num_rows($HomeatlasaVakances)==1 ){
    while($ieraksts = mysqli_fetch_assoc($HomeatlasaVakances)){
        $vak_virsraksts = $ieraksts['virsraksts'];
        $vak_apraksts = $ieraksts['apraksts'];
        }
    }else{
        echo "Izveidojusies kļūda";
    }
    echo "<div class='box'>
        <h2>Jaunākā vakance</h2>
        <hr>
        <a href='vakance.php'><h3 id='head3'>$vak_virsraksts</h3></a>
        <p>$vak_apraksts</p>
            </div>";
            ?>
            
</div>
<footer>
<h1>IT ir Spēks &copy; 2023</h1>
<hr>
<p class="STD"><b>S</b>mart <b>T</b>ech <b>D</b>evelopment<p>
</footer>
</div>
<script src="https://cdn.jsdelivr.net/npm/typed.js@2.0.12"></script>
<script src="script.js"></script>
</body>
</html>