<?php 
require 'function.php';
if(isset($_POST['submit'])){
  $nama = $_POST['nama'];
  $alamat = $_POST['alamat'];
  $status = $_POST['status'];
  $komentar = $_POST['komentar'];

  $cekdatabase = mysqli_query($conn,"SELECT * FROM nama='$nama' and alamat='$alamat' and status='$status' and komentar='$komentar'");
}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <!-- css -->
    <link href="style.css" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />

    <title>Selamat Datang</title>
  </head>
  <body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark center shadow" style="background-color: rgb(28, 60, 238)">
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
    <h1 class="text-center">Selamat Datang</h1>
    <div class="text-center">
      <strong class="text-secondary"><font size="6" face="Courier New,Courier,mono">Masukan Identitas Anda</font></strong>
    </div>
    <form name="form1" method="post" action="proses.php">
      <table widht="58%" border="0" align="center">
        <tr>
          <td>Nama Lengkap</td>
          <td><input name="nama" type="text" id="nama" /></td>
        </tr>

        <tr>
          <td>Alamat</td>
          <td><input name="alamat" type="text" id="alamat" /></td>
        </tr>

        <tr>
          <td>E-Mail</td>
          <td><input name="email" type="text" id="email" /></td>
        </tr>

        <tr>
          <td>Status</td>
          <td>
            <select name="status" id="status">
              <option value="menikah">Menikah</option>
              <option value="single">Single</option>
            </select>
          </td>
        </tr>

        <tr>
          <td>Komentar</td>
          <td><textarea name="komentar" id="komentar"></textarea></td>
        </tr>

        <tr>
          <td>&nbsp;</td>
          <td><button class="btn btn-primary" type="submit" name="submit" value="Kirim">Kirim</button>&nbsp;&nbsp;&nbsp;<button class="btn btn-danger" type="reset" name="submit2" value="Batal">Batal</button></td>
        </tr>
      </table>
    </form>

    <div align="center">
      <strong><a href="lihat.php">::Lihat Buku Tamu:: </a></strong>
    </div>
    <br /><br /><br />
    <br /><br /><br />
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
