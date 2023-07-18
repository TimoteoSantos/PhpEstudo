<?php
//criando uma interface

/*
    UMA INTERFACE É UM CONTRATO DE COMO DEVE SER A CLASSE QUE À IMPLEMENTAR,
    A CLASSE PODE TER MAIS METODOS MAS O MINIMO É O QUE TEM NA INTERFACE

*/

interface Veiculo{
    //metodos da classe Veiculo
    public function acelerar($velocidade);
    public function freiar($velocidade);
    public function trocarMarcha($marcha);
}

//segunda interface
interface proprietario{
    public function proprietario($nome);
}

//criando uma classe veiculos implementando a interface veiculo
//a classe civic precisa instanciar todos os metodos da interface senao nao consegue instanciar a classe civic
class Civic implements Veiculo, proprietario{ //implementado duas interfaces

    //METODOS DA INTERFACE VEICULO
    public function acelerar($velocidade){ //o nome da variavel nao precisa ser o mesmo o que importa é a quantidade de parametros

    }

    public function freiar($velocidade){

    }
    public function trocarMarcha($marcha){

    }

    //METODO DA INTERFACE PROPRIETARIO
    public function proprietario($nome){

    }

}