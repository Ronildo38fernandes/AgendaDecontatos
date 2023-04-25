<?php
        include_once("templates/header.php");

?>
      <div class="container">
      <?php include_once("templates/backbtn.html");?>
        <h1 id="main-title">Criando contato</h1>

        <form id="create-form" action="<?= $BASE_URL ?>config/process.php" method="POST">
                <input type="hidden" name="type" value="create">
                <div class="form-group">
                        <label for="name">Nome do contato</label>
                        <input type="text" class="form-control" id="name" name="nome" placeholder="DIGITE SEU NOME" required>
                </div>
                <div class="form-group">
                        <label for="phone">Telefone de contato</label>
                        <input type="text" class="form-control" id="phone" name="phone" placeholder="DIGITE SEU TELEFONE" required>
                </div>
                <div class="form-group">
                        <label for="observations">observações</label>
                        <textarea type="text" class="form-control" id="observations" name="observations" placeholder="insira as observações" rows="3" ></textarea>        
                </div>
                <button type="submit" class="btn btn-primary">Cadastrar</button>
        </form>

      </div>

<?php
        include_once("templates/footer.php");
?>
