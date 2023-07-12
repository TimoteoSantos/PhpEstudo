<?php

//metodo estatico
class Documento {
	//atributo
	private $numero;
    
    //getters e setters
    public function getNumero(){ 
    return $this->numero;
    }
    
    //recebendo o valor de um cpf e validando no metodo estatico validarCpf
    public function setNumero($numero){
    /*
    ENVOCANDO O METODO STATICO validarCpf PASSANDO PARA ELE O NUMERO QUE RECEBEMOS NO SET ELE VALIDA E RETORNA FALSO OU VERDADEIRO
    PEGAMOS ESSE VALOR COLOCAMOS EM UMA VARIAVEL DEPOIS TESTAMOS SE É VERDADEIRO O FALSO SE FALSO NAO ENVIAR PARA O ATRIBUTO E AVISAR A USUARIO
    */
    $resultado = Documento::validarCpf($numero); //OBSERVE A FORMA COMO CHAMAR O METODO ESTATICO 
    
    if	($resultado === false){//testando se o retorno foi false
	echo "cpf invalido";//SE FOI FALSO
	
    }else{ // SE FOI VERDADEIRO
    
    //enviando numero para o atributo caso seja true
    $this->numero = (int) $numero;
    }
    
    }//FIM DO METODO SET
    
    //METODO PARA VALIDAR CPF
    public static function validarCpf($cpf):bool
    {
    //se recebeu CPF
     if(empty($cpf)) {
        return false;
    }
    //eliminar possiveis mascaras
    $cpf = preg_replace('[0-9]', '',$cpf);
    $cpf = str_pad($cpf, 11, '0', STR_PAD_LEFT);
    
    //verificar se tem 11 digitos         
    if (strlen($cpf) != 11) {
           return false;
    }
    //verificar se alguma dessas sequencias invalidas foi enviada
    else if ($cpf == '00000000000' || 
        $cpf == '11111111111' || 
        $cpf == '22222222222' || 
        $cpf == '33333333333' || 
        $cpf == '44444444444' || 
        $cpf == '55555555555' || 
        $cpf == '66666666666' || 
        $cpf == '77777777777' || 
        $cpf == '88888888888' || 
        $cpf == '99999999999') {
        return false;

     } else {   
         //verificar o digito verificador
         
        for ($t = 9; $t < 11; $t++) {
             
            for ($d = 0, $c = 0; $c < $t; $c++) {
                $d += $cpf[$c] * (($t + 1) - $c);
                
            }
            $d = ((10 * $d) % 11) % 10;
            if ($cpf[$c] != $d) {
                return false;
            }
        }
 	//se nao retornou nenhum false antes
        return true; //RETORNO
    }
    
    }//FIM DO METODO VALIDAR CPF   
   
} 
//instanciando o objeto $cpf
$cpf = new Documento();
//enviando dados para o objeto $cpf
$cpf->setNumero("09617559563");
//analisando o que esta dentro de numero
var_dump($cpf->getNumero()); //posso ver direto o atributo via get pelo var_dump

