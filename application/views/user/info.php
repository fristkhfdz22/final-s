<div class="info-container">

    <div class="pengumuman" id="pengumuman">
        <h3 style="background-color: rgb(25, 25, 79); color: white; padding: 20px; border-radius: 5px; width: 90%; margin-right: 20%;">
            Pengumuman
        </h3>
        <br>
        <div class="pengumuman">

            <?php if (!empty($pengumuman)): ?>
                <?php foreach ($pengumuman as $item): ?>
                    <b><a href=""><?php echo $item['judul']; ?></a></b>
                    <br>
                <?php endforeach; ?>
            <?php else: ?>
                <p>Tidak ada pengumuman saat ini.</p>
            <?php endif; ?>
            <br>

        </div>

    </div>
    <div class="sambutan">
        <h2 style="background-color: rgb(25, 25, 79); color: white; padding: 20px; border-radius: 5px; width: 100%;"><?= $kepalasekolah['judul']; ?></h2>
        <img src="<?= base_url('uploads/kepalasekolah/' . $kepalasekolah['foto']); ?>" alt="Kepala Sekolah" width="300" class="image-float">
        <p><?= $kepalasekolah['isisambutan']; ?></p>
        <p><small><?= $kepalasekolah['tanggal']; ?></small></p>

    </div>

</div>