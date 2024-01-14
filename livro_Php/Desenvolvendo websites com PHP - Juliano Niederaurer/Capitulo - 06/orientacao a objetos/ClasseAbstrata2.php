<?php

/* uma classe abtrata é uma classe generalista de maior abstracao
 * ela pode apenas ser herdada e todos seus recursos estao disponiveis
 * apenas nas classes que ha herdou
 */

//as interfaces obrigan as classes a seguirem um padrao evitando a construcao desordenada
//e melhorando o entendimento do codigo
interface usuarios
{
    public function CriarSenha($senha);
}


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

//uma classe abstrata extendendo outra classe abstrata
//isso porque so podemos ter uma classe abstrata sendo herdada
abstract class Usuario extends Pessoa implements usuarios
{
    private $senha;

    //esse metodo deve ser da forma como foi feito na interface
    public function CriarSenha($senha)
    {
        $this->senha = $senha;
    }

}

//classe que herda a classe abstrata
class Aluno extends Usuario
{
    public function MostrarNomeIdade()
    {
        //acessando metodo da classe abstrata
        echo "novo nome". Pessoa::getNome() . 11;
    }
}

//instanciando a classe que herda da classe abstrata
$pessoa = new Aluno();

//acessando metodo da classe abstrata
echo $pessoa->getNome();

//metodo da classe que herdou
echo $pessoa->MostrarNomeIdade();