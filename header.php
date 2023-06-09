<?php
session_start(); // Start the session

require("connect_db.php");

if (isset($_POST["login"])) {
    $username = mysqli_real_escape_string($savienojums, $_POST["username"]);
    $password = mysqli_real_escape_string($savienojums, $_POST["password"]);
    $sql = "SELECT * FROM lietotaji WHERE lietotajvards = '$username'";
    $result = mysqli_query($savienojums, $sql);

    if (mysqli_num_rows($result) == 1) {
        $record = mysqli_fetch_assoc($result);
        if (password_verify($password, $record["parole"])) {
            $_SESSION["lietotajvards"] = $record["lietotajvards"];
        $_SESSION["role"] = $record["id_tiesibas"];
            header("Location: index.php"); // Redirect the user to the homepage
            exit();
        } else {
            $error = "<div class='logError'>Nepareizs lietotājvārds un/vai parole!</div>";
        }
    } else {
        $error = "<div class='logError'>Nepareizs lietotājvārds un/vai parole!</div>";
    }
}
if (isset($_GET["logout"])) {
    session_destroy();
    header("Location: index.php"); // Redirect the user to the homepage
    exit();
}
?>
    
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

                <?php if (isset($_SESSION["lietotajvards"])) { ?>
                    <a href="logout.php" class="logout"><i class="fas fa-sign-out"></i></a>
                <?php } else { ?>
                    <a id="login-btn" onclick="openForm()"><i class="fas fa-sign-in"></i></a>
                <?php } ?>

                <div class="login-popup">
                    <div class="close" onclick="closeForm()">×</div>
                    <h2>Pieslēgties</h2>
                    <form action="" method="POST">
                        <input type="text" placeholder="Lietotājvārds" name="username" required>
                        <input type="password" placeholder="Parole" name="password" required>
                        <button type="submit" name="login">Autorizēties</button>
                    </form>
                    
                    <?php if (isset($error)) { ?>
                        <p class="error">
                            <?php echo $error; 
                            $error=NULL;?></p>
                    <?php } ?>
                </div>
                <?php
                    if(isset($_SESSION['lietotajvards'])){
                        if($_SESSION['role'] == 1){
                            echo "<div class='dropdown'>
                                <a href='#' class='dropbtn'>{$_SESSION['lietotajvards']}</a>
                                <div class='dropdown-content'>
                                <a href='pieteikumi.php'>Pieteikumi</a>
                                <a href='parolumaina.php'>Paroļu maiņa</a>
                                <a href='tiesibas.php'>Tiesības</a>
                                </div>
                            </div>
                                ";
                        }elseif($_SESSION['role'] == 2){
                            echo "<div class='dropdown'>
                                <a href='#' class='dropbtn'>{$_SESSION['lietotajvards']}</a>
                                <div class='dropdown-content'>
                                <a href='pieteikumi.php'>Pieteikumi</a>
                                <a href='parolumaina.php'>Paroļu maiņa</a>
                                </div>
                            </div>
                                ";
                        }else{
                            echo "error";
                        }
                    }
                ?>

                <div id="menu-btn" class="fas fa-bars"></div>
            </nav>
        </header>
           
