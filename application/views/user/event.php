<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Home - Brand</title>
    <link rel="stylesheet" href="<?= base_url('assets'); ?>/bootstrap/css/bootstrap2.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic">
    <link rel="stylesheet" href="<?= base_url('assets'); ?>/fonts/font-awesome.min.css">
    <link rel="stylesheet" href="<?= base_url('assets'); ?>/fonts/ionicons.min.css">
    <link rel="stylesheet" href="<?= base_url('assets'); ?>/css/Footer-Basic.css">
    <link rel="stylesheet" href="<?= base_url('assets'); ?>/css/untitled.css">
</head>

<body>
    <nav class="navbar navbar-light navbar-expand fixed-top" id="mainNav">
        <div class="container">
            <a href="<?= base_url('welcome'); ?>">
                <img src="<?= base_url('assets'); ?>/img/jaksa.png" style="width: 52px;height: 52px;margin-left: 16px;">
            </a>
            <button data-toggle="collapse" data-target="#navbarResponsive" class="navbar-toggler" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                <i class="fa fa-bars"></i>
            </button>
            <div
                class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="nav navbar-nav ml-auto">
                    <li class="nav-item" role="presentation"><a class="nav-link" href="<?= base_url('pembinaan'); ?>">Pembinaan</a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link" href="<?= base_url('intelijen'); ?>">Intelijen</a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link" href="<?= base_url('pidum'); ?>">Pidana<br>Umum</a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link" href="<?= base_url('pidsus'); ?>">Pidana<br>Khusus</a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link" href="<?= base_url('datun'); ?>">Perdata &amp; Tata<br>Usaha Negara</a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link" href="<?= base_url('pemeriksaan'); ?>">pemeriksa</a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link" href="<?= base_url('barangbukti'); ?>">Barang Bukti</a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link" href="<?= base_url('iad'); ?>">IAD</a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link" href="<?= base_url('iad'); ?>">WBK / WBMM</a></li>
                </ul>
        </div>
        </div>
    </nav>
    <header class="masthead" style="background-image:url('<?= base_url('assets'); ?>/img/home.jpeg');">
        <div class="overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-10 col-lg-8 mx-auto">
                    <div class="site-heading">
                        <img class="mb-2" src="<?= base_url('assets'); ?>/img/jaksa.png" height="15%" width="15%">
                        <h1 style="font-size: 50px;">Bidang Intelijen</h1><span class="subheading">Kejaksaan Negeri Ambon</span></div>
                </div>
            </div>
        </div>
    </header>
    <div class="container">
        <div class="row">
            <div class="col col-md-3 col-lg-3">
                <div role="tablist" id="accordion-1" style="margin-top: 16px;">
                    <div class="card">
                        <div class="card-header" role="tab">
                            <h5 class="mb-0"><a data-toggle="collapse" aria-expanded="false" aria-controls="accordion-1 .item-1" href="#accordion-1 .item-1" style="font-size: 14px;">Informasi Kepegawaian</a></h5>
                        </div>
                        <div class="collapse item-1" role="tabpanel" data-parent="#accordion-1">
                            <div class="card-body">
                                <a href="<?= base_url('intelijen'); ?>">
                                    <p class="card-text" style="font-size: 14px;margin-top: 0px;margin-bottom: 0px;">Data Kepegawaian</p>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header" role="tab">
                            <h5 class="mb-0"><a data-toggle="collapse" aria-expanded="true" aria-controls="accordion-1 .item-2" href="#accordion-1 .item-2" style="font-size: 14px;">Kegiatan</a></h5>
                        </div>
                        <div class="collapse show item-2" role="tabpanel" data-parent="#accordion-1">
                            <div class="card-body">
                                <a href="<?= base_url('pembinaan'); ?>">
                                    <p class="card-text" style="font-size: 14px;margin-top: 0px;margin-bottom: 0px;">Kegiatan Bidang Intelijen</p>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col col-md-6 col-lg-9">
                <h1 style="text-align: center; margin-bottom: 40px;">Kegiatan Bidang Intelejen</h1>
                <hr>
                <div class="post-preview">
                    <a href="post.html">
                        <div class="row">
                            <div class="col-4">
                                <img src="<?= base_url('assets'); ?>/img/1580775927.png" style="width: 100%;height: 100%;margin-left: 16px;">
                            </div>
                            <div class="col-8">
                                <h4 class="post-title">Penandatanganan Perjanjian Kerjasama tentang Koordinasi dan
                                    Kerjasama</h4>
                                <h4 class="post-subtitle" style="font-weight: lighter;">Dalam Rangka Penegakan Hukum dan Pemulihan Aset di Bidang Agraria</h4>
                                <h6 class="post-meta" style="font-style: oblique; font-weight: inherit;">September 24, 2018</h6>
                            </div>
                        </div>
                    </a>
                </div>
                <hr>
                <hr>
                <div class="post-preview">
                    <a href="post.html">
                        <div class="row">
                            <div class="col-4">
                                <img src="<?= base_url('assets'); ?>/img/1580775927.png" style="width: 100%;height: 100%;margin-left: 16px;">
                            </div>
                            <div class="col-8">
                                <h4 class="post-title">Penandatanganan Perjanjian Kerjasama tentang Koordinasi dan
                                    Kerjasama</h4>
                                <h4 class="post-subtitle" style="font-weight: lighter;">Dalam Rangka Penegakan Hukum dan Pemulihan Aset di Bidang Agraria</h4>
                                <h6 class="post-meta" style="font-style: oblique; font-weight: inherit;">September 24, 2018</h6>
                            </div>
                        </div>
                    </a>
                </div>
                <hr>
                <hr>
                <div class="post-preview">
                    <a href="post.html">
                        <div class="row">
                            <div class="col-4">
                                <img src="<?= base_url('assets'); ?>/img/1580775927.png" style="width: 100%;height: 100%;margin-left: 16px;">
                            </div>
                            <div class="col-8">
                                <h4 class="post-title">Penandatanganan Perjanjian Kerjasama tentang Koordinasi dan
                                    Kerjasama</h4>
                                <h4 class="post-subtitle" style="font-weight: lighter;">Dalam Rangka Penegakan Hukum dan Pemulihan Aset di Bidang Agraria</h4>
                                <h6 class="post-meta" style="font-style: oblique; font-weight: inherit;">September 24, 2018</h6>
                            </div>
                        </div>
                    </a>
                </div>
                <hr>
                <div class="clearfix"><button class="btn btn-primary float-right" type="button">Older Posts&nbsp;⇒</button></div>
            </div>
        </div>
    </div>
        <?php 
        include 'footer.php' ?>