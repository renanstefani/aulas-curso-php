<?php
    // O DAO recebe o objeto pronto e insere no banco

    include_once("models/Car.php");

    class CarDAO implements CarDAOInterface {

        // Definimos a conexão para ser utilizada nas requisições
        private $conn;

        public function __construct(PDO $conn) {
            $this->conn = $conn;
        }
    
        // Criamos nosso método responsável pelo SELECT
        public function findAll() {
            
            $cars = [];

            // Como selecionamos todos, não é necessário o bindParam
            $stmt = $this->conn->query("SELECT * FROM cars");

            // O fetchAll vai resgatar tudo em forma de array
            $data = $stmt->fetchAll();

            foreach($data as $item) {

                $car = new Car();

                $car->setId($item["id"]);
                $car->setBrand($item["brand"]);
                $car->setKm($item["km"]);
                $car->setColor($item["color"]);

                // Por se tratar de um foreach o array vai adicionar todos os dados
                $cars[] = $car;
            }

            // Retornamos o array e organizamos no html a forma de exibição
            return $cars;
            
        }

        // Criamos o método responsável pelo INSERT no banco recebendo o objeto Car
        public function create(Car $car) {

            $stmt = $this->conn->prepare("INSERT INTO cars (brand, km, color) VALUES (:brand, :km, :color)");

            $stmt->bindParam(":brand", $car->getBrand());
            $stmt->bindParam(":km", $car->getKm());
            $stmt->bindParam(":color", $car->getColor());

            $stmt->execute();

        }

    }
