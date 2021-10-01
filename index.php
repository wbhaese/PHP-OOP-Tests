<?php

    require_once 'src/Model/Pessoa.php';
    require_once 'src/Model/Endereco.php';
    require_once 'src/Model/Funcionario.php';
    require_once 'src/Model/Cliente.php';

    // example of autoload
    // require_once('autoload.php');

    use Modelo\Pessoa;
    use Modelo\Endereco;
    use Modelo\Funcionario;
    use Modelo\Cliente;

    $endereco1 = new Endereco("AP", "Macapá", "Av de teste", "123", "Central", "123456");
    $endereco2 = new Endereco("ES", "Vitória", "Av de Oi", "123", "São toquarto", "123456");
    $endereco3 = new Endereco("CE", "Fortaleza", "Rua tchau", "123", "Montese", "123456");
        
    // $pessoa1 = new Pessoa('José silva', 35, $endereco1);
    // $pessoa2 = new Pessoa("Maria Antônia", 40, $endereco2);
    // $pessoa3 = new Pessoa("Samara Silva", 20, $endereco3);

    // unset($pessoa3);
    //retira a referência do objeto
    //chamando automaticamente o método desconstrutor
    echo "<pre>";

        $funcinario1 = new Funcionario("Samara Silva", 20, $endereco3, 'Gerente', 2.500);
        echo $funcinario1->__toString();

        $funcinario2 = new Funcionario("Antonia Silva", 20, $endereco1, 'Gerente', 2.500);
        echo $funcinario2->__toString();

        $cliente1 = new Cliente("José", 20, $endereco1, '01/02/1994', 2.500);
        // var_dump($cliente1);
        echo $cliente1->__toString();

        $funcinario1->setSenha("12345$");
        $funcinario1->login("Samara Silva","12345$");

        echo "<p>Numero de pessoas:" . Pessoa::getNumDePessoas() . "</p>";

    echo "<pre>";

    //setando valores nos atributos
    // $pessoa1->nome = 'José silva';
    // $pessoa1->idade = 35;

    // $pessoa2->nome = 'Maria Antônia';
    // $pessoa2->idade = 25;

    // $pessoa1->setNome('João');
    // $pessoa1->setIdade(45);
// 
    // echo "<p>Nome: {$pessoa1->getNome()} </p>";
    // echo "<p>Idade: {$pessoa1->getIdade()} </p>";
// 
    // echo "<pre>";
        // var_dump($pessoa1);
        // var_dump($pessoa2);
    // echo "</pre>";