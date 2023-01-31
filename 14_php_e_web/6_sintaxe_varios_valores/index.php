<?php 

    if(isset($_POST['ingredientes'])) {

        $ingredientes = $_POST['ingredientes'];

        print_r($ingredientes);
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- adicionamos colchetes aos names para que mais de um valor seja aceito -->
    <form action="index.php" method="POST">
        <div>
            <input type="checkbox" name="ingredientes[]" value="farinha"> Farinha
        </div>

        <div>
            <input type="checkbox" name="ingredientes[]" value="ovo"> Ovo
        </div>

        <div>
            <input type="checkbox" name="ingredientes[]" value="fermento"> Fermento
        </div>

        <div>
            <input type="checkbox" name="ingredientes[]" value="sal"> Sal
        </div>

        <div>
            <input type="submit" value="Enviar">
        </div>
    </form>
</body>
</html>