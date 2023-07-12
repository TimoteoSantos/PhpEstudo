<?php

/*

crie um programa que:

calcula o salario de um colaborador

o colaborador recebe 50 reais por dia 
ele trabalhou 26 dias 
nesses 26 dias ele faltou 5 horas
teve uma gratificação de 500 reais deixar dinamico
ele fez um adiantamento de 120 reais
ele paga 6% do seu salario de transporte dexar constante o desconto é sobre o salario sem comissao
o nome é estatico todos os outros sao private 
tambem deve mostrar o salario bruto

------------------------
valorDia = 50
diasTrabalhados = 26 supondo  que o trabalhador nao tem horas extras
faltas = 5
gratificacao = 500
adiantamento = 120
taxaTransporte = 7%
-------------------------
o sistema deve motrar o valor do salario mais comissao
o valor dos descontos
as horas trabalhadas
e quanto por cento do salario ele pegou adiantado

salarioComissao()ok
valorDescontosTransporte() ok
ValorDescontoAdiandamento() em porcentagem ok
horasTrabalhadas()ok
porcentagemAdiantamento();ok
salarioLiquido() salario bruto + comissao - taxa transporte - adiantamento 
---------------------------

*/

class Trabalhador
{

	public static $nome;
	private $valorDia;
	private $diasTrabalhados;
	private $faltas;
	private $gratificacao;
	private $adiantamento;
	const TAXA_TRANSPORTE = 0.06; // por ja existir como uma constante nao pode ser enviada via costrutor ou set
	
	//metodo construtor
	public function __construct ($nome,$valorDia,$diasTrabalhados,$faltas,$gratificacao,$adiantamento)
	{
	self::$nome = $nome; //observar a chamada de atributos staticos
	$this->valorDia = $valorDia;
	$this->diasTrabalhados = $diasTrabalhados;
	$this->faltas = $faltas;
	$this->gratificacao = $gratificacao;
	$this->adiantamento = $adiantamento;		
	}
	//get e set valorDia
	public function getValorDia()
	{
	return $tis->valorDia;
	}
	
	public function setValorDia($valorDia)
	{
	$this->valorDia = $valorDia;
	}
	
	//get e set diasTrabalhados
	public function getDiasTrabalhodos(){
	return $this->$diasTrabalhados;
	}
	
	public function setDiasTrabalhados($diasTrabalhados)
	{
	$this->diasTrabalhados = $diasTrabalhados;	
	}
	//get e set faltas
	public function getFaltas()
	{
	return $this->faltas;
	}
	
	public function setFaltas($faltas)
	{
	$this->faltas = $faltas;
	}
	
	//get e set gratificacao
	public function getGratificacao(){
	return $this->gratificacao;
	}
	
	public function setGratificacao($gatificacao)
	{
	$this->gratificacao = $gratificacao;
	}
	
	//get e set adiantamento
	public function getAdiantamento()
	{
	return $this->adiantamento;
	}
	public function setAdaiantamento($adiantamento)
	{
	$this->adiantamento = $adiantamento;
	}
	//converter dias trabalhados em horas e descontar horas de faltas
	public function calcularHorasTrabalhadas()
	{
	//Salario bruto dias - desontos * valor
	return $horasTrabalhadasSemDesconto = ((($this->diasTrabalhados * 8) - $this->faltas ));
	}
	//salario mais comissao converter as horas trabalhadas em dias e multipicar pelo valor de um dia de trabalho
	public function calcularSalario()
	{
	$horas =  $this->calcularHorasTrabalhadas();
	return (($horas / 8) * $this->valorDia);
	}
	//calcular salario mais comissao
	public function calcularSalarioMaisComissao()
	{	
        return $salarioMaiscomissao = $this->calcularSalario() + $this->gratificacao;
	}
	//calcular desconto transporte
	public function calcularDescontoTransporte()
	{
	return $valorDesconto = ($this->calcularSalario() * self::TAXA_TRANSPORTE);//taxa é um atributo statico e constante
	}
	
	//porcentagem adiantamento
	public function calcularPorcentagemAdiantamento()
	{
	return ($this->adiantamento / $this->calcularSalario()) * 100;
	}
	
	//salario liquido
	public function salarioLiquido()
	{
	return ((($this->calcularSalario() + $this->gratificacao) -  $this->calcularDescontoTransporte()) - $this->adiantamento);
	
	}
	
}

$calcular = new Trabalhador("timoteo",50,26,5,500,128);
echo "Nome [ ". Trabalhador::$nome. " ] ";
echo" <br> Sou horas trabalhadas [ ". $horas = $calcular->calcularHorasTrabalhadas() . "]";
echo "<br> Sou salarioBruto [ ". $calcular->calcularSalario() . "]";
echo "<br> Salário bruto mais comissao [ " . $calcular-> calcularSalarioMaisComissao() . " ] ";
echo "<br> Sou o valor do desconto do transporte" . $calcular->calcularDescontoTransporte();
echo "<br> Sou a porcentagem do adiantamento [ ". $calcular->calcularPorcentagemAdiantamento() . " ] ";
echo "<br> Valor adiantamento [ " . $calcular->getAdiantamento() . " ] "; 
echo "<br> Salário liquido [ " . $calcular->salarioLiquido(). " ] ";


