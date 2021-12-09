<!doctype hmtl>
<html>
	<head>
		<title>Facebook</title>
		<meta charset = "utf-8" />
		<meta name = "viewport" content = "width = device-witdh, initial-scale = 1.0, maximum-scale = 1.0">
		<meta name = "author" content = "Leonardo Jossani">

		<link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
		<link href = "css/style.css" type = "text/css" rel = "stylesheet" /> 
	</head>

	<body>

		<header>
			<div class = "center">
				<div class = "logo">
					<h2>Facebook</h2>
				</div><!--logo-->

				<form method = "post" class = "form-login">
					<div class = "form-element">
						<p>Email ou Telefone</p>
						<input type = "email" />
					</div><!--form-element-->

					<div class = "form-element">
						<p>Senha</p>
						<input type = "password" />
					</div><!--form-element-->

					<div class = "form-element">
						<input type = "submit" name = "acao" value = "Login">
					</div><!--form-element-->
				</form><!--form-login-->
				<div class = "clear"></div>


			</div><!--center-->
		</header>

		<section class = "main">
			<div class = "center">
				<div class = "img-pessoas">
					<img src = "img1.png" />
				</div><!--img-pessoas-->

				<div class = "abrir-conta">
					<h2>Abra uma conta</h2>
					<h3>É gratuito e sempre será.</h3>
				</div><!--abrir-conta-->

				<form class = "criar-conta">
					<div class = "w50">
						<input placeholder = "Nome"type = "text" />
					</div><!--w50-->

					<div class = "w50">
						<input placeholder = "Sobrenome" type = "text" />
					</div><!--w50-->

					<div class = "w100">
						<input placeholder = "E-mail" type = "email" />
					</div><!--w100-->

					<div class = "w100">
						<input placeholder = "Senha" type = "password" />
					</div><!--w100-->

					<div class = "w100">
						<h2>Data de Nascimento</h2>
						<select name = "nascimento-dia" class = "nascimento">
							<?php
								for($i = 1; $i <= 31; $i++){
							?>
								
							<option value = "<?php echo $i; ?>"><?php echo $i; ?></option>
							<?php } ?>
						</select>

						<select name = "nascimento-mes" class = "nascimento">
							<!--Aplicar o PHP depois-->
							<option value = "1">Janeiro</option>
							<option value = "2">Fevereiro</option>
							<option value = "3">Março</option>
							<option value = "4">Abril</option>
							<option value = "5">Maio</option>
							<option value = "6">Junho</option>
							<option value = "7">Julho</option>
							<option value = "8">Agosto</option>
							<option value = "9">Setembro</option>
							<option value = "10">Outubro</option>
							<option value = "11">Novembro</option>
							<option value = "12">Dezembro</option>
						</select>

						<select name = "nascimento-ano" class = "nascimento">
							<?php
								for($i = 1950; $i <= 2021; $i++){
							?>
							<option value = "<?php echo $i; ?>"><?php echo $i; ?></option>
							<?php } ?>
						</select>
						<div class = "clear"></div>
					</div><!--w100-->

					<div class = "w100">
						<div class = "input-radio">
							<input type = "radio" name = "sexo" value = "feminino">
							<h2>Feminino</h2>
						</div><!--input-radio-->

						<div class = "input-radio">
							<input type = "radio" name = "sexo" value = "masculino">
							<h2>Masculino</h2>
						</div><!--input-radio-->
						<div class = "clear"></div>
					</div><!--w100-->

					
					<div class = "w100">
						<input type = "submit" name = "acao" value = "Cadastrar!" />
					</div><!--w100-->

					<div class = "clear"></div>
				</form><!--criar-conta-->

				<div class = "clear"></div>
			</div><!--center-->
		</section><!--main-->

		<section class = "linguas">
			<div class = "center">
				<a class = "selected-lingua" href="#">Português (BR)</a>
				<a href="#">English (US)</a>
				<a href="#">Español</a>
				<a href="#">Français (France)</a>
				<a href="#">Italiano</a>
				<a href="#">Deutsch</a>
			</div><!--center-->
		</section><!--linguas-->

	</body>

</html>
