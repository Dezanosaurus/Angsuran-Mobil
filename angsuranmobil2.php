<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 font-sans text-gray-800">

    
    <div class="w-full min-h-screen bg-white p-8">

        
        <div class="flex items-center gap-6 pb-4 border-b">
            <div>
                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTb-82D0FkUSeIjhwZ1Mop0ad25X162WFnXmNCSwWYw_A&s=10" alt="" width="100px" height="100px">
            </div>
            <div>
                <h1 class="text-2xl font-bold text-gray-800">OTOMOTO</h1>
                <p class="text-sm text-gray-500">Solusi Otomotif Terpercaya</p>
            </div>
        </div>

        
        <nav class="my-6">
            <ul class="nav nav-pills justify-content-center bg-gray-50 p-2 rounded-lg border border-gray-200 text-sm font-semibold">
                <li class="nav-item"><a class="nav-link active px-6" href="#">Beranda</a></li>
                <li class="nav-item"><a class="nav-link px-6 text-gray-70/0" href="#tp">Tentang Perusahaan</a></li>
                <li class="nav-item"><a class="nav-link px-6 text-gray-700" href="#">Kontak</a></li>
            </ul>
        </nav>

        
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

        
        <div class="grid grid-cols-2 gap-6 my-6" id="tp">
            <div class="border border-gray-300 p-8 rounded-lg bg-gray-50 flex items-center justify-center font-bold text-gray-700 text-lg shadow-sm">
                OTOMOTO adalah tempat jual beli mobil terpercaya, dan sudah menjadi tempat para orang terkenal membeli mobil.
            </div>
            <div class="flex items-center justify-center">
                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSKZiXEMrymBWHgPcXqmJU9EnQYmthPL3rNTptsp43Efg&s=10" alt="">
            </div>
        </div>

        
        <div class="bg-gray-50 p-6 rounded-xl border border-gray-200 my-6">
            <h2 class="text-xl font-bold mb-4 text-gray-800 border-b pb-2">Angsuran Mobil</h2>
            
            <form action="" method="post" class="space-y-4">
                <div class="grid grid-cols-2 gap-6">
                    <div>
                        <label class="form-label font-medium">Nama</label>
                        <input type="text" name="nama" class="form-control" placeholder="Masukkan nama" required>
                    </div>

                    <div>
                        <label class="form-label font-medium">Harga Mobil (Rp)</label>
                        <input type="number" name="hargamobil" class="form-control" placeholder="Masukkan harga" required>
                    </div>
                </div>

                <div class="grid grid-cols-2 gap-6 items-center">
                    <div>
                        <label class="form-label font-medium">DP (%)</label>
                        <select name="dp" class="form-select">
                            <option value="10">10%</option>
                            <option value="20">20%</option>
                            <option value="30">30%</option>
                            <option value="40">40%</option>
                            <option value="50">50%</option>
                            <option value="60">60%</option>
                        </select>
                    </div>

                    <div>
                        <label class="font-medium block mb-2">Tenor (Tahun)</label>
                        <div class="flex gap-4">
                            <div class="form-check">
                                <input type="radio" name="tenor" value="1" id="t1" class="form-check-input" checked>
                                <label for="t1" class="form-check-label">1 Tahun</label>
                            </div>
                            <div class="form-check">
                                <input type="radio" name="tenor" value="2" id="t2" class="form-check-input">
                                <label for="t2" class="form-check-label">2 Tahun</label>
                            </div>
                            <div class="form-check">
                                <input type="radio" name="tenor" value="3" id="t3" class="form-check-input">
                                <label for="t3" class="form-check-label">3 Tahun</label>
                            </div>
                            <div class="form-check">
                                <input type="radio" name="tenor" value="4" id="t4" class="form-check-input">
                                <label for="t4" class="form-check-label">4 Tahun</label>
                            </div>
                            <div class="form-check">
                                <input type="radio" name="tenor" value="5" id="t5" class="form-check-input">
                                <label for="t5" class="form-check-label">5 Tahun</label>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="pt-2">
                    <input type="submit" value="Hitung Angsuran" name="hitung" class="btn btn-primary px-8 py-2 font-semibold">
                </div>
            </form>
        </div>

        
        <?php
        if (isset($_POST['hitung'])) {
            
        $nama = $_POST['nama'];
        $hargamobil = $_POST['hargamobil'];
        $tenor = $_POST['tenor'];
        $dp = $_POST['dp'];
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
        }
        ?>

            
        <div class="bg-blue-50 border border-blue-200 p-6 rounded-xl my-6">
            <h3 class="text-lg font-bold text-blue-900 mb-4 border-b border-blue-200 pb-2">Rincian Perhitungan Angsuran</h3>
            <div class="grid grid-cols-2 gap-y-2 text-sm text-gray-700 max-w-2xl">
                <div class="font-medium">Nama:</div>
                <div class="font-semibold text-gray-900"><?= $nama ?></div>

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
        

        <footer class="bg-white border-t mt-8 py-4 text-center text-sm text-gray-500">
            &copy; 2026 OTOMOTO. All rights reserved.
        </footer>

    </div>

    <!-- Bootstrap JS CDN -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>