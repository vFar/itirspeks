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
<table>
        <form method="post">
            <tr>
                <td class="text1">Virsraksts:</td>
                <td>
                    <input class="box2" name="newTitle" type="text" placeholder="Ievadi virsrakstu*">
                </td>
            </tr>
            <tr>
                <td class="text1">Apraksts:</td>
                <td>
                    <input class="box2" name="newDetails" type="text" placeholder="Ievadi aprakstu*">
                </td>
            </tr>
            <tr>
                <td class="text1">Autors:</td>
                <td>
                    <input class="box2" name="newAuthor" type="text" placeholder="Ievadi autora vārdu un uzvārdu*">
                </td>
            </tr>
            <tr>
                <td class="text1">Datums</td>
                <td>
                    <input class="box2" name="newDate" type="date" placeholder="Ievadi datumu*">
                </td>
            </tr>
            
            <tr>
                <td colspan="2" style="border-radius: 0 0 35px 35px; border-bottom: 0px;">
                    <button type='submit' name='addNews1' value='' class='btn1'>Izveidot aktualitāti</button>
                </td>
            </tr>
            </form>
        

            <?php
            if(isset($_POST["addNews1"])){
                require("connect_db.php");

                $newvirsraksts = mysqli_real_escape_string($savienojums, $_POST["newTitle"]);
                $newapraksts = mysqli_real_escape_string($savienojums, $_POST["newDetails"]);
                $newautors = mysqli_real_escape_string($savienojums, $_POST["newAuthor"]);
                $newdatums = mysqli_real_escape_string($savienojums, $_POST["newDate"]);

                $newUsername = $_SESSION['lietotajvards'];
                $query = "SELECT lietotaji_id FROM lietotaji WHERE lietotajvards = '$newUsername'";
                $result = mysqli_query($savienojums, $query);


                $rezultats = (int) mysqli_fetch_array($result)[0];

                if(!empty($newvirsraksts) && !empty($newapraksts) && !empty($newautors) && !empty($newdatums)){
                                $ievietotSQL = "INSERT INTO aktualitates (virsraksts, apraksts, autors, datums, id_lietotajs)
                                VALUES ('$newvirsraksts', '$newapraksts', '$newautors', '$newdatums', $rezultats)";

                                if(mysqli_query($savienojums, $ievietotSQL)){
                                    echo "<div class='correct1'>Veiksmīgi izveidota jauna aktualitāte!</div>";
                                    header("Refresh:2; url=aktualitatesCRUD.php");
                                }else{
                                    echo "<div class='incorrect1'>Notika sistēmas kļūda, sazinieties ar sistēmas administratoru!</div>";
                                    header("Refresh:2; url=aktualitatesCRUD.php");
                                }
                                
                            }else{
                                echo "<div class='incorrect1'>Nav aizpildīti visi lauki!</div>";
                            }
                        }
            
                
                
                ?>
        </table>
</div>
</div>

<?php include "footer.php"; ?>
