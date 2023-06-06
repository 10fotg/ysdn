<!DOCTYPE html>
<html lang="en">
<head>
	<?php require $_SERVER['DOCUMENT_ROOT']."/ysdn_thailand/ysdn/inc/components/head.php";?>
</head>
<body>

	<nav class="navbar navbar-expand-lg navbar-warning bg-light border">
		<a class="navbar-brand mx-3" href="#">
		<?php  if(isset ($_SESSION['name'])) 
			{
			echo $_SESSION['name'];
			
			;?>
			<?php };?>
		</a>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>

		<div class="collapse navbar-collapse " id="navbarSupportedContent">
			<ul class="navbar-nav  mx-3">
				<li class="nav-item active">
					<a class="nav-link" href="#">Member</a>
				</li>
				<?php if (isset($_SESSION['role'])=='admin'){ ?>
				<li class="nav-item">
					<a class="nav-link" href="#">Activity</a>
				</li>
				<?php }; ?>
				<li class="nav-item dropdown ">
					<a class="nav-link dropdown-toggle " href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
						<?php  if(isset ($_SESSION['role'])) 
						{
						echo $_SESSION['role'];
						
						;?>
						<?php };?>
					</a>
					<div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
						<a class="dropdown-item" href="#">Action</a>
						<a class="dropdown-item" href="#">Another action</a>
						<div class="dropdown-divider"></div>
						<a class="dropdown-item" href="/ysdn_thailand/ysdn/auth/logout.php">Logout</a>
					</div>
				</li>
			</ul>
		</div>
	</nav>



</body>
</html>