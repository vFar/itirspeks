<?php
    require "header.php";
?>
<?php 
require ("connect_db.php");
        $latestVak="";
        $latestVakQ = "SELECT * from vakances order by vakance_id desc limit 1";
        $atlasaVakQ = mysqli_query($savienojums, $latestVakQ);
       
        if(mysqli_num_rows($atlasaVakQ)==1 ){
        while($ieraksts = mysqli_fetch_assoc($atlasaVakQ)){
            $latestVak=$ieraksts['vakance_id'];
            }
        }else{
            echo "Izveidojusies kļūda";
        }

        if ($_SERVER['REQUEST_METHOD'] == 'POST'){
            if(isset($_POST['vakAnketa'])){
                $vards_ievade = $_POST['vards'];
                $uzvards_ievade = $_POST['uzvards'];
                $talrunis_ievade = $_POST['talrunis'];
                $epasts_ievade = $_POST['epasts'];
                $adrese_ievade = $_POST['adrese'];
                $cv_ievade = $_POST['CV'];

                $parbaudeSQL = "SELECT * FROM pieteiktavakance WHERE talrunis = '$talrunis_ievade'";
                $parbaudesRezultats = mysqli_query($savienojums, $parbaudeSQL);

                if(mysqli_num_rows($parbaudesRezultats) >= 1){
                    echo "<div class='pieteiksanaskluda sarkans'>Kļūda! Informācija par Jums jau ir iesniegta! <br> Ja vēlaties veikt kādas izmaiņas - lūdzu sazinieties ar PIKC LVT pa tālruni + 371 69 999 999!</div>";
                }else{
                    if(!empty($vards_ievade) && !empty($uzvards_ievade) && !empty($talrunis_ievade) && !empty($epasts_ievade) && !empty($adrese_ievade)){
                        $pievienot_vakanci_SQL = "INSERT INTO pieteiktavakance (vards, uzvards, talrunis, epasts, adrese, vak_cv, statuss, id_vakance) VALUES ('$vards_ievade', '$uzvards_ievade', '$talrunis_ievade', '$epasts_ievade', '$adrese_ievade', '$cv_ievade', 'Neapskatīts', '$latestVak'+1)";


                        if(mysqli_query($savienojums, $pievienot_vakanci_SQL)){
                            echo "<div>Reģistrācija ir noritējusi veiksmīgi! Uz drīzu sazināšanos!</div>";
                        }else{
                            echo "<div>Reģistrācija nav izdevusies! Mēģiniet vēlreiz!</div>";
                        }
                    }else{
                        echo "<div>Reģistrācija nav izdevusies! Kāds no ievades laukiem aizpildīts NEKOREKTI!</div>";
                    }
                }
            }else{
    ?>

<div class="box-container">
     <div class="box">
        <h2>Piesakies vakancei</h2>
        <hr>
<div id="pieteiksanas">
   
<div class="row">
        <form method="POST">
            <input type="text" placeholder="Vārds *" name="vards" class="box1" title="Vārds" required>
            <input type="text" placeholder="Uzvārds *" name="uzvards" class="box1" title="Uzvārds" required>
            <input type="number" placeholder="Tālrunis *" name="talrunis" class="box1" title="Tālrunis" required>
            <input type="email" placeholder="E-pasts *" name="epasts" class="box1" title="E-pasts" required>
            <input type="text" placeholder="Adrese *" name="adrese" class="box1" title="Dzīvesvietas adrese" required>
            <input type="file" placeholder="Pievienot CV" name="CV" class="box2" title="Pievienot CV">
            <input type="submit" value="Pieteikties" name="vakAnketa" class="btn">
        </form>
    </div>
    <?php 
        }}else{
            echo "<div class='pieteiksanaskluda sarkans'>Kaut kas nogāja greizi! Atgriezies sākumlapā un mēģini vēlreiz!</div>";
            header("Refresh: 2; url=index.php");
        }
    ?>
</div>
</div>
</div>

<?php include "footer.php"; ?>