<?php
    include "conexao.php";

    $sql    = "SELECT * FROM alunos";
    $alunos = $conn -> prepare($sql);
    $alunos -> execute();
    $conn   = NULL;
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
            <table border="1" cellspacing="0">
                <tr>
                    <th>Nome</th>
                    <th>Cargo</th>
                    <th>Telefone</th>
                    <th>E-mail</th>
                    <th>Excluir</th>
                </tr>
                <tbody>
                    <?php
                        foreach($alunos AS $students) {
                            $id       = $students["id"];
                            $nome     = $students["nome"];
                            $cargo    = $students["cargo"];
                            $telefone = $students["telefone"];
                            $email    = $students["email"];
                            $excluir  = "<a href='excluir.php?id=$id&nome=$nome'>Excluir</a>";

                            echo "<tr>
                                      <td>$nome</td>
                                      <td>$cargo</td>
                                      <td>$telefone</td>
                                      <td>$email</td>
                                      <td>$excluir</td>
                                  </tr>";
                        }
                    ?>
                </tbody>
            </table>
            <br><a href="index.html"> Voltar </a>
        </center>
    </body>
</html>