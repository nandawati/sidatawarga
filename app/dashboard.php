<br>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>JUMLAH DATA WARGA</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      margin: 0;
      padding: 0;
      background-color: #f4f4f4;
    }

    header {
      background-color: #333;
      color: #fff;
      padding: 10px;
      text-align: center;
    }

    #dashboard-container {
      display: flex;
      justify-content: space-around;
      align-items: center;
      margin: 20px;
    }

    .widget {
      background-color: #fff;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
      padding: 20px;
      margin: 10px;
      flex: 1;
    }

    footer {
      background-color: #333;
      color: #fff;
      padding: 10px;
      text-align: center;
      position: fixed;
      bottom: 0;
      width: 100%;
    }
  </style>
</head>

<body>
  <header>
    <h2>DATA WARGA</h2>
  </header>

  <div id="dashboard-container">
    <div class="widget">
      <h4>Seluruh data warga</h4>
      <?php
      include "boot.php";
      include "koneksi.php";

      // Query untuk menghitung jumlah total warga
      $query = $konek->query("SELECT COUNT(*) as total_warga FROM data_warga");
      $row = $query->fetch_assoc();
      $total_warga = $row['total_warga'];
      ?>
      <!DOCTYPE html>
      <html lang="en">

      <head>

      <body>
        <section>
          <p> Jumlah seluruh warga: <?php echo $total_warga;; ?></p>
        </section>
      </body>

      </html>
      <a href="data.php" class="info-button" onclick="toggleMoreInfo()">More info</a>
    </div>

    <div class="widget">
      <h2>Data perempuan</h2>
      <?php
      $query = $konek->query("SELECT * FROM data_warga WHERE Jk='Perempuan'");
      $total_perempuan = $query->num_rows;
      ?>
      <!DOCTYPE html>
      <html lang="en">

      <head>

      <body>
        <section>
          <p> Jumlah data perempuan: <?php echo $total_perempuan; ?></p>
        </section>
      </body>

      </html>
      <a href="perempuan.php" class="info-button" onclick="toggleMoreInfo()">More info</a>
    </div>

    <div class="widget">
      <h2>Data laki-laki</h2>
      <?php
      $query = $konek->query("SELECT * FROM data_warga WHERE Jk='laki-laki'");
      $row = $query->num_rows;

      ?>
      <!DOCTYPE html>
      <html lang="en">

      <head>

      <body>
        <section>
          <p> Jumlah data laki-laki: <?php echo $row; ?></p>
        </section>
      </body>

      </html>
      <a href="laki-laki.php" class="info-button" onclick="toggleMoreInfo()">More info</a>
    </div>

  </div>

  <footer>
    <p>&copy; nandarahmawati</p>
  </footer>

  <script>
    // Tambahkan skrip JavaScript untuk interaksi lebih lanjut jika diperlukan
  </script>
</body>

</html>