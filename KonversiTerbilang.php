<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Konversi Angka ke Terbilang</title>
</head>
<body>
    <h1>Konversi Angka ke Terbilang</h1>

    <form method="post" action="">
        Masukkan angka (1-9):
        <input type="number" name="angka" min="1" max="9" required>
        <input type="submit" value="Konversi">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Mendapatkan nilai angka dari form
        $angka = $_POST["angka"];

        // Mengonversi angka menjadi terbilang menggunakan switch
        switch ($angka) {
            case 1:
                $terbilang = "satu";
                break;
            case 2:
                $terbilang = "dua";
                break;
            case 3:
                $terbilang = "tiga";
                break;
            case 4:
                $terbilang = "empat";
                break;
            case 5:
                $terbilang = "lima";
                break;
            case 6:
                $terbilang = "enam";
                break;
            case 7:
                $terbilang = "tujuh";
                break;
            case 8:
                $terbilang = "delapan";
                break;
            case 9:
                $terbilang = "sembilan";
                break;
            default:
                $terbilang = "Tidak valid";
        }

        // Menampilkan hasil konversi
        echo "<p>Angka $angka dikonversi menjadi \"$terbilang\"</p>";
    }
    ?>
</body>
</html>
