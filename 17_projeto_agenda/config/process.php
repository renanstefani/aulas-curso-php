<?php


session_start();

include_once("connection.php");
include_once("url.php");

$data = $_POST;


if(!empty($data)) {
    // Caso seja método POST
    // MODIFICAÇÃO NO BANCO

    // Criar contato
    if($data["type"] === "create") {
        
        $name = $data["name"];
        $phone = $data["phone"];
        $observations = $data["observations"];

        $query = "INSERT INTO contacts (name, phone, observations) VALUES (:name, :phone, :observations)";

        $stmt = $conn->prepare($query);

        $stmt->bindParam(":name", $name);
        $stmt->bindParam(":phone", $phone);
        $stmt->bindParam(":observations", $observations);

        try {
           $stmt->execute();
           $_SESSION["msg"] = "Contato criado com sucesso!";
    
        } catch(PDOException $e){
            // erro de conexão
            $error = $e->getMessage();
            echo "Erro: $error";
        }

    } else if($data["type"] === "edit") {

        $name = $data["name"];
        $phone = $data["phone"];
        $observations = $data["observations"];
        $id = $data["id"];

        $query = "UPDATE contacts
                set name = :name, 
                phone = :phone, 
                observations = :observations 
                WHERE id = :id";
        
        $stmt = $conn->prepare($query);

        $stmt->bindParam(":name", $name);
        $stmt->bindParam(":phone", $phone);
        $stmt->bindParam(":observations", $observations);
        $stmt->bindParam(":id", $id);

        try {
            $stmt->execute();
            $_SESSION["msg"] = "Contato editado com sucesso!";
     
         } catch(PDOException $e){
             // erro de conexão
             $error = $e->getMessage();
             echo "Erro: $error";
         }

    } else if($data["type"] === "delete") {

        $id = $data["id"];

        $query = "DELETE FROM contacts WHERE id = :id";

        $stmt = $conn->prepare($query);

        $stmt->bindParam(":id", $id);

        try {
            $stmt->execute();
            $_SESSION["msg"] = "Contato excluído com sucesso!";
     
         } catch(PDOException $e){
             // erro de conexão
             $error = $e->getMessage();
             echo "Erro: $error";
         }
    }

    // Redirect HOME
    header("Location:" . $BASE_URL . "../index.php");

} else {
    // Caso não seja método POST
    // SELECT DE DADOS:

    $id;

    if(!empty($_GET)) {
        $id = $_GET["id"];
    }

    // Se o id foi especificado, retorna os dados de um contato
    if(!empty($id)) {

        $query = "SELECT * FROM contacts WHERE id = :id";

        $stmt = $conn->prepare($query);

        $stmt->bindParam(":id", $id);

        $stmt->execute();

        $contact = $stmt->fetch();

    } else {
        
        // Caso não tenha id especificado, retorna todos os contatos
        $contacts = [];
        
        $query = "SELECT * FROM contacts";
        
        $stmt = $conn->prepare($query);
        
        $stmt->execute();
        $contacts = $stmt->fetchAll();
    }
}

// FECHANDO CONEXAO

// Utilizando PDO basta declarar a conexão como null e ela será fechada
$conn = null;

