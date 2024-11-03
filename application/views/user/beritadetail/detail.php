<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="<?php echo base_url('assets/css/style.css'); ?>">
</head>

<body>
    <br><br><br><br>
    <div class="containersambutankepalasekolah" data-aos="zoom-in">
        <h4 class="home" style="font-size: 20px; margin-top: 4px;">Home</h4>
        <i class="fa fa-angle-right icon" style="font-size: 20px;"></i>
        <i class="fa fa-angle-right icon" style="font-size: 20px;"></i>
        <h4 style="margin-left: 1%; font-size: 20px; margin-top: 4px;">Berita Terbaru</h4>
    </div>

    <div class="imagekepalasekolah1" style="margin-left: 17%; margin-top: 2%;">
        <img src="<?= base_url('uploads/' . $berita->img); ?>" alt="Kepala Sekolah" class="kepalasekolah-img" style="width: 80%;" height="80%" data-aos="zoom-in">
    </div>
    <br>

    <div class="judulsambutan" data-aos="zoom-in">
        <h2 style="color: blue;"><?= $berita->judul; ?></h2>
        <div class="underline"></div>
    </div>
    <br>

    <div class="isisambutan" data-aos="zoom-in">
        <p><?= nl2br($berita->konten); ?></p>
    </div>

    <footer></footer>
</body>

</html>