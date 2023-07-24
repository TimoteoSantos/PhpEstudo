<?php 

require_once 'conexao.php';
require_once 'filmes.php';
require_once 'interfaceFilmes.php';

//interface para que todo os futuros repositorio
//que venham implementar esse projeto tenham
//os metodos nescessarios para seu funcionamento


//classe repositorio_filmes implemeta a interfacer IRepostorio
class RepositorioFilmesMySQL implements IRepositorioFilmes 
{
	//atributo que guardara a conexao com o banco de dados
	private $conexao;

	//construtor do repositorio filmes
	public function __construct()
	{
		//cria o objeto que sera responsavel pelas chamadas ao banco de dados
		$this->conexao = new Conexao("localhos","root","","popcorntv");
		//conecata ao banco de dados
		if($this->conexao->conectar() == false){
			
			echo "erro" .mysqli_error();
		}
	}

	//cadastrar um novo filme,
	//observar que a sql é preparada e enviada para para o banco
	public function cadastrarFilme($filme)//estamos recebendo um objteo do tipo objeto com dados e funcoes deste objeto
	{

		$titulo = $filmes->getTitulo;
		$sinopse = $filmes->
		

	}



}