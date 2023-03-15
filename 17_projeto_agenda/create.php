<?php
    include_once("templates/header.php");
?>
    <div class="container">
        <?php include_once("templates/backbtn.html"); ?>

        <h1 id="main-title">Cadastrar contato</h1>

        <form id="create-form" action="<?= $BASE_URL ?>config/process.php" method="POST">
            <!-- input abaixo usado para controlar envio do form -->
            <input type="hidden" name="type" value="create">

            <div class="form-group">
                <label for="name">Nome do contato:</label>
                <input type="text" class="form-control" id="name" name="name" placeholder="Digite o nome" required>
            </div>

            <div class="form-group">
                <label for="phone">Telefone:</label>

                <input type="number" class="form-control" id="phone" name="phone" placeholder="Digite o telefone" required>
            </div>

            <div class="form-group">
                <label for="observations">Observações:</label>

                <textarea type="text" rows="5" class="form-control" id="observations" name="observations" placeholder="Insira informações relevantes sobre o contato"></textarea>
            </div>

            <button type="submit" class="btn btn-primary">Cadastrar</button>
        </form>
    </div>

<?php
    include_once("templates/footer.php");
?>