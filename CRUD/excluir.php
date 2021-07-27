<?php
    include "conexao.php";

    $id     = $_GET["id"];
    $nome   = $_GET["nome"];

	if(ISSET($_POST["sim"])){
		#$Nome   = $_POST['nome'];
		$sql    = "DELETE FROM alunos WHERE id='$id'";
		$alunos = $conn -> prepare($sql);
		$alunos -> execute();
        $conn   = NULL;
        Header("Location: exclusao.php");
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
            <h2>Exclusão</h2>
            <form action="#" method="post">
                <p>Deseja excluir o aluno <?php echo $nome;?>?</p>
                <input type="submit" value="Sim" name="sim"/>
            </form>
            <br><a href="exclusao.php"> Voltar </a>
        </center>
    </body>
</html>