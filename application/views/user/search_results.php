
<br>
<br>
<br>
    <style>
        body {
            background-color: #f7f9fc;
            font-family: Arial, sans-serif;
            padding-top: 20px;
        }

        .container-fluid {
            max-width: 90%;
        }

        h1 {
            font-size: 2.5em;
            color: #007bff;
        }

        h3 {
            margin-top: 20px;
            color: #333;
            font-weight: bold;
            border-left: 4px solid #007bff;
            padding-left: 8px;
        }

        .search-results {
            background-color: #ffffff;
            padding: 30px;
            border-radius: 8px;
            box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.1);
        }

        .list-group-item {
            transition: transform 0.2s ease;
        }

        .list-group-item:hover {
            transform: scale(1.02);
            background-color: #f1f1f1;
        }

        .no-results {
            color: #dc3545;
            font-weight: bold;
            font-size: 1.2em;
        }

        .back-btn {
            background-color: #28a745;
            color: #fff;
            transition: background-color 0.3s ease;
        }

        .back-btn:hover {
            background-color: #218838;
            color: #fff;
        }

        .icon {
            font-size: 1.5em;
            color: #007bff;
            margin-right: 8px;
        }
    </style>
</head>

<body>

<div class="container-fluid">
    <div class="search-results">
    <h1>Hasil Pencarian untuk: "<?php echo htmlspecialchars($query); ?>"<span class="icon">🔍</span></h1>
    <hr>

    <?php if (!empty($results)): ?>
        <?php foreach ($results as $category => $items): ?>
            <h3><?php echo ucfirst($category); ?></h3>
            <ul class="list-group mb-4">
                <?php foreach ($items as $item): ?>
                    <li class="list-group-item">
                        <strong>
                            <?php 
                            // Tentukan URL berdasarkan kategori menggunakan switch
                            switch ($category) {
                                case 'berita':
                                    $url = site_url('berita/detail/' . $item['id']);
                                    break;
                                case 'eskul':
                                    $url = site_url('eskuldetail/detail/' . $item['id']);
                                    break;
                                case 'gurustaff':
                                    $url = site_url('gurustaff/detail/' . $item['id']);
                                    break;
                                case 'jurusan':
                                    $url = site_url('jurusan/detail/' . $item['id']);
                                    break;
                                    case 'ekstrakurikuler':
                                        $url = site_url('ekstrakurikuler/detail/' . $item['id']);
                                        break;
                                case 'kepsek':
                                    $url = site_url('kepsekdetail/detail/' . $item['id']);
                                    break;
                                case 'info_ppdb':
                                    $url = site_url('infoppdb/view/' . $item['id']);
                                    break;
                                case 'prestasi':
                                    $url = site_url('prestasi/detail/' . $item['id']);
                                    break;
                                    case 'galeri':
                                        $url = site_url('galeri/view/' . $item['id']);
                                        break;
                                        case 'visi_misi':
                                            $url = site_url('visimisi');
                                            break;
                                            case 'gurustaff':
                                                $url = site_url('gurustaff/detail/');
                                                break;
                                default:
                                    $url = '#'; // Link default jika kategori tidak dikenali
                                    break;
                            }
                            ?>
                            <a href="<?php echo $url; ?>">
                            <?php echo htmlspecialchars($item['judul'] ?? $item['nama_ekstra'] ?? $item['nama'] ?? $item['title'] ??  $item['visi'] ?? 'Tidak ada judul'); ?>                            </a>
                        </strong><br>
                        <p><?php echo htmlspecialchars($item['deskripsi'] ?? $item['konten'] ?? $item['isisambutan'] ??  $item['misi'] ?? 'Tidak ada deskripsi'); ?></p>                    </li>
                <?php endforeach; ?>
            </ul>
        <?php endforeach; ?>
    <?php else: ?>
        <div class="alert alert-warning">Tidak ada hasil ditemukan.</div>
    <?php endif; ?>
    
    <a href="<?php echo base_url(); ?>" class="btn btn-primary">Kembali ke Beranda</a>
    </div>
</div>
<br>
<br>
<br>
