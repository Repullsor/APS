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
				<a href="principala.php"><img src="Imagens/unii-logo.png" alt="" class="logo" ></a>
				
			</div>

			<span class="aluno">Área do Aluno</span>
			
			<nav class="menu">
				<a href="principala.php">Inicio</a>
				<a href="https://sec2.unip.br/NovaSecretaria/Home/Inicio">Serviços</a>
				<a href="documentos.html">Meus dados</a>
				<a href="index.php">Sair</a>
				
			</nav>
			
			<div>
				<div class="conteudo1">
					<a href="unii.html"><img src="Imagens/icone-school.PNG" alt="" class="icon"></a>
					Sobre a Instituição
				</div>
	
				<div class="conteudo1">
					<img src="Imagens/icone-curso.PNG" alt="" class="icon">
					    Sobre o Curso
				</div>
	
				<div class="conteudo2">
					<a href="calendario.html"><img src="Imagens/icone-calendario.PNG" alt="" class="icon"></a>
					Calendário Acadêmico
				</div>

				<div class="conteudo3">
					<a href="notasa.php"><img src="Imagens/icone-lousa.png" alt="" class="icon"></a>
					 Notas Disciplinas Presenciais
				</div>

				<div class="conteudo4">
					<a href="notasa.php"><img src="Imagens/icone-ead.PNG" alt="" class="icon"></a>
					 Notas Disciplinas EaD
				</div>

				<div class="conteudo5">
					<a href="notasa.php"><img src="Imagens/icone-aps.PNG" alt="" class="icon"></a>
					APS Nota
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
				<a href="notasa.php">Notas e Faltas</a>
			</nav>
			<label for="btn-menu">✖</label>
		</div>



	</div>
</body>
</html>