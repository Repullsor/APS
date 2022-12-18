<?php
include('conexao.php');

if(isset($_POST['ra']) || isset($_POST['pass'])) {

    if(strlen($_POST['ra']) == 0) {
        echo "Preencha seu RA";
    } else if(strlen($_POST['pass']) == 0) {
        echo "Preencha sua senha";
    } else {

        $ra = $mysqli->real_escape_string($_POST['ra']);
        $pass = $mysqli->real_escape_string($_POST['pass']);

        $sql_code = "SELECT * FROM acesso WHERE ra = '$ra' AND pass = '$pass'";
        $sql_query = $mysqli->query($sql_code) or die("Falha na execução do código SQL: " . $mysqli->error);

        $quantidade = $sql_query->num_rows;

        if($quantidade == 1) {
            
            $usuario = $sql_query->fetch_assoc();

            if(!isset($_SESSION)) {
                session_start();
            }
			
			$usuario = $sql_query->fetch_assoc();
            $_SESSION['id'] = $usuario=['id'];

            header("Location: principala.php");

        } else {
            echo "Falha ao logar! E-mail ou senha incorretos";
        }

    }

}
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Login Aluno</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<div class="conteiner-main">
		<div class="card-login">
			<div class="support-logo">
				<img src="Imagens/unii-logo.png" alt="Logo UNII">
			</div>

			<div class="tela-login">
				<h1>Login</h1>
				<form action="" method="POST">
					<input type="text" placeholder="RA (número da matrícula)" class="input" name="ra">
					<br><br>
					<input type="password" placeholder="Senha" class="input" name="pass">
					<br><br>
				
					<button class="button">
						<a>
							Enviar
						</a>
					</button>
				</form>
			</div>

		</div>
	</div>
	

</body>
</html>