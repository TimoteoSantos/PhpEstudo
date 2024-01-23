<?php

/*
 * destrutores sao invocados quando é chamado a ultima referencia ao objeto
 */
//classe de teste
class teste
{
    //atributo da classe
    public $endereco;
    //metodo construtor

    private function SalvarAudiitoria()
    {
        echo 'DADOS SALVOS NO BANCO PARA FINS DE AUDITORIA';
    }
    public function __construct()
    {
        $this->endereco = 'RUA NUMERO ZERO';
    }
    //metodo toString que escreve os dados que passarmos nela quando imprimimos o objeto
    public function __toString()
    {
        return $this->endereco;

    }

    public function __destruct()
    {
        $this->SalvarAudiitoria();

     echo "<br>" .  'AQUI EU EXISTO MAS LOGO SEREI DESTRUIDA PELO METODO DESTRUTOR SOU $this->endereco =  [' . $this->endereco. ' ]';
     unset($this->endereco);
     echo $this->endereco;

    }

}
//nova instacia
$teste = new  teste();

/*
 * neste exemplo vimos como usar o metodo destrutor do PHP
 * ele é invocado quando a o objeto é encerrado podemos com ele por exemplo fechar a conexao com o
 * banco de dados ou enviar alguma informacao chamar uma uma funcao que faz alguma coisa antes de
 * finalizar o processo que estavamos fazendo
 *
 * PERCEBA QUE METODOS MAGICOS NAO PRECISAM SER CHAMADOS PELO NOME SAO INVOCADOS CONFORME A NESCESSIDADE DA CLASSE
 */


