<!DOCTYPE html>
<html>

<?php include 'partials/head.html'; ?>

<body>
    <?php 
    include 'partials/header.html'; 
    include 'partials/nav.php'; 
    ?>
    <div class="boja">
        <main class="form-signin w-100 m-auto">
            <form enctype="multipart/form-data" action="" method="POST">
                <h1 class="h3 mb-3 fw-normal">Molimo prijavite se</h1>

                <div class="form-floating">
                    <input type="text" class="form-control" name="username" id="username" placeholder="Korisničko ime">
                    <label for="username">Korisničko ime</label>
                </div>
                <div class="form-floating">
                    <input type="password" class="form-control" name="lozinka" id="lozinka" placeholder="Lozinka">
                    <label for="lozinka">Lozinka</label>
                </div>

                <button class="btn btn-primary w-100 py-2" type="submit" id="posalji" name="slanje" value="prijava">Prijava</button>
            </form>
            <a class="registration-link" href="registracija.php">Nemate račun? Registrirajte se</a>
        </main>
    </div>
    <?php include 'partials/footer.html'; ?>

    <script type="text/javascript">
            document.getElementById("posalji").onclick = function(event) {

                var slanjeForme = true;

                // Korisničko ime mora biti uneseno
                var poljeUsername = document.getElementById("username");
                var username = document.getElementById("username").value;
                if (username.length == 0) {
                    slanjeForme = false;
                    poljeUsername.style.border = "1px dashed red";
                    echo "<br>Unesite korisničko ime!<br>";
                } else {
                    poljeUsername.style.border = "1px solid green";
                }

                // Password mora biti uneseno
                var poljeLozinka = document.getElementById("lozinka");
                var lozinka = document.getElementById("lozinka").value;
                if (lozinka.length == 0) {
                    slanjeForme = false;
                    poljeLozinka.style.border = "1px dashed red";

                    echo "<br>Unesite korisničko ime!<br>";
                } else {
                    poljeLozinka.style.border = "1px solid green";
                }

                if (slanjeForme != true) {
                    event.preventDefault();
                }
            };
        </script>
</body>

</html>