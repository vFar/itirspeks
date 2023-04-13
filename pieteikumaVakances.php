<?php
    require "header.php";
?>
<div class="box-container">
    <div class="box">
    <table class="pietVakances">
                <tr>
                    <th>Vārds</th>
                    <th>Uzvārds</th>
                    <th>Tālrunis</th>
                    <th>E-pasts</th>
                    <th>Adrese</th>
                    <th>CV</th>
                    <th>Statuss</th>
                    <th>Mainīt statusu</th>
                    <th></th>
                </tr>

                <?php
require "connect_db.php";

if(isset($_POST['submit'])) {
    $pieteikuma_id = $_POST['pieteikuma_id'];
    $status = $_POST['status'];
    
    $update_status_sql = "UPDATE pieteiktavakance SET statuss='$status' WHERE pieteikuma_id='$pieteikuma_id'";
    mysqli_query($savienojums, $update_status_sql);

    echo"Viss veiksmīgi";
   header("Refresh:3");
}

$pieteiktasVakancesSQL = "SELECT * FROM pieteiktavakance";
$atlasa_pieteikumus = mysqli_query($savienojums, $pieteiktasVakancesSQL);

while($ieraksts = mysqli_fetch_assoc($atlasa_pieteikumus)){
    if(empty($ieraksts['vak_cv'])){
        $cv = "<i class='fas fa-times'></i>";
    }else{
        $cv = "<i class='fas fa-check'></i>";
    }
    echo "
        <tr>
            <td>{$ieraksts['vards']}</td>
            <td>{$ieraksts['uzvards']}</td>
            <td>{$ieraksts['talrunis']}</td>
            <td>{$ieraksts['epasts']}</td>
            <td>{$ieraksts['adrese']}</td>
            <td>$cv</td>
            <td>{$ieraksts['statuss']}</td>
            <td>
                <form action='' method='post'>
                    <input type='hidden' name='pieteikuma_id' value='{$ieraksts['pieteikuma_id']}' />
                    <div>
                        <input type='radio' name='status' value='Neapskatīts' " . ($ieraksts['statuss'] == 'Neapskatīts' ? 'checked' : '') . "/>
                        <label for='Neapskatīts'>Neapskatīts</label>
                    </div>
                    <div>
                        <input type='radio' name='status' value='Skatīts' " . ($ieraksts['statuss'] == 'Skatīts' ? 'checked' : '') . "/>
                        <label for='Skatīts'>Skatīts</label>
                    </div>
                    <div>
                        <input type='radio' name='status' value='Pieņemts' " . ($ieraksts['statuss'] == 'Pieņemts' ? 'checked' : '') . "/>
                        <label for='Pieņemts'>Pieņemts</label>
                    </div>
                    <div>
                        <input type='radio' name='status' value='Nepieņemts' " . ($ieraksts['statuss'] == 'Nepieņemts' ? 'checked' : '') . "/>
                        <label for='Nepieņemts'>Nepieņemts</label>
                    </div>
                    </td>
                    <td>
                    <button type='submit' name='submit' class='btn'}>
                        Mainīt
                    </button>
                </form>
            </td>
        </tr>
    ";
}
?>

            </table>
    </div>
</div>

<?php include "footer.php"; ?>