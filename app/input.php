<?php
include "boot.php";
?>

<body background="image/background.jpg" style="background-size:cover;">
  <div class="container">

    <div class="container col-5">
      <form class="form form-control bg-secondary" action="" method="POST">
        <div class="mb-3">
          <label for="exampleInputEmail1" class="form-label">Nama :</label>
          <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="Nama" required>

          <label for="">Jenis_kelamin</label>
          <div class="form-check">

            <input class="form-check-input" type="radio" name="Jk" id="flexRadioDefault1" value="perempuan" checked>
            <label class="form-check-label" for="flexRadioDefault1">
              Perempuan
            </label>
          </div>
          <div class="form-check">
            <input class="form-check-input" type="radio" name="Jk" id="flexRadioDefault2" value="laki-laki">
            <label class="form-check-label" for="flexRadioDefault2">
              Laki-laki
          </div>

          <label for="exampleInputEmail1" class="form-label">Tempat_lahir:</label>
          <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="Tempat_lahir" required>

          <label for="exampleInputEmail1" class="form-label">Tanggal_lahir:</label>
          <input type="date" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="Tanggal_lahir" required>

          <label for="exampleInputEmail1" class="form-label">Nik :</label>
          <input type="number" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="Nik" required>

          <label for="exampleInputEmail1" class="form-label">Alamat:</label>
          <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="Alamat" required>

          <label for="exampleInputEmail1" class="form-label">Desa:</label>
          <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="Desa" required>

          <label for="exampleInputEmail1" class="form-label">Kecamatan:</label>
          <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="Kecamatan" required>

          <label for="exampleInputEmail1" class="form-label">Kabupaten_kota:</label>
          <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="Kabupaten_kota" required>

          <label for="exampleInputEmail1" class="form-label">Provinsi:</label>
          <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="Provinsi" required>

          <label for="exampleInputEmail1" class="form-label">Alamat_tujuan_pindah:</label>
          <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="Alamat_tujuan_pindah" required>

          <label for="exampleInputEmail1" class="form-label">Desa_tujuan:</label>
          <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="Desa_tujuan" required>

          <label for="exampleInputEmail1" class="form-label">Kecamatan_tujuan:</label>
          <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="Kecamatan_tujuan" required>

          <label for="exampleInputEmail1" class="form-label">Kabupaten_kota_tujuan:</label>
          <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="Kabupaten_kota_tujuan" required>

          <label for="exampleInputEmail1" class="form-label">Provinsi_tujuan:</label>
          <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="Provinsi_tujuan" required>

          <div class="text-end">
            <button type="submit" class="btn btn-primary mt-3">Simpan</button>
            <button type="reset" class="btn btn-primary mt-3">Reset</button>
          </div>
      </form>
    </div>

    <?php
    include "koneksi.php";
    @$Nama = $_POST['Nama'];
    @$Jk = $_POST['Jk'];
    @$Tempat_lahir = $_POST['Tempat_lahir'];
    @$Tanggal_lahir = $_POST['Tanggal_lahir'];
    @$Nik = $_POST['Nik'];
    @$Alamat = $_POST['Alamat'];
    @$Desa = $_POST['Desa'];
    @$Kecamatan = $_POST['Kecamatan'];
    @$Kabupaten_kota = $_POST['Kabupaten_kota'];
    @$Provinsi = $_POST['Provinsi'];
    @$Alamat_tujuan_pindah = $_POST['Alamat_tujuan_pindah'];
    @$Desa_tujuan = $_POST['Desa_tujuan'];
    @$Kecamatan_tujuan = $_POST['Kecamatan_tujuan'];
    @$Kabupaten_kota_tujuan = $_POST['Kabupaten_kota_tujuan'];
    @$Provinsi_tujuan = $_POST['Provinsi_tujuan'];



    if ($Nama == "") {
      echo "maaf nama wajib di isi";
    } else {

      echo"<script>
      alert('Data sudah tersimpan,Terimakasih');
    </script>";

      $simpan = $konek->query("insert into data_warga (Nama,Jk,Tempat_lahir,Tanggal_lahir,Nik,Alamat,Desa,Kecamatan,Kabupaten_kota,Provinsi,Alamat_tujuan_pindah,Desa_tujuan,Kecamatan_tujuan,Kabupaten_kota_tujuan,Provinsi_tujuan) values ('$Nama','$Jk','$Tempat_lahir','$Tanggal_lahir','$Nik','$Alamat','$Desa','$Kecamatan','$Kabupaten_kota','$Provinsi','$Alamat_tujuan_pindah','$Desa_tujuan','$Kecamatan_tujuan','$Kabupaten_kota_tujuan','$Provinsi_tujuan')");
    }
    ?>