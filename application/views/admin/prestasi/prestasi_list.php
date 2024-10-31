<div class="container mt-4">
    <h2>Daftar Prestasi</h2>
    <table class="table table-bordered table-hover">
        <thead class="thead-dark">
            <tr>
                <th>No</th>
                <th>Gambar</th>
                <th>Judul</th>
                <th>Deskripsi</th>
                <th>Tanggal</th>
                <th>Kelas</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php if (!empty($prestasi) && is_array($prestasi)): ?>
                <?php foreach ($prestasi as $index => $item): ?>
                    <tr>
                        <td><?= $index + 1; ?></td>

                        <td>
                            <img src="<?= !empty($item->gambar) && file_exists('uploads/prestasi/' . $item->gambar) ? base_url('uploads/prestasi/' . $item->gambar) : base_url('uploads/default-image.jpg'); ?>" alt="Gambar Prestasi" style="width: 100px; height: 80px; object-fit: cover;">
                        </td>

                        <td><?= isset($item->judul) ? $item->judul : 'Judul tidak tersedia'; ?></td>

                        <td><?= isset($item->deskripsi) ? word_limiter($item->deskripsi, 10) : 'Deskripsi tidak tersedia'; ?></td>

                        <td><?= isset($item->tanggal) ? $item->tanggal : 'Tanggal tidak tersedia'; ?></td>

                        <td><?= isset($item->penulis) ? $item->penulis : 'penulis tidak tersedia'; ?></td>

                        <td>
                            <a href="<?= site_url('prestasi/edit/' . $item->id); ?>" class="btn btn-sm btn-warning">Edit</a>
                            <a href="<?= site_url('prestasi/delete/' . $item->id); ?>" class="btn btn-sm btn-danger" onclick="return confirm('Apakah Anda yakin ingin menghapus prestasi ini?');">Delete</a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            <?php else: ?>
                <tr>
                    <td colspan="7" class="text-center">Tidak ada prestasi yang ditampilkan.</td>
                </tr>
            <?php endif; ?>
        </tbody>
    </table>
</div>

<a href="prestasi/tambah" class="btn btn-primary">Tambah Prestasi</a>