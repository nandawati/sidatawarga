<?php
$id = $_GET['id'];
include "koneksi.php";
$delete=$konek->query("Delete FROM data_warga WHERE No='$id'");
?>
<script>
    document.location = 'data.php';
</script>