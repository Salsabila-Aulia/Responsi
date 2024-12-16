<?php
$host = 'localhost';
$dbname = 'responsi2';
$username = 'root';
$password = '';

try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    if (isset($_GET['wilayah_kantor'])) {
        $wilayah_kantor = $_GET['wilayah_kantor'];


        $stmt = $pdo->prepare("SELECT * FROM kantor_kecamatan WHERE wilayah_kantor = :wilayah_kantor LIMIT 1");
        $stmt->bindParam(':wilayah_kantor', $wilayah_kantor);
        $stmt->execute();
        $data = $stmt->fetch(PDO::FETCH_ASSOC);

        if (!$data) {
            die("Data kecamatan tidak ditemukan!");
        }
    } else {
        die("Parameter 'wilayah_kantor' tidak ditemukan!");
    }


    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $new_wilayah_kantor = $_POST['wilayah_kantor'];
        $latitude = $_POST['latitude'];
        $longitude = $_POST['longitude'];


        $update_sql = "UPDATE kantor_kecamatan SET wilayah_kantor = :new_wilayah_kantor, latitude = :latitude, longitude = :longitude WHERE wilayah_kantor = :wilayah_kantor";
        $stmt = $pdo->prepare($update_sql);
        $stmt->bindParam(':new_wilayah_kantor', $new_wilayah_kantor);
        $stmt->bindParam(':latitude', $latitude);
        $stmt->bindParam(':longitude', $longitude);
        $stmt->bindParam(':wilayah_kantor', $wilayah_kantor);

        if ($stmt->execute()) {
            header("Location: index.php?update=success");
            exit();
        } else {
            $error_message = "Gagal memperbarui data!";
        }
    }
} catch (PDOException $e) {
    die("Koneksi gagal: " . $e->getMessage());
}
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Edit Data Kecamatan</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
</head>

<body>
    <div class="container mt-5">
        <h2>Edit Data Kecamatan</h2>
        <?php if (!empty($error_message)): ?>
            <div class="alert alert-danger"><?= htmlspecialchars($error_message) ?></div>
        <?php endif; ?>
        <form method="POST">
            <div class="mb-3">
                <label for="wilayah_kantor" class="form-label">Nama Kecamatan</label>
                <input type="text" class="form-control" id="wilayah_kantor" name="wilayah_kantor" value="<?= htmlspecialchars($data['wilayah_kantor']) ?>" required>
            </div>
            <div class="mb-3">
                <label for="latitude" class="form-label">Latitude</label>
                <input type="text" class="form-control" id="latitude" name="latitude" value="<?= htmlspecialchars($data['latitude']) ?>" required>
            </div>
            <div class="mb-3">
                <label for="longitude" class="form-label">Longitude</label>
                <input type="text" class="form-control" id="longitude" name="longitude" value="<?= htmlspecialchars($data['longitude']) ?>" required>
            </div>
            <button type="submit" class="btn btn-primary">Simpan</button>
            <a href="daftar_kantor.php" class="btn btn-secondary">Batal</a>
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>