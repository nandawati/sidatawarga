<!DOCTYPE html>
<html>

<head>
	<title>Login 6</title>
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link href="style.css" rel="stylesheet" type="text/css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
	<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
</head>

<body>
	<div class="infinity-container">
		<!-- FORM CONTAINER BEGIN -->
		<div class="infinity-form-block">
			<div class="infinity-click-box text-center">Click Here to Login</div>

			<div class="infinity-fold">
				<div class="infinity-form">
					<form action="" method="Post">
						<!-- Input Box -->
						<div class="form-input">
							<input type="email" name="user" placeholder="Email Address" required>
						</div>
						<div class="form-input">
							<input type="password" name="pass" placeholder="Password" id="inputPassword" required>
						</div>
						<div class="row">
							<!--Remember Checkbox -->
							<div class="col-auto d-flex align-items-center">
								<div class="custom-control custom-checkbox">
									<input type="checkbox" class="custom-control-input" id="cb1" onclick="myFunction()">
									<label class="custom-control-label text-white" for="cb1">Remember me
									</label>
								</div>
							</div>
						</div>
						<!-- Login Button -->

						<button name='login' type="submit" class="btn btn-block">Login</button>
						<div class="text-right">



					</form>
				</div>
			</div>
		</div>
		<!-- FORM CONTAINER END -->
	</div>

	<script type="text/javascript">
		$(document).ready(function() {
			$('.infinity-click-box').click(function() {
				$('.infinity-fold').toggleClass('active')
			})
		})
	</script>
</body>

</html>
<script>
	function myFunction() {
		var x = document.getElementById("inputPassword");
		if (x.type === "password") {
			x.type = "text";
		} else {
			x.type = "password";
		}
	}
</script>

<?php
session_start();
include "app/koneksi.php";

if (isset($_POST['login'])) {
	$user = $_POST['user'];
	$pass = $_POST['pass'];
	$cari = $konek->query("Select*from login where user='$user' and pass='$pass'");
	$cek = $cari->num_rows;
	if ($cek == 0) {
		echo "<script>
    alert('Maaf Password anda salah silahkan login kembali');
  </script>";
	} else {
		$_SESSION['user'] = $user;
		echo "<script>
    alert('Anda berhasil masuk');
  </script>";

?>

		<script>
			document.location.href = 'app/index.php';
		</script>
<?php
	}
}
?>