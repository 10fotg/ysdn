<!DOCTYPE html>
<html lang="en">
<head>
	<?php require $_SERVER['DOCUMENT_ROOT']."/ysdn_thailand/ysdn/inc/components/head.php";?>
	<?php require $_SERVER['DOCUMENT_ROOT']."/ysdn_thailand/ysdn/inc/components/profile_nav.php";?>
</head>
<body class="font-mali vh-100 d-flex justify-content-center align-items-center">
	<div class="card mb-3">
		<div class="card-header bg-primary text-white">
			<h4>สมัครใช้งาน</h4>
		</div>
		<div class="card-body">
			<form action="saveRegister.php" class="mb-3" method="POST">
				<div class="form-group">
					<label for="name">Name</label>
					<input type="text" name="name" id="name" class="form-control" required>
				</div>
				<div class="form-group">
					<label for="email">Email</label>
					<input type="email" name="email" id="email" class="form-control" required>
				</div>
				<div class="form-group">
					<label for="password">Password</label>
					<input type="password" name="password" id="password" class="form-control" required>
				</div>
				<button type="submit" class="btn btn-primary">Register</button>
			</form>
			<a href="login.php">เข้าสู่ระบบ</a>
		</div>
	</div>
</body>
</html>