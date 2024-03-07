<?php
session_start();
@$user = $_SESSION['user'];
if ($user == "") {
?>
<?php
} else {
}
?>
<?php
include "boot.php";
?>
<br>
<h3>Laporan</h3>
<style>
    i {
        color: black;
    }
</style>
<form action="" method="post">
    <div class text-center mt-4>
        <div class="input-group mb-3">
            <div class="row mt-3">
                <div class="col">
                    <input type="date" name="tgl1" class="form-control" placeholder="First name" aria-label="First name">
                </div>
                <input type="date" name="tgl2" class="form-control" placeholder="Last name" aria-label="Last name">
            </div>
            <div class="col">
                <button type="submit" class="btn" style="background-color: black;" placeholder="Last name" aria label="Last name"><strong><i class="bi bi-search text-white"></i></button>
            </div>
            </fiv>
        </div>
</form>
<button class="btn" onclick="printDiv('div1')"><i class="bi bi-printer-fill fs-1"></i></button>
<div id="div1">
    <!-- yang di print -->
    <?php
    include "koneksi.php";
    @$tgl1 = $_POST['tgl1'];
    @$tgl2 = $_POST['tgl2'];

    if ($tgl1 && $tgl2) {
        // jika kedua tanggal disediakan,formatnya sesuai untuk query SQL
        // Melakukan query dengan filter tanggal
        $tampil = $konek->query("SELECT * FROM data_warga WHERE Waktu BETWEEN '$tgl1' AND '$tgl2'");
    } else {
        // Jika tanggal tidak disediakan,ambil semua catatan
        $tampil = $konek->query("select*from data_warga");
    }
    ?>

    <body background="image/background.jpg" style="background-size:cover;">
        <div class="container">
            <td><img src="image/kecamatan.jpg" width="100px"></td>

            <table class="table table-bordered border-danger">
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">Nama</th>
                    <th scope="col">Jenis_kelamin</th>
                    <th scope="col">Tempat_lahir</th>
                    <th scope="col">Tanggal_lahir</th>
                    <th scope="col">Nik</th>
                    <th scope="col">Alamat</th>
                    <th scope="col">Desa</th>
                    <th scope="col">Kecamatan</th>
                    <th scope="col">Kabupaten_kota</th>
                    <th scope="col">Provinsi</th>
                    <th scope="col">Alamat_tujuan_pindah</th>
                    <th scope="col">Desa_tujuan</th>
                    <th scope="col">Kecamatan_tujuan</th>
                    <th scope="col">Kabupaten_kota_tujuan</th>
                    <th scope="col">Provinsi_tujuan</th>

                    <th scope="col">Waktu</th>


                </tr>
    </body>

    <?php

    while ($s = $tampil->fetch_array()) {
        @$no++;
        echo "<tr>";
        echo "<td>$no</td>";
        echo "<td>$s[Nama]</td>";
        echo "<td>$s[Jk]</td>";
        echo "<td>$s[Tempat_lahir]</td>";
        echo "<td>$s[Tanggal_lahir]</td>";
        echo "<td>$s[Nik]</td>";
        echo "<td>$s[Alamat]</td>";
        echo "<td>$s[Desa]</td>";
        echo "<td>$s[Kecamatan]</td>";
        echo "<td>$s[Kabupaten_kota]</td>";
        echo "<td>$s[Provinsi]</td>";
        echo "<td>$s[Alamat_tujuan_pindah]</td>";
        echo "<td>$s[Desa_tujuan]</td>";
        echo "<td>$s[Kecamatan_tujuan]</td>";
        echo "<td>$s[Kabupaten_kota_tujuan]</td>";
        echo "<td>$s[Provinsi_tujuan]</td>";
        echo "<td>$s[Waktu]</td>";
    ?>
    <?php
        echo "</tr>";
    }

    ?>

    </table>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

    <!-- tutup halaman yang di print -->

</div>
<script>
    function printDiv(el) {
        var a = document.body.innerHTML;
        var b = document.getElementById(el).innerHTML;
        document.body.innerHTML = b;
        window.print();
        document.body.innerHTML = b;
    }
</script>