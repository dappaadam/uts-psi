<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hitung Tahun Kabisat</title>
    <link rel="stylesheet" href="../styles.css">
</head>

<body>
    <div class="container">
        <h2>Cek Tahun Kabisat</h2>
        <form method="POST" action="">
            <input type="number" name="tahun" placeholder="Masukkan tahun" required>
            <button type="submit">Cek</button>
        </form>
        <?php
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $tahun = $_POST['tahun'];

            if (($tahun % 4 == 0 && $tahun % 100 != 0) || ($tahun % 400 == 0)) {
                echo "<p><strong>$tahun adalah tahun kabisat.</strong></p>";
            } else {
                echo "<p><strong>$tahun bukan tahun kabisat.</strong></p>";
            }
        }
        ?>
    </div>
</body>

</html>