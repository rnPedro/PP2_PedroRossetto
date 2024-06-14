<?php
function get_current_page() {
    $current_page = basename($_SERVER['PHP_SELF']);
    return $current_page;
}
?>



<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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

        /* Adiciona uma classe 'active' ao link da página atual */
        .nav-list a.active {
            color: #ffc107; /* Amarelo - altere conforme preferir */
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
            background-color: #ffc107; /* Amarelo - altere conforme preferir */
            border: none;
        }

        .btn-primary:hover {
            background-color: #e0a800; /* Amarelo mais escuro - altere conforme preferir */
        }
    </style>
</head>
<body>

<header class="header">
    <nav class="nav">
        <a href="/" class="logo">ASCII</a>
        <ul class="nav-list">
            <li><a href="index.php" <?php if (get_current_page() === 'index.php') echo 'class="active"'; ?>>Home</a></li>
            <li><a href="serviços.php" <?php if (get_current_page() === 'serviços.php') echo 'class="active"'; ?>>Serviços</a></li>
            <li><a href="local.php" <?php if (get_current_page() === 'local.php') echo 'class="active"'; ?>>Local</a></li>
            <li><a href="pedro.php" <?php if (get_current_page() === 'pedro.php') echo 'class="active"'; ?>>Pedro</a></li>
        </ul>
    </nav>
</header>
<!-- Restante do seu conteúdo... -->
</body>
</html>
