<?php
/*  AGREGA��O 
Como o nome sugere podemos agregar valor a outra classe (PARTE) de
um todo o crud so teria sentido se recebece um aluno para manipular
assim a classe crud foi agregada dos valores contidos no objeto
aluno.
a agrega��o nos faz pensar que uma PARTE ESTA CONTIDA NUM TODO.
ter uma classe aluno
ter uma classe que escreve o nome do aluno
obrigar a classe crud implementar o metodo com o tipo aluno*/

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
class crud 
{  
    private $aluno;
    
    public function setAluno(aluno $aluno)
    {
        $this->aluno = $aluno;
    }
    public function getAluno(){
        return $this->aluno;
    }
}

//instaciando a classe aluno
$aluno = new aluno;
//passando o nome via set 
$aluno->setNome('timoteo');

$crud = new crud();

$crud->setAluno($aluno);

echo $crud->getAluno()->getNome();
