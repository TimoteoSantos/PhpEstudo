<?php

/* uma classe abtrata é uma classe generalista de maior abstracao
 * ela pode apenas ser herdada e todos seus recursos estao disponiveis
 * apenas nas classes que ha herdou
 */

//classe abstrara nao pode ser instanciada
abstract class Pessoa
{
    //metodo da classe abstrata
    private $nome = "timoteo";

    //metodos get e set
    public function setNome($nome)
    {
        $this->nome = $nome;
    }
    public function getNome()
    {
        return $this->nome;
    }
}

//classe que herda a classe abstrata
class Aluno extends Pessoa
{
    public function MostrarNomeIdade()
    {
        //acessando metodo da classe abstrata
        echo "novo nome". Pessoa::getNome() . 10;
    }
}





//instanciando a classe que herda da classe abstrata
$pessoa = new Aluno();

//acessando metodo da classe abstrata
echo $pessoa->getNome();

//metodo da classe que herdou
echo $pessoa->MostrarNomeIdade();