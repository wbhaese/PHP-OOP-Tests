<?php

// use CriadorConexao;

    include('src/Infraestrutura/Persistencia/CriadorConexao.php');
    include('src/Infraestrutura/Repositorio/PdoRepositorio.php');

    use Infraestrutura\Repositorio\PdoRepositorio;
    // use Dominio\Repositorio\PdoRepositorioProduto;
    use Modelo\Produto;
    // use Infraestrutura\Persistencia\CriadorConexao;


    require_once 'src/Modelo/Produto.php';


    
    echo "<pre>";
        $repositorio = new PdoRepositorio(CriadorConexao::criarConexao());
        var_dump($repositorio); 

        var_dump($repositorio->todosProdutos());
        
        $produto1 = new Produto(1, "tablet", 300.00);

        // var_dump($produto1);



    echo "<pre>";

    