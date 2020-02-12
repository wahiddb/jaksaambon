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
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css">
</head>

<body>
    <nav class="navbar navbar-light navbar-expand-lg fixed-top" id="mainNav">
        <div class="container">
            <a class="navbar-brand" href="index.html">
                <img src="<?= base_url('assets'); ?>/img/jaksa.png" style="width: 50px;height: 50px;margin-left: 16px;">
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
                        <h1 style="font-size: 50px;">Bidang Intelijen</h1><span class="subheading">Kejaksaan Negeri Ambon</span>
                    </div>
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
                            <h5 class="mb-0"><a data-toggle="collapse" aria-expanded="true" aria-controls="accordion-1 .item-1" href="#accordion-1 .item-1" style="font-size: 14px;">Pelaporan</a></h5>
                        </div>
                        <div class="collapse show item-1" role="tabpanel" data-parent="#accordion-1 .item-1">
                            <div class="card-body">
                                 <a href="<?= base_url('intelijen'); ?>">
                                    <p class="card-text" style="font-size: 14px;margin-top: 0px;margin-bottom: 0px;">Pelayanan Pelaporan Masyarakat</p>
                                </a>
                                <a href="_laporan.html">
                                    <p class="card-text" style="font-size: 14px;margin-top: 8px;margin-bottom: 0px;">Perkembangan Laporan</p>
                                </a>
                                
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header" role="tab">
                            <h5 class="mb-0"><a data-toggle="collapse" aria-expanded="true" aria-controls="accordion-1 .item-2" href="#accordion-1 .item-2" style="font-size: 14px;">Kegiatan</a></h5>
                        </div>
                        <div class="collapse item-2" role="tabpanel" data-parent="#accordion-1 .item-2">
                            <div class="card-body">
                                <a href="__penyuluhan.html">
                                    <p class="card-text" style="font-size: 14px;margin-top: 0px;margin-bottom: 0px;">Penyuluhan Dan Penerangan Hukum</p>
                                </a>
                                <a href="_<?= base_url('intelijen'); ?>">
                                    <p class="card-text" style="font-size: 14px;margin-top: 8px;margin-bottom: 0px;">Kegiatan Bidang Intelijen</p>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col col-md-6 col-lg-9">
                <h1 style="text-align: center; margin-bottom: 40px;">Perkembangan Laporan</h1>
                <div class="card shadow" style="margin-top: 10px;">
                    <div class="card-header py-3">
                        <p class="text-primary m-0 font-weight-bold">Data Perkembangan Laporan Kejaksaan Negeri Ambon</p>
                    </div>
                    <div class="card-body">

                        <div class="table-responsive table mt-2" id="dataTable" role="grid" aria-describedby="dataTable_info">
                            <table class="table dataTable my-0" id="myTable">
                                <thead>
                                    <tr>
                                      <th>
                                        <center>No</center>
                                      </th>
                                      <th>
                                        <center>Nama Pelapor</center>
                                      </th>
                                      <th>
                                        <center>Nama Terlapor</center>
                                      </th>
                                      <th>
                                        <center>Dugaan Tindak Pidana</center>
                                      </th>
                                      <th>
                                        <center>Keterangan</center>
                                      </th>
                                      <th>
                                        <center>Status</center>
                                      </th>
                                    </tr>
                                  </thead>
                                  <tbody>
                                    <tr>
                                      <td>1</td>
                                      <td><center>Dono Kasino</center></td>
                                      <td><center> Jaksa Agung Muda </center></td>
                                      <td><center> Pemeriksa </center></td>
                                      <td><center> 2546111345 </center></td>
                                      <td>
                                      </td>
                                    </tr>
                                    <tr>
                                      <td>2</td>
                                      <td><center>Dono Kasino</center></td>
                                      <td><center> Jaksa Agung Muda </center></td>
                                      <td><center> Pemeriksa </center></td>
                                      <td><center> 2546111345 </center></td>
                                      <td>
                                      </td>
                                    </tr>
                                    <tr>
                                      <td>3</td>
                                      <td><center>Dono Kasino</center></td>
                                      <td><center> Jaksa Agung Muda </center></td>
                                      <td><center> Pemeriksa </center></td>
                                      <td><center> 2546111345 </center></td>
                                      <td>
                                      </td>
                                    </tr>
                                  </tbody>
                            </table>
                        </div>
                 
                    </div>
                </div>
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
    <script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
    <script>
        $(document).ready( function () {
    $('#myTable').DataTable();
} );
    </script>
</body>

</html>