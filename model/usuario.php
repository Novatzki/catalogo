<?php

class Usuario
{
        /**
     * Cria a conexão 
     * @author Edir
     * @link google.com 
     * @return \PDO
     */
    private function conecta()
    {
        $con = new PDO('mysql:host='.  Conexao::HOST.';dbname='.Conexao::DATABASE, Conexao::USUARIO, Conexao::SENHA, 
                    array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES \'UTF8\''));
        return $con;
    }
    
    public function validaUsuario($usuario, $senha)
    {
        $sql = "SELECT * FROM usuarios"
        . "WHERE usuario = '$usuario'"
        . "AND senha = '$senha' "
        . "AND ativo = 1";
        
        $con = $this->conecta();
        
        $resultado = $con->query($sql);
        
        return $resultado->fetch(PDO::FETCH_ASSOC);
    }
            
}


?>