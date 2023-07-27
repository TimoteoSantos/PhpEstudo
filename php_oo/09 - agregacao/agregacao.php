<?php
/*  AGREGAÇÃO 
Como o nome sugere podemos agregar valor a outra classe (PARTE) de
um todo o crud so teria sentido se recebece um aluno para manipular
assim a classe crud foi agregada dos valores contidos no objeto
aluno.
a agregação nos faz pensar que uma PARTE ESTA CONTIDA NUM TODO.
ter uma classe aluno
ter uma classe que escreve o nome do aluno
obrigar a classe crud implementar o metodo com o tipo aluno*/

interface Icrud{
    public function listar(aluno $aluno);
}

//classe aluno
class aluno
{   //atributo da classe aluno
    private $nome;
    //get e set
    public function getNome()
    {
        return $this->nome;
    }
    public function setNome($nome)
    {
        $this->nome = $nome;
    }
}

//classe que escreve o nome do aluno
class crud implements Icrud//implementa a interface
{    //metodo que escreve o nome do aluno
    //ESSE METODO ESPERA UM OBJETO DO TIPO aluno AQUI É ONDE ACONTECE A AGREGAÇÃO.
    //OBSERVE QUE NAO INSTACIAMOS A CLASSE aluno APENAS AGREGAMOS
    public function listar(aluno $aluno)//recebendo o objeto
    {   //escreve o nome do aluno
        echo $aluno->getNome();//acessando um metodo do objeto recebido
        $aluno->setNome('tiago');//acessando um metodo em aluno
    }
}

//instaciando a classe aluno
$aluno = new aluno;
//passando o nome via set 
$aluno->setNome('timoteo');

//instanciando a classe crud
$crud = new crud;
//enviando o objeto aluno para a classe crud
$crud->listar($aluno);
$crud->listar($aluno);//o nome foi trocado dentro de crud acessando getNome()
