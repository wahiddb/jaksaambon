  <?php
    include 'header.php' ?>
  <header class="masthead" style="background-image:url('<?= base_url('assets'); ?>/img/home.jpeg');">
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
                      <div class="collapse show item-1" role="tabpanel" data-parent="#accordion-1">
                          <div class="card-body">
                              <a href="<?= base_url('pemeriksaan'); ?>">
                                  <p class="card-text" style="font-size: 14px;margin-top: 0px;margin-bottom: 0px;">Pelaporan Pelanggaran Pegawai</p>
                              </a>
                              <a href="<?= base_url('pemeriksaan/laporan'); ?>">
                                  <p class="card-text" style="font-size: 14px;margin-top: 8px;margin-bottom: 0px;">Perkembangan Laporan</p>
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
                              <a href="_<?= base_url('pemeriksaan'); ?>">
                                  <p class="card-text" style="font-size: 14px;margin-top: 0px;margin-bottom: 0px;">Kegiatan Bidang Pemeriksa</p>
                              </a>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
          <div class="col col-md-6 col-lg-9">
              <h1 style="text-align: center; margin-bottom: 40px;">Form Pelaporan Pelanggaran Pegawai</h1>
              <form method="POST" action="<?= base_url('pemeriksaan/input'); ?>">
                  <div class="form-group">
                      <label for="name">Nama Pelapor</label>
                      <input name="pelapor" type="text" class="form-control" id="name" aria-describedby="text" placeholder="Masukkan Nama Pelapor">
                  </div>
                  <div class="form-group">
                      <label for="name">Jenis Identitas</label>
                      <select name="identitas" class="form-control">
                          <option value="ktp">KTP</option>
                          <option value="sim">SIM</option>
                          <option value="passport">Passport</option>
                      </select>
                  </div>
                  <div class="form-group">
                      <label for="name">No. Identitas</label>
                      <input name="no_identitas" type="number" class="form-control" id="name" aria-describedby="text" placeholder="Masukkan No. Identitas">
                  </div>
                  <div class="form-group">
                      <label for="exampleInputEmail1">Alamat Email / No.Telepon</label>
                      <input name="email" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukkan email">
                      <small id="emailHelp" class="form-text text-muted">Kami tidak akan mempublikasikan email anda</small>
                  </div>
                  <div class="form-group">
                      <label for="name">Nama Pegawai Terlapor</label>
                      <input name="terlapor" type="text" class="form-control" id="name" aria-describedby="text" placeholder="Masukkan Nama Terlapor">
                  </div>
                  <div class="form-group">
                      <label for="name">Dugaan Pelanggaran Pegawai</label>
                      <input name="pelanggaran" type="text" class="form-control" id="name" aria-describedby="text" placeholder="Masukkan Dugaan Tindak Pidana Terlapor">
                  </div>
                  <div class="form-group">
                      <label for="exampleFormControlTextarea1">Keterangan</label>
                      <textarea name="keterangan" class="form-control" id="exampleFormControlTextarea1" rows="5" placeholder="Masukkan Keterangan Tambahan"></textarea>
                  </div>
                  <button type="submit" class="btn btn-primary" style="float: right;">Submit</button>
              </form>
          </div>
      </div>
  </div>
  <?php
    include 'footer.php' ?>