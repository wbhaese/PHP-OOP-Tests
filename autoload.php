<?php

spl_autoload_register(
    function(string $nomeCompletoDaClasse){
        $caminhoCompleto = str_replace('Haese\\Comercial','src', $nomeCompletoDaClasse);
        // var_dump($caminhoCompleto);die;
        $caminhoArquivo = str_replace('\\', DIRECTORY_SEPARATOR, $caminhoCompleto);
        // var_dump($caminhoArquivo);die;
        
        $caminhoArquivo .= '.php';
        
        if (file_exists($caminhoArquivo)){
            require_once($caminhoArquivo);
        }
    }
);
