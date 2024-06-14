<?php
require "dados.php";
$pdo = mysqlConnect();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $cpf = str_replace(['.', '-'], '', $_POST["cpf"]);
  $nome = $_POST["nome"];
  $email = $_POST["email"];
  $assunto = $_POST["assunto"];
  $servicos = $_POST["servicos"];
  $contato = $_POST["contato"];
  $comentario = $_POST["comentario"];

  try {
    $stmt = $pdo->prepare("INSERT INTO form (cpf, nome, email, assunto, servico, contato, coment) 
                           VALUES (:cpf, :nome, :email, :assunto, :servico, :contato, :comentario)");

    $stmt->bindParam(":cpf", $cpf);
    $stmt->bindParam(":nome", $nome);
    $stmt->bindParam(":email", $email);
    $stmt->bindParam(":assunto", $assunto);
    $stmt->bindParam(":servico", $servicos);
    $stmt->bindParam(":contato", $contato);
    $stmt->bindParam(":comentario", $comentario);

    $stmt->execute();

    header("Location: paginaDados.php");
    exit();
  } catch (Exception $e) {
    exit('Ocorreu uma falha ao inserir os dados: ' . $e->getMessage());
  }
} else {
  echo "Método inválido para acessar esta página.";
}
?>