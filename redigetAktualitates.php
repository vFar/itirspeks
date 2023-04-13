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
        <!--
        <form method="post">
            <tr>
                <td class="text1">Virsraksts:</td>
                <td>
                    <input class="box2" name="editTitle" type="text" placeholder="Ievadi virsrakstu*">
                </td>
            </tr>
            <tr>
                <td class="text1">Apraksts:</td>
                <td>
                    <input class="box2" name="editDetails" type="text" placeholder="Ievadi aprakstu*">
                </td>
            </tr>
            <tr>
                <td class="text1">Autors:</td>
                <td>
                    <input class="box2" name="editAuthor" type="text" placeholder="Ievadi autora vārdu un uzvārdu*">
                </td>
            </tr>
            <tr>
                <td class="text1">Datums</td>
                <td>
                    <input class="box2" name="editDate" type="date" placeholder="Ievadi datumu*">
                </td>
            </tr>
            
            <tr>
                <td colspan="2" style="border-radius: 0 0 35px 35px; border-bottom: 0px;">
                    <button type='submit' name='editNews1' value='' class='btn1'>Saglabāt</button>
                </td>
            </tr>
            </form>
            -->

            <?php
            
            if(isset($_POST["editNews"])){
                require("connect_db.php");

                $ID = $_POST["editNews"];
                $atlasit_aktualitates = "SELECT * FROM aktualitates WHERE aktualitate_id = $ID";
                $atlasa_aktualitates = mysqli_query($savienojums, $atlasit_aktualitates);

                while($ieraksts = mysqli_fetch_assoc($atlasa_aktualitates)){
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
                            <td class='text1'>Autors:</td>
                            <td>
                                <input class='box2' name='autors2' value='{$ieraksts['autors']}'  type='text' placeholder='Ievadi autora vārdu un uzvārdu*'>
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
                                <button type='submit' name='editNews1' value='{$ieraksts['aktualitate_id']}' class='btn1'>
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

                            $AktualitatesID = $_POST['editNews1'];

                            $Virsraksts = mysqli_real_escape_string($savienojums, $_POST["virsraksts2"]);
                            $Apraksts = mysqli_real_escape_string($savienojums, $_POST["apraksts2"]);
                            $Autors = mysqli_real_escape_string($savienojums, $_POST["autors2"]);
                            $Datums = mysqli_real_escape_string($savienojums, $_POST["datums2"]);

                            
                            if(!empty($Virsraksts) && !empty($Apraksts) && !empty($Autors) && !empty($Datums)){
                                            $ievietotSQL = "UPDATE aktualitates SET virsraksts = '$Virsraksts',
                                                            apraksts = '$Apraksts', autors = '$Autors', datums = '$Datums', id_lietotajs = '$rezultats'
                                                            WHERE aktualitate_id = $AktualitatesID";

                                            if(mysqli_query($savienojums, $ievietotSQL)){
                                                echo "<div class='correct1'>Ziņu aktualitāte veiksmīgi rediģēta!</div>";
                                                header("Refresh:2; url=aktualitatesCRUD.php");
                                            }else{
                                                echo "<div class='incorrect1'>Notika sistēmas kļūda, sazinieties ar sistēmas administratoru!</div>";
                                                header("Refresh:2; url=aktualitatesCRUD.php");
                                            }
                                        

                            }else{
                                echo "<div class='incorrect1'>Nav aizpildīti visi lauki!</div>";
                                header("Refresh:3; url=aktualitatesCRUD.php");
                            }

                        } 
            ?>
        </table>
</div>
</div>

<?php include "footer.php"; ?>
