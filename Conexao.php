<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Conexao
 *
 * @author Matheus Sousa
 */
class Conexao {
    public $PDO;
    //construtor
    public function __construct() {
        
        define('MYSQL_HOST', 'localhost');
        define('MYSQL_USER', 'root');
        define('MYSQL_PASSWORD', '');
        define('MYSQL_DB_NAME', 'empresacameras');
        
        try {
            $this->PDO = new PDO('mysql:host='.MYSQL_HOST.';dbname='.MYSQL_DB_NAME,MYSQL_USER,MYSQL_PASSWORD);
        } catch (Exception $exc) {
            echo "Erro ao conectar com o MYSQL: ".$exc->getMessage();
        }
    }
}
