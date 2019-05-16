<!DOCTYPE html>
<html>
	<head>
		<title>Projeto 2019</title>
		<meta charset="utf-8">

		<link rel="stylesheet" type="text/css" href="css/estilo.css">

		<script type="text/javascript" src="js/funcoes.js"></script>

	</head>
	<body>

		<h1>Bem-vindo(a) ao meu site!</h1>

		<p>Olá Fulano!</p>

		<ul>
			<li><a href="../index.php">Início</a></li>
			<li><a href="sobre.php">Sobre</a></li>
			<li><a href="#">Cadastro</a></li>
		</ul>

		<h2>Cadastro</h2>

		<form action="processar.php" method="POST">

			<input type="email" required="" placeholder="Digite seu e-mail"  name="email">

			<select name="cidades">

				<option>------</option>

				<?php

					$cidades = array(
						'1' => 'Três Corações',
						'2' => 'Lavras'
					);

					foreach ($cidades as $key => $value) {
						
						echo "<option value='$key'>$value</option>";

					}
				?>				
			</select>

			<input type="submit" name="enviar" value="Enviar">
			
		</form>


	</body>
</html>