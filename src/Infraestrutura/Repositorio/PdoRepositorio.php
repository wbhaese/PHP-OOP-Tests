<?php

namespace Infraestrutura\Repositorio;

include('src/Dominio/Repositorio/RepositorioProduto.php');

use Modelo\Produto;
use Dominio\Repositorio\RepositorioProduto;
use Persisitencia;
use PDO;

class PdoRepositorio implements RepositorioProduto
{
    private PDO $conexao;

    public function __construct(PDO $conexao)
    {
        $this->conexao = $conexao;
    }

    public function todosProdutos()
    {
        $sqlConsulta = "SELECT * FROM produto";
        $stmt = $this->conexao->query($sqlConsulta);

        // return $stmt;
        return $this->hidratarListaProdutos($stmt);
    }

    // public function salvar(): bool
    // {

    // }

    // public function createProduto(): bool
    // {

    // }

    // public function readProduto(): array
    // {

    // }
    // public function updateProduto(): bool
    // {

    // }

    // public function deleteProduto(): bool
    // {
        
    // }

    public function hidratarListaProdutos(\PDOStatement $stmt)
    {
        $listaProdutos = $stmt->fetchAll((PDO::FETCH_ASSOC));
        $listaProcessada = [];
        
        foreach ($listaProdutos as $key => $produto) {
            $listaProcessada[] = new Produto(
                $produto['idProduto'], 
                $produto['nomeProduto'], 
                $produto['precoProduto']
            );
            
            // $listaProcessada[$key] = $produto['idProduto']; 
            // $listaProcessada[$key] .= $produto['nomeProduto']; 
            // $listaProcessada[$key] .= '$produto['precoProduto']'
            
            echo "
                <table>
                    <tr width='10'>
                        <td>{$produto['idProduto']}</td>
                        <td>{$produto['nomeProduto']}</td>
                        <td>{$produto['precoProduto']}</td>
                    </tr>
                </table>
            ";


        }

        return $listaProcessada;
    }

}


