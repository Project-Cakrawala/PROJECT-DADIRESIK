<!--<head>
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,700" rel="stylesheet">
</head>

<body>
    <div class="container-fluit">
        <div class="row justify-content-center">
            <div class="wrapper">
                <div class="card__header card__header--19 card box" style="width: 16rem; margin:10px">
                    <?php foreach ($barang as $brg) : ?>
                        <div class="card__watermark" data-watermark="Air"></div>

                        <img src="https://i.ibb.co/q7RKcZk/nike.png" alt="Nike" class="card__logo card__will-animate">

                        <span class="card__price card__will-animate">Rp. <?= $brg['harga']; ?></span>

                        <h1 class="card__title card__will-animate">Air Structure 1</h1>
                        <img src="<?= base_url(); ?>/assets/img/gambarProduk/<?= $brg['gambar_barang']; ?>" class="card-img-top" alt="...">

                </div>

                <div class="card__body">

                    <div class="card__wish-list card__wish-list--19 card__will-animate">Pesan Sekarang</div>

                    <span class="card__category card__will-animate"><?= $brg['nama_brg']; ?></span>
                </div>
            </div>

        <?php endforeach; ?>

</body>

</html>-->
















<!--::review_part start::-->
<section class="special_cource padding_top">
    <div class="container-fluit">
        <div class="row justify-content-center text-center">
            <?php foreach ($barang as $brg) : ?>
                <div class="card box" style="width: 16rem; margin:10px">
                    <img style="weight: 254px; height:254px" src="<?= base_url(); ?>/assets/img/gambarProduk/<?= $brg['gambar_barang']; ?>" class="card-img-top" alt="...">
                    <div class="card-body ">
                        <span>
                            <h5 style="font-size: medium;" class="card-title btn btn-primary badge badge-danger mb-1"><?= $brg['nama_brg']; ?></h5>
                        </span>
                        <p style="weight:40px; height:40px" class="card-text mb-3"><?= $brg['keterangan']; ?></p>
                        <span class="badge badge-pill badge-warning ">Rp. <?= $brg['harga']; ?></span><br>
                    </div>
                    <a href="<?= base_url('Formpesan/index/' . $brg['id_brg']); ?>" style="font-size: medium;" type="submit" class="btn btn-sm btn-primary badge  badge-success">Pesan Sekarang</a>

                </div>

            <?php endforeach; ?>
        </div>
    </div>
</section>
<!--::blog_part end::-->