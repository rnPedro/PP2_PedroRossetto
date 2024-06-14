<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Serviços - ASCII </title>
  <link rel="stylesheet" href="CSS/servico.css">
  <link rel="icon" type="image/x-icon" href="images/Logo (1).png">
</head>

<body>
  <?php include 'header.php'; ?>
  <div class="menu-background"></div>
  <div class="video-container"></div>
  <div id="formsec">
    <form action="envio.php" method="post" id="form" enctype="multipart/form-data">
      <div class="css-field">
        <label for="nome">Nome completo:</label>
        <input type="text" class="center" id="nome" name="nome">
        <small></small>
      </div>
      <div class="css-field">
        <label for="cpf">CPF:</label>
        <input type="text" id="cpf" name="cpf" placeholder="___.___.___-__">
        <small></small>
      </div>
      <div class="css-field">
        <label for="email">E-mail:</label>
        <input type="text" id="email" name="email">
        <small></small>
      </div>
      <div>
        <fieldset>
          <legend>Assunto</legend>
          <div class="css-field">
            <input type="radio" id="Projetos" name="assunto" value="Projetos">
            <label for="sim">Projetos</label>
            <input type="radio" id="Processo Seletivo" name="assunto" value="Processo Seletivo">

            <label for="não">Processo Seletivo</label>
            <input type="radio" id="Manutenção de Softawre" name="assunto" value="Manutenção de Software">

            <label for="sim">Manutenção de Software</label>
            <small></small>
          </div>
        </fieldset>
      </div>
      <div>
        <fieldset>
          <legend>Serviços:</legend>
          <p>Selecione os serviços desejados:</p>
          <div class="css-field">
            <input type="checkbox" id="Consultoria" name="servicos" value="Consultoria">
            <label for="Consultoria">Consultoria</label>
            <input type="checkbox" id="Modelagem de Software" name="servicos" value="Modelagem de Software">
            <label for="Modelagem de Software">Modelagem de Software</label>
            <input type="checkbox" id="Serviços de Tester" name="servicos" value="Serviços de Tester">
            <label for="Serviços de Tester">Serviços de Tester</label>
            <input type="checkbox" id="Modelagem de Banco de Dados" name="servicos" value="Modelagem de Banco de Dados">
            <label for="Modelagem de Banco de Dados">Modelagem de Banco de Dados</label>
            <input type="checkbox" id="Outros" name="servicos" value="outros">
            <label for="Outros">Outros</label>
            <small></small>
          </div>
        </fieldset>
      </div>
      <div>
        <label for="contato">A que se refere o contato?</label>
        <select name="contato" id="contato">
          <option value="" disabled selected>Selecione uma opção</option>
          <option value="Dúvida">Dúvidas</option>
          <option value="Reclamação">Reclamações</option>
          <option value="Sugestão">Sugestões</option>
        </select>
      </div>
      <label for="coment">Deixe sua descrição de projeto aqui!</label>
      <div class="css-field">
        <textarea name="comentario" id="coment" cols="30" rows="10" maxlength="2000"
          placeholder="Digite sua mensagem"></textarea>
        <small></small>
      </div>
      <div style="text-align: center;">
        <button type="reset">Limpar</button>
        <button id="btnVerificar">Verificar dados</button>
      </div>
    </form>
  </div>

  <div id="mensagem" class="modal">
    <div class="modal-content">
      <span class="close">&times;</span>
      <div id="resultado-formulario"></div>
      <button id="alterarDadosBtn">Alterar Dados</button>

    </div>
  </div>
  <script defer src="JS/servico.js"></script>

  <?php include 'footer.php'; ?>
</body>

</html>