<?php
include "koneksi.php";
include "boot.php";
$id =$_GET['id'];
$ubah=$konek->query("select*from data_warga where no='$id'");
$a=$ubah->fetch_array();
?>

<div class="container col-5">
<form class="form form-control" action="" method="POST">
    <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Nama :</label>
        <input type="text" class="form-control bg-secondary" id="exampleInputEmail1" aria-describedby="emailHelp" name="Nama" value="<?=$a['Nama']?>">

        <label for="exampleInputEmail1" class="form-label">Jenis kelamin :</label>
        <select name="Jk" class="form-select" aria-label="Default select example">
  
  <option><?=$a['Jk']?></option>
  <option >perempuan</option>
  <option >laki-laki</option>
</select>

        <label for="exampleInputEmail1" class="form-label">Tempat_lahir :</label>
        <input type="text" class="form-control bg-secondary" id="exampleInputEmail1" aria-describedby="emailHelp" name="Tempat_lahir" value="<?=$a['Tempat_lahir']?>">

        <label for="exampleInputEmail1" class="form-label">Tanggal_lahir:</label>
          <input type="date" class="form-control bg-secondary"id="exampleInputEmail1" aria-describedby="emailHelp" name="Tanggal_lahir" value="<?=$a['Tanggal_lahir']?>">

        <label for="exampleInputEmail1" class="form-label">Nik :</label>
        <input type="number" class="form-control bg-secondary" id="exampleInputEmail1" aria-describedby="emailHelp" name="Nik"value="<?=$a['Nik']?>">

        <label for="exampleInputEmail1" class="form-label">Alamat :</label>
        <input type="text" class="form-control bg-secondary" id="exampleInputEmail1" aria-describedby="emailHelp" name="Alamat" value="<?=$a['Alamat']?>">

        <label for="exampleInputEmail1" class="form-label">Desa :</label>
        <input type="text" class="form-control bg-secondary" id="exampleInputEmail1" aria-describedby="emailHelp" name="Desa" value="<?=$a['Desa']?>">

        <label for="exampleInputEmail1" class="form-label">Kecamatan :</label>
        <input type="text" class="form-control bg-secondary" id="exampleInputEmail1" aria-describedby="emailHelp" name="Kecamatan" value="<?=$a['Kecamatan']?>">

        <label for="exampleInputEmail1" class="form-label">Kabupaten_kota:</label>
        <input type="text" class="form-control bg-secondary" id="exampleInputEmail1" aria-describedby="emailHelp" name="Kabupaten_kota" value="<?=$a['Kabupaten_kota']?>">

        <label for="exampleInputEmail1" class="form-label">Provinsi :</label>
        <input type="text" class="form-control bg-secondary" id="exampleInputEmail1" aria-describedby="emailHelp" name="Provinsi" value="<?=$a['Provinsi']?>">

        <label for="exampleInputEmail1" class="form-label">Alamat_tujuan_pindah:</label>
        <input type="text" class="form-control bg-secondary" id="exampleInputEmail1" aria-describedby="emailHelp" name="Alamat_tujuan_pindah" value="<?=$a['Alamat_tujuan_pindah']?>">

        <label for="exampleInputEmail1" class="form-label">Desa_tujuan:</label>
        <input type="text" class="form-control bg-secondary" id="exampleInputEmail1" aria-describedby="emailHelp" name="Desa_tujuan" value="<?=$a['Desa_tujuan']?>">

        <label for="exampleInputEmail1" class="form-label">Kecamatan_tujuan:</label>
        <input type="text" class="form-control bg-secondary" id="exampleInputEmail1" aria-describedby="emailHelp" name="Kecamatan_tujuan" value="<?=$a['Kecamatan_tujuan']?>">

        <label for="exampleInputEmail1" class="form-label">Kabupaten_kota_tujuan:</label>
        <input type="text" class="form-control bg-secondary" id="exampleInputEmail1" aria-describedby="emailHelp" name="Kabupaten_kota_tujuan" value="<?=$a['Kabupaten_kota_tujuan']?>">


        <label for="exampleInputEmail1" class="form-label">Provinsi_tujuan:</label>
        <input type="text" class="form-control bg-secondary" id="exampleInputEmail1" aria-describedby="emailHelp" name="Provinsi_tujuan" value="<?=$a['Provinsi_tujuan']?>">

<div class="text-end">
<button type="submit" class="btn btn-primary mt-3"name="edit">Simpan</button>
</div>
</form>
</div>

<?php
if(isset($_POST['edit'])){
    echo "silahkan ubah";


    $ubah=$konek->query("update data_warga set Nama='$_POST[Nama]',Jk='$_POST[Jk]',Tempat_lahir='$_POST[Tempat_lahir]',Tanggal_lahir='$_POST[Tanggal_lahir]',Nik='$_POST[Nik]',Alamat='$_POST[Alamat]',Desa='$_POST[Desa]',Kecamatan='$_POST[Kecamatan]',Kabupaten_kota='$_POST[Kabupaten_kota]',Provinsi='$_POST[Provinsi]',Alamat_tujuan_pindah='$_POST[Alamat_tujuan_pindah]',Desa_tujuan='$_POST[Desa_tujuan]',Kecamatan_tujuan='$_POST[Kecamatan_tujuan]',Kabupaten_kota='$_POST[Kabupaten_kota]',Provinsi_tujuan='$_POST[Provinsi_tujuan]' where No='$id'");

    echo "data berhasil di ubah <a href=data.php>kembali</a>";
    
    echo"<script>
    alert('Data sudah diubah,Terimakasih');
  </script>";

}

?>

