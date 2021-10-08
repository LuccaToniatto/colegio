<?php
    $arquivo = fopen('informa.txt', 'r');
    while(!feof($arquivo)){
        $aluno = explode("|", fgets($arquivo));
    }
    fclose($arquivo);
?>
<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8"/>
        <meta http-equiv="content-language" content="pt-br"/>
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
       
        <!--STYLESHEET-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    </head>
    <body>
        <table class="table table-striped table-hover">
            <thead>
                <tr>
                    <th scope="col">Nome</th>
                    <th scope="col">Prova 1</th>
                    <th scope="col">Prova 2</th>
                    <th scope="col">Media</th>
                    <th scope="col">Ações</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <?php
                        $numero = count($aluno);
                        $i = 0;
                        while($i <= $numero-3){
                    ?>
                            <th scope="row"><?php echo $aluno[$i]; ?></th>
                            <td><?php echo $aluno[$i+1]; ?></td>
                            <td><?php echo $aluno[$i+2]; ?></td>
                            <td><?php echo $aluno[$i+3]; ?></td>
                            <td> <a href="editar.php?posicao=<?php echo $i; ?>" class="btn btn-outline-dark">Editar</a>  <a href="excluir.php?posicao=<?php echo $i; ?>" class="btn btn-outline-danger btn-sm">Excluir</a></td>
                    <?php 
                            $i = $i + 3;
                            echo "</tr>";    
                        }
                    ?>
                </tr>
            </tbody>
        </table>
    </body>
</html>