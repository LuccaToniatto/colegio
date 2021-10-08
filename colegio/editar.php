<?php
    $posicao = $_GET['posicao'];
    $arquivo = fopen("informa.txt", "r");
    while(!feof($arquivo))
    {
        $pessoa = explode("|", fgets($arquivo));
    }
    fclose($arquivo);
?>
<!DOCTYPE html>
<html lang="pt-br">
        <head>
            <meta charset="utf-8"/>
            <meta http-equiv="content-language" content="pt-br"/>
            <meta name="viewport" content="width=devide-width, initial-scale=1"/>
            <title>Colégio ISES</title>
            <!--BOOTSTRAP-->
            <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
            <!--CSS-->
            <link href="estilos/estilo.css" rel="stylesheet">
        </head>
    <body style="background-color:#4B4B4B;">
        <header>

                     <div class="container-fluid" style="background-color:#333333">
                        <div class="container" style="background-color:#111111">
                            <center><h1><font color="#ffffff"><svg xmlns="http://www.w3.org/2000/svg" width="2.5%" height="2.5%" fill="currentColor" class="bi bi-x-diamond" viewBox="0 0 16 16"><path d="M7.987 16a1.526 1.526 0 0 1-1.07-.448L.45 9.082a1.531 1.531 0 0 1 0-2.165L6.917.45a1.531 1.531 0 0 1 2.166 0l6.469 6.468A1.526 1.526 0 0 1 16 8.013a1.526 1.526 0 0 1-.448 1.07l-6.47 6.469A1.526 1.526 0 0 1 7.988 16zM7.639 1.17 4.766 4.044 8 7.278l3.234-3.234L8.361 1.17a.51.51 0 0 0-.722 0zM8.722 8l3.234 3.234 2.873-2.873c.2-.2.2-.523 0-.722l-2.873-2.873L8.722 8zM8 8.722l-3.234 3.234 2.873 2.873c.2.2.523.2.722 0l2.873-2.873L8 8.722zM7.278 8 4.044 4.766 1.17 7.639a.511.511 0 0 0 0 .722l2.874 2.873L7.278 8z"/></svg> - Colégio ISES - <svg xmlns="http://www.w3.org/2000/svg" width="2.5%" height="2.5%" fill="currentColor" class="bi bi-x-diamond" viewBox="0 0 16 16"><path d="M7.987 16a1.526 1.526 0 0 1-1.07-.448L.45 9.082a1.531 1.531 0 0 1 0-2.165L6.917.45a1.531 1.531 0 0 1 2.166 0l6.469 6.468A1.526 1.526 0 0 1 16 8.013a1.526 1.526 0 0 1-.448 1.07l-6.47 6.469A1.526 1.526 0 0 1 7.988 16zM7.639 1.17 4.766 4.044 8 7.278l3.234-3.234L8.361 1.17a.51.51 0 0 0-.722 0zM8.722 8l3.234 3.234 2.873-2.873c.2-.2.2-.523 0-.722l-2.873-2.873L8.722 8zM8 8.722l-3.234 3.234 2.873 2.873c.2.2.523.2.722 0l2.873-2.873L8 8.722zM7.278 8 4.044 4.766 1.17 7.639a.511.511 0 0 0 0 .722l2.874 2.873L7.278 8z"/></svg></font></h1></center>
                        </div>
                    </div>
                <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
                    <div class="container-fluid" style="background-color:#5865F2">
                        <h1><font color="#ffffff">=-=-=-</font></h1>
                            <center><h1><font color="#ffffff">-=-=-=-=-=-=-=-</font></h1></center>
                        <h1><font color="#ffffff">-=-=-=</font></h1>
                    </div>
                </nav>
        </header>
        <!--OUTPUT DE DADOS!-->
        <div class="container-fluid">
            <section>
                <br/>
                <div class="row justify=content-center row-cols-2 row-cols-md-1 mb-3 text-center">
                    <div class="col">
                        <div class="card mb-4 rounded-3 shadow-sm">
                            <div class="card-header py-3">
                            <button type="button" class="btn btn-outline-dark"><h4><b><a href="index.php?">Voltar</a></b></h4></button>
                            </div>
                            <div class="card-body">
                                    <form action="edita.php" method="post">
                                        <div class="form-group">
                                        <label>Nome:</label>
                                        <input type="name" class="form-control" name="nome" placeholder="Insira o nome do aluno" required/>
                                        <br/>
                                        <label>Prova 1:</label>
                                        <input type="number" class="form-control" name="nota1" placeholder="Insira nota da prova n1" required/>
                                        <br/>
                                        <label>Prova 2:</label>
                                        <input type="number" class="form-control" name="nota2" placeholder="Insira nota da prova n2" required/>
                                        <br/>
                                        <button type="submit" class="btn btn-outline-dark">Atualizar</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
        <footer style="background-color:#111111">
            </hr>
            <div>
                <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
                    <div class="container-fluid" style="background-color:#5865F2">
                        <h3><font color="#ffffff">=-=-=-</font></h3 >
                        <center><h4><font color="#ffffff">Desenvolvido por Lucca Rossi Toniatto TDS06</font></h4></center>
                        <h3><font color="#ffffff">-=-=-=</font></h3>
                    </div
                </nav>
            </div>
        </footer>
    </body>
</html>