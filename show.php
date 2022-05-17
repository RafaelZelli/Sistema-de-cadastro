<?php
    include_once("templates/header.php");
?>

    <div class="container" id="view-contact">
        <?php include_once("templates/backbtn.html"); ?>
        <h1 id="main-title"><?= $contact["name"] ?></h1>
        <p class="bold">Nome</p>
        <p><?= $contact["name"] ?></p>
        <p class="bold">Sobrenome</p>
        <p><?= $contact["surname"] ?></p>
        <p class="bold">CPF</p>
        <p><?= $contact["cpf"] ?></p>
        <p class="bold">E-mail</p>
        <p><?= $contact["email"] ?></p>
        <p class="bold">Telefone</p>
        <p><?= $contact["phone"] ?></p>
    </div>

<?php
    include_once("templates/footer.php");
?>
    
