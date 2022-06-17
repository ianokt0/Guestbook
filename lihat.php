<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <!-- css -->
        <link href="style.css" rel="stylesheet" />
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />

    </head>
    <body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark center shadow" style="background-color: rgb(33, 55, 179)">
      <div class="container-fluid">
        <a class="navbar-brand" href="#">Menu</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
          <ul class="navbar-nav ms-auto">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="#">Konten</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Berita</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Tranding</a>
            </li>
            <!-- dropdown -->
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false"> Selengkapnya </a>
              <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink" style="background-color: rgba(65, 154, 255, 0.781)">
                <li><a class="dropdown-item" href="#">Film</a></li>
                <li><a class="dropdown-item" href="#">Buku</a></li>
                <li><a class="dropdown-item" href="#">Game</a></li>
              </ul>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <!-- akhir navbar -->
    <h1 class="text-center text-secondary">Daftar Tamu</h1>       
<?php 
    echo "<head><title>My Guest Book</title></head>";
    $fp = fopen("guestbook.txt","r");
    echo "<table broder=0>";

    while ($isi = fgets($fp,80))
    {
        $pisah = explode("|",$isi);
        echo "<tr><td>Nama</td><td>:$pisah[0]</td></tr>";
        echo "<tr><td>Alamat</td><td>:$pisah[1]</td></tr>";
        echo "<tr><td>Email</td><td>:$pisah[2]</td></tr>";
        echo "<tr><td>Status</td><td>:$pisah[3]</td></tr>";
        echo "<tr><td>Komentar</td><td>:$pisah[4]</td></tr>
        <tr><td>&nbsp;<hr></td><td>&nbsp;<hr></td></tr>";
    }
    echo "</table>";
    echo "<a href=main.php>Klik Disini </a> Isi Form Buku Tamu";

?>
<br><br><br>
<!-- Footer -->
<section id="footer">
      <div class="container">
        <div class="row">
          <div class="col-6">
            <p class="bcolor text-center">
              Dunia Percodingan<br />
              Salam Sejahtera
            </p>
          </div>
          <div class="col-6">
            <p class="text-center bcolor">
              Instagram <a href="https://www.instagram.com/ianokt0/">Ianokt0</a> <br />
              Facebook <a href="https://www.facebook.com/naifatko/">Ian Oktafian</a>
            </p>
            <br />
          </div>
        </div>
      </div>
    </section>
    <!-- Akhir Footer -->
    </body>
</html>