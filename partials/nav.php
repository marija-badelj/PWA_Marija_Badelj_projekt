<nav class="navbar navbar-expand-sm justify-content-center navigacija">

  <div class="container-fluid">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" href="index.php">NASLOVNA</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="zdravlje.php">ZDRAVLJE</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="ljepota.php">LJEPOTA</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="administracija.php">ADMINISTRACIJA</a>
      </li>
        <?php if (isset($_SESSION['$username'])) { ?>
          <li>
            <form enctype="multipart/form-data" action="administracija.php" method="POST">
              <button class="btn btn-primary py-2" type="submit" id="slanje" name="slanje" value="odjava">Odjava</button>
          </form>
          </li>
        <?php } ?>
    </ul>
  </div>

</nav>