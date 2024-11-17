<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hitung Panjang Lintasan Bola Tenis</title>
    <link rel="stylesheet" href="../styles.css">
</head>

<body>
    <div class="container">
        <h2>Hitung Panjang Lintasan Bola Tenis</h2>
        <form method="POST" action="">
            <input type="number" name="tinggi_awal" placeholder="Masukkan ketinggian awal (m)" step="0.01" required>
            <button type="submit">Hitung</button>
        </form>
        <?php
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $tinggi_awal = $_POST['tinggi_awal'];
            $total_lintasan = 0;
            $jumlah_pantulan = 0;

            while ($tinggi_awal >= 0.01) { // Pantulan dihitung selama masih >= 1 cm (0.01 m)
                $total_lintasan += $tinggi_awal; // Menambahkan jarak jatuh
                $tinggi_awal *= 4 / 5; // Tinggi pantulan berikutnya

                if ($tinggi_awal >= 0.01) {
                    $total_lintasan += $tinggi_awal; // Menambahkan jarak naik jika masih di atas 1 cm
                    $jumlah_pantulan++;
                }
            }

            echo "<p><strong>Hasil Perhitungan:</strong></p>";
            echo "<p>Total Panjang Lintasan Bola = " . number_format($total_lintasan, 2) . " meter</p>";
            echo "<p>Jumlah Pantulan Bola = $jumlah_pantulan kali</p>";
        }
        ?>
    </div>
</body>

</html>