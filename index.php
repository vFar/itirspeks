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
    <a href="index.html" onload="enableOverflow()">Sākums</a>
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
    <div class="box">
<h2>Jaunākā aktualitāte</h2>
<hr>
<a href="aktualitate.html"><h3 id="head3">Kas jauns MySQL</h3></a>
<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Natus nam distinctio autem molestiae fugiat ratione consequatur facere laborum rerum quo obcaecati eveniet maxime architecto voluptate iusto odit amet, dignissimos exercitationem quam error nesciunt dolorem expedita non! Voluptas iure suscipit rem earum eveniet consequatur doloremque minus repellendus laboriosam, quia ratione quos!</p>
    </div>

    <div class="box">
        <h2>Jaunākā vakance</h2>
        <hr>
        <a href="vakance.html"><h3 id="head3">Darbs Liepājas Valsts tehnikumā</h3></a>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. In quod voluptates suscipit laudantium harum maxime accusantium consectetur molestias maiores sint, quibusdam ex aliquid voluptatibus facilis eaque cumque nam nulla ut, illum excepturi ratione porro expedita. Nihil, eius exercitationem non suscipit labore illum aut hic excepturi veniam, nam tempore esse minus.</p>
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