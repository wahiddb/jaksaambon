  <?php
    include 'header.php' ?>
  <header class="masthead" style="background-image:url('<?= base_url('assets'); ?>/img/bg_fix.png');">
      <div class="overlay"></div>
      <div class="container">
          <div class="row">
              <div class="col-md-10 col-lg-8 mx-auto">
                  <div class="site-heading">
                      <img class="mb-2" src="<?= base_url('assets'); ?>/img/jaksa.png" height="15%" width="15%">
                      <h1 style="font-size: 50px;">Bidang Pemeriksa</h1><span class="subheading">Kejaksaan Negeri Ambon</span>
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
                          <h5 class="mb-0"><a data-toggle="collapse" aria-expanded="false" aria-controls="accordion-1 .item-1" href="#accordion-1 .item-1" style="font-size: 14px;">Pelaporan</a></h5>
                      </div>
                      <div class="collapse item-1" role="tabpanel" data-parent="#accordion-1">
                          <div class="card-body">
                              <a href="<?= base_url('pemeriksaan'); ?>">
                                  <p class="card-text" style="font-size: 14px;margin-top: 0px;margin-bottom: 0px;">Pelaporan Pelanggaran Pegawai</p>
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
                              <a href="<?= base_url('event/pemeriksaan'); ?>">
                                  <p class="card-text" style="font-size: 14px;margin-top: 0px;margin-bottom: 0px;">Kegiatan Bidang Pemeriksa</p>
                              </a>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
          <div class="col col-md-6 col-lg-9">
              <h1 style="text-align: center; margin-bottom: 40px;">Kegiatan Bidang Pemeriksa</h1>
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