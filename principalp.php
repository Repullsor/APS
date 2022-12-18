<?php

include('protecta.php');


?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Menu principal</title>
	<link rel="stylesheet" href="estilo.css">
</head>

<body>
	<header class="header">
		<div class="container">
		<div class="btn-menu">
			<label for="btn-menu">☰</label>
		</div>
			<div>
				<a href="principalp.php"><img src="Imagens/unii-logo.png" alt="" class="logo" ></a>
				
			</div>

			<span class="aluno">Área do Professor</span>
			
			<nav class="menu">
				<a href="principalp.php">Inicio</a>
				<a href="#">Serviços</a>
				<a href="#">Meus dados</a>
				<a href="index.php">Sair</a>
				
			</nav>
			
			<div>
				<div class="conteudo1">
					<a href="unii.html"><img src="Imagens/icone-school.PNG" alt="" class="icon"></a>
					Sobre a Instituição
				</div>
	
				<div class="conteudo1">
					<a href ="notasp.php"><img src="Imagens/icone-curso.PNG" alt="" class="icon"></a>
					    Alteração de notas
				</div>
	
				<div class="conteudo2">
					<img src="Imagens/icone-calendario.PNG" alt="" class="icon">
					Calendário Acadêmico
				</div>

				
			</div>
		</div>
	</header>


	<input type="checkbox" id="btn-menu">
	<div class="container-menu">
		<div class="cont-menu">
			<nav>
				<br>
				<a href="#">Acompanhamento Pedagógico</a>
				<a href="#">Acompanhamento Administrativo</a>
				<a href="notasp.php">Notas e Faltas</a>
			</nav>
			<label for="btn-menu">✖</label>
		</div>



	</div>
</body>
</html>