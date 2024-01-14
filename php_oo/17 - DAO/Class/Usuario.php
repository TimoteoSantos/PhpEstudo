<?php

class Usuario
{
    private $IdUsuario;
    private $Nome;
    private $Idade;
    private $Altura;
    private $Peso;
    private $senha;


    //retorna o id do usuario
    public function getIdusuario(){
        return $this->IdUsuario;
    }
    //altera o valor do id do usuario
    public function setIdUsuario($value)
    {
        $this->IdUsuario = $value;
    }
    //retorna o nome do usuario
    public function getNome(){
        return $this->Nome;
    }
    //altera o nome do usuario
    public function setNome($value){
        $this->Nome = $value;
    }
    //tetorna a idade do usuario
    public function getIdade(){
        return $this->Idade;
    }
    //altera a idade do usuario
    public function setIdade($value){
        $this->Idade = $value;
    }
    //retorna a altura do usario
    public function getAltura(){
        return $this->getAltura;
    }
    //altera a altura do usuario
    public function setAltura($value){
        $this->Altura = $value;
    }
    //retorna o peso do usuario
    public function getPeso(){
        return $this->Peso;
    }
    //altera o peso do usuario
    public function setPeso($value){
        $this->Peso = $value;
    }

    //reorna a senha
    public function getSenha(){
        return $this->senha;
    }
    //altera a senha
    public function setSenha($senha){
        $this->senha = $senha;
    }

    //um metodo que carrega o usuario que tem um id especifico
    /* O metodo select espera receber dois parametros uma consulta e um array
     * com os valores das consultas exemplo: 1. (select * from estudante nome = :$nome)
     * 2 (array("nome" => $variavelQueContemONome)
     */
    public function  loadById($id)
    {
        //iniciando a classe Sql que é responsavel por interagir com o bando
        $Sql = new Sql();
        //usando o metodo select da classe Sql para enviar uma instrução sql
        $result = $Sql->select("SELECT * FROM usuarios WHERE ID = :id" , array(
        ":id" => $id //esse array contem os dados a serem preparados pelo pdo
    )) ;

        //verificando se retornou dados
        if(isset($result)){
            $this->DadosDainstancia($result[0]);

        }
    }

    //retornando o metodo lodBiId() com jsonencode
    public  function __toString(){
        return json_encode(array(
            "id" => $this->getIdusuario(),
            "nome" => $this->getNome(),
            "idade" => $this->getIdade(),
            "peso" => $this->getPeso()

        ));
    }

    //criando um metodo que lista todos os usuarios
    public static function getList()
    {   //instanciando o objeto $sql que trata com o bando de dados
        $sql = new Sql();
        //acessa o metodo select enviando uma consulta e ele retorna os dados
        return $sql->select("SELECT * FROM usuarios");
    }

    //metodo que busca o usuario pelo nome
    public function search($usuario)
    {       //instanciando a classe Sql que contem o acesso ao banco
            $sql = new Sql();
            //acessando o metodo responsavel por receber a query e fazer o envio para o tratamento e posterior envio para o banco
            $result = $sql->select("SELECT * FROM usuarios WHERE NOME LIKE :dados", array(
                ":dados" => "%" . $usuario . "%"));
            //retonando o resultado da consulta
            return $result;
    }

    //metodo que verifica se o usuario e a senha estao corretos
    public function  login($nome,$senha)
    {
        //iniciando a classe Sql que é responsavel por interagir com o bando
        $Sql = new Sql();
        //buscar o usuario pelo nome e senha
        $result = $Sql->select("SELECT * FROM usuarios WHERE NOME = :nome AND SENHA = :senha" , array(
            ":nome" => $nome,
            ":senha" => $senha
        )) ;

        //verificando se retornou dados
        //se o nome e a senha estao corretos chamando os sets para adicionar os dados do usuario ao objeto
        //entenda que por estar dentro da classe nao estamos passandos os dados com um objeto do tipo usuario
        //podemos passar direto para os set, o mesmo acontece se estivermos em uma classe que herde a classe
        //principalmente porque nao estamos acessando os atributos diretamente mas sim atraves de um metodo de acesso set

        if(count($result) > 0){
            //chama um metodo que consegue setar os dados na instancia
            $this->DadosDainstancia($result[0]);

        //se nao retornou dados da consulta
        }else{
            echo "senha ou usuario errado". "<br>";
        }
    }

    //esse metodo retorna todos os dados de uma instacia
    public  function DadosDainstancia($dados)
    {
        $this->setIdUsuario($dados["ID"]);
        $this->setNome($dados['NOME']);
        $this->setIdade($dados['IDADE']);
        $this->setAltura($dados['ALTURA']);
        $this->setPeso($dados['PESO']);
    }



    //CONTINUAR DAQUI AULA 67



    //metodo para fazer insert no banco de dados
    public function Insert()
    {
        //instaciar a classe que manipul o banco
        $sql = new Sql;
        //fazendo uma precidure que vai quando gravar ira retornar o id criado
        //em vez de criar uma consulta aqui estamos chamando uma precidure chamada
        //sp_usuario_insert o codigo é criado dentro do banco de dados

        $result = $sql->quuery("CALL sp_usuario_insert(:LOGIN , :SENHA)", array(
            ':LOGIN'=>$this->getNome(),
            ':SENHA'=>$this->getSenha()
        ));
    // Vamos verificar se a consulta foi bem-sucedida antes de tentar acessar os resultados
    if ($result instanceof PDOStatement) {
        $data = $result->fetch(PDO::FETCH_ASSOC); // Aqui estamos extraindo os dados como um array associativo
        if ($data) {
            $this->DadosDainstancia($result);
        }
    }

    }

}