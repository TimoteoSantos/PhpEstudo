<?php
//classe
class ConstrutoreSimples
{
    //atributo
    private $saldo;
    //ao iniciar o construtor ele invoca o metodo set para formatar os dados e atribuir
 public function __construct($saldo)
 {
     echo "eu fui construido e ja tenho um saldo";
     $this->setSaldo($saldo);
 }
 public function getSaldo()
 {
     return $this->saldo;
 }
 public function setSaldo($saldo)
 {
     $this->saldo = round($saldo, 2);
 }
}

$conta = new ConstrutoreSimples(50.555454122);

echo "MEU SALDO INICIOU EM ->" .  $conta->getSaldo();