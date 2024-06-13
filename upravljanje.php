<!DOCTYPE html>
<html>
<?php
include 'partials/connect.php';
include 'partials/head.html';
session_start(); ?>

<body class="boja">
    <?php
    include 'partials/header.html';
    include 'partials/nav.php'; ?>
    <div class="vijesti">
        <section>
        <?php
            define('UPLPATH', 'img/');
            $query = "SELECT * FROM clanci";
            $result = mysqli_query($dbc, $query);
            while ($row = mysqli_fetch_array($result)) {
                echo
                    '<form enctype="multipart/form-data" method="POST">
                    <div class="form-item">
                        <label for="title">Naslov vjesti:</label>
                        <div class="form-field">
                            <input type="text" name="title" class="form-field-textual" value="' . $row['naslov'] . '">
                        </div>
                    </div>
                    <div class="form-item">
                        <label for="about">Kratki sadržaj vijesti (do 100 znakova):</label>
                        <div class="form-field">
                            <textarea name="about" id="about" cols="30" rows="10" class="form-field-textual">' . $row['sazetak'] . '</textarea>
                        </div>
                    </div>
                    <div class="form-item">
                        <label for="content">Sadržaj vijesti:</label>
                        <div class="form-field">
                            <textarea name="content" id="content" cols="30" rows="10" class="form-field-textual">' . $row['tekst'] . '</textarea>
                        </div>
                    </div>
                    <div class="form-item">
                        <label for="pphoto">Slika:</label>
                        <div class="form-field">
                            <input type="file" class="input-text" id="photo" value="' . $row['slika'] . '" name="photo" /> <br><img src="' . UPLPATH . $row['slika'] . '" style="width:200px;">
                        </div>
                    </div>
                    <div class="form-item">
                        <label for="category">Kategorija vijesti:</label>
                        <div class="form-field">
                            <select name="category" id="category" class="form-field-textual" value="' . $row['kategorija'] . '">

                                <option value="" selected>Odaberite kategoriju</option>
                                <option value="zdravlje">Zdravlje</option>
                                <option value="ljepota">Ljepota</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-item">
                        <label>Spremiti u arhivu:
                            <div class="form-field">';
                if ($row['arhiva'] == 0) {
                    echo '<input type="checkbox" name="archive" id="archive" /> Arhiviraj?';
                } else {
                    echo '<input type="checkbox" name="archive" id="archive" checked /> Arhiviraj?';
                }
                echo 
                    '<div class="form-item gumbi">
                        <input type="hidden" name="id" class="form-field-textual" value="' . $row['id'] . '">
                        <button style="width:fit-content;" type="reset" value="Poništi">Poništi</button>
                        <button style="width:fit-content;" type="submit" name="update" value="update">Izmjeni</button>
                        <button style="width:fit-content;" type="submit" name="delete" value="Izbriši">Izbriši</button>
                    </div>
                    </form>';
                if (isset($_POST['delete'])) {
                    $id = $_POST['id'];
                    $query = "DELETE FROM clanci WHERE id=$id ";
                    $result = mysqli_query($dbc, $query);
                    include 'upravljanje.php';
                }
                if (isset($_POST['update'])) {
                    $id = $_POST['id'];
                    $picture = $_FILES['photo']['name'];
                    $title = $_POST['title'];
                    $about = $_POST['about'];
                    $content = $_POST['content'];
                    $category = $_POST['category'];
                    if (isset($_POST['archive'])) {
                        $archive = 1;
                    } else {
                        $archive = 0;
                    }
                    $target_dir = 'img/' . $picture;
                    move_uploaded_file($_FILES["photo"]["tmp_name"], $target_dir);
                    $query = "UPDATE clanci SET naslov='$title', sazetak='$about', tekst='$content',slika='$picture', kategorija='$category', arhiva='$archive' WHERE id=$id ";
                    $result = mysqli_query($dbc, $query);
                    echo "Izmjena zabilježena";
                }

            }
        ?>
        </section>
    </div>
</body>

</html>