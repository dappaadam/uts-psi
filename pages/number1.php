<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hitung Luas Bangun</title>
    <link rel="stylesheet" href="../styles.css">
</head>

<body>
    <div class="container">
        <h2>Hitung Luas Bangun</h2>
        <img src="../images/Picture1.jpg" alt="Gambar Bangun" style="width: 250px;">
        <form method="POST" action="">
            <input type="number" name="ab" placeholder="Masukkan nilai AB" required>
            <button type="submit">Hitung</button>
        </form>
        <?php
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $ab = $_POST['ab'];
            $ae = $ab;
            $ef = $ab;
            $ij = $ab + 3;

            // Perhitungan luas permukaan bangun (asumsi dibuat berdasarkan gambar)
            $luas = 6 * ($ab * $ab) + 4 * ($ab * $ij);

            echo "<p><strong>Hasil Perhitungan:</strong></p>";
            echo "<p>Nilai AB = $ab | Nilai AE = $ae | Nilai EF = $ef | Nilai IJ = $ij</p>";
            echo "<p><strong>Rumus Luas Permukaan Bangun: </strong></p>";
            echo "<p>6 x (AB x AB) + 4 x (AB x IJ)</p>";
            echo "<p><strong>Luas Permukaan Bangun = $luas satuan luas</strong></p>";
        }
        ?>
    </div>
</body>

</html>