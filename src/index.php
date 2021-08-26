<?php

    require_once 'Pessoa.php';
    $pessoa1 = new Pessoa('José silva', 35);
    $pessoa2 = new Pessoa("Maria Antônia", 40);
    $pessoa3 = new Pessoa("Samara Silva", 20);

    // unset($pessoa3);
    //retira a referência do objeto
    //chamando automaticamente o método desconstrutor

    echo "<p>Numero de pessoas:" . Pessoa::getNumDePessoas() . "</p>";

    //setando valores nos atributos
    // $pessoa1->nome = 'José silva';
    // $pessoa1->idade = 35;

    // $pessoa2->nome = 'Maria Antônia';
    // $pessoa2->idade = 25;

    $pessoa1->setNome('João');
    $pessoa1->setIdade(45);

    echo "<p>Nome: {$pessoa1->getNome()} </p>";
    echo "<p>Idade: {$pessoa1->getIdade()} </p>";

    echo "<pre>";
        var_dump($pessoa1);
        var_dump($pessoa2);
    echo "</pre>";