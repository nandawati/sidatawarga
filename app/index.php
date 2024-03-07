<?php
session_start();
$user=$_SESSION['user' ];
if(!isset($user)){
 ?>
    <script>
    document.location.href= '../index.php';
    </script>
<?php
}else { 
include "boot.php";
?>

<body background="image/background.jpg" style="background-size:cover;">
<div class="container">

    <!-- ini bagian navbar -->
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
<div class="container-fluid">
<td><img src="image/kecamatan.jpg" width="100px"></td>
    <a class="navbar-brand" href="#">INPUT DATA SURAT KETERANGAN PINDAH</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
    <a class="nav-link active" aria-current="page" href="#"></a>
        </li>
        <li class="nav-item">
    <a class="nav-link" href="#"></a>
        </li>
        <li class="nav-item dropdown">
    
        <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="#"></a></li>
            <li><a class="dropdown-item" href="#"></a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#"></a></li>
        </ul>
        </li>
        <li class="nav-item">
    <a class="nav-link disabled" aria-disabled="true"></a>
        </li>
    </ul>
    <form class="d-flex" role="search" action="cari.php" method="POST" target="konten">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search" name="cari">
        <button class="btn btn-outline-success" type="submit">Search</button>
    </form>
    <div class="dropdown">
  <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
    akun
  </button>
  <ul class="dropdown-menu">
  <ul class="Akun">
    <li><a class="dropdown-item" href="#"><?=$user?></a></li>
    
</div>
   </div>
</div>
</nav>
    <!-- ini penutup navbar -->



    <!-- halaman -->

    <div class="row">
        <div class="col col-3 ">
            <ul class="list-group">
                <a href="dashboard.php" target="konten">
                <li class="list-group-item">Dashboard</li>
                </a>
                <a href="input.php" target="konten">
                <li class="list-group-item">Input Data Warga</li>
                </a>
                <a href="data.php" target="konten">
                <li class="list-group-item">Data Warga</li>
                </a>
                <a href="Laporan.php" target="konten">
                <li class="list-group-item">Laporan</li>
                <a href="logout.php" >
                <li class="list-group-item">logout</li>
                </a>
            </ul>
        </div>

    <div class="col">
    <iframe src="dashboard.php" name="konten" frameborder="0" width="100%" height="700"></iframe>  
</div>
</div>    
    <!-- tutup halaman -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
 
</html>
</body>
<?php
}
?>

