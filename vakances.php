<?php
    require "header.php";
?>
<div class="box-container">
<div class='box'>
        <h2>Piedāvātās vakances</h2>
        <hr>
    <?php
require("connect_db.php");
$vakancesQuery = "SELECT * FROM vakances";
$atlasaVakances = mysqli_query($savienojums, $vakancesQuery);

if(mysqli_num_rows($atlasaVakances)> 0 ){ #parbauda vai ir specialitates datubazeeeeeeeeeeeeee
    while($ieraksts = mysqli_fetch_assoc($atlasaVakances)){
        echo "
        <div class='vakances'>
                <div class='vak'>
                <form action='vakance.php' method='post'>
                <button type='submit' name='vakance' value={$ieraksts['vakance_id']}>
                <a>
                    <h3>{$ieraksts['virsraksts']}</h3>
                    <hr>
                <p>{$ieraksts['apraksts']}</p>
                </a>
                </button>
                </form>
                </div>
        </div>
        ";

}
}else{
    echo "Nav nevienas vakances";
}
    ?>
    </div>
</div>

<script src="script.js"></script>

<?php include "footer.php"; ?>