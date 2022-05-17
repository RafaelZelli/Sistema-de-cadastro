<?php
    include_once("templates/header.php");
?>

    <div class="container">
        <?php include_once("templates/backbtn.html") ?>
        <h1 id="main-title">Criar contato</h1>
        <form id="create-form" action="<?= $BASE_URL ?>config/process.php" method="POST">
            <input type="hidden" name="type" value="create">
            <div class="form-group">
                <label for="name">Nome *</label>
                <input type="text" class="form-control" id="name" name="name" placeholder="Digite o nome" required>
            </div>
            <div class="form-group">
                <label for="surname">Sobrenome *</label>
                <input type="text" class="form-control" id="surname" name="surname" placeholder="Digite o sobrenome" required>
            </div>
            <div class="form-group">
                <label for="cpf">CPF</label>
                <input type="text" class="form-control" id="cpf" name="cpf" placeholder="Digite o CPF">
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="text" class="form-control" id="email" name="email" placeholder="Digite o e-mail">
            </div>
            <div class="form-group">
                <label for="phone">Telefone *</label>
                <input type="text" class="form-control" id="phone" name="phone" placeholder="Digite o telefone" required>
            </div>
            <button type="submit" class="btn btn-primary">Cadastar</button>
            <p>Os campos com asterisco (*) são obrigatórios</p>
        </form>
    </div>
  

<?php
    include_once("templates/footer.php");
?>