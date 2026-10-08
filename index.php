<?php
// Menangkap pesan error jika ada
$pesan = "";
if (isset($_GET["pesan"])) {
    $pesan = "<div class='alert alert-danger mb-4'>" . htmlspecialchars($_GET["pesan"]) . "</div>";
}

// Menangkap nilai repopulate dari URL jika form dikembalikan karena error
$nama_value = isset($_GET["nama"]) ? htmlspecialchars($_GET["nama"]) : "";
$hargamobil_value = isset($_GET["hargamobil"]) ? htmlspecialchars($_GET["hargamobil"]) : "";
$dp_value = isset($_GET["dp"]) ? $_GET["dp"] : "";
$tenor_value = isset($_GET["tenor"]) ? $_GET["tenor"] : "1";
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OTOMOTO - Hitung Angsuran</title>
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

        <!-- Navigasi -->
        <nav class="my-6">
            <ul class="nav nav-pills justify-content-center bg-gray-50 p-2 rounded-lg border border-gray-200 text-sm font-semibold">
                <li class="nav-item"><a class="nav-link active px-6" href="index.php">Beranda</a></li>
                <li class="nav-item"><a class="nav-link px-6 text-gray-700" href="#tp">Tentang Perusahaan</a></li>
                <li class="nav-item"><a class="nav-link px-6 text-gray-700" href="#">Kontak</a></li>
            </ul>
        </nav>

        <!-- Slider Carousel -->
        <div id="carouselExampleIndicators" class="carousel slide">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRpXt_3LcTmP0czu31l_W34feo3cGva769fWMsaLdKk7A&s=10" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcR2YvVxJ7-Nf5HLhywg-6EaLn1YUEubYaJyADG9dD1tqw&s=10" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRBp1qMfJ1roJbVVLhhkty7vxWqUzyVuUwl9iNPjynvjA&s=10" class="d-block w-100" alt="...">
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>

        <!-- Tentang Perusahaan -->
        <div class="grid grid-cols-2 gap-6 my-6" id="tp">
            <div class="border border-gray-300 p-8 rounded-lg bg-gray-50 flex items-center justify-center font-bold text-gray-700 text-lg shadow-sm">
                OTOMOTO adalah tempat jual beli mobil terpercaya, dan sudah menjadi tempat para orang terkenal membeli mobil.
            </div>
            <div class="flex items-center justify-center">
                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSKZiXEMrymBWHgPcXqmJU9EnQYmthPL3rNTptsp43Efg&s=10" alt="">
            </div>
        </div>

        <!-- Form Input -->
        <div class="bg-gray-50 p-6 rounded-xl border border-gray-200 my-6">
            <h2 class="text-xl font-bold mb-4 text-gray-800 border-b pb-2">Angsuran Mobil</h2>
            
            <!-- Tempat Notifikasi Pesan Kesalahan -->
            <?php echo $pesan; ?>

            <form action="proses.php" method="post" class="space-y-4">
                <div class="grid grid-cols-2 gap-6">
                    <div>
                        <label class="form-label font-medium">Nama</label>
                        <input type="text" name="nama" class="form-control" placeholder="Masukkan nama" value="<?= $nama_value ?>">
                    </div>

                    <div>
                        <label class="form-label font-medium">Harga Mobil (Rp)</label>
                        <input type="number" name="hargamobil" class="form-control" placeholder="Masukkan harga" value="<?= $hargamobil_value ?>">
                    </div>
                </div>

                <div class="grid grid-cols-2 gap-6 items-center">
                    <div>
                        <label class="form-label font-medium">DP (%)</label>
                        <select name="dp" class="form-select">
                            <option value="">-- Pilih DP --</option>
                            <option value="10" <?= $dp_value == "10" ? 'selected' : '' ?>>10%</option>
                            <option value="20" <?= $dp_value == "20" ? 'selected' : '' ?>>20%</option>
                            <option value="30" <?= $dp_value == "30" ? 'selected' : '' ?>>30%</option>
                            <option value="40" <?= $dp_value == "40" ? 'selected' : '' ?>>40%</option>
                            <option value="50" <?= $dp_value == "50" ? 'selected' : '' ?>>50%</option>
                            <option value="60" <?= $dp_value == "60" ? 'selected' : '' ?>>60%</option>
                        </select>
                    </div>

                    <div>
                        <label class="font-medium block mb-2">Tenor (Tahun)</label>
                        <div class="flex gap-4">
                            <?php for($i = 1; $i <= 5; $i++): ?>
                                <div class="form-check">
                                    <input type="radio" name="tenor" value="<?= $i ?>" id="t<?= $i ?>" class="form-check-input" <?= $tenor_value == $i ? 'checked' : '' ?>>
                                    <label for="t<?= $i ?>" class="form-check-label"><?= $i ?> Tahun</label>
                                </div>
                            <?php endfor; ?>
                        </div>
                    </div>
                </div>

                <div class="pt-2">
                    <input type="submit" value="Hitung Angsuran" name="hitung" class="btn btn-primary px-8 py-2 font-semibold">
                </div>
            </form>
        </div>

        <footer class="bg-white border-t mt-8 py-4 text-center text-sm text-gray-500">
            &copy; 2026 OTOMOTO. All rights reserved.
        </footer>

    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>