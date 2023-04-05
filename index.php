<?php
    require "header.php";
?>

<?php
					if(isset($_POST["login"])){
                        require("connect_db.php");

                        session_start();
                        $lietotajvards = mysqli_real_escape_string($savienojums, $_POST['username']);
                        $Parole = mysqli_real_escape_string($savienojums, $_POST['password']);

                        $sqlVaicajums = "SELECT * FROM lietotaji WHERE lietotajvards = '$lietotajvards'";
                        $rezultats = mysqli_query($savienojums, $sqlVaicajums);


                    if(mysqli_num_rows($rezultats) == 1){
                        while($row = mysqli_fetch_array($rezultats)){
                            if(password_verify($Parole, $row["Parole"])){
                                $_SESSION["lietotajvards"] = $email;
                                header("location:index.php");
                            }else{
                                echo "<br>Nepareizs lietotājvārds vai parole!";
                            }
                        }
                    }else{
                        echo "Nepareizs lietotājvārds un/vai parole!";
                    }
                }
				?>
                

<div class="home">
    <h1><span class="auto-type"></span></h1>
    <hr>
</div>

<div class="box-container">
    <div class="box">
<h2>Jaunākā aktualitāte</h2>
<hr>
<a href="aktualitate.html"><h3 id="head3">Kas jauns MySQL</h3></a>
<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Natus nam distinctio autem molestiae fugiat ratione consequatur facere laborum rerum quo obcaecati eveniet maxime architecto voluptate iusto odit amet, dignissimos exercitationem quam error nesciunt dolorem expedita non! Voluptas iure suscipit rem earum eveniet consequatur doloremque minus repellendus laboriosam, quia ratione quos!</p>
    </div>

    <div class="box">
        <h2>Jaunākā vakance</h2>
        <hr>
        <a href="vakance.html"><h3 id="head3">Darbs Liepājas Valsts tehnikumā</h3></a>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. In quod voluptates suscipit laudantium harum maxime accusantium consectetur molestias maiores sint, quibusdam ex aliquid voluptatibus facilis eaque cumque nam nulla ut, illum excepturi ratione porro expedita. Nihil, eius exercitationem non suscipit labore illum aut hic excepturi veniam, nam tempore esse minus.</p>
            </div>
</div>

<?php include "footer.php"; ?>