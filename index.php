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
        
            <div class="col s12 m4 l2">
                <nav>
                    <ul class="menu">
                    <a href="index.php"><li>Cadastro</li></a>
                    <a href="consultas.php"><li>Consultas</li></a>
                </nav>
            </div>
        
            
            <div class="col s12 m8 l9">
                <section>
                    <h3>Cadastro de Usuários</h3>
                    <hr><br><br>

                    <form method="post" action="processa.php">   
                        Nome<br>
                        <input type="text" name="nome" class="campo" maxlength="40" required autofocus><br>
                        E-mail<br>
                        <input type="text" name="email" class="campo" maxlength="50" required><br>
                        Profissão<br>
                        <input type="text" name="profissao" class="campo" maxlength="40" required><br><br>
                        <input type="submit" value="Salvar" class="btn">
                        <input type="reset" value="Limpar" class="btn">
                    </form>
                </section>

            </div>
        <br>
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