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
    <form action="pievienotAktualitati.php" method="POST">
    <div class="modContainer">
    <input type="submit" value="Izveidot jaunu aktualitāti" name="addNews" class="btn1">
    </div>
    </form>

    <?php 
                if(isset($_POST["deleteNews"])){
                    require("connect_db.php");


                    $ID = mysqli_real_escape_string($savienojums, $_POST["deleteNews"]);
                                    $dzestSQL = "DELETE FROM aktualitates WHERE aktualitate_id = $ID";

                                    if(mysqli_query($savienojums, $dzestSQL)){
                                        echo "<div class='correct1'>Ziņu aktualitāte veiksmīgi izdzēsta!</div>";
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
                    <th>Autors</th>
                    <th>Datums</th>
                    <th>Izveidotājs</th>
                    <th></th>
                    <th></th>
                </tr>

                <?php
                    ob_start();
                    require "connect_db.php";
                    $atlasit_aktualitates = "SELECT * FROM aktualitates";
                    $atlasa_aktualitati = mysqli_query($savienojums, $atlasit_aktualitates);



                    while($ieraksts = mysqli_fetch_assoc($atlasa_aktualitati)){
                        $lietotajs_query = "SELECT * FROM lietotaji WHERE lietotaji_id = '{$ieraksts['id_lietotajs']}'";
                        $lietotajs_result = mysqli_query($savienojums, $lietotajs_query);
                        $lietotajs = mysqli_fetch_assoc($lietotajs_result);

                        echo "
                            <tr>
                                <td>{$ieraksts['virsraksts']}</td>
                                <td><div class='truncate'>{$ieraksts['apraksts']}</div></td>
                                <td>{$ieraksts['autors']}</td>
                                <td>{$ieraksts['datums']}</td>
                                <td>{$lietotajs['lietotajvards']}</td>

                                <td><form action='redigetAktualitates.php' method='POST'>
                                        <button type='submit' name='editNews' value='{$ieraksts['aktualitate_id']}' class='btn1'>
                                            <i class='fas fa-edit'></i>
                                        </button>
                                    </form>
                                </td>

                                <td><form action='' method='POST'>
                                <button type='submit' name='deleteNews' value='{$ieraksts['aktualitate_id']}' class='btn1'>
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
