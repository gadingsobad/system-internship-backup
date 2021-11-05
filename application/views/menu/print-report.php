<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="<?= base_url('assets/'); ?>css/report.css" rel="stylesheet" type="text/css" />
    <title>Document</title>
</head>

<body>
    <div class="container">
        <div class="image-back">
            <img class="logo" src="<?= base_url('assets/'); ?>media/solo-abadi/bg-cover-report1.png" style="width: 100%; height:auto;">
        </div>
        <div class="col-twin">
            <div class="col-left">
                <div class="content-1">
                    <h1>Laporan</h1>
                </div>
                <div class="line-1"></div>
                <div class="content-2">
                    <h2>Magang.</h2>
                </div>
                <div class="content-3">
                    <h4>Solo Abadi Internship Program</h4>
                </div>
                <div class="content-4">
                    <h6><?= $data_user_detail['name']; ?></h6>
                </div>
            </div>
            <div class="col-right">
                <?php
                //$qrCode = new \Endroid\QrCode\QrCode($data_user_detail['ID']);
                //$qrCode->writeFile('upload/qr-code/' . $data_user_detail['ID'] . '.png');
                ?>
                <div class="content-5">
                    <qrcode class="qrcode" value="<?php echo $data_user_detail['ID']; ?>"></qrcode>
                </div>
                <div class="content-6">
                    <h6>Batch#3@<?= date('Y') ?></h6>
                </div>
            </div>
        </div>
    </div>
    <?php $i = 1; ?>
    <?php foreach ($kegiatan as $index) : ?>
        <div class="container-1">
            <div class="image-header">
                <img class="img-header" src="<?= base_url('assets/'); ?>media/solo-abadi/bg-content-report1.png" style="width: 65%; height:auto;">
            </div>
            <div class="col-twin2">
                <div class="column-left">
                    <div class="content-7">
                        <h3><?= $data_user_detail['name']; ?></h3>
                    </div>

                    <div class="content-8">

                    </div>

                </div>
                <div class="column-right">
                    <div class="left" style="color:#4B5051">
                        <p>Tanggal/Hari</p>
                        <p>Pembimbing</p>
                    </div>
                    <div class="right" style="color:#4B5051">
                        <div class="form-kotak" style="margin-top:5px;">
                            <div class="content-kotak">
                                <p><?= $index['date']; ?></p>
                            </div>
                        </div>
                        <?php
                        $pembimbing = $this->m_kegiatan->get_mentor_name($index['pembimbing']);
                        foreach ($pembimbing as $key) {
                            $mentor = $key['user_name'];
                        }
                        ?>
                        <div class="form-kotak" style="margin-top:10px">
                            <div class="content-kotak">
                                <p><?= $mentor; ?></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-3">
            <div class="content-9">
                <h5>Uraian Pekerjaan</h5>
            </div>
            <div class="card" style="color:#4B5051">
                <p style="font-size: 15px; line-height :20px; text-align:justify"><?= $index['detail']; ?></p>
            </div>
            <div class="content-10">
                <h5>Foto/Dokumentasi</h5>
            </div>
            <?php if ($index['foto'] !== '') { ?>
                <div class="content-11">
                    <img class="img-kegiatan" src="<?= base_url('assets/foto/' . $index['foto']); ?>">
                </div>
            <?php } else {
            } ?>

            <?php if ($index['foto2'] !== '') { ?>
                <div class="content-12">
                    <img class="img-kegiatan2" src="<?= base_url('assets/foto/' . $index['foto2']); ?>">
                </div>
            <?php } else {
            } ?>
            <?php if ($index['foto3'] !== '') { ?>
                <div class="content-13">
                    <img class="img-kegiatan3" src="<?= base_url('assets/foto/' . $index['foto3']); ?>">
                </div>
            <?php } else {
            } ?>
            <?php if ($index['foto4'] !== '') { ?>
                <div class="content-14">
                    <img class="img-kegiatan4" src="<?= base_url('assets/foto/' . $index['foto4']); ?>">
                </div>
            <?php } else {
            } ?>
            <div class="footer">
                <div class="footer-left">
                    <p>Laporan Magang</p>
                </div>

                <div class="footer-right">
                    <p><?= $i++; ?></p>
                </div>
            </div>
        </div>
    <?php endforeach; ?>
</body>

</html>