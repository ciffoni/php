<?php
    include "conexao.php";

    $sql    = "SELECT * FROM alunos";
    $alunos = $conn -> prepare($sql);
    $alunos -> execute();
    $conn   = NULL;
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Telecentros</title>
    </head>
    <body>
        <center>
            <hr>
            <h1>Consulta</h1>
            <hr>
            <table border="1" cellspacing="0">
                <tr>
                    <th>Nome</th>
                    <th>Cargo</th>
                    <th>Telefone</th>
                    <th>E-mail</th>
                </tr>
                <tbody>
                    <?php
                        foreach($alunos AS $students) {
                            $id       = $students["id"];
                            $nome     = $students["nome"];
                            $cargo    = $students["cargo"];
                            $telefone = $students["telefone"];
                            $email    = $students["email"];

                            echo "<tr>
                                      <td>$nome</td>
                                      <td>$cargo</td>
                                      <td>$telefone</td>
                                      <td>$email</td>
                                  </tr>";
                        }
                    ?>
                </tbody>
            </table>
            <br><a href="index.html"> Voltar </a>
        </center>
    </body>
</html>