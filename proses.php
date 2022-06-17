<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <!-- css -->
    <link href="style.css" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />

    <title>My Guest Book</title>
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
<?php 
    $nama   = $_POST['nama'];
    $alamat = $_POST['alamat'];
    $email   = $_POST['email'];
    $status = $_POST['status'];
    $komentar   = $_POST['komentar'];

    $fp =fopen("guestbook.txt","a+");
    fputs($fp,"$nama|$alamat|$email|$status|$komentar\n");
    fclose($fp);
?>
    <h2 class="text-center text-success">Terima Kasih Atas Partisipasi Anda Mengisi Buku Tamu</h2><br>
      <td><a href=main.php><p class="text-secondary text-center">Isi Buku Tamu </p></a><br></td>

      <td><a href=lihat.php><p class="text-secondary text-center"> Buku Tamu </p></a><br></td>
    <!-- Footer -->
    <br><br><br><br><br><br><br><br><br>
    <br><br><br><br><br><br><br>
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
<body>
</html>