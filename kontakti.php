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
    <a href="index.html">Sākums</a>
    <a href="aktualitates.html">Aktualitātes</a>
    <a href="vakances.html">Vakances</a>
    <a href="kontakti.html">Kontakti</a>
    <a id="login-btn" onclick="openForm()"><i class="fas fa-sign-in"></i></a>
    <div class="login-popup">
        <div class="close" onclick="closeForm()">×</div>
        <h2>Pieslēgties</h2>
        <form>
          <input type="text" placeholder="Lietotājvārds" required>
          <input type="password" placeholder="Parole" required>
          <button type="submit">Pieslēgties</button>
        </form>
      </div>
</nav>
    <div id="menu-btn" class="fas fa-bars"></div>
</header>



<div class="box-container">
    <div class="box">
        <h2>Sazinies ar mums!</h2>
        <hr>

        
        <div class="icons-container">
            <div class="icons">
                <i class="fas fa-phone"></i>
                <h3>Tālrunis</h3>
                <p>+371 63 333 999</p>
                <p>+371 63 123 999</p>
            </div>
            <div class="icons">
                <i class="fas fa-envelope"></i>
                <h3>E-pasts</h3>
                <p>developer@itirspeks.lv</p>
                <p>executiveoffice@itirspeks.lv</p>
            </div>
            <div class="icons">
                <i class="fas fa-map-marker-alt"></i>
                <h3>Adrese</h3>
                <p>Ventspils iela 51, <br>Liepāja, LV-3405, Latvija</p>
            </div>
        </div>

        <div class="row">
            <iframe class="map" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d24538.296252292257!2d21.01105825042034!3d56.528952523790004!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x46faa7ccb271be93%3A0xf9d1bf3406ae7d9d!2sLiep%C4%81jas%20Valsts%20tehnikums!5e0!3m2!1slv!2slv!4v1635667959583!5m2!1slv!2slv" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
            <form action="">
                <input type="text" placeholder="Vārds" class="box">
                <input type="email" placeholder="E-pasts" class="box">
                <input type="number" placeholder="Tālrunis" class="box">
                <textarea name="" placeholder="Tavs ziņojums" class="box" id="textarena" cols="30" rows="8"></textarea>
                <input type="submit" value="Sazināties!" class="btn">
            </form>
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