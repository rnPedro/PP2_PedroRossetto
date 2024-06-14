<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Minha Apresentação - Pedro Henrique Rossetto Natal</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap/dist/css/bootstrap.min.css">
    <style>
        body {
            background-color: #f8f9fa;
            margin: 0;
            padding: 0;
            font-family: 'Arial', sans-serif;
        }

        .header {
            background-color: #007bff;
            color: #fff;
            padding: 1em;
            text-align: center;
        }

        .nav {
            display: flex;
            justify-content: space-between;
            align-items: center;
            background-color: #007bff;
            padding: 1em;
        }

        .logo {
            font-size: 1.5em;
            font-weight: bold;
            text-decoration: none;
            color: #fff;
        }

        .nav-list {
            list-style: none;
            display: flex;
            gap: 20px;
            margin: 0;
            padding: 0;
        }

        .nav-list a {
            text-decoration: none;
            color: #fff;
            transition: color 0.3s ease-in-out;
        }

        .nav-list a:hover {
            color: #ffc107; 
        }

        .container {
            display: flex;
            flex-direction: column;
            align-items: center;
            padding: 2em;
        }

        .card {
            width: 18rem;
            text-align: center;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            transition: box-shadow 0.3s ease-in-out;
        }

        .card:hover {
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
        }

        .card-title {
            margin-top: 1em;
        }

        .card-text {
            margin-bottom: 1em;
        }

        .btn-primary {
            background-color: #ffc107; 
            border: none;
        }

        .btn-primary:hover {
            background-color: #e0a800; 
        }
        body {
    background-image: url('./images/fundo_perso.jpg');
    background-size: cover;
    background-repeat: no-repeat;
    background-attachment: fixed; 
}
footer {
    background-color: blue;
    color: white;
    text-align: center;
    padding: 10px 0;
    bottom: 0;
    width: 100%;
}
.shadow-box {
            background-color: white;
            padding: 20px;
            margin: 20px 0;
            border-radius: 10px;
            box-shadow: 0px 0px 20px 0px rgba(0, 0, 0, 0.1);
            text-align: center;
            display: none; 
            position: fixed;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            z-index: 1;
        }

        .badge-container {
            position: fixed;
            top: 10px;
            left: 10px;
            z-index: 2; 
        }

        .badge {
            background-color: black;
            color: white;
            padding: 10px;
            border-radius: 5px;
            cursor: pointer;
            margin-bottom: 10px;
            align-items: center;
        }

        .badge:hover {
            background-color: #f0f0f0; /* Cor mais clara ao passar o mouse */
        }
    </style>
</head>
<body>
<?php include 'header.php'; ?>

<div class="container mt-5">
    <div class="card">
        <img src="images/Pedropic.jpeg" class="card-img-top" alt="Minha Imagem">
        <div class="card-body">
            <h5 class="card-title">Pedro Henrique Rossetto Natal</h5>
            <p class="card-text">Bem-vindo à minha página pessoal. Eu sou o Pedro, a pessoa por trás da criação deste site. Se quiser saber mais sobre mim, siga-me nas redes sociais abaixo.</p>
            <a href="https://www.linktree.com/rnpedro_" class="btn btn-primary" target="_blank">Conheça mais</a>
        </div>
    </div>
</div>
<div class="shadow-box" id="shadowBox1">
            <p>Conhencimentos prévios em: C, JAVA, HTML, CSS, JS E PHP, SQL E PYTHON</p>
            <button onclick="closeShadowBox('shadowBox1')">Fechar</button>
        </div>
        <div class="badge" onclick="openShadowBox('shadowBox1')">Conhecimentos</div>

        <!-- Segunda Shadow Box -->
        <div class="shadow-box" id="shadowBox2">
            <p>Atualmente curso sistemas na UFU, e estou em busca de um possível emprego para ajudar a me manter aqui na faculdade </p>
            <button onclick="closeShadowBox('shadowBox2')">Fechar</button>
        </div>
        <div class="badge" onclick="openShadowBox('shadowBox2')">Sobre mim</div>
    </div>

    <script>
        function openShadowBox(id) {
            document.getElementById(id).style.display = 'block';
        }

        function closeShadowBox(id) {
            document.getElementById(id).style.display = 'none';
        }
    </script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
<?php include 'footer.php'; ?>
</body>
</html>
