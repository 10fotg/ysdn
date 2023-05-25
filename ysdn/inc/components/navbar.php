
<nav class="navbar navbar-expand-md navbar-dark bg-d">
	<a class="navbar-brand" href="#">
	<?php  if(isset ($_SESSION['name'])) 
		{
		echo $_SESSION['name'];
		
		;?>
		<?php };?>
	</a>
	<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
		<span class="navbar-toggler-icon"></span>
	</button>

	<div class="collapse navbar-collapse" id="navbarSupportedContent">
		<ul class="navbar-nav w-100">
			<li class="nav-item active">
				<a class="nav-link" href="#">Member</a>
			</li>
			<?php if ($_SESSION['role']=='admin'){ ?>
			<li class="nav-item">
				<a class="nav-link" href="#">Activity</a>
			</li>
			<?php }; ?>
			<li class="nav-item dropdown ml-auto">
				<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
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
					<a class="dropdown-item" href="/learnphp/ysdn/auth/logout.php">Logout</a>
				</div>
			</li>
		</ul>
	</div>
</nav>
