<?php 

   require_once './model/conexao.php';  
      require_once './model/filmes_pdo.php';
   require_once './model/avaliacoes.php';
   
  $filmes_pdo = new Filmes();
  $avaliacao = new Avaliacoes();
      
      $id = $_GET["id"];
   $filme = getFilme($id);
   $filme = $filmes_pdo->getFilme($id);

   $nota = $avaliacao->getNota($id);
 
    
  ?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
        <meta name="description" content="">
        <meta name="author" content="">

        <title>Catalogo de Filmes</title>

        <!-- Bootstrap core CSS -->
        <link href="css/bootstrap.min.css" rel="stylesheet">

    </head>

    <body>

        <nav class="navbar navbar-default navbar-static-top">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="index.php">Meu NetFlix</a>
                </div>
                <div id="navbar" class="navbar-collapse collapse">
                    <form class="navbar-form navbar-right">
                        <div class="form-group">
                            <input type="text" placeholder="Pesquisar" class="form-control">
                        </div>

                        <button type="submit" class="btn btn-success">Pesquisar</button>
                    </form>
                </div><!--/.navbar-collapse -->
            </div>
        </nav>

        
        <?php      include "./template/barra_topo.html"; ?>

        <div class="container">
            <!-- Example row of columns -->
            <div class="row">

                <h1><?php echo $filme ["nome"]?></h1>
                <img src="imagens/<?php echo $filme ["imagem"]?>" alt="" class="img-thumbnail"/>

                <p>Descrição do Filme: altas aventuras com uma turminha do barulho</p>
                <p>Categoria: Ação - Aventura</p>
                <p>Diretor: Charles Chaplin</p>
                <p>Atores: Mel Gibson</p>
                <p>Avaliação: 4/5</p>
                <div class="col-sm-3">
                <div class="col-sm-4">
                    <div class="rating-block">
                        <h4>Average user rating</h4>
                        <h2 class="bold padding-bottom-7">4.3 <small>/ 5</small></h2>
                        <button type="button" class="btn btn-warning btn-sm" aria-label="Left Align">
                            <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
                        </button>
                        <button type="button" class="btn btn-warning btn-sm" aria-label="Left Align">
                            <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
                        </button>
                        <button type="button" class="btn btn-warning btn-sm" aria-label="Left Align">
                            <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
                        </button>
                        <button type="button" class="btn btn-default btn-grey btn-sm" aria-label="Left Align">
                        <h4>Nota média</h4>
 +                        <h2 class="bold padding-bottom-7"> <?php echo $nota; ?> <small>/ 5</small></h2>
 +                    <?php for ($i = 0; $i < 5; $i++): ?>  
 +                        <?php if($nota > $i ): ?>
 +                        <a href="controller/votar.php?id=<?php echo $id; ?>&nota=<?php echo $i+1; ?>" class="btn btn-warning btn-sm" aria-label="Left Align">    
                            <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
                        </button>
                        <button type="button" class="btn btn-default btn-grey btn-sm" aria-label="Left Align">
                          </a>
 +                        <?php else: ?>
 +                        <a href="controller/votar.php?id=<?php echo $id; ?>&nota=<?php echo $i+1; ?>" class="btn btn-default btn-sm" aria-label="Left Align">
                        <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
                        </button>
                          </a>
                          <?php endif; ?>
 +                    <?php endfor; ?>   
                    </div>
                </div>

            </div>

            <hr>

            <footer>
                <p>&copy; 2016 Company, Inc.</p>
            </footer>
        </div> <!-- /container -->



    </body>
</html>
