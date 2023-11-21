<?php
/* * DAO é uma abstracao de banco de dados * * */

class Sql extends  PDO
{
    private $conn;

    //conexao ao instanciar essa classe ja é aberta uma conexao
    public function __construct()
    {
        $this->conn = new PDO("mysql:dbname=php7;host=localhost","root","");
    }

    //ASSOCIANDO OS PARAMENTROS
    private function setParams($statment, $parameters = array())
    {
        //percorrndo os dados do $parameters recebidos
        foreach ($parameters as $key => $valor)
        {   //para cada linha chamar o metodo setParam que associa uma chave a um valor
            $this->setParam($statment,$key,$valor);
        }
    }

    //PARAMENTRO QUE ASSOCIA
    private function setParam($statement,$key,$value)
    {
        $statement->bindParam($key,$value);
    }

    //execultar a consulta
    public function quuery($rouQuery,$params = array())
    {
        //preparando a consulta
        $stmt = $this->conn->prepare($rouQuery);

        //enviando para o metodo que associa os dados
        $this->setParams($stmt,$params);
        //execultando no banco e retornao o resultado da consulta

        //execultando
        $stmt->execute();

        //retornando a resposta do execulte
        return $stmt;
    }

    //um metodo para usar nos selects
    public function select($rouQuery, $params =  array())
    {
        //usando o metodo query para preparar a query

        //execultar no metodo query pegar o retorno e fazer o facth
        $stmt = $this->quuery($rouQuery,$params);

        //retornando a reposta do query em um array associativo
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }


}