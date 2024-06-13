<!DOCTYPE html>
<html>

<?php include 'partials/head.html'; ?>

<body>
    <?php 
    include 'partials/header.html'; 
    include 'partials/nav.php'; 
    ?>

    <div class="boja">
        <section role="main" class="form-registration w-100 m-auto">
            <form enctype="multipart/form-data" action="" method="POST">
                <h1 class="h3 mb-3 fw-normal">Registracija</h1>
                
                <span id="porukaIme" class="bojaPoruke"></span>
                <div class="form-floating">
                    <input type="text" class="form-control" name="ime" id="ime" placeholder="Ime">
                    <label for="ime">Ime: </label>
                </div>

                <span id="porukaPrezime" class="bojaPoruke"></span>
                <div class="form-floating">
                    <input type="text" class="form-control" name="prezime" id="prezime" placeholder="Prezime">
                    <label for="prezime">Prezime: </label>
                </div>

                <span id="porukaUsername" class="bojaPoruke"></span>
                <?php echo '<span class="bojaPoruke">' . $msg . '</span>'; ?>
                <div class="form-floating">
                    <input type="text" class="form-control" name="username" id="username" placeholder="Username">
                    <label for="username">Korisničko ime:</label>
                </div>

                <span id="porukaPass" class="bojaPoruke"></span>
                <div class="form-floating">
                    <input type="password" class="form-control" name="pass" id="pass" placeholder="Lozinka">
                    <label for="pass">Lozinka: </label>
                </div>

                <span id="porukaPassRep" class="bojaPoruke"></span>
                <div class="form-floating">
                    <input type="password" class="form-control" name="passRep" id="passRep" placeholder="Ponovite lozinku">
                    <label for="passRep">Ponovite lozinku: </label>
                </div>

                <div class="form-item">
                    <button class="btn btn-primary w-100 py-2" type="submit" name="slanje" value="registracija" id="slanje">Registracija</button>
                </div>
            </form>

        </section>
        <script type="text/javascript">
            document.getElementById("slanje").onclick = function(event) {

                var slanjeForme = true;

                // Ime korisnika mora biti uneseno
                var poljeIme = document.getElementById("ime");
                var ime = document.getElementById("ime").value;
                if (ime.length == 0) {
                    slanjeForme = false;
                    poljeIme.style.border = "1px dashed red";
                    document.getElementById("porukaIme").innerHTML = "<br>Unesite ime!<br>";
                } else {
                    poljeIme.style.border = "1px solid green";
                    document.getElementById("porukaIme").innerHTML = "";
                }
                // Prezime korisnika mora biti uneseno
                var poljePrezime = document.getElementById("prezime");
                var prezime = document.getElementById("prezime").value;
                if (prezime.length == 0) {
                    slanjeForme = false;
                    poljePrezime.style.border = "1px dashed red";

                    document.getElementById("porukaPrezime").innerHTML = "<br>Unesite Prezime!<br>";
                } else {
                    poljePrezime.style.border = "1px solid green";
                    document.getElementById("porukaPrezime").innerHTML = "";
                }

                // Korisničko ime mora biti uneseno
                var poljeUsername = document.getElementById("username");
                var username = document.getElementById("username").value;
                if (username.length == 0) {
                    slanjeForme = false;
                    poljeUsername.style.border = "1px dashed red";

                    document.getElementById("porukaUsername").innerHTML = "<br>Unesite korisničko ime!<br>";
                } else {
                    poljeUsername.style.border = "1px solid green";
                    document.getElementById("porukaUsername").innerHTML = "";
                }

                // Provjera podudaranja lozinki
                var poljePass = document.getElementById("pass");
                var pass = document.getElementById("pass").value;
                var poljePassRep = document.getElementById("passRep");
                var passRep = document.getElementById("passRep").value;
                if (pass.length == 0 || passRep.length == 0 || pass != passRep) {
                    slanjeForme = false;
                    poljePass.style.border = "1px dashed red";
                    poljePassRep.style.border = "1px dashed red";
                    document.getElementById("porukaPass").innerHTML = "<br>Lozinke nisu iste!<br>";

                    document.getElementById("porukaPassRep").innerHTML = "<br>Lozinke nisu iste!<br>";
                } else {
                    poljePass.style.border = "1px solid green";
                    poljePassRep.style.border = "1px solid green";
                    document.getElementById("porukaPass").innerHTML = "";
                    document.getElementById("porukaPassRep").innerHTML = "";
                }

                if (slanjeForme != true) {
                    event.preventDefault();
                }
            };
        </script>
    </div>
    <?php include 'partials/footer.html'; ?>
</body>

</html>