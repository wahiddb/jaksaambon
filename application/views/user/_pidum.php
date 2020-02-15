  <?php
    include 'header.php' ?>
  <header class="masthead" style="background-image:url('<?= base_url('assets'); ?>/img/home.jpeg');">
      <div class="overlay"></div>
      <div class="container">
          <div class="row">
              <div class="col-md-10 col-lg-8 mx-auto">
                  <div class="site-heading">
                      <img class="mb-2" src="<?= base_url('assets'); ?>/img/jaksa.png" height="15%" width="15%">
                      <h1 style="font-size: 50px;">Bidang Pidana Umum</h1><span class="subheading">Kejaksaan Negeri Ambon</span>
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
                          <h5 class="mb-0"><a data-toggle="collapse" aria-expanded="false" aria-controls="accordion-1 .item-1" href="#accordion-1 .item-1" style="font-size: 14px;">Informasi Perkara</a></h5>
                      </div>
                      <div class="collapse show item-1" role="tabpanel" data-parent="#accordion-1">
                          <div class="card-body">
                              <a href="<?= base_url('pidum'); ?>">
                                  <p class="card-text" style="font-size: 14px;margin-top: 0px;margin-bottom: 0px;">Informasi Perkara Pidana Umum</p>
                              </a>
                              <a href="<?= base_url('pidum/tilang'); ?>">
                                  <p class="card-text" style="font-size: 14px;margin-top: 8px;margin-bottom: 0px;">Informasi Tilang</p>
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
                              <a href="_<?= base_url('pidum'); ?>">
                                  <p class="card-text" style="font-size: 14px;margin-top: 0px;margin-bottom: 0px;">Kegiatan Bidang Pidana Umum</p>
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
                      <p class="text-primary m-0 font-weight-bold">Data Perkara Pidana Umum</p>
                  </div>
                  <div class="card-body">
                      <div class="table-responsive table mt-2 " id="dataTable" role="grid" aria-describedby="dataTable_info">
                          <table class="table dataTable my-4 " id="myTable">
                              <thead>
                                  <tr>
                                      <th>No</th>
                                      <th>
                                          <center>Nomor Perkara</center>
                                      </th>
                                      <th>
                                          <center>Pasal Yang Dilanggar</center>
                                      </th>
                                      <th>
                                          <center>Tersangka</center>
                                      </th>
                                      <th>
                                          <center>Status</center>
                                      </th>
                                      <th>
                                          <center>Keterangan</center>
                                      </th>
                                  </tr>
                              </thead>
                              <tbody>
                                  <?php $i = 1; ?>
                                  <?php foreach ($pidum as $data) : ?>
                                      <tr>
                                          <td>
                                              <center><?= $i; ?></center>
                                          </td>
                                          <td>
                                              <center><?= $data['nomor_perkara']; ?></center>
                                          </td>
                                          <td>
                                              <center><?= $data['pasal']; ?></center>
                                          </td>
                                          <td>
                                              <center><?= $data['tersangka']; ?></center>
                                          </td>
                                          <td>
                                              <center><?= $data['status']; ?></center>
                                          </td>
                                          <td>
                                              <center><?= $data['keterangan']; ?></center>
                                          </td>

                                      </tr>
                                      <?php $i++; ?>
                                  <?php endforeach; ?>
                              </tbody>
                          </table>
                      </div>

                  </div>
              </div>
          </div>
      </div>
  </div>
  <?php
    include 'footer.php' ?>