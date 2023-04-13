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
    <form action="pievienotMOD.php" method="POST">
    <div class="modContainer">
    <input type="submit" value="Pievienot moderatora kontu" name="addMod" class="btn1">
    </div>
    </form>

    <?php 
                if(isset($_POST["deleteMod"])){
                    require("connect_db.php");


                    $ID = mysqli_real_escape_string($savienojums, $_POST["deleteMod"]);
                                    $dzestSQL = "DELETE FROM lietotaji WHERE lietotaji_id = $ID";

                                    if(mysqli_query($savienojums, $dzestSQL)){
                                        echo "<div class='correct1'>Moderatora konts izdzēsts!</div>";
                                        header("Refresh:3");
                                    }else{
                                        echo "<div class='incorrect1'>Notika sistēmas kļūda, sazinieties ar sistēmas administratoru!</div>";
                                        header("Refresh:4");
                                    }

                } 

                ob_end_flush();
            ?>

            <table>
                <tr>
                    <th>Lietotājvārds</th>
                    <th>Vārds</th>
                    <th>Uzvārds</th>
                    <th>Tālruņa numurs</th>
                    <th>E-pasts</th>
                    <th>Tiesību pakāpe</th>
                    <th></th>
                </tr>

                <?php
                    ob_start();
                    require "connect_db.php";
                    $atlasit_audzeknus_SQL = "SELECT * FROM lietotaji";
                    $atlasa_audzeknus = mysqli_query($savienojums, $atlasit_audzeknus_SQL);

                    while($ieraksts = mysqli_fetch_assoc($atlasa_audzeknus)){
                        echo "
                            <tr>
                                <td>{$ieraksts['lietotajvards']}</td>
                                <td>{$ieraksts['vards']}</td>
                                <td>{$ieraksts['uzvards']}</td>
                                <td>{$ieraksts['talrunis']}</td>
                                <td>{$ieraksts['epasts']}</td>
                                <td>{$ieraksts['id_tiesibas']}</td>
                                <td><form action='' method='POST'>
                                        <button type='submit' name='deleteMod' value='{$ieraksts['lietotaji_id']}' class='btn1'>
                                            <i class='fas fa-trash'></i>
                                        </button>
                                    </form>
                                </td>
                            </tr>
                        ";
                    }
                ?>
            </table>
    


</div>
</div>

<?php include "footer.php"; ?>
