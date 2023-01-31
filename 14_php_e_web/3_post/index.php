<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="cadastro.php" method="POST">
        <div>
            <input type="text" name="marca" placeholder="Marca do veículo">
        </div>

        <div>
            <input type="text" name="preco" placeholder="Preço do veículo">
        </div>

        <div>
            <input type="checkbox" name="opcionais[]" value="Direção hidráulica" >Direção hidráulica
        </div>

        <div>
            <input type="checkbox" name="opcionais[]" value="Ar condicionado" >Ar condicionado
        </div>

        <div>
            <input type="checkbox" name="opcionais[]" value="Blindado" >Blindado
        </div>

        <div>
            <input type="submit" value="Enviar">
        </div>
    </form>
</body>
</html>