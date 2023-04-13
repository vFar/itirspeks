<?php
    require "header.php";
?>
<div class="home">
    <h1><span class="auto-type"></span></h1>
    <hr>
</div>
<div class="box-container">
    <?php
    require("connect_db.php");
    
    $HomeaktualitateQuery = "SELECT * from aktualitates order by aktualitate_id desc limit 1";
    $HomeatlasaAktualitates = mysqli_query($savienojums, $HomeaktualitateQuery);
    $akt_virsraksts="";
    $akt_apraksts="";
    if(mysqli_num_rows($HomeatlasaAktualitates)==1 ){
    while($ieraksts = mysqli_fetch_assoc($HomeatlasaAktualitates)){
        $aktID=$ieraksts['aktualitate_id'];
        $akt_virsraksts = $ieraksts['virsraksts'];
        $akt_apraksts = $ieraksts['apraksts'];
        }
    }else{
        echo "Izveidojusies kļūda";
    }

        echo "<div class='box'>
                <h2>Jaunākā aktualitāte</h2>
                <hr>
                <a><form action='aktualitate.php' method='post'>
                <button type='submit' name='latestAktualitate' class='btn2' value=$aktID>
                <h3 id='head3'>$akt_virsraksts</h3>
                <p>$akt_apraksts</p>
                </button>
                </form></a>
            </div>";



    $HomevakanceQuery = "SELECT * from vakances order by vakance_id desc limit 1";
    $HomeatlasaVakances = mysqli_query($savienojums, $HomevakanceQuery);
    $vakID="";
    $vak_virsraksts="";
    $vak_apraksts="";
    if(mysqli_num_rows($HomeatlasaVakances)==1 ){
    while($ieraksts = mysqli_fetch_assoc($HomeatlasaVakances)){
        $vakID=$ieraksts['vakance_id'];
        $vak_virsraksts = $ieraksts['virsraksts'];
        $vak_apraksts = $ieraksts['apraksts'];
        }
    }else{
        echo "Izveidojusies kļūda";
    }
    echo "<div class='box'>
        <h2>Jaunākā vakance</h2>
        <hr>
        <form action='vakance.php' method='post'>
<button type='submit' name='latestVakance' class='btn2' value=$vakID>
        <a><h3 id='head3'>$vak_virsraksts</h3></a>
         <p>$vak_apraksts</p>
        </button>
        
 </form>
            </div>";
            ?>
            
</div>
<?php include "footer.php"; ?>