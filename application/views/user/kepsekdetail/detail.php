<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sambutan Kepala Sekolah</title>
    <link rel="stylesheet" href="<?php echo base_url('assets/css/style.css'); ?>">
</head>

<body>
    <header>
    </header>

    <main>
        <br>
        <br>
        <br>
        <br>
        <div class="containersambutankepalasekolah" data-aos="zoom-in">
            <h4 class="home" style="font-size: 20px; margin-top: 4px;">Home</h4>
            <i class="fa fa-angle-right icon" style="font-size: 20px;"></i>
            <i class="fa fa-angle-right icon" style="font-size: 20px;"></i>
            <h4 style="margin-left: 1%; font-size: 20px; margin-top: 4px;">Sambutan Kepala Sekolah</h4>
        </div>
        <div class="imagekepalasekolah">
            <img src="<?php echo base_url('uploads/kepalasekolah/' . $kepalasekolah['foto']); ?>" alt="Kepala Sekolah" class="kepalasekolah-img" width="300" data-aos="zoom-in">
        </div>
        <br>
        <div class="judulsambutan" data-aos="zoom-in">
            <h2><?php echo $kepalasekolah['judul']; ?></h2>
            <div class="underline"></div>
        </div>
        <br>
        <div class="isisambutan" data-aos="zoom-in">
            <p><?php echo $kepalasekolah['isisambutan']; ?></p>
            <p><small><?php echo $kepalasekolah['tanggal']; ?></small></p>
        </div>
    </main>

    <footer>
    </footer>
</body>

</html>