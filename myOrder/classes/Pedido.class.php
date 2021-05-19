<?php

class Pedido {
    private $numero;
    private $descricao;
    private $valor;
    private $itens;

    public function getNumero(){
        return $this->numero;
    }
    
    public function setNumero($numero){
        $this->numero = $numero;
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

    public function getItens(){
        return $this->itens;
    }
    
    public function setItens($itens){
        $this->itens = $itens;
    }
}

?>