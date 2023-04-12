<?php
    require "header.php";

    #session_start();
    if(!isset($_SESSION['lietotajvards'])){
        header("Refresh: 0; url=index.php");
        exit();
    }
?>

<div class="box-container">
<div class="box">
    <h2>Paroļu maiņa kontam <span class="upperSpan"><?php echo $_SESSION["lietotajvards"];?></span></h2>

    <div class="row">
    <form action="" method="POST">
                <input type="password" name="oldpass" placeholder="Vecā parole*" class="box">
                <input type="password" name="newpass" placeholder="Jaunā parole*" class="box" required>
                <input type="password" name="newpassrepeat" placeholder="Jaunā parole atkārtoti*" class="box" required>
                <input type="submit" value="Mainīt" name="changepass" class="btn">
    </form>
    </div>

    <?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        require("connect_db.php");
    
        if (isset($_POST['changepass'])) {
            $vecaParole = mysqli_real_escape_string($savienojums, $_POST["oldpass"]);
            $jaunaParole = mysqli_real_escape_string($savienojums, $_POST["newpass"]);
            $jaunaParoleAtkartoti = mysqli_real_escape_string($savienojums, $_POST["newpassrepeat"]);
    
            $parbaudeSQLoldpass = "SELECT parole FROM lietotaji WHERE lietotajvards = '{$_SESSION["lietotajvards"]}'";
            $parbaudesRezOLDPASS = mysqli_query($savienojums, $parbaudeSQLoldpass);
    
            if (mysqli_num_rows($parbaudesRezOLDPASS) == 1) {
                $row = mysqli_fetch_assoc($parbaudesRezOLDPASS);
                $vecaparoleDB = $row['parole'];
    
                if (password_verify($vecaParole, $vecaparoleDB)) {
                    if ($jaunaParole == $jaunaParoleAtkartoti) {
                        $paroleHash = password_hash($jaunaParole, PASSWORD_DEFAULT);
                        $updatePassword = "UPDATE lietotaji SET parole = '{$paroleHash}' WHERE lietotajvards = '{$_SESSION["lietotajvards"]}'";
    
                        if (mysqli_query($savienojums, $updatePassword)) {
                            echo "<div class='correct1' style='border-radius: 0 0 35px 35px'>Parole veiksmīgi nomainīta</div>";
                        } else {
                            echo "<div class='incorrect1' style='border-radius: 0 0 35px 35px'>Radusies kļūda - sazinieties ar sistēmas administratoru!</div>";
                        }
                    } else {
                        echo "<div class='incorrect1' style='border-radius: 0 0 35px 35px'>Jauni ievādītās paroles nesakrīt!</div>";
                    }
                } else {
                    echo "<div class='incorrect1' style='border-radius: 0 0 35px 35px'>Pašreizējā parole nav pareizi ievadīta!</div>";
                }
            } else {
                echo "<div class='incorrect1' style='border-radius: 0 0 35px 35px'>Pašreizējā parole nav pareizi ievadīta!</div>";
            }
        }
    }

    ?>
</div>
</div>

<?php include "footer.php"; ?>
