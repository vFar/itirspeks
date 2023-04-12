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
<table class="adminTabula">
        <form method="post">
            <tr>
                <td class="text1">Lietotājvārds:</td>
                <td>
                    <input name="newusername" type="text" placeholder="Ievadi lietotājvārdu*">
                </td>
            </tr>
            <tr>
                <td class="text1">Parole:</td>
                <td>
                    <input name="newpassword" type="password" placeholder="Ievadi paroli*">
                </td>
            </tr>
            <tr>
                <td class="text1">Vārds:</td>
                <td>
                    <input name="newname" type="text" placeholder="Ievadi vārdu*">
                </td>
            </tr>
            <tr>
                <td class="text1">Uzvārds:</td>
                <td>
                    <input name="newsurname" type="text" placeholder="Ievadi uzvārdu*">
                </td>
            </tr>
            <tr>
                <td class="text1">Tālruņa numurs:</td>
                <td>
                    <input name="newnumber" type="number" placeholder="Ievadi tālruņa numuru*">
                </td>
            </tr>
            <tr>
                <td class="text1">E-pasts:</td>
                <td>
                    <input name="newemail" type="text" placeholder="Ievadi e-pastu*">
                </td>
            </tr>
            <tr>
                <td colspan="2" style="border-radius: 0 0 35px 35px; border-bottom: 0px;">
                    <button type='submit' name='addModerator' value='' class='btn1'>Pievienot kontu</button>
                </td>
            </tr>
            </form>
        

            <?php
            if(isset($_POST["addModerator"])){
                require("connect_db.php");


                $newlietotajvards = mysqli_real_escape_string($savienojums, $_POST["newusername"]);
                $newparole = mysqli_real_escape_string($savienojums, $_POST["newpassword"]);
                $newvards = mysqli_real_escape_string($savienojums, $_POST["newname"]);
                $newuzvards = mysqli_real_escape_string($savienojums, $_POST["newsurname"]);
                $newnumurs = mysqli_real_escape_string($savienojums, $_POST["newnumber"]);
                $newepasts = mysqli_real_escape_string($savienojums, $_POST["newemail"]);
                
                if(!empty($newlietotajvards) && !empty($newparole) && !empty($newvards) && !empty($newuzvards) && !empty($newnumurs) && !empty($newepasts)){
                                $hash_password = password_hash($newparole, PASSWORD_DEFAULT);
                                $ievietotSQL = "INSERT INTO lietotaji (lietotajvards, parole, vards, uzvards, talrunis, epasts, id_tiesibas)
                                VALUES ('$newlietotajvards', '$hash_password', '$newvards', '$newuzvards', '$newnumurs', '$newepasts', 2)";

                                if(mysqli_query($savienojums, $ievietotSQL)){
                                    echo "<div class='correct1'>Moderatora konts veiksmīgi pievienots!</div>";
                                    header("Refresh:2; url=tiesibas.php");
                                }else{
                                    echo "<div class='incorrect1'>Notika sistēmas kļūda, sazinieties ar sistēmas administratoru!</div>";
                                    header("Refresh:2; url=tiesibas.php");
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
