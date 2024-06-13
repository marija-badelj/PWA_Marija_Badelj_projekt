<!DOCTYPE html>
<html>

<?php include 'partials/head.html';
session_start();
?>

<body>
    <?php 
    include 'partials/header.html'; 
    include 'partials/nav.php'; 
    ?>
    <div class="d-flex justify-content-center main">
        <div class="clanak">
            <?php
            include 'partials/connect.php';
            $title = $_POST['title'];
            $category = $_POST['category'];
            $image = $_FILES['photo']['name'];
            $about = $_POST['about'];
            $content = $_POST['content'];
            $date = date("d-m-Y H:i:s");
            if (isset($_POST['archive'])) {
                $archive = 1;
            } else {
                $archive = 0;
            }
            $target_dir = 'img/' . $image;
            move_uploaded_file($_FILES["photo"]["tmp_name"], $target_dir);
            $query = "INSERT INTO Clanci (datum, naslov, sazetak, tekst, slika, kategorija, arhiva ) VALUES ('$date', '$title', '$about', '$content', '$image', '$category', '$archive')";
            $result = mysqli_query($dbc, $query) or die('Error querying databese.');
            mysqli_close($dbc);
            ?>
            <section role="main">
                <div class="row">
                    <p class="category">
                        <?php
                        echo $category;
                        ?>
                    </p>
                    <h1 class="title">
                        <?php
                        echo $title;
                        ?>
                    </h1>
                </div>
                <section class="about">
                    <p>
                        <?php
                        echo $about;
                        ?>
                    </p>
                </section>
                <?php echo $date; ?>
                </br></br>
                <section>
                    <?php
                    echo "<img src='img/$image' class='slika'>";
                    ?>
                </section>
                </br></br>
                <section class="sadrzaj">
                    <p>
                        <?php
                        echo $content;
                        ?>
                    </p>
                </section>
            </section>
        </div>
    </div>
    <?php include 'partials/footer.html'; ?>
</body>

</html>