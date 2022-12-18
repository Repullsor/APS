<?php

include("conexao.php");
include("protecta.php");



$consulta =" SELECT *  FROM  notas";
$con = $mysqli->query($consulta) or die($mysqli->error);


?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Notas</title>
	<link rel="stylesheet" href="estilo.css">
</head>

<body>
	<header class="header">
		<div class="container">
		<div class="btn-menu">
			<label for="btn-menu">☰</label>
		</div>
			<div>
				<a href="principal.html"><img src="Imagens/unii-logo.png" alt="" class="logo" ></a>
				
			</div>

			<span class="aluno">Área do Aluno</span>
			
			<nav class="menu">
				<a href="principala.php">Inicio</a>
				<a href="#">Serviços</a>
				<a href="#">Meus dados</a>
				<a href="index.php">Sair</a>
				
			</nav>
			
            
			
		</div>
        <div>
            <table>
				<tr>
					<td>Disciplina</td>
					<td>N1</td>
					<td>N2</td>
					<td>N3 (exame)</td>
				</tr>
				<?php 
				while($user_data = mysqli_fetch_assoc($con)){
				
				echo "<tr>";
				echo "<td>".$user_data["DISCIPLINA"]."</td>";
				echo "<td>".$user_data["N1"]."</td>";
				echo "<td>".$user_data["N2"]."</td>";
				echo "<td>".$user_data["N3"]."</td>";

					
				 } ?>


			</table>
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