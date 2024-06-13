<!DOCTYPE html>
<html>

<?php include 'partials/head.html';
session_start();
?>

<body>
    <?php 
    include 'partials/header.html'; 
    include 'partials/nav.php';
    include 'partials/connect.php';
    define('UPLPATH', 'img/');
    $query = "SELECT * FROM clanci ORDER BY id DESC LIMIT 1 ";
    $result = mysqli_query($dbc, $query);
    $row = mysqli_fetch_array($result)
    ?>
    <div class="d-flex justify-content-center main">
        <div class="clanak">
            <section role="main">
                <div class="row">
                    <p class="category">
                        <?php
                        echo "<span>".$row['kategorija']."</span>";
                        ?>
                    </p>
                    <h1 class="title">
                        <?php
                        echo "<span>".$row['naslov']."</span>";
                        ?>
                    </h1>
                </div>
                <section class="about">
                    <p>
                        <?php
                        echo "<span>".$row['sazetak']."</span>";
                        ?>
                    </p>
                </section>
                <?php echo "<span>".$row['datum']."</span>"; ?>
                </br></br>
                <section>
                    <?php
                    echo '<img src="' . UPLPATH . $row['slika'] . '">';
                    ?>
                </section>
                </br></br>
                <section class="sadrzaj">
                    <p>
                        <?php
                        echo "<span>".$row['tekst']."</span>";
                        ?>
                    </p>
                </section>
            </section>
        </div>
    </div>
    <?php include 'partials/footer.html'; ?>
</body>

</html>