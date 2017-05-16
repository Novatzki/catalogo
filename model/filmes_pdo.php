<?php
        define('USUARIO', "root"); // constante
        define('SENHA', "elaborata");
        define("HOST", '127.0.0.1');
        define("DATABASE", "catalago");
     
        
    /**
     * Cria a conexao
     * @author Fernando
     * @link google.com Geral
     * @return \PDO
     * 
     */
        
        
    function conecta()
    {
     
        $con = new PDO('mysql:host='.HOST.';dbname='.DATABASE, USUARIO, SENHA, 
            array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES \'UTF8\''));
        
        return $con;
        
    }   
    
    /**
     * LIsta todos Filmes em catalogo.
     * @return type
     */
    function listaFilmes ()
    {    
    
    $con = conecta();
        
    $retorno = $con->query("SELECT * FROM Filmes");
    
    return $retorno->fetchAll(PDO::FETCH_ASSOC);
  
    }
?>
