<?php

namespace Cliente;//aqui dissemos que a classe Cadasto de vendas pertence a um namespace

    Class Cadastro extends \Cadastro { // volta para a pasta anterior e procura a classe Cadastro nao o Arquivo a Classe

        public function registrarVenda()
        {
            echo "Foi registrada uma venda para o cliente" . $this->getNome();
        }
    }