<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hitung Volume dan Luas Bangun</title>
    <link rel="stylesheet" href="../styles.css">
</head>

<body>
    <div class="container">
        <h2>Hitung Volume dan Luas Bangun</h2>
        <img src="../images/Picture2.jpg" alt="Gambar Bangun" style="width: 250px;">
        <form method="POST" action="">
            <input type="number" name="ab" placeholder="Masukkan nilai AB" required>
            <button type="submit">Hitung</button>
        </form>
        <?php
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $ab = $_POST['ab'];
            $cd = 2 * $ab; // CD = 2 * AB

            // Menghitung luas total (luas bagian biru)
            $luas = (3 * $ab * $ab) + (2 * $ab * $cd); // Asumsi luas persegi dan persegi panjang

            // Menghitung volume (jika bangun dianggap memiliki kedalaman setara dengan AB)
            $volume = $luas * $ab;

            echo "<p><strong>Hasil Perhitungan:</strong></p>";
            echo "<p>Nilai AB = $ab | Nilai CD = $cd</p>";
            echo "<p><strong>Rumus Luas Bangun</strong></p>";
            echo "<p>3 x (AB x AB) + 2 x (AB x CD)</p>";
            echo "<p><strong>Rumus Volume Bangun</strong></p>";
            echo "<p>Luas Bangun x AB</p>";
            echo "<p><strong>Luas Bangun = $luas satuan luas</strong></p>";
            echo "<p><strong>Volume Bangun = $volume satuan volume</strong></p>";
        }
        ?>
    </div>
</body>

</html>