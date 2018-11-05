<?php
try {

    $DB = [
        'host' => '127.0.0.1',
        'name' => 'eCommerce',
        'user' => 'root',
        'password' => null
    ];

    $connection = new PDO('mysql:host=' . $DB['host'] . ';dbname=' . $DB['name'], // dns => database namespace
    $DB['user'], // username
    $DB['password']); // Password
} catch (PDOException $e) {
    print "Error!: " . $e->getMessage() . "<br/>";
    exit();
}

$statement = 'SELECT a.* FROM article as a';
$projects = $connection->query($statement)->fetchAll();
if ($projects === false) {
    throw new Exception($connection->errorCode());
}

?>

<!doctype html>
<html lang="en">
<head>
<!-- Required meta tags -->
<meta charset="utf-8">
<meta name="viewport"
	content="width=device-width, initial-scale=1, shrink-to-fit=no">

<!-- Bootstrap CSS -->
<link rel="stylesheet"
	href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
	integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO"
	crossorigin="anonymous">
<link rel="stylesheet" href="/css/estilo.css" />

<title>Hello, world!</title>
</head>
<body>
	<header class="container mb-5 mt-2">
		<div class="row">
			<div class="col-sm-3">
				<img alt="Logo" src="/img/logo.png" class="img-fluid">
			</div>
			<div class="col align-self-end">
				<h1>
					<strong class="fs-important"> <span class="c-rd">EC</span><span
						class="c-geen">OMM</span><span class="c-bue">ERCE</span>
					</strong> <span class="fs-05">Ecommerce</span>
				</h1>
			</div>
		</div>

		<nav
			class="navbar navbar-expand-lg navbar-dark bg-secondary rounded mt-3">
			<button class="navbar-toggler" type="button" data-toggle="collapse"
				data-target="#navbarSupportedContent"
				aria-controls="navbarSupportedContent" aria-expanded="false"
				aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>
		</nav>
	</header>
	<div class="container corpo">
		<div class="row">	
<?php
foreach ($projects as $key => $project) {
    $title = $project['title'];
    $img = $project['image'];
    $desc = $project['description'];
    $mark = $project['marque'];
    $price = $project['prix'];

    ?>
	
			<div class="col-md-6 col-lg-4 my-3">
				<div class="card" style="width: 18rem;">
					<img class="card-img-top" src="<?php echo $img ?>"
						alt="Card image cap">
					<div class="card-body">
						<h5 class="card-title"><?php echo $title ?></h5>
						<p class="card-text"><?php echo $desc ?></p>
						<p class="card-text"><small class="text-muted"><?php echo $mark ?> </small><span class="badge badge-success"><?php echo $price ?> &euro;</span></p>
						<a href="#" class="btn btn-primary">Details</a>
					</div>
				</div>
			</div>
		
<?php
}
?>

</div>
	</div>
	<!-- Optional JavaScript -->
	<!-- jQuery first, then Popper.js, then Bootstrap JS -->
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
		integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
		crossorigin="anonymous"></script>
	<script
		src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"
		integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
		crossorigin="anonymous"></script>
	<script
		src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"
		integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy"
		crossorigin="anonymous"></script>

</body>
</html>