<?php
    namespace Modelo;

    require_once 'AcessoAtributos.php';

    abstract class Pessoa
    {
        use AcessoAtributos;

        //Atributos, caracteristicas == variáveis
        protected string $nome;
        protected int $idade;
        protected Endereco $endereco;

        protected float $desconto;
        private static int $numDePessoas = 0;

        //comportamentos, métodos = funções
        public function __construct(string $nome, int $idade, Endereco $endereco)
        {
            $this->nome = $nome;
            $this->idade = $idade;
            $this->validaIdade($idade);
            $this->endereco = $endereco;
            $this->setDesconto();

            self::$numDePessoas++;
            //self referencia a própria classe
        }

        public function __destruct()
        {
            self::$numDePessoas--;
        }

        //getters
        public function getNome(): string
        {
            return $this->nome;
        }        

        public function getIdade(): int
        {
            return $this->idade;
        }

        //setters
        public function setNome(string $nome): void
        {
            $this->nome = $nome;            
        }

        public function setIdade(int $idade): void
        {
            $this->idade = $idade;
        }

        // creating special functions
        public static function getNumDePessoas(){
            return self::$numDePessoas;
        }

        private function validaIdade(int $idade): void
        {
            if ($idade > 0 && $idade < 120) {
                $this->idade = $idade;
            }else{
                echo "idade errada";
                exit;
            }
        }

        //todas as classes filhas são obrigadas a ter uma
        //função semelhante
        protected abstract function setDesconto(): void;

        public function getDesconto(): float
        {
            return $this->desconto;
        }

        public abstract function __toString(): string;        
       
    }