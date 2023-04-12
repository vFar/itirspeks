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
                    <th> </th>
                </tr>

                <?php
                    require "connect_db.php";
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
                                    <form action='audzeknis.php' method='post'>
                                        <button type='submit' name='apskatit' value='{$ieraksts['pieteikuma_id']}' class='btn2'>
                                            <i class='fas fa-edit'></i>
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