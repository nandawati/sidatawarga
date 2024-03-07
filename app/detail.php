<button class="btn" onclick="printDiv('div1')"><i class="bi bi-printer-fill fs-1"></i></button>
<div id="div1">
    <!-- yang di print -->
    <html>

    <head>
        <title>KOP SURAT</title>
        <style type="text/css">
            body {
                font-family: arial;
                background-color: #ccc
            }

            .rangkasurat {
                width: 780px;
                margin: 0 auto;
                background-color: #fff;
                height: 500px;
                padding: 20px;
            }

            .hitam {
                border-bottom: 5px solid #000;
                padding: 2px;
                width: 700px;
                positon: absolute;
            }

            .tengah {
                text-align: center;
                line-height: 5px;
            }
        </style>
    </head>

    <body>
        <div class="rangkasurat">
            <table width="100px">
                <tr>
                    <img src="image/kecamatan.jpg" width="100">
                    <div class="tengah">
                        <h4>PEMERINTAH KABUPATEN BANDUNG BARAT</h4>
                        <h4>KECAMATAN RONGGA</h4>
                        <p>Jalan Raya Bojong Nomor 01 Telepon (022) 5950080 Kode Pos 40565</p>
                    </div>
        </div>
        </tr>
        <tr>
            <td>
                <div class="hitam">
            </td>
        </tr>
        </table>

        <div class="text-center col-15">
            <u>
                <h3>SURAT KETERANGAN PINDAH</h3>
            </u>
        </div>
        <div class="text-center col-7">
            <p>Berdasarkan surat keterangan pindah menegaskan bahwa :
            <p>
        </div>

        <?php
        include "koneksi.php";
        include "boot.php";
        $no = $_GET['id'];
        $tampil = $konek->query("select*from data_warga where No='$no'");
        $d = $tampil->fetch_array()
        ?>
        <div class="container mt-4">
            <table>
                <tr>
                    <td>Nama</td>
                    <td>:</td>
                    <td><?= $d['Nama']; ?></td>
                </tr>
                <tr>
                    <td>Jk</td>
                    <td>:</td>
                    <td><?= $d['Jk']; ?></td>
                </tr>
                <tr>
                    <td>Tempat_lahir</td>
                    <td>:</td>
                    <td><?= $d['Tempat_lahir']; ?></td>
                </tr>
                <tr>
                    <td>Tanggal_lahir</td>
                    <td>:</td>
                    <td><?= $d['Tanggal_lahir']; ?></td>
                </tr>
                <tr>
                    <td>Nik</td>
                    <td>:</td>
                    <td><?= $d['Nik']; ?></td>
                </tr>
                <tr>
                    <td>Alamat</td>
                    <td>:</td>
                    <td><?= $d['Alamat']; ?></td>
                </tr>
                <tr>
                    <td>Desa</td>
                    <td>:</td>
                    <td><?= $d['Desa']; ?></td>
                </tr>
                <tr>
                    <td>Kecamatan</td>
                    <td>:</td>
                    <td><?= $d['Kecamatan']; ?></td>
                </tr>
                <tr>
                    <td>Kabupaten_kota</td>
                    <td>:</td>
                    <td><?= $d['Kabupaten_kota']; ?></td>
                </tr>
                <tr>
                    <td>Provinsi</td>
                    <td>:</td>
                    <td><?= $d['Provinsi']; ?></td>
                </tr>
                <tr>
                    <td>Alamat_tujuan_pindah</td>
                    <td>:</td>
                    <td><?= $d['Alamat_tujuan_pindah']; ?></td>
                </tr>
                <tr>
                    <td>Desa_tujuan</td>
                    <td>:</td>
                    <td><?= $d['Desa_tujuan']; ?></td>
                </tr>
                <tr>
                    <td>Kecamatan_tujuan</td>
                    <td>:</td>
                    <td><?= $d['Kecamatan_tujuan']; ?></td>
                </tr>
                <tr>
                    <td>Kabupaten_kota_tujuan</td>
                    <td>:</td>
                    <td><?= $d['Kabupaten_kota_tujuan']; ?></td>
                </tr>
                <tr>
                    <td>Provinsi_tujuan</td>
                    <td>:</td>
                    <td><?= $d['Provinsi_tujuan']; ?></td>
                </tr>
                <tr>
                    <td>Waktu</td>
                    <td>:</td>
                    <td><?= $d['Waktu']; ?></td>
                </tr>

            </table>
        </div>
        </tr>
        <tr>
            <p> Bahwa nama tersebut adalah warga yang akan pindah ke tempat yang tercatat di atas</p>
            <p>Demikian surat keterangan pindah ini kami berikan kepada yang bersangkutan untuk dipergunakan sebagaimana mestinya :</p>
            </td>
        </tr>
        <tr>
            <p style="text-align:right ;">KEPALA KECAMATAN</p>
            <br>
            <br>
            <br>
            <br>
            <p style="text-align: right;"><u>ENGKUS KUSNEDI</u></p>
            <hr>
        </tr>
    

</div>




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



    <td><button class='btn btn-danger'><i class='bi bi-trash' onclick="document.location.href='delete.php?id=<?= $s['No'] ?>'"> </i></i></button>
        <button class='btn btn-success'><i class='bi bi-pencil' onclick="document.location.href='update.php?id=<?= $s['No'] ?>'"> </i></i></button>
    </td>
    <td><button class='btn btn-warning'><i class='bi bi-ticket-detailed' onclick="document.location.href='detail.php?id=<?= $s['No'] ?>'"> </i></i></button></td>
<?php
    echo "</r>";
}
?>
</div>
</table>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

<!-- tutup halaman yang di print -->


<script>
    function printDiv(el) {
        var a = document.body.innerHTML;
        var b = document.getElementById(el).innerHTML;
        document.body.innerHTML = b;
        window.print();
        document.body.innerHTML = b;
    }
</script>