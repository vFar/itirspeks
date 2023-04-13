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
            <?php
            
            if(isset($_POST["editVacancy"])){
                require("connect_db.php");

                $ID = $_POST["editVacancy"];
                $atlasit_vakances = "SELECT * FROM vakances WHERE vakance_id = $ID";
                $atlasa_vakances = mysqli_query($savienojums, $atlasit_vakances);

                while($ieraksts = mysqli_fetch_assoc($atlasa_vakances)){
                    echo "<form method='post'>
                        <tr>
                            <td class='text1'>Virsraksts:</td>
                            <td>
                                <input class='box2' name='virsraksts2' value='{$ieraksts['virsraksts']}' type='text' placeholder='Ievadi virsrakstu*'>
                            </td>
                            
                        </tr>
                        <tr>
                            <td class='text1'>Apraksts:</td>
                            <td>
                                <textarea class='box2' name='apraksts2' placeholder='Ievadi aprakstu*'>{$ieraksts['apraksts']}</textarea>
                            </td>
                        </tr>
                        <tr>
                            <td class='text1'>Kontakti:</td>
                            <td>
                                <input class='box2' name='kontakti2' value='{$ieraksts['kontakti']}'  type='text' placeholder='Ievadi kontaktus (e-pasts, vārds, uzvārds, tālrunis u.tml.)*'>
                            </td>
                        </tr>
                        
                        <tr>
                        <td class='text1'>Datums:</td>
                        <td>
                            <input class='box2' name='datums2' value='{$ieraksts['datums']}'  type='date' placeholder='Ievadi datumu*'>
                        </td>

                    </tr>
                        <tr>
                            <td colspan='2'>
                                <button type='submit' name='editNews1' value='{$ieraksts['vakance_id']}' class='btn1'>
                                    Rediģēt
                                </button>
                            </td>
                        </tr>
                        </form>";
                    

                            }
                        }
                        if(isset($_POST["editNews1"])){
                            require("connect_db.php");

                            $newUsername = $_SESSION['lietotajvards'];
                            $query = "SELECT lietotaji_id FROM lietotaji WHERE lietotajvards = '$newUsername'";
                            $result = mysqli_query($savienojums, $query);

                            $rezultats = (int) mysqli_fetch_array($result)[0];

                            $VakancesID = $_POST['editNews1'];

                            $Virsraksts = mysqli_real_escape_string($savienojums, $_POST["virsraksts2"]);
                            $Apraksts = mysqli_real_escape_string($savienojums, $_POST["apraksts2"]);
                            $Kontakti = mysqli_real_escape_string($savienojums, $_POST["kontakti2"]);
                            $Datums = mysqli_real_escape_string($savienojums, $_POST["datums2"]);

                            
                            if(!empty($Virsraksts) && !empty($Apraksts) && !empty($Kontakti) && !empty($Datums)){
                                            $ievietotSQL = "UPDATE vakances SET virsraksts = '$Virsraksts',
                                                            apraksts = '$Apraksts', kontakti = '$Kontakti', datums = '$Datums', id_lietotajs = '$rezultats'
                                                            WHERE vakance_id = $VakancesID";

                                            if(mysqli_query($savienojums, $ievietotSQL)){
                                                echo "<div class='correct1'>Vakances informācija veiksmīgi rediģēta!</div>";
                                                header("Refresh:2; url=vakancesCRUD.php");
                                            }else{
                                                echo "<div class='incorrect1'>Notika sistēmas kļūda, sazinieties ar sistēmas administratoru!</div>";
                                                header("Refresh:2; url=vakancesCRUD.php");
                                            }
                                        

                            }else{
                                echo "<div class='incorrect1'>Nav aizpildīti visi lauki!</div>";
                                header("Refresh:3; url=vakancesCRUD.php");
                            }

                        } 
            ?>
        </table>
</div>
</div>

<?php include "footer.php"; ?>
