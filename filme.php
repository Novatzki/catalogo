<pre>
<?php

session_start();


if (isset($_SESSION['usuario']))
{

}  else {
    header("Location: login.php");
}

    require_once './model/filmes.php';
    
    $id = $_GET['id'];
    $filme = obtemFilme($id);
    

?>
</pre>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">


    <title>Cadastro de Filmes</title>

    <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
    
  </head>
  
  <body>

    <nav class="navbar navbar-inverse navbar-static-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">Meu NetFlix</a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
          <ul class="nav navbar-nav">
            <li class="active"><a href="admin.php">Home</a></li>
            <li ><a href="cadastro.php">Cadastrar Novo</a></li>            
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>

    <div class="container">

        <div class="row">
            <?php 
                if (count($filme) > 0):
            ?>
            <div class="pull-right">
                <button class="btn btn-primary">
                    <span class="glyphicon glyphicon-pencil"></span>
                </button>
                <button class="btn btn-danger">
                    <span class="glyphicon glyphicon-remove"></span>
                </button>
            </div>
            
            <h1><?php echo $filme["nome"]; ?></h1>
            
            
            <img src="imagens/<?php echo $filme["imagem"]; ?>" alt="" class="img-thumbnail"/>

            <p>Descrição do Filme: <?php echo $filme["descricao"]; ?></p>
            <p>Categoria: <?php echo $filme["categoria"]; ?></p>
            <p>Diretor: <?php echo $filme["diretor"]; ?></p>
            <p>Atores: <?php echo $filme["atores"]; ?></p>
            <p>Avaliação: <?php echo $filme["avaliacao"]; ?></p>
            
            <?php else:  ?>
            
            <div class="alert alert-danger">Filme não encontrado</div>
            
            <?php endif; ?>
        </div>

    </div><!-- /.container -->


   
  </body>
</html>
