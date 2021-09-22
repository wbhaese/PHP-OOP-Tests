<?php

    class Funcionario extends Pessoa
    {
        private string $cargo;
        private float $salario;

        public function __construct(string $nome, int $idade, Endereco $endereco, string $cargo, string $salario)
        {
           parent::__construct($nome, $idade, $endereco); 
           $this->cargo = $cargo;
           $this->salario = $salario;

        }

        //getters
        public function getCargo(): string
        {
            return $this->cargo;
        }        

        public function getSalario(): float
        {
            return $this->salario;
        }

        //setters
        public function setCargo(string $cargo): void
        {
            $this->cargo = $cargo;            
        }

        public function setSalario(float $salario): void
        {
            $this->salario = $salario;
        }

        public function setDesconto(): void
        {
            $this->desconto = 0.10;
        }

        //Exemplo de sobreescrita:

        //ao ser redeclarado, mas com função diferente do original
        public function __toString(): string
        {
            return "<p>Nome: " . $this->nome .
                "<br>Idade: " . $this->idade . 
                "<br>end.: " . $this->endereco->getNomeLogradouro() . " " .
                $this->endereco->getNumero() .
                "<br>Cargo: " . $this->cargo .
                "<br>Salário: R$" . $this->salario.
                "</p>: ";
        }
    }