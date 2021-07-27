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
            <?php
                if(ISSET($_POST["salvar"])) {
                    $id       = "";
                    $nome     = $_POST["nome"];
                    $cargo    = $_POST["cargo"];
                    $telefone = $_POST["telefone"];
                    $email    = $_POST["email"];

                    include "conexao.php";

                    $sql    = "INSERT INTO alunos VALUES(?,?,?,?,?)";
                    $alunos = $conn -> prepare($sql);
                    $alunos -> execute(array($id,$nome,$cargo,$telefone,$email));
                    $conn   = NULL;
                    header("Location: index.html");

                    $_SESSION["CadUser"] = "Cadastrado com sucesso!";
                }
            ?>
            <br><a href="index.html"> Voltar </a>
        </center>
    </body>
</html>