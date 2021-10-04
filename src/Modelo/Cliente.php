<?php 
    namespace Modelo;

    class Cliente extends Pessoa
    {
        private string $dataNascimento;
        private float $renda;

        public function __construct(string $nome, int $idade, Endereco $endereco, string $dataNascimento, string $salario)
        {
            parent::__construct($nome, $idade, $endereco); 
            $this->dataNascimento = $dataNascimento;
            $this->salario = $salario;
 
         }
 
         //getters
         public function getDataNascimento(): string
         {
             return $this->dataNascimento;
         }        
 
         public function getRenda(): float
         {
             return $this->renda;
         }
 
         //setters
         public function setDataNascimento(string $dataNascimento): void
         {
             $this->dataNascimento = $dataNascimento;            
         }
 
         public function setRenda(float $renda): void
         {
             $this->renda = $renda;
         }

         public function setDesconto(): void
        {
            $this->desconto = 0.05;
        }

        //Exemplo de sobreescrita:
        //ao ser redeclarado, mas com função diferente do original
        public function __toString(): string
        {
            return "<p>Nome: " . $this->nome .
                "<br>Idade: " . $this->idade . 
                "<br>end.: " . $this->endereco->getNomeLogradouro() . " " .
                $this->endereco->getNumero() .
                "<br>Data Nasc: " . $this->getDataNascimento() .
                "<br>Salário R$: " . $this->salario.
                "</p>: ";
        }
    }