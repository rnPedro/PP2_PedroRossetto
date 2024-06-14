<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Local</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="CSS/local.css">
    <link rel="icon" type="image/x-icon" href="images/Logo (1).png">
</head>
<body>
    <?php include 'header.php'; ?>

    <div class="container mt-4 text-center">
        <h2>Nossa Localização 📌</h2>
        <p><strong> Aqui está a nossa localização no mapa e algumas imagens do nosso lugar:</strong></p>
    </div>

    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-6">
                <div class="map-container" id="mapContainer" style="display: none;">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3774.3313119163836!2d-48.27708918879365!3d-18.916723807484136!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94a445abd3ff50a1%3A0xf88ca448bcaa9ce9!2sAv.%20Jo%C3%A3o%20Naves%20de%20%C3%81vila%2C%201%20-%20Centro%2C%20Uberl%C3%A2ndia%20-%20MG%2C%2038400-097!5e0!3m2!1sen!2sbr!4v1699084232675!5m2!1sen!2sbr" width="100%" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
                <button id="showMapButton" class="btn btn-primary mt-3">Show the map</button>
            </div>
            <div class="col-md-6">
                <div id="carouselExample" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="images/uni1.jpg" class="d-block w-100" alt="Imagem 1">
                        </div>
                        <div class="carousel-item">
                            <img src="images/uni2.jpg" class="d-block w-100" alt="Imagem 2">
                        </div>
                        <div class="carousel-item">
                            <img src="images/uni3.jpeg" class="d-block w-100" alt="Imagem 3">
                        </div>
                        <div class="carousel-item">
                            <img src="images/uni4.jpg" class="d-block w-100" alt="Imagem 4">
                        </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Anterior</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Próximo</span>
                    </button>
                </div>
            </div>
        </div>
    </div>


    <?php include 'footer.php'; ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        var mapContainer = document.getElementById('mapContainer');
        var showMapButton = document.getElementById('showMapButton');

        showMapButton.addEventListener('click', function() {
            if (mapContainer.style.display === 'none' || mapContainer.style.display === '') {
                mapContainer.style.display = 'block';
                showMapButton.textContent = 'Hide';
            } else {
                mapContainer.style.display = 'none';
                showMapButton.textContent = 'Show the map';
            }
        });
    </script>
</body>
</html>
