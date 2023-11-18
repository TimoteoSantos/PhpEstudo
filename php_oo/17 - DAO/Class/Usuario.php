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
    public function  loadBiId($id)
    {

        $Sql = new Sql;
        $result = $Sql->select("SELECT * FROM estudantes WHERE ID = '$id'");
    }

}