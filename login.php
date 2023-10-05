<?php 
 
include 'config.php';
 
error_reporting(0);
 
session_start();
 
if (isset($_SESSION['username'])) {
    header("Location: index.php");
}
 
if (isset($_POST['submit'])) {
    $user = $_POST['user'];
    $password = $_POST['password'];
 
    $sql = "SELECT * FROM user WHERE user='$user' AND pass='$password'";
    $result = mysqli_query($conn, $sql);
    if ($result->num_rows > 0) {
        $row = mysqli_fetch_assoc($result);
        $_SESSION['username'] = $row['username'];
		$_SESSION['uid'] = $row['uid'];
		$_SESSION['nama'] = $row['nama'];
		$_SESSION['icon'] = $row['icon'];
        $_SESSION['c_chat'] = $row['c_chat'];
        header("Location: index.php");
    } else {
        echo "<script>alert('Ussername atau password Anda salah. Silahkan coba lagi!')</script>";
    }
}
 
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width,initial-scale=1">
	<meta name="description" content="This is a login page template based on Bootstrap 5">
	<link rel="icon" href="logo.png">
	<title>D.U.C Login</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>
	<section class="h-100">
		<div class="container h-100">
			<div class="row justify-content-sm-center h-100">
				<div class="col-xxl-4 col-xl-5 col-lg-5 col-md-7 col-sm-9">
					<div class="text-center my-5">
						<img src="logo.png" class="rounded-circle bayangan" width="100">
					</div>
					<div class="card" style="height: 58%;">
						<div class="card-body p-5">
							<!-- <h1 class="fs-4 card-title fw-bold mb-4">Login</h1> -->
							<form action="" method="POST" class="needs-validation">
								<div class="mb-3">
									<label class="mb-2 text-muted">Ussername</label>
									<input type="text" class="form-control" name="user">
								</div>

								<div class="mb-3">
									<div class="mb-3">
										<label class="text-muted">Password</label>
									</div>
									<input type="password" class="form-control" name="password">
								</div>

								<div class="d-flex align-items-center">
									<div class="form-check">
										<input type="checkbox" name="remember" id="remember" class="form-check-input">
										<label for="remember" class="form-check-label">Remember Me</label>
									</div>
									<button type="submit" name="submit" class="btn btn-primary ms-auto">Login</button>
								</div>
							</form>
						</div>
						<div class="card-footer py-3 border-0">
							<div class="text-center">
								Tidak punya akun? <a href="registrasi.php" class="text-dark">Daftar</a>
							</div>
						</div>
					</div>
					<div class="text-center mt-5 text-muted">
						Copyright &copy; 2023 &mdash; Lutfi Nur Alfiandri
					</div>
				</div>
			</div>
		</div>
	</section>

	<script src="js/login.js"></script>
</body>
</html>