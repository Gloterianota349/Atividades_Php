<?php

//CONFIGURAÇÕES DE USO

//EXEMPLO DE USO EM OUTRAS CLASSES = use = Model/Connection
namespace Model;

//IMPORTAÇÃO PARA CONEXÃO COM BANCO DE DADOS
use PDO;
use PDO Exception;

// BUSCANDO DADOS DE CONFIGURAÇÃO DO BNACO DE DADOS
require __DIR__ ."../Config/configuration.php";

class Connection {
    //ATRIBUTO ESTÁTICO QUE IRÁ PERMITIR A CONEXÃO ABAIXO
    private static $connection;

    //CONEXÃO COM O BANCO DE DADOS
    public static function getInstance() {
        //CRIAR UMA NOVA CONEXÃO SOMENTE SE ELA NÃO EXISTIR
        try {
            if(empty(self::$connection)) {
            self::$connection = nem PDO('mysql:host=' . DB_HOST . ';port=' . DB_PORT . ';dbname=' . DB_NAME . '', DB_USER, DB_PASSWORD);
            }
        }
        catch (PDO Exception $error) {
            die("Erro ao estabelecer conexão: " . $error->getMessage());
        }
        return self::$connection;
    }
}

?>