<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="<?= base_url('assets/'); ?>css/sertifikat.css" rel="stylesheet" type="text/css" />
    <title>Document</title>
</head>

<body>
    <div class="container" style="width: 1090px; height:743px">
        <div class="bg-img">
            <img class="sertifikat-img" src="<?= base_url('assets/'); ?>media/solo-abadi/background-sertifikat.png">
            <div class="col-50-left">
                <div>
                    <img class="logo" src="<?= base_url('assets/'); ?>media/solo-abadi/logo-sobad.png">
                </div>
                <div class="conten-l-1">
                    <h1>certifi</h1>
                </div>
                <div class="conten-l-2">
                    <h1>cate.</h1>
                </div>
                <div class="conten-l-3">
                </div>
                <div class="conten-l-4">
                    <h4>OF COMPLETION</h4>
                </div>
                <div class="conten-l-5">
                    <p>We found the sincere, hardworking, dedicated and result oriented. The intern worked well as part of the Solo Abadi Family during their tenure. We takethis opportunity to thank them and wish their all the best for the future. </p>
                </div>
            </div>
            <div class="col-50-right">
                <div class="col">
                    <div class="conten-r-1">
                        <h5>THIS CERTIFICATE IS PRESENTED TO</h5>
                    </div>
                    <div class="conten-r-2">
                        <h2><?= ($data_user['name']); ?></h2>
                    </div>
                    <div class="line-name"></div>
                    <div class="conten-r-3">
                        <h6>For graduated and completed their assignment in the Solo Abadi Internship Program <?= date('Y') ?>, Batch#3 at PT. Solo Abadi Indonesia </h6>
                    </div>
                    <div class="conten-r-4"></div>
                    <div class="conten-r-5">
                        <h5><?= $entry_date; ?> - <?= $resign_date; ?></h5>
                    </div>
                    <div class="col-50-left">
                        <div class="conten-r-6">
                            <div class="line-ttd"></div>
                            <h3 style="margin-top: -5px;">C.Lintang Larasati</h3>
                            <p style="margin-top:-15px">Internship Avisor</p>
                        </div>
                    </div>
                    <div class="col-50-right">
                        <div class="conten-r-7">
                            <div class="line-ttd"></div>
                            <h3 style="margin-top: -5px;">Dian Untoro</h3>
                            <p style="margin-top:-15px">Director</p>
                            <?php
                            $qrCode = new \Endroid\QrCode\QrCode("www.soloabadi.com");
                            $qrCode->writeFile('upload/qr-code/' . $data_user_detail['ID'] . '.png');
                            ?>
                            <div>
                                <img class="qrcode" src="<?= base_url('upload/qr-code/' . $data_user_detail['ID'] . '.png'); ?>">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>