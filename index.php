<?php

    require_once 'src/Pessoa.php';
    require_once 'src/Endereco.php';
    require_once 'src/Funcionario.php';
    require_once 'src/Cliente.php';

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

        $funcinario = new Funcionario("Samara Silva", 20, $endereco3, 'Gerente', 2.500);
        var_dump($funcinario);

        $funcinario2 = new Funcionario("Antonia Silva", 20, $endereco1, 'Gerente', 2.500);
        var_dump($funcinario2);

        $cliente1 = new Cliente("José", 20, $endereco1, 'Gerente', 2.500);
        var_dump($cliente1);


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