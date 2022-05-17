<?php
    include_once("templates/header.php");
?>

    <div class="container">
        <?php include_once("templates/backbtn.html") ?>
        <h1 id="main-title">Editar contato</h1>
        <form id="create-form" action="<?= $BASE_URL ?>config/process.php" method="POST">
            <input type="hidden" name="type" value="edit">
            <input type="hidden" name="id" value="<?= $contact["id"] ?>">
            <div class="form-group">
                <label for="name">Nome *</label>
                <input value="<?= $contact["name"] ?>" type="text" class="form-control" id="name" name="name" placeholder="Digite o nome" required>
            </div>
            <div class="form-group">
                <label for="surname">Sobrenome *</label>
                <input value="<?= $contact["surname"] ?>" type="text" class="form-control" id="surname" name="surname" placeholder="Digite o sobrenome" required>
            </div>
            <div class="form-group">
                <label for="cpf">CPF</label>
                <input value="<?= $contact["cpf"] ?>" type="text" class="form-control" id="cpf" name="cpf" placeholder="Digite o CPF">
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input value="<?= $contact["email"] ?>" type="text" class="form-control" id="email" name="email" placeholder="Digite o e-mail">
            </div>
            <div class="form-group">
                <label for="phone">Telefone *</label>
                <input value="<?= $contact["phone"] ?>" type="text" class="form-control" id="phone" name="phone" placeholder="Digite o telefone" required>
            </div>
            <button type="submit" class="btn btn-primary">Atualizar</button>
            <p>Os campos com asterisco (*) são obrigatórios</p>
        </form>
    </div>
  

<?php
    include_once("templates/footer.php");
?>