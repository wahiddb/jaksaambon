<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Submenu</title>
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
            <a href="index.html">
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
                    <li class="nav-item" role="presentation"><a class="nav-link" href="<?= base_url('wbk'); ?>">WBK / WBMM</a></li>
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
                        <h1 style="font-size: 50px;">Bidang Perdata & Tata Usaha Negara</h1><span class="subheading">Kejaksaan Negeri Ambon</span></div>
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
                            <h5 class="mb-0"><a data-toggle="collapse" aria-expanded="false" aria-controls="accordion-1 .item-1" href="#accordion-1 .item-1" style="font-size: 14px;">Bantuan Hukumm</a></h5>
                        </div>
                        <div class="collapse show item-1" role="tabpanel" data-parent="#accordion-1">
                            <div class="card-body">
                                <a href="<?= base_url('datun'); ?>">
                                    <p class="card-text" style="font-size: 14px;margin-top: 0px;margin-bottom: 0px;">Permohonan Bantuan Hukum</p>
                                </a>
                                <a href="__jaksa.html">
                                    <p class="card-text" style="font-size: 14px;margin-top: 8px;margin-bottom: 0px;">Profil Jaksa Pengacara Negara</p>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header" role="tab">
                            <h5 class="mb-0"><a data-toggle="collapse" aria-expanded="true" aria-controls="accordion-1 .item-2" href="#accordion-1 .item-2" style="font-size: 14px;">Kegiatan</a></h5>
                        </div>
                        <div class="collapse item-2" role="tabpanel" data-parent="#accordion-1">
                            <div class="card-body">
                                <a href="_<?= base_url('datun'); ?>">
                                    <p class="card-text" style="font-size: 14px;margin-top: 0px;margin-bottom: 0px;">Kegiatan Bidang Datun</p>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col col-md-6 col-lg-9">
                <h1 style="text-align: center; margin-bottom: 40px;">Form Permohonan Bantuan Hukum</h1>
                <form>
                    <div class="form-group">
                        <label for="name">Nama / Instansi Pemohon</label>
                        <input type="text" class="form-control" id="name" aria-describedby="text" placeholder="Masukkan Nama Pemohon">
                    </div>
                    <div class="form-group">
                            <label for="exampleInputEmail1">Alamat Email / No. Telepon</label>
                            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukkan email">
                            <small id="emailHelp" class="form-text text-muted">Kami tidak akan mempublikasikan email anda</small>
                    </div>
                    <div class="form-group">
                        <label for="name">Perihal Pemohonan Bantuan Hukum</label>
                        <input type="text" class="form-control" id="name" aria-describedby="text" placeholder="Masukkan Perihal Pemohonan Bantuan Hukum">
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlTextarea1">Keterangan</label>
                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="5" placeholder="Masukkan Keterangan Tambahan"></textarea>
                      </div>
                    <button type="submit" class="btn btn-primary" style="float: right;">Submit</button>
                  </form>
            </div>
        </div>
    </div>
    <div class="footer-basic">
        <footer>
            <div class="social"><a href="#"><i class="icon ion-social-instagram"></i></a><a href="#"><i class="icon ion-social-twitter"></i></a><a href="#"><i class="icon ion-social-facebook"></i></a></div>
            <ul class="list-inline">
                <li class="list-inline-item"><a href="#">Kejaksaan Negeri Ambon</a></li>
            </ul>
            <ul class="list-inline">
                <li class="list-inline-item"><a href="#">Rijali No. 9 Kecamatan Sirimau, Kota Ambon</a></li>
            </ul>
            <ul class="list-inline">
                <li class="list-inline-item"><i class="icon ion-ios-telephone"></i> 0911-352463</li>
            </ul>
            <p class="copyright">Kejari Ambon © 2020</p>
        </footer>
    </div>
    <script src="<?= base_url('assets'); ?>/js/jquery.min.js"></script>
    <script src="<?= base_url('assets'); ?>/bootstrap/js/bootstrap.min.js"></script>
    <script src="<?= base_url('assets'); ?>/js/clean-blog.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.js"></script>
    <script src="<?= base_url('assets'); ?>/js/theme.js"></script>
</body>

</html>