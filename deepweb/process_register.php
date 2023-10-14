<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Mengambil nilai dari form pendaftaran
    $username = $_POST["username"];
    $password = $_POST["password"];
    $email = $_POST["email"];

    // Lakukan validasi atau operasi lainnya sesuai kebutuhan

    // Contoh validasi sederhana
    if (empty($username) || empty($password) || empty($email)) {
        echo "<script>alert('Mohon lengkapi semua field yang tersedia.');</script>";
    } else {
        // Proses pendaftaran pengguna
        // Lakukan penyimpanan data ke database atau operasi lainnya

        // Contoh tampilkan pesan sukses
        echo "<script>alert('Pendaftaran berhasil. Selamat bergabung, $username!'); window.location.href = 'halaman_utama.php';</script>";
    }
} else {
    // Jika akses langsung ke file ini tanpa melalui form pendaftaran
    echo "Halaman tidak tersedia.";
}
?>
