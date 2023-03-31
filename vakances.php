<!DOCTYPE html>
<html lang="lv">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aktualitātes</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">

</head>
<body>
    <div class="page-container">
<header>
    <div class="logo">

    <a href="index.php">IT ir spēks! </a>
   
    </div>
<nav class="navbar">
    <a href="index.php">Sākums</a>
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
</nav>
<div id="menu-btn" class="fas fa-bars"></div>
</header>
<div class="box-container">
    <div class="box">
        <h2>Piedāvātās vakances</h2>
        <hr>
        <div class="vakances">
                <div class="vak"><a href="vakance.php">
                    <h3>IT nozarē atklāts jauns atvieglojums!</h3>
                    <hr>
                <p>Jauns atvieglojums atrasts IT nozarē, kas palīdzēs visiem un jebkuram.</p>
                </a></div>

                <div class="vak"><a href="vakance.php">
                    <h3>IT nozarē atklāts jauns atvieglojums!</h3>
                    <hr>
                <p>Jauns atvieglojums atrasts IT nozarē, kas palīdzēs visiem un jebkuram.</p>
                </a></div>

                    <div class="vak"><a href="vakance.php">
                        <h3>IT nozarē atklāts jauns atvieglojums!</h3>
                        <hr>
                    <p>Jauns atvieglojums atrasts IT nozarē, kas palīdzēs visiem un jebkuram.</p>
                    </a></div>

                    <div class="vak"><a href="vakance.php">
                        <h3>IT nozarē atklāts jauns atvieglojums!</h3>
                        <hr>
                    <p>Jauns atvieglojums atrasts IT nozarē, kas palīdzēs visiem un jebkuram.</p>
                    </a></div>

                    <div class="vak"><a href="vakance.php">
                        <h3>IT nozarē atklāts jauns atvieglojums!</h3>
                        <hr>
                    <p>Jauns atvieglojums atrasts IT nozarē, kas palīdzēs visiem un jebkuram.</p>
                    </a></div>

                    <div class="vak"><a href="vakance.php">
                        <h3>IT nozarē atklāts jauns atvieglojums!</h3>
                        <hr>
                    <p>Jauns atvieglojums atrasts IT nozarē, kas palīdzēs visiem un jebkuram.</p>
                    </a></div>
            
        </div>
    </div>
</div>

<script src="script.js"></script>

<footer>
<h1>IT ir Spēks &copy; 2023</h1>
<hr>
<p class="STD"><b>S</b>mart <b>T</b>ech <b>D</b>evelopment<p>
</footer>
</div>
</body>
</html>