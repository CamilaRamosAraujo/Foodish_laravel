<!DOCTYPE html>
<html lang="pt-br" dir="ltr">
  <head>
    <meta charset="utf-8"/>
	  <meta content="width=device-width, initial-scale=1, maximum-scale=1" name="viewport">
    <title>Foodish</title>

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	
	<!-- Optional theme -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
	
	<!-- Latest compiled and minified JavaScript -->
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
  
	<!-- CSS da aplicação -->
	<link rel="stylesheet" href="/css/foodish.css">
  </head>
  <body class="body">

	<div class="navbar">
		<div class="col-md-12 barra_logo">
			<img src="/img/Logo.svg">
		</div>
	</div>

	<div class="estilo_vida">
		<div class="col-md-12">
			<h1>Teste o estilo de vida</h1>
			<p>H3: Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt</p>
			<button class="vamos">
				<a href="#">
					Vamos lá!
				</a>
			</button>
		</div>
	</div>

	<div class="carrossel">
		<img class="prev" src="img/arrow.svg">
			<div class="encarte">
				<img src="img/destaque_encarte.png">
				<h1>Receita 01</h1>
				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt</p>
				<button class="btn btn-primary learn" value="Learn More">Learn More</button>
			</div>
			<div class="encarte">
				<img src="img/destaque_encarte.png">
				<h1>Receita 01</h1>
				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt</p>
				<button class="btn btn-primary learn" value="Learn More">Learn More</button>
			</div>
			<div class="encarte">
				<img src="img/destaque_encarte.png">
				<h1>Receita 01</h1>
				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt</p>
				<button class="btn btn-primary learn" value="Learn More">Learn More</button>
			</div>
		<img class="next" src="img/arrow.svg">
	</div>

	<div class="mais">
		<div class="col-md-6">
			<h1>Lorem ipsum sit</h1>
			<p>
				Amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
			</p>
			<p>
				Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
			</p>
		</div>
		<div class="col-md-6">
			<img src="img/destaque-container_4.png">
		</div>
	</div>

	<div class="contato">
		<div class="col-md-6 formulario">
			<h1>Cadastre-se</h1>
			<div class="col-md-6">
				<form action="/" method="POST">
    				@csrf
					<input type="text" class="form-control" id="nome" placeholder="Nome">
					<input type="email" class="form-control" id="email" placeholder="E-mail">
					<input type="tel" class="form-control" id="telefone" placeholder="Telefone">
					<div class="form-row">
					  <div class="form-group col-md-6">
						<input type="text" class="form-control cidade" id="cidade" placeholder="Cidade">
					  </div>
					  <div class="form-group col-md-6">
						<input type="text" class="form-control uf" id="uf" placeholder="UF">
					  </div>
					</div>
					<div class="col-md-6">
						<button class="btn btn-primary limpar" value="Limpar">Limpar</button>
					</div>
					<div class="col-md-6">
						<button type="submit" class="btn btn-primary enviar" value="Enviar">Enviar</button>
					</div>
				</form> 
			</div>
		</div>
	</div>

	<div class="footer">
		<p>foodish 2021</p>
		<div class="midias">
			<a href="#"><img src="img/facebook.png"></a>
			<a href="#"><img src="img/instagram.png"></a>
		</div>
	</div>

  </body>
</html>