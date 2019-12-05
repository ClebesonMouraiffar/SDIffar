<?php


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>trabalho SD</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</head>

<body>
    <div class="container">
        <h2>Professor</h2>
        <ul class="nav nav-tabs">
            <li class="active"><a data-toggle="tab" href="#aluno">Alunos</a></li>
            <li><a data-toggle="tab" href="#disciplina">Disciplinas</a></li>
            <li><a data-toggle="tab" href="#conteudo">Conteudos</a></li>
        </ul>

        <div class="tab-content">
            <div id="aluno" class="tab-pane fade in active">                
                <h3>Alunos</h3>
                <?php
                    $objeto = json_decode( file_get_contents( 'http://localhost/sdiffar/API/view/aluno/listar.php' ) );
                ?>
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Nome</th>
                            <th>Cpf</th>
                            <th>Endereço</th>
                            <th>Telefone</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach($objeto as $registro): ?>
                        <tr>
                            <td><?php echo  "$registro->idaluno";?></td>
                            <td><?php echo  "$registro->nomealuno";?></td>
                            <td><?php echo  "$registro->cpfaluno";?></td>
                            <td><?php echo  "$registro->endaluno";?></td>
                            <td><?php echo  "$registro->telefonealuno";?></td>
                        </tr>
                        <?php endforeach;?>                        
                    </tbody>
                </table>
            </div>
            <div id="disciplina" class="tab-pane fade">
                <h3>Disciplinas</h3>
                <?php
                    $objeto = json_decode( file_get_contents( 'http://localhost/sdiffar/API/view/disciplina/listar.php' ) );
                ?>
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Nome</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach($objeto as $registro): ?>
                        <tr>
                            <td><?php echo  "$registro->iddisciplina";?></td>
                            <td><?php echo  "$registro->nomedisciplina";?></td>
                        </tr>
                        <?php endforeach;?>                        
                    </tbody>
                </table>
            </div>
            <div id="conteudo" class="tab-pane fade">
                <h3>Conteúdos</h3>
                <a type="button" class="btn btn-default" href="./FormConteudo.php">Incluir</a>
                <?php
                    $objeto = json_decode( file_get_contents( 'http://localhost/sdiffar/API/view/conteudo/listar.php' ) );
                ?>
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Nome</th>
                            <th>Descrição</th>                            
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach($objeto as $registro): ?>
                        <tr>
                            <td><?php echo  "$registro->id";?></td>
                            <td><?php echo  "$registro->titulo";?></td>
                            <td><?php echo  "$registro->descricao";?></td>
                        </tr>
                        <?php endforeach;?>                        
                    </tbody>
                </table>
            </div>
        </div>
    </div>



</body>

</html>