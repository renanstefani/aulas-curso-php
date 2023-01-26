<?php

    // Checando ancestralidade com instanceof

    class Humano {

    }

    class Animal {

    }

    class Professor extends Humano {

    }

    
    $tyler = new Humano;
    
    if($tyler instanceof Humano){ // true
        echo "Tyler é um humano. <br>";
    } else {
        echo "Tyler não é um humano. <br>";
    }

    $rex = new Animal;

    if($rex instanceof Humano){ // false
        echo "Rex é um humano. <br>";
    } else {
        echo "Rex não é um humano. <br>";
    }

    if($rex instanceof Professor){ // false
        echo "Rex é um professor. <br>";
    } else {
        echo "Rex não é um professor. <br>";
    }

    $john = new Professor;

    if($john instanceof Humano){ // true
        echo "John é um humano. <br>";
    } else {
        echo "John não é um humano. <br>";
    }

    if($john instanceof Professor){ // true
        echo "John é um professor. <br>";
    } else {
        echo "John não é um professor. <br>";
    }
