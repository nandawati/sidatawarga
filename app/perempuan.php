<?php
include "boot.php";
include "koneksi.php";
$tampi2 = $konek->query("select*from data_warga where Jk='perempuan'");
?>
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
        <th scope="col">Aksi</th>

    </tr>

    <?php
    while ($s = $tampi2->fetch_array()) {
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