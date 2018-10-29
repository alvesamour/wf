<header class="container mb-6">

	<div class="row">
		<div class="col-sm-4">
			<img alt="Logo" src="/img/logo.png" class="img-fluid">
		</div>
		<div class="col align-self-end">
			<h1>
				<strong class="fs-important"> <span class="c-red">Tag</span><span
					class="c-green">Be</span><span class="c-blue">Sill</span>
				</strong> <span class="fs-05">Project management system</span>
			</h1>
		</div>

	</div>
	<hr>

	<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
		<button class="navbar-toggler" type="button" data-toggle="collapse"
			data-target="#navbarNav" aria-controls="navbarNav"
			aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>
		<div class="collapse navbar-collapse" id="navbarNav">
			<ul class="navbar-nav">
				<li
					class="nav-item <?php if ($_SERVER['REQUEST_URI'] == '/'){?>active<?php }?>">
					<a class="nav-link" href="/"> Home </a>
				</li>
				<li
					class="nav-item <?php if ($_SERVER['REQUEST_URI'] == '/register.php'){?>active<?php }?>">
					<a class="nav-link" href="/register.php">Register</a>
				</li>
				
				<li
					class="nav-item <?php if ($_SERVER['REQUEST_URI'] == '/login.php'){?>active<?php }?>">
					<a class="nav-link" href="/login.php">Login</a>
				</li>
			</ul>
		</div>

	</nav>


</header>
