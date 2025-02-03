<?php

$angka1 = isset($_POST['angka1']) ? filter_var($_POST['angka1'], FILTER_SANITIZE_NUMBER_FLOAT) : 0;
$angka2 = isset($_POST['angka2']) ? filter_var($_POST['angka2'], FILTER_SANITIZE_NUMBER_FLOAT) : 0;
$hasil = 0;

if (isset($_POST['hitung'])) {
    switch ($_POST['operasi']) {
        case "tambah":
            $hasil = $angka1 + $angka2;
            break;
        case "kurang":
            $hasil = $angka1 - $angka2;
            break;
        case "kali":
            $hasil = $angka1 * $angka2;
            break;
        case "bagi":
            if ($angka2 == 0) {
                $hasil = "Tidak bisa dibagi dengan nol";
            } else {
                $hasil = $angka1 / $angka2;
            }
            break;
        default:
            $hasil = 0;
    }
}

?>

<!DOCTYPE html>
<html>
<head>
    <title>Kalkulator PHP</title>
</head>
<body>
    <div class="isi">
        <h1 class="judul">Kalkulator</h1>
        <form action="main.php" method="POST">
            <input type="text" name="angka1" class="input" value="<?php echo $angka1; ?>">
            <input type="text" name="angka2" class="input" value="<?php echo $angka2; ?>">
            <select name="operasi" class="operasi">
                <option value="tambah"> + </option>
                <option value="kurang"> - </option>
                <option value="kali"> * </option>
                <option value="bagi"> / </option>
            </select>
            <button type="submit" name="hitung">hitung</button>
            <h2>Hasil: <?php echo $hasil; ?></h2>
        </form>
    </div>
</body>
</html>