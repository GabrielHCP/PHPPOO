<?php

require_once("Lutadoras.php");
require_once("Lutador.php");

class Luta {
    private $desafiado;
    private $desafiante;
    private $rounds;
    private $aprovada;

    public function marcarLuta($l1, $l2) {
        if ($l1->getCategoria() === $l2->getCategoria() && ($l1 != $l2)) {
            $this->aprovada = true;
            $this->desafiado = $l1;
            $this->desafiante = $l2;
        } else {
            $this->aprovada = false;
            $this->desafiado = null;
            $this->desafiante = null;
        }
    }
    public function lutar() {
        if ($this->aprovada) {
            $this->desafiado->apresentar();
            $this->desafiante->apresentar();
            $vencedor = rand(0,2);
            switch ($vencedor) {
                case 0: //Empate
                    echo "Empate";
                    $this->desafiado->empatarLuta();
                    $this->desafiante->empatarLuta();
                    break;
                case 1: //Desafiado vence
                    echo "<p>" . $this->desafiado->getNome() . " VENCEU </p>";
                    $this->desafiado->ganharLuta();
                    $this->desafiante->perderLuta();
                    break;
                case 2: //desafiante vence
                    echo "<p>" . $this->desafiante->getNome() . " VENCEU </p>";
                    $this->desafiante->ganharLuta();
                    $this->desafiado->perderLuta();
                    break;
            }
        } else {
            echo "<p> Luta não pode acontecer</p>";
        }
    }
    function getDesafiado() {
        return $this->desafiado;
    }
    function getDesafiante() {
        return $this->desafiante;
    }
    function getRounds() {
        return $this->rounds;
    }
    function getAprovada() {
        return $this->aprovada;
    }
    function setDesafiado($de) {
        $this->desafiado = $de;
    }
    function setDesafiante($de) {
        $this->desafiante = $de;
    }
    function setRounds($ro) {
        $this->rounds = $ro;
    }
    function setAprovada($apro) {
        $this->aprovada = $apro;
    }
}