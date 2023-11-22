<?php

class Usuario
{
    private $IdUsuario;
    private $Nome;
    private $Idade;
    private $Altura;
    private $Peso;

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
        $result = $Sql->select("SELECT * FROM estudantes WHERE ID = :id" , array(
        ":id" => $id //esse array contem os dados a serem preparados pelo pdo
    )) ;

        //verificando se retornou dados
        if(isset($result)){
            //pegando os dados e colocando em uma variavel
            $row = $result[0];
            //associando os dados recebidos aos metodos do usuario
            $this->setIdUsuario($row["ID"]);
            $this->setNome($row['NOME']);
            $this->setIdade($row['IDADE']);
            $this->setAltura($row['ALTURA']);
            $this->setPeso($row['PESO']);

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
        return $sql->select("SELECT * FROM Estudantes");
    }

    //metodo que busca um usuario pelo nome
    public static function search($usuario)

    {
        $sql = new Sqlserver();
        return $sql->select("SELECT * FROM Estudantes WHERE NOME LIKE ? ");
    }




}