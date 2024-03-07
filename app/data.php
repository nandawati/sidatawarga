<td><img src="image/kecamatan.jpg" width="100px"></td>
<?php
include "koneksi.php";
include "boot.php";
$tampil = $konek->query("select*from data_warga");
?>
<body background="image/background.jpg" style="background-size:cover;">
    <div class="container">
        <table class="table table-bordered border-danger">
            <tr>
                <th scope="col">No</th>
                <th scope="col">Nama</th>
                <th scope="col">Jenis_kelamin</th>
                <th scope="col">Nik</th>
                <th scope="col">Alamat </th>
                <th scope="col">Waktu</th>
                <th scope="col">Aksi</th>

            </tr>
</body>
<?php
while ($s = $tampil->fetch_array()) {
    @$no++;
    echo "<tr>";
    echo "<td>$no</td>";
    echo "<td>$s[Nama]</td>";
    echo "<td>$s[Jk]</td>";
    echo "<td>$s[Nik]</td>";
    echo "<td>$s[Alamat]</td>";
    echo "<td>$s[Waktu]</td>";
?>
    <td>
        <a class='btn btn-danger' onclick="return confirm('apakah anda yakin ingin menghapus')" href='delete.php?id=<?= $s['No'] ?>'><i class='bi bi-trash'></i></a>

        <a class='btn btn-success' onclick="return confirm('apakah anda yakin ingin mengedit')" href='update.php?id=<?= $s['No'] ?>'><i class='bi bi-pencil'></i></a>

        <a class='btn btn-warning' onclick="return confirm('apakah anda yakin ingin melihat')" href='detail.php?id=<?= $s['No'] ?>'><i class='bi bi-ticket-detailed'></i></a>

    </td>

<?php
    echo "</tr>";

}
?>



</table>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">