<?php
    require "header.php";
?>
<div class="box-container">
    <?php
    if($_SERVER['REQUEST_METHOD'] == 'POST'){
require "connect_db.php";

$vakanceID = "";
if(isset($_POST['vakance'])){
    $vakanceID=$_POST['vakance'];
}elseif(isset($_POST['latestVakance'])){
    $vakanceID = $_POST['latestVakance'];
}
$vakQuery="SELECT * FROM vakances WHERE vakance_id=$vakanceID";
$vakSavienojums=mysqli_query($savienojums, $vakQuery);

while($ieraksts = mysqli_fetch_assoc($vakSavienojums)){


   echo  "<div class='box'>
<h2 id='ind'>{$ieraksts['virsraksts']}</h2>
<hr>
<p class='cont'>{$ieraksts['apraksts']}</p>
<div class='authDate'>
<p>Datums: {$ieraksts['datums']}</p>
<p><form action='vakancesAnketa.php' method='post'><button type='submit' name='pieteikties' id = 'vakBTN' class='btn' value='{$ieraksts['vakance_id']}'>Pieteikties</button</p>
</div>";
}
}else{
    echo "Kļūūda";
}
    ?>
</div>
</div>
<?php include "footer.php"; ?>