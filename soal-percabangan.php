<!DOCTYPE html>
<html>
<head>
    <title>Form Penilaian</title>
</head>
<body>

    <h2>Form Input Nilai</h2>
    <form method="post">
        <label>Nama:</label><br>
        <input type="text" name="nama" required><br><br>

        <label>Nilai:</label><br>
        <input type="number" name="nilai" min="0" max="100" required><br><br>

        <input type="submit" name="submit" value="Klasifikasi">
    </form>

    <?php
    if (isset($_POST['submit'])) {
        $nama = $_POST['nama'];
        $nilai = (int) $_POST['nilai'];

        // Proses klasifikasi
        if ($nilai > 80) {
            $grade = "A";
        } elseif ($nilai > 70) {
            $grade = "B";
        } elseif ($nilai > 60) {
            $grade = "C";
        } elseif ($nilai > 50) {
            $grade = "D";
        } else {
            $grade = "Tidak Lulus";
        }

        // Tampilkan hasil
        echo "<h2>Hasil Klasifikasi</h2>";
        echo "Nama  : " . htmlspecialchars($nama) . "<br>";
        echo "Nilai : $nilai<br>";
        echo "Grade : $grade";
    }
    ?>

</body>
</html>
