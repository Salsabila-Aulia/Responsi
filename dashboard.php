<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <style>
        body {
            width: 100%;
            height: 100%;
            margin: 0;
            font-family: Arial, sans-serif;
        }

        .card {
            margin-left: 150px;
            background-image: url('img/latar.png');
            background-size: cover;
            background-position: center;
            background-repeat: repeat;

        }

        .card-text {
            text-align: justify;

        }

        .container-card a {
            text-decoration: none;
        }
    </style>
</head>

<body>
    <?php include 'header.php'; ?>

    <div class="container my-5 text-center">
        <h2 class="mb-3">PERSEBARAN KANTOR KECAMATAN DI KABUPATEN KEBUMEN</h2>

        <div id="carouselExample" class="carousel slide mx-auto w-60">

            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="img/alun.jpg" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="img/menganti.jpg" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="img/Pendopo.jpg" class="d-block w-100" alt="...">
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>

    <div class="container-card d-flex">
        <a href="deskripsi.php">
            <div class="card" style="width: 18rem;">
                <img src="img/deskripsi1.png" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Deskripsi</h5>
                    <p class="card-text">Sejarah Kabupaten Kebumen ceritanya sangat menarik looh, dari asal usul namanya dan bahasa ngapaknya. yakin gamau bacaa??</p>
                </div>
            </div>
        </a>
        <a href="index.php">
            <div class="card" style="width: 18rem;">
                <img src="img/peta_button.png" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Peta</h5>
                    <p class="card-text">Persebaran Titik Lokasi Kantor Kecamatan di Kabupaten Kebumen</p>
                </div>
            </div>
        </a>
        <a href="daftar_kantor.php">
            <div class="card" style="width: 18rem;">
                <img src="img/tabel.png" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Informasi</h5>
                    <p class="card-text">Tab ini berisi informasi dari Lokasi Persebaran Kantor Kecamatan yang ada di Kabupaten Kebumen</p>
                </div>
            </div>
        </a>

    </div>




    <?php include 'footer.php'; ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>