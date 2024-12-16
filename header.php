<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Leaflet JS</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css"
        integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css"
        integrity="sha256-p4NxAoJBhIIN+hmNHrzRCf9tD/miZyoHS5obTRR9BMY=" crossorigin="" />
    <link rel="stylesheet" href="plugin/leaflet-search-master/dist/leaflet-search.min.css">
    <link rel="stylesheet"
        href="plugin/Leaflet.defaultextent-master/Leaflet.defaultextent-master/dist/leaflet.defaultextent.css">

    <style>
        .navbar {
            background-image: url('img/latar.png');
            background-size: cover;
            background-position: center;
            background-repeat: repeat;

        }

        body {
            background-color: #e6e0cd;
        }

        footer {
            background-image: url('img/latar.png');
            background-size: cover;
            background-position: center;
            background-repeat: repeat;
        }

        .modal-header {
            background-color: #B3C8CF;
        }

        .modal-body {
            background-color: #F4E0AF;
        }

        .modal-footer {
            background-color: #78B3CE;
        }
        .modal-table{
            background-color: #F4E0AF;
        }
    </style>
</head>

<body>

    <nav class="navbar navbar-expand-lg">
        <div class="container-fluid">
            <a class="navbar-brand"><img src="img/peta.png" width="60"></i> WEB LOKET BOOM</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" href="dashboard.php"><i
                                class="bi bi-house-fill fs-4"></i> Dashboard</a>
                    </li>
                    <li class="nav-item mt-2">
                        <a class="nav-link" href="https://kebumenkab.bps.go.id/idhttps://kebumenkab.bps.go.id/id" target="_blank"><i
                                class="fa-solid fa-layer-group fs-4"></i> Sumber Data</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#" data-bs-toggle="modal" data-bs-target="#infoModal"><i class="bi bi-person-circle fs-4"></i> profile</a>
                    </li>
                </ul>
            </div>
        </div>

    </nav>