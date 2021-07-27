<?php
    $id   = $_GET["id"];
    include "conexao.php";
    #$nome   = $_POST["nome"];
    $sql    = "SELECT * FROM alunos WHERE id = '$id'";
	$alunos = $conn -> prepare($sql);
	$alunos -> execute();
	foreach($alunos AS $bolacha){
		$id       = $bolacha['id'];
		$nome     = $bolacha['nome'];
		$cargo    = $bolacha['cargo'];
		$telefone = $bolacha['telefone'];
		$email    = $bolacha['email'];
    }
    $conn = NULL;

    if(ISSET($_POST['editar'])){
		$id       = $_GET['id'];
		$nome     = $_POST['nome'];
		$cargo    = $_POST['cargo'];
		$telefone = $_POST['telefone'];
		$email    = $_POST['email'];

		include "conexao.php";
		$sql     = "UPDATE alunos SET
                    nome     = ?,
					cargo    = ?,
					telefone = ?,
					email    = ?
					WHERE
					id       = ?";
		$students = $conn -> prepare($sql);
		$students -> execute(array($nome,$cargo,$telefone,$email,$id));
		$conn     = NULL; //encerra conexao com o banco
        header("Location: alteracao.php");
    }
?>
<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Telecentros</title>
    </head>
    <body>
        <center>
            <hr>
            <h1>Telecentros</h1>
            <hr>
            <h2>Alterar dados</h2>
            <form action="#" method="POST">
                Nome completo:<input type="text"  name="nome"  maxlenght="50" value='<?php echo $nome;?>'><br>
                Cargo:        <input type="text"  name="cargo"  maxlenght="40" value='<?php echo $cargo;?>'><br>
                Telefone:     <input type="text"  name="telefone"  maxlenght="10" value='<?php echo $telefone;?>'><br>
                E-mail:       <input type="email"  name="email"  maxlenght="40" value='<?php echo $email;?>'><br><br>
                <input type="submit" name="editar" value="Salvar"/>
            </form>
            <br><a href="index.html"> Voltar </a>
        </center>
    </body>
</html>