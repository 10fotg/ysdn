<!DOCTYPE html>
<html lang="en">
<head>
	<?php require $_SERVER['DOCUMENT_ROOT']."/ysdn_thailand/ysdn/inc/components/head.php";?>
	
</head>
<body class="font-mali vh-100 d-flex justify-content-center align-items-center">
	<div class="card mb-3">
		<div class="card-header bg-primary text-white">
			<h4>เข้าสู่ระบบ</h4>
		</div>
		<div class="card-body">
			<form action="checkLogin.php" class="mb-3" method="POST">
				<?php
					if(isset($_GET['msg'])) {
						echo "<h5 class='my-3 text-danger'>Password ไม่ถูกต้อง กรุณาลองอีกครั้ง</h5>";
					}
				?>
				<div class="form-group">
					<label for="email">Email</label>
					<input type="email" name="email" id="email" class="form-control" required>
				</div>
				<div class="form-group">
					<label for="password">Password</label>
					<input type="password" name="password" id="password" class="form-control" required>
				</div>
				<button type="submit" class="btn btn-primary">Login</button>
			</form>
			<a href="register.php">สมัครใช้งานใหม่</a>
		</div>
	</div>
</body>
</html>