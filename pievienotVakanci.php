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
                <td class="text1">Kontakti</td>
                <td>
                    <input class="box2" name="newContacts" type="text" placeholder="Ievadi kontakta informāciju*">
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
                    <button type='submit' name='addVacancy1' value='' class='btn1'>Izveidot vakanci</button>
                </td>
            </tr>
            </form>
        

            <?php
            if(isset($_POST["addVacancy1"])){
                require("connect_db.php");

                $newvirsraksts = mysqli_real_escape_string($savienojums, $_POST["newTitle"]);
                $newapraksts = mysqli_real_escape_string($savienojums, $_POST["newDetails"]);
                $newkontakti = mysqli_real_escape_string($savienojums, $_POST["newContacts"]);
                $newdatums = mysqli_real_escape_string($savienojums, $_POST["newDate"]);

                $newUsername = $_SESSION['lietotajvards'];
                $query = "SELECT lietotaji_id FROM lietotaji WHERE lietotajvards = '$newUsername'";
                $result = mysqli_query($savienojums, $query);


                $rezultats = (int) mysqli_fetch_array($result)[0];

                if(!empty($newvirsraksts) && !empty($newapraksts) && !empty($newkontakti) && !empty($newdatums)){
                                $ievietotSQL = "INSERT INTO vakances (virsraksts, apraksts, kontakti, datums, id_lietotajs)
                                                VALUES ('$newvirsraksts', '$newapraksts', '$newkontakti', '$newdatums', $rezultats)";

                                if(mysqli_query($savienojums, $ievietotSQL)){
                                    echo "<div class='correct1'>Veiksmīgi izveidota jauna vakance!</div>";
                                    header("Refresh:2; url=vakancesCRUD.php");
                                }else{
                                    echo "<div class='incorrect1'>Notika sistēmas kļūda, sazinieties ar sistēmas administratoru!</div>";
                                    header("Refresh:2; url=vakancesCRUD.php");
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
