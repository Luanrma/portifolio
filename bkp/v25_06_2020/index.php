<?php session_start() ?>
<!doctype html>
<html lang="pt-br">
	<head>
		<meta charset="pt-br">
		<!-- Required meta tags -->
		
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

		<!-- Bootstrap CSS -->
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
		<link rel="stylesheet" href="assets/css/estilo.css">
		<title>Meu portifólio</title>
	</head>
	<body>
		<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
			<a class="navbar-brand" href="#">Navbar</a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="navbarNavDropdown">
				<ul class="navbar-nav">
					<li class="nav-item active">
						<a class="nav-link" href="#">Home</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="#">Features</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="#">Pricing</a>
					</li>
				</ul>
			</div>
		</nav>
		<div class="container-fluid text-center">
			<section id="sites">
				<h1>Meus Sites</h1>
				<div class="row justify-content-center">
					<div class="col-lg-4 col-md-6 my-4 cardSite">
						<h5>Projeto A1 Som e Luz</h5>
						<a href="a1SomLuz.php"><img class="img-thumbnail img-site" src="assets/img/a1SomLuz.png"></a>
					</div>
					<div class="col-lg-4 col-md-6 my-4 cardSite">
						<h5>Projeto A1 Som e Luz</h5>
						<a href="a1SomLuz.php"><img class="img-thumbnail img-site" src="assets/img/a1SomLuz.png"></a>
					</div>
					<div class="col-lg-4 col-md-6 my-4 cardSite">
						<h5>Projeto A1 Som e Luz</h5>
						<a href="a1SomLuz.php"><img class="img-thumbnail img-site" src="assets/img/a1SomLuz.png"></a>
					</div>
				</div>
			
			</section>
		</div>
		<div class="container">
			<section class="text-center text-light" id="contato">
				<h1>Contato</h1>
				<?php
                    if (isset($_SESSION['msgSucesso'])) {
                        echo '<p class="text-success">' . $_SESSION['msgSucesso'] . '</p>';
                            unset($_SESSION["msgSucesso"]);
                    } else if (isset($_SESSION['msgErro'])) {
                        echo '<p class="text-danger">' . $_SESSION['msgErro'] . '</p>';
                        unset($_SESSION["msgErro"]);
                    }
                ?>
					<form id="form" action="controller/createContato.php" method="post">
						<div class="form-group row justify-content-center">
							<div class="inputForm col-lg-4 col-md-4 col-sm-8 my-2">
								<label for="inputNome">Nome</label>
								<input type="name" placeholder="Nome..." class="form-control" id="inputNome" name="inputNome">
							</div>	
							<div class="inputForm col-lg-4 col-md-4 col-sm-8 my-2">
								<label for="inputEmail">Email</label>
								<input type="email" placeholder="Email..." class="form-control" id="inputEmail" name="inputEmail">
							</div>				
							<div class="inputForm col-lg-8 col-md-8 col-sm-8 my-2">
								<label for="inputTexto">Comentário</label>
								<textarea class="form-control" placeholder="Entre em contato." id="inputTexto" name="inputTexto" rows="5"></textarea>	
							</div>
							<div class="col-lg-12 col-sm-12 my-2">
								<button type="submit" class="btn btn-primary my-3">Enviar</button>
							</div>
						</div>
					</form>
			</section>
		</div>

		<!-- Optional JavaScript -->
		<!-- jQuery first, then Popper.js, then Bootstrap JS -->
		<script src="assets/js/script.js"></script>
		<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
		<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
	</body>
</html>