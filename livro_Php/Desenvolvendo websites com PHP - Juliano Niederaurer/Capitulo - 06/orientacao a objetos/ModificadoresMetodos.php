<?php

//criando uma classe para aluno
class Aluno
{
    //metodos
    private $nome; //um metodo privado
    private $peso; //um metodo publico

    //metodo construtor
    public function __construct($nome,$peso)//construindo um objeto
    {
        $this->nome = $nome;
        $this->peso = $peso;
    }

    //metodos get e set
    public function setNome($nome)
    {
        $this->nome = $nome;
    }
    public function getNome()
    {
        return $this->nome;
    }
    public function setPeso($peso)
    {
        $this->peso = $peso;
    }
    public function getPeso()
    {
        return $this->peso;
    }

    //final get e set

    //UM METODO PRIVADO SO FUNCIONA AQUI DENTRO DESSA CLASSE
    private function alterarPeso($peso)
    {
        $this->peso = $peso;
    }

    //METODO QUE FAZ O ACESSO AO METODO PRIVADO
    public function alterar($peso)
    {
        Aluno::alterarPeso($peso);
    }

}//final classe


class Cotista extends  Aluno
{
    private $cad_social;

    public function __construct($cad_social,$nome,$peso)
    {
        $this->cad_social = $cad_social;
        Aluno::__construct($nome,$peso);
    }
}

$cotista = new Cotista(10,"timoteo",60);

echo $cotista->getPeso();

$aluno = new Aluno("timoteo",10.25);

//acesso a atributo privado so por get e set o mesmo para protected
echo $aluno->getNome();
echo $aluno->getPeso();

//alterar um valor atraves de um metodo private
$aluno->alterar(20);
echo $aluno->getPeso();
