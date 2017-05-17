<?php

 require_once './model/filmes_pdo.php';

$nome = $_POST['pesquisa'];
 
$filmes = pesquisaPorNome($nome);

include './index.php';

?>