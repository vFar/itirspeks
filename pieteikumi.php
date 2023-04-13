<?php
    require "header.php";
?>
 
<div class = "box-container">
<div class="box">
<div class="row">
<form action="aktualitatesCRUD.php" method="post">
    <button type=submit name="aktCRUD" class="btn">Visas aktualitātes</button>
</form>
<form action="vakancesCRUD.php" method="post">
    <button type=submit name="vakCRUD" class="btn">Visas vakances</button>
</form>
<form action="pieteikumaVakances.php" method="post">
    <button type=submit name="pietVak" class="btn">Lietotāju pieteikumi</button>
</form>
</div>
</div>

</div>


<?php include "footer.php"; ?>