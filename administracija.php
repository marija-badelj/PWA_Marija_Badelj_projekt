<?php
session_start();
include 'partials/connect.php';
// Putanja do direktorija sa slikama
define('UPLPATH', 'img/');

$uspjesnaPrijava = false;
$admin = false;

$stmt = '';
$imeKorisnika = '';
$lozinkaKorisnika = '';
$levelKorisnika = '';

// Provjera da li je korisnik došao s login forme
if (!empty($_POST)) {
    if ($_POST['slanje'] == 'prijava') {
        // Provjera da li korisnik postoji u bazi uz zaštitu od SQL injectiona
        $prijavaImeKorisnika = $_POST['username'];
        $prijavaLozinkaKorisnika = $_POST['lozinka'];
        $sql = "SELECT korisnicko_ime, lozinka, razina FROM korisnici
    WHERE korisnicko_ime = ?";
        $stmt = mysqli_stmt_init($dbc);
        if (mysqli_stmt_prepare($stmt, $sql)) {
            mysqli_stmt_bind_param($stmt, 's', $prijavaImeKorisnika);
            mysqli_stmt_execute($stmt);
            mysqli_stmt_store_result($stmt);
        }
        mysqli_stmt_bind_result(
            $stmt,
            $imeKorisnika,
            $lozinkaKorisnika,
            $levelKorisnika
        );
        mysqli_stmt_fetch($stmt);
        //Provjera lozinke
        if (
            password_verify($_POST['lozinka'], $lozinkaKorisnika) &&
            mysqli_stmt_num_rows($stmt) > 0
        ) {
            $uspjesnaPrijava = true;

            // Provjera da li je admin
            if ($levelKorisnika == 1) {
                $admin = true;
            } else {
                $admin = false;
            }
            //postavljanje session varijabli
            $_SESSION['$username'] = $imeKorisnika;
            $_SESSION['$level'] = $levelKorisnika;
        } else {
            $uspjesnaPrijava = false;
        }   
    }
    else if ($_POST['slanje'] == 'odjava') {
        session_destroy();
        header("Location: administracija.php");
    }
    
}
// Brisanje i promijena arhiviranosti
?>

<?php
// Pokaži stranicu ukoliko je korisnik uspješno prijavljen i administrator je
if ($uspjesnaPrijava == true || isset($_SESSION['$username'])
) {
    // $query = "SELECT * FROM clanci";
    // $result = mysqli_query($dbc, $query);
    // while ($row = mysqli_fetch_array($result)) {

    //     //forma za administraciju
    // }

    include 'forma.php';

    // Pokaži poruku da je korisnik uspješno prijavljen, ali nije administrator
} else if ($uspjesnaPrijava == false) {
    include 'loginForm.php';
}
?>
