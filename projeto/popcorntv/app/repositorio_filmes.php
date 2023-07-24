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

}