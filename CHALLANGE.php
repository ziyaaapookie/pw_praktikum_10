<?php
// Cek apakah form telah disubmit
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Ambil nilai input dari form
    $angkaPertama = $_POST['angkaPertama'];
    $angkaKedua = $_POST['angkaKedua'];
    $nama = $_POST['nama'];

    // Lakukan perhitungan
    $hasilTambah = $angkaPertama + $angkaKedua;
    $hasilKurang = $angkaPertama - $angkaKedua;
    $hasilKali = $angkaPertama * $angkaKedua;
    $hasilBagi = $angkaPertama / $angkaKedua;
    $hasilModulo = $angkaPertama % $angkaKedua;

    // Tampilkan hasil
    echo "Perhitungan Aritmatika<br>";
    echo "======================<br>";
    echo "Nama : " . $nama . "<br>";
    echo "$angkaPertama + $angkaKedua = " . $hasilTambah . "<br>";
    echo "$angkaPertama - $angkaKedua = " . $hasilKurang . "<br>";
    echo "$angkaPertama * $angkaKedua = " . $hasilKali . "<br>";
    echo "$angkaPertama / $angkaKedua = " . $hasilBagi . "<br>";
    echo "$angkaPertama % $angkaKedua = " . $hasilModulo . "<br>";
}
?>

<!-- Form HTML -->
<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
    Masukkan nama anda: <input type="text" name="nama"><br>
    Masukkan angka pertama (1-10): <input type="number" name="angkaPertama"><br>
    Masukkan angka kedua (1-10): <input type="number" name="angkaKedua"><br>
    <input type="submit" name="hitung" value="Hitung">
</form>