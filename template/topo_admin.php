<nav class="navbar navbar-inverse navbar-static-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
            <a class="navbar-brand" href="/admin.php">Meu NetFlix</a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
          <ul class="nav navbar-nav">
            <li class="active"><a href="admin.php">Home</a></li>
            <li ><a href="cadastro.php">Cadastrar Novo</a></li>            
          </ul>
            <ul class="nav navbar-nav navbar-right">
                <li><a href="/sair.php"><?php echo $_SESSION ['usuario'] ['usuario'] ?>;</a></li>
            </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>