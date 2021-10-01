<?php
    namespace Modelo;

    interface Autenticar
    {
        public function login(Funcionario $funcionario, string $senha): void;
       
    }

?>