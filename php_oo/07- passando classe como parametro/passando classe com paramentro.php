<?php

class User {
    private $username;
    private $password;
    
    public function __construct($username, $password) {
        $this->username = $username;
        $this->password = $password;
    }
    
    // Métodos getters e setters para as propriedades...
    public function getUsername(){

    }

    public function getPassword(){

    }

}

class Authenticator {
    public function login(User $user) {
        // Lógica de autenticação
        // Aqui você pode verificar se o usuário e senha são válidos
        
        if ($user->getUsername() === 'usuario' && $user->getPassword() === 'senha') {
            echo "Login bem-sucedido!";
        } else {
            echo "Usuário ou senha inválidos!";
        }
    }
}

// Uso do código:
$user = new User('usuario', 'senha');
$authenticator = new Authenticator();
$authenticator->login($user);
