<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Konversi Nilai ke Huruf</title>
</head>
<body>
    <h1>Konversi Nilai ke Huruf</h1>

    <form method="post" action="">
        Masukkan nilai (0-100):
        <input type="number" name="nilai" min="0" max="100" required>
        <input type="submit" value="Konversi">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Mendapatkan nilai dari form
        $nilai = $_POST["nilai"];

        // Mengonversi nilai ke huruf berdasarkan aturan
        if ($nilai >= 0 && $nilai <= 100) {
            if ($nilai >= 90) {
                $konversi = "A";
            } elseif ($nilai >= 80) {
                $konversi = "B";
            } elseif ($nilai >= 70) {
                $konversi = "C";
            } elseif ($nilai >= 60) {
                $konversi = "D";
            } else {
                $konversi = "E";
            }

            // Menampilkan hasil konversi
            echo "<p>Nilai $nilai dikonversi menjadi huruf \"$konversi\"</p>";
        } else {
            echo "<p>Masukkan nilai antara 0 dan 100.</p>";
        }
    }
    ?>
</body>
</html>
