<?php

include_once("conexao.php");

$nome = $_POST['nome'];
$email = $_POST['email'];
$profissao = $_POST['profissao'];

$sql = "insert into usuarios (nome,email,profissao) values ('$nome','$email','$profissao')";
$salvar = mysqli_query($conexao, $sql);

$linhas = mysqli_affected_rows($conexao);

mysqli_close($conexao);

?>

<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>
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
                    <ul class="menu">
                        <a href="index.php"><li>Cadastro</li></a>
                        <a href="consultas.php"><li>Consultas</li></a>
                    </ul>
                </nav>
            </div>
            
            <div class="col s9">
                <section>
                    <h3>Confirmação de Cadastro de Usuários</h3>
                    <hr><br><br>
                    
                    <?php
                        if($linhas == 1){
                            print "Cadastro efetuado com sucesso";
                        }else{
                            print "Cadastro NÃO efetuado.<br> Já existe um usuário com este e-mail!";
                            
                        }
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