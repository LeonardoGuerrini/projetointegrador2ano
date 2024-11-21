<?php

class Product{

    private int $id;
    private string $nome;
    private string $descricao;
    private string $genero;
    private int $estoque;
    private int $valor;


    public function setId(int $id){
        $this->id = $id;
    }

    public function setName(string $nome){
        $this->nome = $nome;
    }

    public function setDescricao(string $descricao){
        $this->descricao = $descricao;
    }

    public function setGenero(string $genero){
        $this->genero = $genero;
    }

    public function setValor(int $valor){
        $this->valor = $valor;
    }

    public function setEstoque(int $estoque){
        $this->estoque = $estoque;
    }


    public function getId(){
        return $this->id;
    }

    public function getNome(){
        return $this->nome;
    }

    public function getDescricao(){
        return $this->descricao;
    }

    public function getGenero(){
        return $this->genero;
    }

    public function getEstoque(){
        return $this->estoque;
    }

    public function getValor(){
        return $this->valor;
    }

    

}


?>