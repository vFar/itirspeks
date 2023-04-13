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
    <form action="pievienotVakanci.php" method="POST">
    <div class="modContainer">
    <input type="submit" value="Ievietot jaunu vakanci!" name="addVacancy" class="btn1">
    </div>
    </form>

    <?php 
                if(isset($_POST["deleteVacancy"])){
                    require("connect_db.php");

                    $ID = mysqli_real_escape_string($savienojums, $_POST["deleteVacancy"]);
                                    $dzestSQL = "DELETE FROM vakances WHERE vakance_id = $ID";

                                    if(mysqli_query($savienojums, $dzestSQL)){
                                        echo "<div class='correct1'>Vakance tika veiksmīgi izdzēsta!</div>";
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
                    <th>Virsraksts</th>
                    <th>Apraksts</th>
                    <th>Kontakti</th>
                    <th>Datums</th>
                    <th>Izveidotājs</th>
                    <th></th>
                    <th></th>
                </tr>

                <?php
                    ob_start();
                    require "connect_db.php";
                    $atlasit_vakances = "SELECT * FROM vakances";
                    $atlasa_vakanci = mysqli_query($savienojums, $atlasit_vakances);



                    while($ieraksts = mysqli_fetch_assoc($atlasa_vakanci)){
                        $lietotajs_query = "SELECT * FROM lietotaji WHERE lietotaji_id = '{$ieraksts['id_lietotajs']}'";
                        $lietotajs_result = mysqli_query($savienojums, $lietotajs_query);
                        $lietotajs = mysqli_fetch_assoc($lietotajs_result);

                        echo "
                            <tr>
                                <td>{$ieraksts['virsraksts']}</td>
                                <td><div class='truncate'>{$ieraksts['apraksts']}</div></td>
                                <td>{$ieraksts['kontakti']}</td>
                                <td>{$ieraksts['datums']}</td>
                                <td>{$lietotajs['lietotajvards']}</td>

                                <td><form action='redigetVakanci.php' method='POST'>
                                        <button type='submit' name='editVacancy' value='{$ieraksts['vakance_id']}' class='btn1'>
                                            <i class='fas fa-edit'></i>
                                        </button>
                                    </form>
                                </td>

                                <td><form action='' method='POST'>
                                <button type='submit' name='deleteVacancy' value='{$ieraksts['vakance_id']}' class='btn1'>
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
