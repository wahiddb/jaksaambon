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
                        <h1 style="font-size: 50px;">Bidang Pidana Khusus</h1><span class="subheading">Kejaksaan Negeri Ambon</span></div>
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
                            <h5 class="mb-0"><a data-toggle="collapse" aria-expanded="true" aria-controls="accordion-1 .item-1" href="#accordion-1 .item-1" style="font-size: 14px;">Informasi Perkara</a></h5>
                        </div>
                        <div class="collapse show item-1" role="tabpanel" data-parent="#accordion-1">
                            <div class="card-body">
                                <a href="<?= base_url('pidsus'); ?>">
                                    <p class="card-text" style="font-size: 14px;margin-top: 0px;margin-bottom: 0px;">Informasi Perkara Pidana Khusus</p>
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
                                <a href="_<?= base_url('pidsus'); ?>">
                                    <p class="card-text" style="font-size: 14px;margin-top: 0px;margin-bottom: 0px;">Kegiatan Bidang Pidana Khusus</p>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col col-md-6 col-lg-9">
                <h1 style="text-align: center; margin-bottom: 40px;">Informasi Perkara</h1>
                <div class="card shadow" style="margin-top: 10px;">
                    <div class="card-header py-3">
                        <p class="text-primary m-0 font-weight-bold">Data Perkara Pidana Khusus</p>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6 text-nowrap">
                                <div id="dataTable_length" class="dataTables_length" aria-controls="dataTable"><label>Show&nbsp;<select class="form-control form-control-sm custom-select custom-select-sm"><option value="10" selected="">10</option><option value="25">25</option><option value="50">50</option><option value="100">100</option></select>&nbsp;</label></div>
                            </div>
                            <div class="col-md-6">
                                <div class="text-md-right dataTables_filter" id="dataTable_filter"><label><input type="search" class="form-control form-control-sm" aria-controls="dataTable" placeholder="Search"></label></div>
                            </div>
                        </div>
                        <div class="table-responsive table mt-2" id="dataTable" role="grid" aria-describedby="dataTable_info">
                            <table class="table dataTable my-0" id="dataTable">
                                <thead>
                                    <tr>
                                      <th>No</th>
                                      <th><center>Nomor Perkara</center></th>
                                      <th>
                                        <center>Pasal Yang Dilanggar</center>
                                      </th>
                                      <th>
                                        <center>Tersangka</center>
                                      </th>
                                      <th>
                                        <center>Jadwal Sidang</center>
                                      </th>
                                      <th>
                                        <center>Agenda</center>
                                      </th>
                                      <th>
                                        <center>Keterangan</center>
                                      </th>
                                    </tr>
                                  </thead>
                                  <tbody>
                                    <tr>
                                      <td>1</td>
                                      <td><center>Dono Kasino</center></td>
                                      <td><center> Pencurian </center></td>
                                      <td><center> Sedang Ditangani </center></td>
                                      <td><center> 2546111345 </center></td>
                                      <td>
                                      </td>
                                    </tr>
                                    <tr>
                                      <td>2</td>
                                      <td><center>Indro</center></td>
                                      <td><center> Pencurian </center></td>
                                      <td><center> Sedang Ditangani </center></td>
                                      <td><center> 2546111455 </center></td>
                                      <td>
                                      </td>
                                    </tr>
                                    <tr>
                                      <td>3</td>
                                      <td><center>Dono Kasino Indro</center></td>
                                      <td><center> Pencurian </center></td>
                                      <td><center> Sedang Ditangani </center></td>
                                      <td><center> 2546111345 </center></td>
                                      <td>
                                      </td>
                                    </tr>
                                    <tr>
                                        <td>4</td>
                                        <td><center>Dono Kasino</center></td>
                                        <td><center> Pencurian </center></td>
                                        <td><center> Sedang Ditangani </center></td>
                                        <td><center> 2546111345 </center></td>
                                        <td>
                                        </td>
                                      </tr>
                                      <tr>
                                        <td>5</td>
                                        <td><center>Indro</center></td>
                                        <td><center> Perceraian </center></td>
                                        <td><center> Dieksekusi </center></td>
                                        <td><center> 2546111455 </center></td>
                                        <td>
                                        </td>
                                      </tr>
                                      <tr>
                                        <td>6</td>
                                        <td><center>Dono Kasino Indro</center></td>
                                        <td><center> Perceraian </center></td>
                                        <td><center> Dieksekusi </center></td>
                                        <td><center> 2546111345 </center></td>
                                        <td>
                                        </td>
                                      </tr>
                                      <tr>
                                        <td>7</td>
                                        <td><center>Dono Kasino Indro</center></td>
                                        <td><center> Perceraian </center></td>
                                        <td><center> Dieksekusi </center></td>
                                        <td><center> 2546111345 </center></td>
                                        <td>
                                        </td>
                                      </tr>
                                      <tr>
                                        <td>8</td>
                                        <td><center>Dono Kasino Indro</center></td>
                                        <td><center> Perceraian </center></td>
                                        <td><center> Dieksekusi </center></td>
                                        <td><center> 2546111345 </center></td>
                                        <td>
                                        </td>
                                      </tr>
                                      <tr>
                                        <td>9</td>
                                        <td><center>Dono Kasino Indro</center></td>
                                        <td><center> Perceraian </center></td>
                                        <td><center> Dieksekusi </center></td>
                                        <td><center> 2546111345 </center></td>
                                        <td>
                                        </td>
                                      </tr>
                                      <tr>
                                        <td>10</td>
                                        <td><center>Dono Kasino Indro</center></td>
                                        <td><center> Perceraian </center></td>
                                        <td><center> Dieksekusi </center></td>
                                        <td><center> 2546111345 </center></td>
                                        <td>
                                        </td>
                                      </tr>
                                  </tbody>
                            </table>
                        </div>
                        <div class="row">
                            <div class="col-md-6 align-self-center">
                                <p id="dataTable_info" class="dataTables_info" role="status" aria-live="polite">Showing 1 to 10 of 27</p>
                            </div>
                            <div class="col-md-6">
                                <nav class="d-lg-flex justify-content-lg-end dataTables_paginate paging_simple_numbers">
                                    <ul class="pagination">
                                        <li class="page-item disabled"><a class="page-link" href="#" aria-label="Previous"><span aria-hidden="true">«</span></a></li>
                                        <li class="page-item active"><a class="page-link" href="#">1</a></li>
                                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                                        <li class="page-item"><a class="page-link" href="#" aria-label="Next"><span aria-hidden="true">»</span></a></li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
        <?php 
        include 'footer.php' ?>