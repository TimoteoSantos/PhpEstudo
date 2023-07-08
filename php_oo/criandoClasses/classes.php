<?php

    //criando uma classe
    class carro{
        /*
        atributos ou sejas os valores que essa classe tem por padrao
        vc pode ainda enviar valores para os metodos pela funcao e para
        porem para acessar os valores dos atributos precisara da variavel $this ($this->nomeatributo)
        PARA CRIAR METODOS COMECE COM LETRAS MINUSCULAS
        E APARTIR DA SEGUNDA PALAVRA USE PALAVRA MAIUCULA PARA CADA PRIMEIRA LETRA
        */
        private $modelo;
        private $motor;
        private $ano;
        /*
        COMO O ATRIBUTO ESTA COMO PRIVATE NAO É POSSIVEL ACESSA-LO DIRETAMENTE POR $this
        PRECISAREMOS DE UMA FUNCAO (METODO) QUE ACESSE E NOS RETORNE O QUE ESTA CONTIDO NESSE ATRIBUTO
        OU MANIPULE SEU VALOR.
        PARA ACESSAR USAMOS GET PARA MANIPULAR USAMOS SET
        */

        /*metodo get para modelo (para acessar os valores do atributo modelo)
        nao recebe parametro*/
        public function getModelo(){
            //ele retorna a variavel modelo
            return $this->modelo;
        }

        /*
        metodo set para manipular os valores do atributo modelo        
        
        COMO IREMOS PRECISAR MANIPULAR VALORES PRECISAMOS PASSAR ESSE VALOR PARA A FUNCAO setModelo (METODO)
        POR ISSO PRECISAREMOS DE ENVIAR VIA PARAMETRO VC PODEMOS ULTILIZAR O NOME PREFERIRMOS
        */
        public function setModelo($modelo){
            /*$this->mode (o valor do atributo modelo) = $modelo que é a variavel que recebemos por parametro;
            PERCEBA QUE AS VARIAVEIS $modelo DO PARAMETRO E $modelo DO ATRIBUTO
            TEM O MESMO NOME MAS NAO SAO A MESMA VARIAVEL POR CAUSA DO ESCOPO
            */

            $this->modelo = $modelo;
        }

        //get do motor
        public function getMotor(){
            return $this->motor;
        }

        //set motor
        public function setMotor($motor){

            $this->motor = $motor;
        }

        //PARA ESCREVER METODO GET RETORNE O ATRIBUTO DIZENDO O ATRIBUCO ACESSADO E O DA CLASSE
        public function getAno(){
            return $this->ano;
        }

        //METODO SET APONTA PARA O ATRIBUTO DA CLASSE ADICIONANDO O VALOR DA VARIAVEL A ELE
        public function setAno($ano){
            $this->ano = $ano;
        }
}



//instaciando a classe
$carro = new carro();
//inserindo um modelo ao carro
$carro->setModelo('corsa');
//escrevendo o que tem dentro do carro
echo $carro->getModelo();


//instaciando a classe
$carro2 = new carro();
//inserindo um modelo ao carro
$carro2->setModelo('fusca');
//escrevendo o que tem dentro do carro
echo $carro2->getModelo();


/*OBSERVE QUE AS INSTANCIAS APROVEITAM A CLASSE COMO UMA FERRAMENTA PARA CRIAR MODELOS

*/