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
    <br>
    <br>
    <br><br>
    <style>
        .imagekepalasekolah1 {
            display: flex;
            justify-content: center;
            padding: 6px;
            width: fit-content;
            margin: 20px auto;
        }

        .judulsambutan h2 {
            color: black;
            text-align: center;
        }

        .underline {
            width: 50px;
            height: 3px;
            background-color: black;
            margin: 10px auto;
        }

        .isisambutan {
            padding: 20px;
            text-align: justify;
        }
    </style>
<?php if ($jurusan): ?>
    <div class="imagekepalasekolah1" style="width: 300px; height: 300px;">
        <img src="<?php echo base_url('uploads/jurusan/' . htmlspecialchars($jurusan->gambar)); ?>" alt="<?php echo htmlspecialchars($jurusan->nama); ?>" class="kepalasekolah-img" width="300" height="300">
    </div>
    <br>
    <div class="judulsambutan">
        <h2><?php echo htmlspecialchars($jurusan->nama); ?></h2>
        <div class="underline"></div>
    </div>
    <br>
    <div class="isisambutan">
        <p><?php echo htmlspecialchars($jurusan->deskripsi); ?></p>
    </div>
    <br>
    <?php endif; ?>
    <footer>
    </footer>
</body>

</html>

