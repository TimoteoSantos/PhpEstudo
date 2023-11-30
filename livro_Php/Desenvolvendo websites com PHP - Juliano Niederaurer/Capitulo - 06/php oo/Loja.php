<?php

class Loja
{
    public $itens;
    //funcao que adiciona itens ao meus itens
    public function adiciona($codigo, $quantidade)
    {
        //verifica se existem itens no objeto
        if(isset($this->itens[$codigo]))
            //se existir adiciona mais o item recebido
            $this->itens[$codigo] += $quantidade;
        else //senao existe apenas adiciona um item ao metodo itens
            $this->itens[$codigo] = $quantidade;
    }

    //funcao que remove o iten
    public function remove($codigo,$quantidade)
    {   //verifica se existe itens
        if($this->itens[$codigo] > $quantidade)
        {   //se existir subtrai a quandide de iten solicitada
            $this->itens[$codigo] -= $quantidade;
            return true;//retorna sucesso
        }else{//senao ha itens retona falso
            return false;
        }
    }

}
//cria um novo objeto loja
$estoque = new Loja;

//adicionando itens
$estoque->adiciona("bermuda",2);//adicionando dados ao array
$estoque->adiciona("camiseta",3);//adicionando dados ao array
echo $estoque->itens['camiseta']; // escrevendo os dados