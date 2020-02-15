  <?php
    include 'header.php' ?>
  <header class="masthead" style="background-image:url('<?= base_url('assets'); ?>/img/home.jpeg');">
      <div class="overlay"></div>
      <div class="container">
          <div class="row">
              <div class="col-md-10 col-lg-8 mx-auto">
                  <div class="site-heading">
                      <img class="mb-2" src="<?= base_url('assets'); ?>/img/jaksa.png" height="15%" width="15%">
                      <h1 style="font-size: 50px;">Bidang Perdata & Tata Usaha Negara</h1><span class="subheading">Kejaksaan Negeri Ambon</span>
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
                          <h5 class="mb-0"><a data-toggle="collapse" aria-expanded="false" aria-controls="accordion-1 .item-1" href="#accordion-1 .item-1" style="font-size: 14px;">Bantuan Hukumm</a></h5>
                      </div>
                      <div class="collapse show item-1" role="tabpanel" data-parent="#accordion-1">
                          <div class="card-body">
                              <a href="<?= base_url('datun'); ?>">
                                  <p class="card-text" style="font-size: 14px;margin-top: 0px;margin-bottom: 0px;">Permohonan Bantuan Hukum</p>
                              </a>
                              <a href="<?= base_url('datun/profil'); ?>">
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
              <h1 style="text-align: center; margin-bottom: 40px;">Profil Jaksa Pengacara Negara</h1>

          </div>
      </div>
  </div>
  <?php
    include 'footer.php' ?>