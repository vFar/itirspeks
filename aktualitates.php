<?php
    require "header.php";
?>
<div class="box-container">
<div class='box'>
    <h2>Piedāvātās aktualitātes</h2>
        <hr>
<?php
        require("connect_db.php");
$aktualitatesQuery = "SELECT * FROM aktualitates";
$atlasaAktualitates = mysqli_query($savienojums, $aktualitatesQuery);

if(mysqli_num_rows($atlasaAktualitates)> 0 ){ #parbauda vai ir specialitates datubazeeeeeeeeeeeeee
    while($ieraksts = mysqli_fetch_assoc($atlasaAktualitates)){
        echo "
                <div class='vakances'>
                <div class='vak'>
                <form action='aktualitate.php' method='post'>
                <button type='submit' name='aktualitate' class='btn' value={$ieraksts['aktualitate_id']}>
                 <a>
                    <h3>{$ieraksts['virsraksts']}</h3>
                    <hr>
                <p>{$ieraksts['apraksts']}</p>
                </a>
                </button>
                </form>
                </div>
                 
        </div>
         "
        ;

}
}else{
    echo "Kļūda";
}
    ?>
    </div>
</div>
<script src="script.js"></script>

<?php include "footer.php"; ?>