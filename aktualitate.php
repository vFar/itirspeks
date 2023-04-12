<!DOCTYPE html>
<html lang="lv">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aktualitāte</title>
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

<div class="box-container">
<?php
    if($_SERVER['REQUEST_METHOD'] == 'POST'){
require "connect_db.php";
$aktualitateID = "";
if(isset($_POST['aktualitate'])){
    $aktualitateID=$_POST['aktualitate'];
}elseif(isset($_POST['latestAktualitate'])){
    $aktualitateID = $_POST['latestAktualitate'];
}

$aktQuery="SELECT * FROM aktualitates WHERE aktualitate_id=$aktualitateID";
$aktSavienojums=mysqli_query($savienojums, $aktQuery);

while($ieraksts = mysqli_fetch_assoc($aktSavienojums)){


   echo  "<div class='box'>
<h2>{$ieraksts['virsraksts']}</h2>
<hr>
<p class='cont'>{$ieraksts['apraksts']}</p>
<div class='authDate'>
<p>Datums: {$ieraksts['datums']}</p>
<p>Autors: {$ieraksts['autors']}</p>
</div>";
}
}else{
    echo "Kļūūda";
}
    ?>
    </div>
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