<?php $this->load->view('layouts/header'); ?>

<?php if ($this->session->userdata('id_user_level') == '1') : ?>
    <div class="mb-4">
        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800"><i class="fas fa-fw fa-home"></i> Dashboard</h1>
        </div>

        <!-- Content Row -->
        <div class="alert alert-info">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
            Selamat datang <span class="text-uppercase"><b><?= $this->session->username; ?>!</b></span> Anda bisa mengoperasikan sistem dengan wewenang tertentu melalui pilihan menu di bawah.
        </div>
        <div class="row">

            <div class="col-xl-4 col-md-6 mb-4">
                <div class="card border-left-info shadow h-100 py-2">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class="h5 mb-0 font-weight-bold text-gray-800"><a href="<?= base_url('Kriteria'); ?>" class="text-secondary text-decoration-none">Data Kriteria</a></div>
                            </div>
                            <div class="col-auto">
                                <i class="fas fa-cube fa-2x text-gray-300"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-xl-4 col-md-6 mb-4">
                <div class="card border-left-primary shadow h-100 py-2">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class="h5 mb-0 font-weight-bold text-gray-800"><a href="<?= base_url('Sub_Kriteria'); ?>" class="text-secondary text-decoration-none">Data Bobot Kriteria</a></div>
                            </div>
                            <div class="col-auto">
                                <i class="fas fa-cubes fa-2x text-gray-300"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-xl-4 col-md-6 mb-4">
                <div class="card border-left-success shadow h-100 py-2">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class="h5 mb-0 font-weight-bold text-gray-800"><a href="<?= base_url('Alternatif'); ?>" class="text-secondary text-decoration-none">Data Alternatif</a></div>
                            </div>
                            <div class="col-auto">
                                <i class="fas fa-users fa-2x text-gray-300"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-xl-4 col-md-6 mb-4">
                <div class="card border-left-secondary shadow h-100 py-2">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class="h5 mb-0 font-weight-bold text-gray-800"><a href="<?= base_url('Penilaian'); ?>" class="text-secondary text-decoration-none">Penilaian Alternatif</a></div>
                            </div>
                            <div class="col-auto">
                                <i class="fas fa-edit fa-2x text-gray-300"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-xl-4 col-md-6 mb-4">
                <div class="card border-left-warning shadow h-100 py-2">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class="h5 mb-0 font-weight-bold text-gray-800"><a href="<?= base_url('Perhitungan'); ?>" class="text-secondary text-decoration-none">Perhitungan MAUT</a></div>
                            </div>
                            <div class="col-auto">
                                <i class="fas fa-calculator fa-2x text-gray-300"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-xl-4 col-md-6 mb-4">
                <div class="card border-left-danger shadow h-100 py-2">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class="h5 mb-0 font-weight-bold text-gray-800"><a href="<?= base_url('Perhitungan/hasil'); ?>" class="text-secondary text-decoration-none">Data Hasil Akhir</a></div>
                            </div>
                            <div class="col-auto">
                                <i class="fas fa-chart-area fa-2x text-gray-300"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="card border-left-dark shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-info"><i class="fa fa-table"></i> Sistem Pendukung Keputusan Lanjut</h6>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-md-5">
                        <img src="<?= base_url('assets/') ?>img/toko.jpg" alt="Gambar" width="500" height="300">
                    </div>
                    <div class="col-md-7">
                        <h4 style="font-weight: 800;">Sistem Pendukung Keputusan Metode MAUT <br>
                            Pemilihan Lampu - Kelompok 5</h4>
                        <p class="pt-4">
                            Sistem Pendukung Keputusan (SPK) merupakan suatu sistem informasi spesifik yang ditujukan untuk membantu manajemen dalam mengambil keputusan yang berkaitan dengan persoalan yang bersifat semi terstruktur.
                        </p>
                        <p>
                            Multi attribute utility theory (MAUT) merupakan suatu skema yang evaluasi akhir, v(x), dari suatu objek x didefinisikan sebagai bobot yang dijumlahkan dengan suatu nilai yang relevan terhadap nilai dimensinya. Metode MAUT digunakan untuk merubah dari beberapa kepentingan kedalam nilai numerik dengan skala 0-1 dengan 0 mewakili pilihan terburuk dan 1 terbaik. Hal ini memungkinkan perbandingan langsung yang beragam ukuran.
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="card border-left-danger shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-info"><i class="fa fa-table"></i> Hasil Akhir Alternatif</h6>
            </div>
            <div class="card-body">
                <canvas id="hasilChart"></canvas>

                <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
                <script>
                    //Data
                    var labels = ['Philips', 'Aliano', 'Vosco', 'Cosmos', 'Omi', 'Hemat', 'Kingkong', 'Yoono', 'Reiano', 'Probest', 'Renesola', 'Hinomaru', 'Inlate', 'Matsuka', 'Intra', 'Hannochs', 'Chiyoda', 'Keiano', 'Procyon', 'Valescom', 'Waseo', 'Luxco', 'Aigis', 'Beta'];
                    var data = [0.5667, 0.7917, 0.4083, 0.4500, 0.2083, 0.3083, 0.2417, 0.7750, 0.3917, 0.4583, 0.4000, 0.2917, 0.5917, 0.3917, 0.2917, 0.5917, 0.2667, 0.4333, 0.3667, 0.3667, 0.3667, 0.2917, 0.3667, 0.4500, 0.3667];

                    // Inisialisasi chart
                    var ctx = document.getElementById('hasilChart').getContext('2d');
                    var chart = new Chart(ctx, {
                        type: 'bar',
                        data: {
                            labels: labels,
                            datasets: [{
                                label: 'Hasil Perhitungan Maut',
                                data: data,
                                backgroundColor: 'rgba(54, 162, 235, 0.5)',
                                borderColor: 'rgba(54, 162, 235, 1)',
                                borderWidth: 1
                            }]
                        },
                        options: {
                            scales: {
                                y: {
                                    beginAtZero: true,
                                    stepSize: 1
                                }
                            }
                        }
                    });
                </script>
            </div>
        </div>
    </div>
<?php endif; ?>
<?php if ($this->session->userdata('id_user_level') == '2') : ?>
    <div class="mb-4">
        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800"><i class="fas fa-fw fa-home"></i> Dashboard</h1>
        </div>

        <!-- Content Row -->
        <div class="alert alert-success">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
            Selamat datang <span class="text-uppercase"><b><?= $this->session->username; ?>!</b></span> Anda bisa mengoperasikan sistem dengan wewenang tertentu melalui pilihan menu di bawah.
        </div>
        <div class="row">

            <div class="col-xl-4 col-md-6 mb-4">
                <div class="card border-left-info shadow h-100 py-2">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class="h5 mb-0 font-weight-bold text-gray-800"><a href="<?= base_url('Login/home'); ?>" class="text-secondary text-decoration-none">Dashboard</a></div>
                            </div>
                            <div class="col-auto">
                                <i class="fas fa-home fa-2x text-gray-300"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-xl-4 col-md-6 mb-4">
                <div class="card border-left-primary shadow h-100 py-2">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class="h5 mb-0 font-weight-bold text-gray-800"><a href="<?= base_url('Perhitungan/hasil'); ?>" class="text-secondary text-decoration-none">Data Hasil Akhir</a></div>
                            </div>
                            <div class="col-auto">
                                <i class="fas fa-chart-area fa-2x text-gray-300"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="card border-left-dark shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-info"><i class="fa fa-table"></i> Sistem Pendukung Keputusan Lanjut</h6>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-md-5">
                        <img src="<?= base_url('assets/') ?>img/toko.jpg" alt="Gambar" width="500" height="300">
                    </div>
                    <div class="col-md-7">
                        <h4 style="font-weight: 800;">Sistem Pendukung Keputusan Metode MAUT <br>
                            Pemilihan Lampu - Kelompok 5</h4>
                        <p class="pt-4">
                            Sistem Pendukung Keputusan (SPK) merupakan suatu sistem informasi spesifik yang ditujukan untuk membantu manajemen dalam mengambil keputusan yang berkaitan dengan persoalan yang bersifat semi terstruktur.
                        </p>
                        <p>
                            Multi attribute utility theory (MAUT) merupakan suatu skema yang evaluasi akhir, v(x), dari suatu objek x didefinisikan sebagai bobot yang dijumlahkan dengan suatu nilai yang relevan terhadap nilai dimensinya. Metode MAUT digunakan untuk merubah dari beberapa kepentingan kedalam nilai numerik dengan skala 0-1 dengan 0 mewakili pilihan terburuk dan 1 terbaik. Hal ini memungkinkan perbandingan langsung yang beragam ukuran.
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="card border-left-danger shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-info"><i class="fa fa-table"></i> Hasil Akhir Alternatif</h6>
            </div>
            <div class="card-body">
                <canvas id="hasilChart"></canvas>

                <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
                <script>
                    //Data
                    var labels = ['Philips', 'Aliano', 'Vosco', 'Cosmos', 'Omi', 'Hemat', 'Kingkong', 'Yoono', 'Reiano', 'Probest', 'Renesola', 'Hinomaru', 'Inlate', 'Matsuka', 'Intra', 'Hannochs', 'Chiyoda', 'Keiano', 'Procyon', 'Valescom', 'Waseo', 'Luxco', 'Aigis', 'Beta'];
                    var data = [0.5667, 0.7917, 0.4083, 0.4500, 0.2083, 0.3083, 0.2417, 0.7750, 0.3917, 0.4583, 0.4000, 0.2917, 0.5917, 0.3917, 0.2917, 0.5917, 0.2667, 0.4333, 0.3667, 0.3667, 0.3667, 0.2917, 0.3667, 0.4500, 0.3667];

                    // Inisialisasi chart
                    var ctx = document.getElementById('hasilChart').getContext('2d');
                    var chart = new Chart(ctx, {
                        type: 'bar',
                        data: {
                            labels: labels,
                            datasets: [{
                                label: 'Hasil Perhitungan Maut',
                                data: data,
                                backgroundColor: 'rgba(54, 162, 235, 0.5)',
                                borderColor: 'rgba(54, 162, 235, 1)',
                                borderWidth: 1
                            }]
                        },
                        options: {
                            scales: {
                                y: {
                                    beginAtZero: true,
                                    stepSize: 1
                                }
                            }
                        }
                    });
                </script>
            </div>
        </div>
    </div>
<?php endif; ?>

<?php $this->load->view('layouts/footer'); ?>