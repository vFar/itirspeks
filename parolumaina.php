<?php
    require "header.php";

    session_start();
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
                <input type="password" name="newpass" placeholder="Jaunā parole*" class="box">
                <input type="password" name="newpassrepeat" placeholder="Jaunā parole atkārtoti*" class="box">
                <input type="submit" value="Mainīt!" name="changepass" class="btn">
    </form>
    </div>

    <?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST'){
            require ("connect_db.php");

            if(isset($_POST['changepass'])){
                $vecaParole = mysqli_real_escape_string($savienojums, $_POST["oldpass"]);
                $jaunaParole = mysqli_real_escape_string($savienojums, $_POST["newpass"]);
                $jaunaParoleAtkartoti = mysqli_real_escape_string($savienojums, $_POST["newpassrepeat"]);


                $parbaudeSQLoldpass = "SELECT parole FROM lietotaji WHERE lietotajvards = '{$_SESSION["lietotajvards"]}'";
                $parbaudesRezOLDPASS = mysqli_query($savienojums, $parbaudeSQL);



                if(mysqli_num_rows($parbaudesRezultats) == 1){
                    if($jaunaParole == $jaunaParoleAtkartoti){
                        $updatePassword = "UPDATE lietotaji
                                            SET parole = '{$jaunaParole}'
                                            WHERE lietotajvards = '{$_SESSION["lietotajvards"]}'";

                        if(mysqli_query($savienojums, $updatePassword)){
                            echo "LUCKY FUCK";
                        }else{
                            echo "UNLUCKY FUCK";
                        }

                    }else{
                        echo "INCORRECT PASSWORD MATCH BOZO";
                    }


                }else{
                    echo "ievadi korektu veco paroli!";
                }
            }
    }


    if(password_verify($Parole, $ieraksts["Parole"])){
        $_SESSION["lietotajvards"] = $ieraksts["Lietotajvards"];
        header("location:./");
    }else{
        echo "Nepareizs lietotājvārds vai parole!";
    }

    ?>
</div>
</div>

<?php include "footer.php"; ?>
