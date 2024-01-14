<?php

//construtores sao chamados quando a classe é iniciada

//TEMOS AQUI UMA INTERFACE SERVE PARA DIZER QUAIS METODOS E COMO ELES DEVEM SER ESCRITO PELA CLASSE
interface InterfaceUsuario
{
    public function CriarSenha($senha);
}

interface InterfaceLogin
{
//metodos nescessarios para a classe que o implementar
}

//uma classe abstrata é um modelo nao pode ser instanciada apenas usada
abstract class Pessoa
{
    private $nome;

    public function setNome($nome)
    {
        $this->nome = $nome;
    }
    public function getNome()
    {
        return $this->nome;
    }
}

abstract class Usuario extends Pessoa implements InterfaceUsuario,InterfaceLogin
{
    public $senha;

    public function CriarSenha($senha)
    {
        $this->senha = $senha;
    }
}

class Aluno extends Usuario
{
    // SOU UM CONSTRUTOR CONSTRUO UMA CLASSE AO INSTANCIAR UMA CLASSE SOU INICIALIZADO
    //TODA LOGICA DENTRO DE MIM SERA INICIALIZADA SO NAO POSSO RETORNAR VALORES NAO FUI PENSADO PARA SER ASSIM
    public function __construct($nome,$senha)
    {
        echo "tudo que eu fizer aqui sera inicializado ao instaciar a classe porem nao tenho retorno";
        parent::setNome($nome);
        $this->CriarSenha($senha);
    }
}

$obj = new Aluno("bruno",10);

//$obj->setNome("timoteo");
echo $obj->getNome() . $obj->senha;