<?php

class Mesa {
    private $numero;
    private $descricao;
    private $status;

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
    
    public function getStatus(){
        return $this->status;
    }
    
    public function setStatus($status){
        $this->status = $status;
    }
}

?>