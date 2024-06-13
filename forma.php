<!DOCTYPE html>
<html>

<?php include 'partials/head.html'; 
include 'partials/connect.php';
?>


<body class="boja">
    <?php
    include 'partials/header.html';
    include 'partials/nav.php';
    ?>
    <?php if (isset($_SESSION['$level']) && $_SESSION['$level'] == 1) { ?>
        <a href="upravljanje.php"><h4 style="text-align:center; margin-top:30px; color:indigo;">Upravljanje objavama</h4></a>
    <?php } ?>

    <h2 style="text-align:center; margin-top:30px; color:indigo;">Nova objava</h2>
    <div class="d-flex justify-content-center">
        <form enctype="multipart/form-data" action="formaAction.php" method="POST">
            <div class="form-item">
                <label for="title">Naslov vijesti:</label><br>
                <div class="form-field">
                    <input type="text" id="title" name="title" class="form-field-textual">
                    <div id="porukaTitle" style="color:red;"></div>
                </div>
            </div>
            <div class="form-item">
                <label for="about">Kratki sadržaj vijesti (do 100 znakova):</label><br>
                <div class="form-field">
                    <textarea name="about" id="about" cols="100" rows="10" class="form-field-textual"></textarea>
                    <div id="porukaAbout" style="color:red;"></div>
                </div>
            </div>
            <div class="form-item">
                <label for="content">Sadržaj vijesti:</label><br>
                <div class="form-field">
                    <textarea name="content" id="content" cols="100" rows="30" class="form-field-textual"></textarea>
                    <div id="porukaContent" style="color:red;"></div>
                </div>
            </div>
            <div class="form-item">
                <label for="photo">Slika: </label><br>
                <div class="form-field">
                    <input type="file" accept="image/jpg,image/gif" class="input-text" name="photo" id="photo" />
                    <div id="porukaSlika" style="color:red;"></div>
                </div>
            </div>
            <div class="form-item">
                <label for="category">Kategorija vijesti:</label><br>
                <div class="form-field">
                    <select name="category" id="category" class="form-field-textual">
                        <option value="" selected>Odaberite kategoriju</option>
                        <option value="Zdravlje">Zdravlje</option>
                        <option value="Ljepota">Ljepota</option>
                    </select>
                    <div id="porukaKategorija" style="color:red;"></div>
                </div>
            </div>
            <div class="form-item">
                <label>Spremiti u arhivu:
                    <div class="form-field">
                        <input type="checkbox" name="archive" id="archive">
                    </div>
                </label>
            </div>
            <div class="form-item">
                <button style="width:fit-content;" type="reset" value="Poništi">Poništi</button>
                <button style="width:fit-content;" type="submit" id="submit" name="submit" value="Prihvati">Prihvati</button>
            </div>
        </form>
    </div>
    <script type="text/javascript">
        // Provjera forme prije slanja
        document.getElementById("submit").onclick = function(event) {
            var slanjeForme = true;
            // Naslov vjesti (5-30 znakova)
            var poljeTitle = document.getElementById("title");
            var title = document.getElementById("title").value;
            if (title.length < 5 || title.length > 200) {
                slanjeForme = false;
                poljeTitle.style.border = "1px dashed red";
                document.getElementById("porukaTitle").innerHTML = "Naslov vijesti mora imati između 5 i 200 znakova!<br>";
            } else {
                poljeTitle.style.border = "1px solid green";
                document.getElementById("porukaTitle").innerHTML = "";
            }
            // Kratki sadržaj (10-100 znakova)
            var poljeAbout = document.getElementById("about");
            var about = document.getElementById("about").value;
            if (about.length < 10 || about.length > 100) {
                slanjeForme = false;
                poljeAbout.style.border = "1px dashed red";
                document.getElementById("porukaAbout").innerHTML = "Kratki sadržaj mora imati između 10 i 100 znakova!<br>";
            } else {
                poljeAbout.style.border = "1px solid green";
                document.getElementById("porukaAbout").innerHTML = "";
            }
            // Sadržaj mora biti unesen
            var poljeContent = document.getElementById("content");
            var content = document.getElementById("content").value;
            if (content.length == 0) {
                slanjeForme = false;
                poljeContent.style.border = "1px dashed red";
                document.getElementById("porukaContent").innerHTML = "Sadržaj mora biti unesen!<br>";
            } else {
                poljeContent.style.border = "1px solid green";
                document.getElementById("porukaContent").innerHTML = "";
            }
            // Slika mora biti unesena
            var poljeSlika = document.getElementById("photo");
            var photo = document.getElementById("photo").value;
            if (photo.length == 0) {
                slanjeForme = false;
                poljeSlika.style.border = "1px dashed red";
                document.getElementById("porukaSlika").innerHTML = "Slika mora biti unesena!<br>";
            } else {
                poljeSlika.style.border = "1px solid green";
                document.getElementById("porukaSlika").innerHTML = "";
            }
            // Kategorija mora biti odabrana
            var poljeCategory = document.getElementById("category");
            if (document.getElementById("category").selectedIndex == 0) {
                slanjeForme = false;
                poljeCategory.style.border = "1px dashed red";
                document.getElementById("porukaKategorija").innerHTML = "Kategorija mora biti odabrana!<br>";
            } else {
                poljeCategory.style.border = "1px solid green";
                document.getElementById("porukaKategorija").innerHTML = "";
            }
            if (slanjeForme != true) {
                event.preventDefault();
            }
        };
    </script>
    <?php include 'partials/footer.html'; ?>
</body>

</html>
