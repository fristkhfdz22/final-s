<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid px-4">
            <h1 class="mt-4">Dashboard</h1>
            <div class="row">
                <div class="time">
                    <h2>Selamat Datang, <?php echo $this->session->userdata('username'); ?></h2>
                    <style>
                        body {
                            font-family: 'Arial', sans-serif;
                            display: flex;
                            justify-content: center;
                            align-items: center;
                            margin: 0;
                            /* background-color: #282c34; */
                            /* color: #61dafb; */
                            /* margin-right: 2%; */
                        }

                        .clock {
                            font-size: 2rem;
                            font-weight: bold;
                            margin-left: 4%;
                        }
                    </style>


                    <div class="clock" id="clock"></div>

                    <script>
                        function updateClock() {
                            const now = new Date();
                            let hours = now.getHours();
                            let minutes = now.getMinutes();
                            let seconds = now.getSeconds();

                            // Format time with leading zero if needed
                            hours = hours < 10 ? '0' + hours : hours;
                            minutes = minutes < 10 ? '0' + minutes : minutes;
                            seconds = seconds < 10 ? '0' + seconds : seconds;

                            // Display time
                            document.getElementById('clock').textContent = hours + ':' + minutes + ':' + seconds;
                        }

                        // Update clock every second
                        setInterval(updateClock, 1000);

                        // Initial call to display clock immediately
                        updateClock();
                    </script>
                </div>

                <div class="container mt-5">
                    <div class="row mt-4">
                        <!-- Total Berita -->
                        <div class="col-md-3">
                            <div class="card" style="border: 2px solid red;">
                                <div class="card-body" style="color: red;">
                                    <h5>Berita</h5>
                                    <p><?= $total_berita; ?></p>
                                </div>
                            </div>
                        </div>
                        <br>
                        <div class="col-md-3">
                            <div class="card" style="border: 2px solid yellowgreen;">
                                <div class="card-body" style="color:yellowgreen;">
                                    <h5>Ekstrakurikuler</h5>
                                    <p><?= $total_ekstrakurikuler; ?></p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="card" style="border: 2px solid green;">
                                <div class="card-body" style="color: green;">
                                    <h5>Galeri</h5>
                                    <p><?= $total_galeri; ?></p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="card" style="border: 2px solid blue;">
                                <div class="card-body" style="color: blue;">
                                    <h5>Guru Staff</h5>
                                    <p><?= $total_gurustaff; ?></p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="card">
                                <div class="card-body">
                                    <h5>Info PPDB</h5>
                                    <p><?= $total_info_ppdb; ?></p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="card">
                                <div class="card-body">
                                    <h5>Jurusan</h5>
                                    <p><?= $total_jurusan; ?></p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="card">
                                <div class="card-body">
                                    <h5>Kepala Sekolah</h5>
                                    <p><?= $total_kepalasekolah; ?></p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="card">
                                <div class="card-body">
                                    <h5>Kontak</h5>
                                    <p><?= $total_kontak; ?></p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="card">
                                <div class="card-body">
                                    <h5>Kritik Saran</h5>
                                    <p><?= $total_kritiksaran; ?></p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="card">
                                <div class="card-body">
                                    <h5>Pengumuman</h5>
                                    <p><?= $total_pengumuman; ?></p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="card">
                                <div class="card-body">
                                    <h5>Prestasi</h5>
                                    <p><?= $total_prestasi; ?></p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="card">
                                <div class="card-body">
                                    <h5>Sejarah</h5>
                                    <p><?= $total_sejarah; ?></p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="card">
                                <div class="card-body">
                                    <h5>Stats</h5>
                                    <p><?= $total_stats; ?></p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="card">
                                <div class="card-body">
                                    <h5>Visi Misi</h5>
                                    <p><?= $total_visi_misi; ?></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>