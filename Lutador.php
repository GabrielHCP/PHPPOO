<?php

class Lutador {
    private $nome;
    private $nacionalidade; 
    private $idade, $altura, $peso;
    private $categoria, $vitorias, $derrotas, $empates;

    function apresentar() {
        echo "<p>-------------------------</p>";
        echo "<p>CHEGOU A HORA! O lutador " . $this->getNome();
        echo " veio diretamente de " . $this->getNacionalidade();
        echo " tem " . $this->getIdade() . " anos e pesa " . $this->getPeso() . " KG";
        echo " <br>ele tem " . $this->getVitorias() . " vitórias ";
        echo $this->getDerrotas() . " derrotas e " . $this->getEmpates() . " empates</p>";
    }
    function status() {
        echo "<p>------------------------------</p>";
        echo "<p>" . $this->getNome() . " é um peso " . $this->getCategoria();
        echo "e já ganhou " . $this->getVitorias() . " vezes, ";
        echo " perdeu " . $this->getDerrotas() . " vezes e ";
        echo " empatou " . $this->getEmpates() . " vezes </p>";
    }
    function ganharLuta() {
        $this->setVitorias($this->getVitorias() + 1);
    }
    function perderLuta() {
        $this->setDerrotas($this->getDerrotas() + 1);
    }
    function empatarLuta() { 
        $this->setEmpates($this->getEmpates() + 1);
    } 

    function __construct($no, $na, $id, $al, $pe, $vi, $de, $em) {
        $this->nome = $no;
        $this->nacionalidade = $na;
        $this->idade = $id;
        $this->altura = $al;
        $this->setPeso($pe);
        $this->vitorias = $vi;
        $this->derrotas = $de;
        $this->empates = $em;
    }
    function getNome() {
        return $this->nome;
    }
    function getNacionalidade() {
        return $this->nacionalidade;
    }
    function getIdade() {
        return $this->idade;
    }
    function getAltura() {
        return $this->altura;
    }
    function getPeso() {
        return $this->peso;
    }
    function getVitorias() {
        return $this->vitorias;
    }
    function getDerrotas() {
        return $this->derrotas;
    }
    function getEmpates() {
        return $this->empates;
    }
    function getCategoria() {
        return $this->categoria;
    }
    function setNome($no) {
        $this->nome = $no;
    }
    function setNacionalidade($na) {
        $this->nacionalidade = $na;
    }
    function setIdade($id) {
        $this->idade = $id;
    }
    function setAltura($al) {
        $this->altura = $al;
    }
    function setPeso($pe) { 
        $this->peso = $pe;
        $this->setCategoria();
    }
    function setVitorias($vi) {
        $this->vitorias = $vi;
    }
    function setDerrotas($de) {
        $this->derrotas = $de;
    }
    function setEmpates($em) {
        $this->empates = $em;
    }
    private function setCategoria() {
        if ($this->getPeso() < 52.2) {
            $this->categoria = " INVÁLIDO ";
        } elseif ($this->getPeso() <= 70.3) {
            $this->categoria = " LEVE ";
        } else if ($this->getPeso() <= 83.9) {
            $this->categoria = " MÉDIO ";
        } else if ($this->getPeso() <= 120.2) {
            $this->categoria = " PESADO ";
        } else {
            $this->categoria = " INVÁLIDO ";
        }
    }
}