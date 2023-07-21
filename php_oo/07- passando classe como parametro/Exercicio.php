<?php
/*
faça uma classe aluno e uma classe turma que usa os dados do aluno sem instanciar a classse aluno
*/

//quem imprementar essa interface tem que ter esses metodos
interface InterfaceMostrarTelefone{
    public function mostrarTelefone($estudante):int;
}

class aluno{
    public $nome;
    private $telefone;

    public function __construct($nome,$telefone){

        $this->nome = $nome;
        $this->telefone = $telefone;
    }

    public function getTelefone(){
        return $this->telefone;
    }
}

class turma implements InterfaceMostrarTelefone{

    public $numero;

    //estou recebendo o aluno como um objeto 
    public static function alocarEstudante(Aluno $estudante) //observe que no tipo estamos colocando o nome da classe porque aqui ela é um tipo
    {

        echo $estudante->getTelefone() . $estudante->nome; //consigo acessar diretamente a classe sem instaciar aqui porque ja foi instanciada
        //estou apenas usando a instancia estudante da classe Aluno
    }

    //metodo obrigado pela interface, tem que obedecer a interface em tudo inclusive static, tipo de retorno etc.
    public function mostrarTelefone($estudante):int//retorno imposto pela interface

    { return $estudante->getTelefone();}
}

//observe que estamos instanciando um aluno
$estudante = new Aluno('timoteo',123);
//observe que estamos instanciando uma turma ela nao tem construtor por isso nao preciso passar parametros
$turma = new turma;

/*chamando o metodo passando o objeto estudante como paramentro no metodo recebo o objeto como o proprio tipo do objeto
como podemos ver enviamos para o metodo o objeto estudante la no metodo podemos acessar os metodos e atributos de acordo com seu encapsulamento
*/
$turma::alocarEstudante($estudante);//estou passando por um metodo statico o objeto estudante como todos os recursos da classe Aluno
echo $turma->mostrarTelefone($estudante);

/*
COMO PODEMOS VER NESTE EXEMPLO PODEMOS PASSAR PARA OUTRA FUNCAO UM OBJETO QUE TEREMOS O ACESSO A SEUS METODOS E ATRIBUTOS DENTRO DA FUNCAO 

PARA QUE ISSO SEJA CAPAZ:

1. INSTANCIAR AS DUAS CLASSES 
2. ENVIAR COMO PARAMETRO PARA UM METODO QUE JA ESPERA ESSE OBJETO TENDO COMO TIPO DO ARGUMENTO O NOME DA CLASSE DA OUTRA CLASSE DO OBJETO
COM O NOME DO OBJETO (Aluno $estudante) TIPO ALUNO ARGUMENTO $ESTUDANTE.
3. DENTRO DA CLASSE PODEMOS ACESSAR NORMALMENTE OS METODOS POR ->

VIMOS TAMBEM UMA INTERFACE FORCANDO A CRIAÇÃO DE UM METODO QUE TEM UM PARAMETRO ESSE PARAMETRO FOI O OBJETO 
ASSIM PODEMOS PENSAR NOS METODOS QUE UMA CLASSE OBRIGATORIAMENTE DEVERIA TER ANTES MESMO DE IMPLEMENTALA 
DEIXANDO O CODIGO MAIS ORGANIZADO EVITANDO ESQUECIMENTO OU ERROS  POR PROGRAMADORES QUE NAO CONHECEM NOSSO CODIGO
*/