<?php
$host = 'localhost';
$dbname = 'responsi2';
$username = 'root';
$password = '';

try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);


    $query = $pdo->query("SELECT wilayah_kantor, latitude, longitude FROM kantor_kecamatan");
    $data = $query->fetchAll(PDO::FETCH_ASSOC);
} catch (PDOException $e) {
    die("Koneksi gagal: " . $e->getMessage());
}

if (isset($_GET['id'])) {
    $delete_kecamatan = $_GET['id'];
    $delete_sql = "DELETE FROM kantor_kecamatan WHERE wilayah_kantor = :wilayah_kantor LIMIT 1";
    $stmt = $pdo->prepare($delete_sql);
    $stmt->bindParam(':wilayah_kantor', $delete_kecamatan);

    if ($stmt->execute()) {
        $message = "<div style='color: green; margin: 10px 0;'>Data kecamatan " . htmlspecialchars($delete_kecamatan) . " berhasil dihapus!</div>";
    } else {
        $message = "<div style='color: red; margin: 10px 0;'>Error menghapus data: " . $stmt->errorInfo()[2] . "</div>";
    }
}

?>

<head>
    <style>
        body {
            width: 100%;
            height: 100%;
            margin: 0;

        }


        .container {
            display: flex;
            width: 90%;
            max-width: 1200px;
            margin-top: 20px;
        }

        #table-container {
            width: 100%;
            margin-right: 10px;
            overflow-y: auto;
        }

        table {
            width: 100%;
            border-collapse: collapse;
        }

        table,
        th,
        td {
            border: 1px solid black;
            padding: 8px;
            text-align: center;
        }

        th {
            color: 1px solid black;
            padding: 10px;
        }

        button {
            background-color: #B6A28E;
            border: 1px solid black;
            width: 70px;
            height: 30px;
        }
    </style>
</head>

<body>
    <?php include 'header.php'; ?>

    <div class="container">
        <div id="table-container">
            <table>
                <tr>
                    <th style="background-image: url('img/latar.png')">No</th>
                    <th style="background-image: url('img/latar.png')">Nama Kantor Kecamatan</th>
                    <th style="background-image: url('img/latar.png')">Latitude</th>
                    <th style="background-image: url('img/latar.png')">Longitude</th>
                    <th style="background-image: url('img/latar.png')">Aksi</th>
                </tr>
                <?php foreach ($data as $k => $row): ?>
                    <tr>
                        <td><?= $k + 1 ?></td>
                        <td><?= htmlspecialchars($row['wilayah_kantor']) ?></td>
                        <td><?= htmlspecialchars($row['latitude']) ?></td>
                        <td><?= htmlspecialchars($row['longitude']) ?></td>
                        <td>
                            <!-- Form Edit -->
                            <a href="edit.php?wilayah_kantor=<?= urlencode($row['wilayah_kantor']) ?>" style="background-color: #fff5c4; color: black; padding: 5px; border-radius: 3px; text-decoration: none;">Edit</a>
                            <!-- Form Hapus -->
                            <form method="GET" style="display: inline;" onsubmit="return confirm('Yakin ingin menghapus kecamatan <?= htmlspecialchars($row['wilayah_kantor']) ?>?');">
                                <input type="hidden" name="id" value="<?= htmlspecialchars($row['wilayah_kantor']) ?>">
                                <button type="submit" style="background-color: #B6A28E; color: black; border: none; padding: 5px 10px; cursor: pointer; border-radius: 3px;">Hapus</button>
                            </form>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </table>
        </div>
    </div>

    <?php include 'footer.php'; ?>
</body>