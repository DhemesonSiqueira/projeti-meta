<?php

class Produto {
    private $nome;
    private $descricao;
    private $valor;

    public function getNome(){
        return $this->nome;
    }
    
    public function setNome($nome){
        $this->nome = $nome;
    }
    
    public function getDescricao(){
        return $this->descricao;
    }
    
    public function setDescricao($descricao){
        $this->descricao = $descricao;
    }

    public function getValor(){
        return $this->valor;
    }
    
    public function setValor($valor){
        $this->valor = $valor;
    }
}

?>