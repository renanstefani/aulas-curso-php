<?php

class Humano{
    public $nome;
    public $idade;
    protected $area;

    public function falar(){
        echo "Falando! <br>";
    }
}

class Professor extends Humano{
    public $area;

    private function ensinar(){
        echo "Ensinando! <br>";
    }

    public function acessoEnsinar(){
        $this->ensinar();
    }

    public function setArea($areaRecebida){
        $this->area= $areaRecebida;
    }
}

$joao = new Professor;
$joao->falar();
$joao->nome = "João";
$joao->idade = 40;
$joao->setArea("Exatas");

$joao->acessoEnsinar();

echo "O Professor $joao->nome tem $joao->idade anos e atua na área de $joao->area.";

