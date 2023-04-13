<?php
    require "header.php";
?>
<div class="box-container">
<?php
    if($_SERVER['REQUEST_METHOD'] == 'POST'){
require "connect_db.php";
$aktualitateID = "";
if(isset($_POST['aktualitate'])){
    $aktualitateID=$_POST['aktualitate'];
}elseif(isset($_POST['latestAktualitate'])){
    $aktualitateID = $_POST['latestAktualitate'];
}

$aktQuery="SELECT * FROM aktualitates WHERE aktualitate_id=$aktualitateID";
$aktSavienojums=mysqli_query($savienojums, $aktQuery);

while($ieraksts = mysqli_fetch_assoc($aktSavienojums)){


   echo  "<div class='box'>
<h2>{$ieraksts['virsraksts']}</h2>
<hr>
<p class='cont'>{$ieraksts['apraksts']}</p>
<div class='authDate'>
<p>Datums: {$ieraksts['datums']}</p>
<p>Autors: {$ieraksts['autors']}</p>
</div>";
}
}else{
    echo "Kļūūda";
}
    ?>
    </div>
</div>
<?php include "footer.php"; ?>