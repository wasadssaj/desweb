<?php

include_once("conexao.php");

$filtro = isset($_GET['filtro'])?$_GET['filtro']:"";


$sql = "select * from usuarios where profissao like '%$filtro%'";
$consulta = mysqli_query($conexao, $sql);
$registros = mysqli_num_rows($consulta);

?>

<html lang="pt_br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Consultas</title>
    <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Import materialize.css-->
      <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>
    <!--<link rel="stylesheet" href="css/style.css">-->
</head>

<body>
    <header>
        <div id="cabecalho">
            <div id="logo">
                <img src="img/logo1.png" alt="logo" height="100">
            </div>
            <div id="publicidade">
            </div>
        </div> 
        <aside>
            <div id="div1">
                <nav>
                    <div class="nav-wrapper">
                      <div class="col s12">
                        <a href="index.php" class="breadcrumb">Cadastro</a>
                        <a href="consultas.php" class="breadcrumb">Consultas</a>
                      </div>
                    </div>
                </nav>
            </div>
        </aside>
    </header>
    <div class="row">
        
            <div class="col s3">
                <nav>
                    <a href="index.php"><ul class="menu">Cadastro</a></ul>
                    <a href="consultas.php"><ul class="menu">Consultas</a></ul>
                </nav>
            </div>
            
            <div class="col s9">
                <section>
                    <h3>Consultas de Usuários</h3>
                    <hr><br><br>
                    
                    <form method="get" action="">
                    Filtrar por profissão: <input type="text" name="filtro" class="campo" require>
                    <input type="submit" value="Pesquisar" class="btn">
                    <form>
                    <br>

                    <?php
                        print "$registros registros encontrados.";
                    

                        print "<br><br>";

                        $tabela = '<table border="1" class="highlight">';//abre table
                        $tabela .='<thead>';//abre cabeçalho
                        $tabela .= '<tr>';//abre uma linha
                        //$tabela .= '<th>Codigo</th>'; // colunas do cabeçalho
                        $tabela .= '<th>Nome</th>';
                        $tabela .= '<th>Email</th>';
                        $tabela .= '<th>Profissao</th>';
                        $tabela .= '</tr>';//fecha linha
                        $tabela .='</thead>'; //fecha cabeçalho
                        $tabela .='<tbody>';//abre corpo da tabela
                        while($exibirRegistros = mysqli_fetch_array($consulta)){

                            //$codigo = $exibirRegistros[0];
                            $nome = $exibirRegistros[1];
                            $email = $exibirRegistros[2];
                            $profissao = $exibirRegistros[3];
                        
                        /*Se você tiver um loop para exibir os dados ele deve ficar aqui*/
                        $tabela .= '<tr>'; // abre uma linha
                        //$tabela .= '<td>'.$codigo.'</td>'; //coluna numero
                        $tabela .= '<td>'.$nome.'</td>'; // coluna validade
                        $tabela .= '<td>'.$email.'</td>'; //coluna anexo
                        $tabela .= '<td>'.$profissao.'</td>';//coluna valor numero
                        $tabela .= '</tr>'; // fecha linha
                        /*loop deve terminar aqui*/
                        }
                        $tabela .='</tbody>'; //fecha corpo
                        $tabela .= '</table>';//fecha tabela

                        echo $tabela; // imprime   
                  
                        mysqli_close($conexao);

                    ?>



                </section>

            </div>
        
    </div>
    <footer class="page-footer">
          <div class="container">
            <div class="row">
              <div class="col l6 s12">
                <h5 class="white-text">Footer Content</h5>
                <p class="grey-text text-lighten-4">You can use rows and columns here to organize your footer content.</p>
              </div>
              <div class="col l4 offset-l2 s12">
                <h5 class="white-text">Links</h5>
                <ul>
                  <li><a class="grey-text text-lighten-3" href="#!">Link 1</a></li>
                  <li><a class="grey-text text-lighten-3" href="#!">Link 2</a></li>
                  <li><a class="grey-text text-lighten-3" href="#!">Link 3</a></li>
                  <li><a class="grey-text text-lighten-3" href="#!">Link 4</a></li>
                </ul>
              </div>
            </div>
          </div>
          <div class="footer-copyright">
            <div class="container">
            © 2014 Copyright Text
            <a class="grey-text text-lighten-4 right" href="#!">More Links</a>
            </div>
          </div>
        </footer>
    <script type="text/javascript" src="js/materialize.min.js"></script>
</body>
</html>