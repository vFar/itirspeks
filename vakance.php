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

$vakanceID = "";
if(isset($_POST['vakance'])){
    $vakanceID=$_POST['vakance'];
}elseif(isset($_POST['latestVakance'])){
    $vakanceID = $_POST['latestVakance'];
}
$vakQuery="SELECT * FROM vakances WHERE vakance_id=$vakanceID";
$vakSavienojums=mysqli_query($savienojums, $vakQuery);

while($ieraksts = mysqli_fetch_assoc($vakSavienojums)){


   echo  "<div class='box'>
<h2>{$ieraksts['virsraksts']}</h2>
<hr>
<p class='cont'>{$ieraksts['apraksts']}</p>
<div class='authDate'>
<p>Datums: {$ieraksts['datums']}</p>
<p><form action='vakancesAnketa.php' method='post'><button type='submit' name='pieteikties' id = 'vakBTN' class='btn' value='{$ieraksts['vakance_id']}'>Pieteikties</button</p>
</div>";
}
}else{
    echo "Kļūūda";
}
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