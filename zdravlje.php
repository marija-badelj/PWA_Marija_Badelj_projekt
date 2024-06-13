<!DOCTYPE html>
<html>

<?php 
include 'partials/head.html';
session_start();
?>

<body>
    <?php 
    include 'partials/header.html'; 
    include 'partials/nav.php'; 
    include 'partials/connect.php';
    define('UPLPATH', 'img/');

    ?>
    <div class="boja">
        <div class="zdravlje"></br></br>
                <section>
                    <?php
                    $query = "SELECT * FROM clanci WHERE arhiva=0 AND kategorija='zdravlje' ORDER BY id DESC ";
                    $result = mysqli_query($dbc, $query);
                    $i = 0;
                    while ($row = mysqli_fetch_array($result)) {
                        echo '<article>
                        <img src="' . UPLPATH . $row['slika'] . '">
                        <div class="media_body">
                        <a href="clanak.php" id=' . $row['id'] . '">
                        ' . $row["naslov"] . '
                        </br></a></h4>
                        ' . $row["sazetak"] . '
                        </br></br>
                        <p>' . $row["datum"] . '</p>
                        </div>
                        </article>';
                    } ?>
                </section>
            </div>
    </div>
    <?php include 'partials/footer.html';?>
</body>

</html>