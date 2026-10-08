<?php
if (!isset($_POST['hitung'])) {
    header("Location: index.php");
    exit();
}

// Ambil dan bersihkan data dari form
$nama = trim($_POST["nama"]);
$hargamobil = trim($_POST["hargamobil"]);
$dp = isset($_POST["dp"]) ? $_POST["dp"] : "";
$tenor = isset($_POST["tenor"]) ? $_POST["tenor"] : "";

// Siapkan parameter URL untuk repopulate nilai form jika error
$query_repopulate = "nama=" . urlencode($nama) . "&hargamobil=" . urlencode($hargamobil) . "&dp=" . urlencode($dp) . "&tenor=" . urlencode($tenor);

// 1. Validasi Nama
if (empty($nama)) {
    $pesan = urlencode("Nama belum diisi!");
    header("Location: index.php?pesan=$pesan&$query_repopulate");
    die();
}

// 2. Validasi Harga Mobil
if (empty($hargamobil)) {
    $pesan = urlencode("Harga mobil belum diisi!");
    header("Location: index.php?pesan=$pesan&$query_repopulate");
    die();
}

// 3. Validasi DP
if (empty($dp)) {
    $pesan = urlencode("DP belum dipilih!");
    header("Location: index.php?pesan=$pesan&$query_repopulate");
    die();
}

// 4. Validasi Tenor
if (empty($tenor)) {
    $pesan = urlencode("Tenor belum dipilih!");
    header("Location: index.php?pesan=$pesan&$query_repopulate");
    die();
}

// =========================================================
// LOGIKA PERHITUNGAN PHP BUATAN ANDA (TETAP SAMA TANPA DIUBAH)
// =========================================================
$bunga = 20;

$hargadpmobil = 0;
if ($dp == 10) {
    $hargadpmobil = ($dp/100) * $hargamobil;
}
elseif ($dp == 20) {
    $hargadpmobil = ($dp/100) * $hargamobil;
}
elseif ($dp == 30) {
    $hargadpmobil = ($dp/100) * $hargamobil;
}
elseif ($dp == 40) {
    $hargadpmobil = ($dp/100) * $hargamobil;
}
elseif ($dp == 50) {
    $hargadpmobil = ($dp/100) * $hargamobil;
}
elseif ($dp == 60) {
    $hargadpmobil = ($dp/100) * $hargamobil;
}

$lamaangsuran = 0;
if ($tenor == 1) {
    $lamaangsuran = $tenor * 12;
}
elseif ($tenor == 2) {
    $lamaangsuran = $tenor * 12;
}
elseif ($tenor == 3) {
    $lamaangsuran = $tenor * 12;
}
elseif ($tenor == 4) {
    $lamaangsuran = $tenor * 12;
}
elseif ($tenor == 5) {
    $lamaangsuran = $tenor * 12;
}
elseif ($tenor == 6) {
    $lamaangsuran = $tenor * 12;
}

$jumlahbunga = ($bunga / 100) * $hargamobil;
$jumlahangsuran = (($hargamobil + $jumlahbunga) - $hargadpmobil) / $lamaangsuran;
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hasil Perhitungan - OTOMOTO</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 font-sans text-gray-800">

    <div class="w-full min-h-screen bg-white p-8">

        <!-- Header -->
        <div class="flex items-center gap-6 pb-4 border-b">
            <div>
                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTb-82D0FkUSeIjhwZ1Mop0ad25X162WFnXmNCSwWYw_A&s=10" alt="" width="100px" height="100px">
            </div>
            <div>
                <h1 class="text-2xl font-bold text-gray-800">OTOMOTO</h1>
                <p class="text-sm text-gray-500">Solusi Otomotif Terpercaya</p>
            </div>
        </div>

        <!-- Rincian Hasil Perhitungan -->
        <div class="bg-blue-50 border border-blue-200 p-6 rounded-xl my-6">
            <h3 class="text-lg font-bold text-blue-900 mb-4 border-b border-blue-200 pb-2">Rincian Perhitungan Angsuran</h3>
            <div class="grid grid-cols-2 gap-y-2 text-sm text-gray-700 max-w-2xl">
                <div class="font-medium">Nama:</div>
                <div class="font-semibold text-gray-900"><?= htmlspecialchars($nama) ?></div>

                <div class="font-medium">Harga Mobil:</div>
                <div class="font-semibold text-gray-900">Rp. <?= number_format($hargamobil, 0, ',', '.') ?></div>

                <div class="font-medium">DP:</div>
                <div class="font-semibold text-gray-900"><?= $dp ?>% (Rp. <?= number_format($hargadpmobil, 0, ',', '.') ?>)</div>

                <div class="font-medium">Tenor:</div>
                <div class="font-semibold text-gray-900"><?= $tenor ?> Tahun (<?= $lamaangsuran ?> Bulan)</div>

                <div class="font-medium">Bunga:</div>
                <div class="font-semibold text-gray-900"><?= $bunga ?>% (Rp. <?= number_format($jumlahbunga, 0, ',', '.') ?>)</div>
            </div>

            <div class="mt-4 pt-3 border-t border-blue-200 flex items-center justify-between max-w-2xl">
                <span class="text-base font-bold text-blue-900">Jumlah Angsuran:</span>
                <span class="text-2xl font-extrabold text-blue-600">Rp. <?= number_format($jumlahangsuran, 0, ',', '.') ?> / Bulan</span>
            </div>
        </div>

        <!-- Tombol Kembali -->
        <div class="my-4">
            <a href="index.php" class="btn btn-secondary px-6 py-2 font-semibold">Kembali ke Form Hitung</a>
        </div>

        <footer class="bg-white border-t mt-8 py-4 text-center text-sm text-gray-500">
            &copy; 2026 OTOMOTO. All rights reserved.
        </footer>

    </div>

</body>
</html>