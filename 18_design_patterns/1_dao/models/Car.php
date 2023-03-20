<?php

    // Criamos nosso model definindo os métodos básicos para manusearmos o objeto
    class Car {
        
        private $id;
        private $brand;
        private $km;
        private $color;

        public function getId() {
            return $this->id;
        }

        public function setId($id) {
            $this->id = $id;
        }
        
        public function getBrand() {
            return $this->brand;
        }

        public function setBrand($brand) {
            $this->brand = $brand;
        }

        public function getKm() {
            return $this->km;
        }

        public function setKm($km) {
            // intval para transformar o valor para int
            $this->km = intval($km); 
        }

        public function getColor() {
            return $this->color;
        }

        public function setColor($color) {
            $this->color = $color;
        }

    }

    // Criamos nosso DAO com seus métodos responsáveis por alterações no banco
    interface CarDAOInterface {

        public function create(Car $car);
        public function findAll();


    }