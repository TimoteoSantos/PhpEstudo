<?php

//o nome da classe deve ser o nome do arquivo inicie com letra maiuscula
Class Cadastro
{
    //atributos da classe
    private $nome;
    private $email;
    private $senha;

    //metodo construtor chamado ao instanciar a classe
    public function __Construct(string $nome, string $email, string $senha){
        //atribuindo valores aos objetos
        $this->nome = $nome;
        $this->email = $email;
        $this->senha = $senha;
    }
    
    //getters
    public function getNome():string
    {
        return $this->nome;
    }

    public function getEmail():string
    {
        return $this->email;
    }

    public function getSenha():string
    {
        return $this->senha;
    }

    //setters
    public function setNome($nome)
    {
        $this->nome = $nome;
    }

    public function setEmail($email)
    {
        $this->email = $email;
    }
    public function setSenha($senha)

    {
        $this->senha = $senha;
    }

    //metodo chamado para escrever os dados de um objeto diretamente
    public function __ToString(){

        return json_encode(array(

            "nome" => $this->nome, //acesso direto dentro da classe se fosse fora precisaria do get
            "email"=> $this->email,
            "senha"=>$this->senha

        ));
    }
}
