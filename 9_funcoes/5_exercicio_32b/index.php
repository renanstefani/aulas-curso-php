<?php

function fullName(){
    $firstName = "John";
    $lastName = "Joe";

    $clientName = $firstName . " " . $lastName;
    echo $clientName . "<br>";
}

fullName();