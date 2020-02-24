
<?php if ($title=='Bidang Pembinaan') { ?>
    <div class="col col-md-3 col-lg-3">
              <div role="tablist" id="accordion-1" style="margin-top: 16px;">
                  <div class="card">
                      <div class="card-header" role="tab">
                          <h5 class="mb-0"><a data-toggle="collapse" aria-expanded="false" aria-controls="accordion-1 .item-1" href="#accordion-1 .item-1" style="font-size: 14px;">Informasi Kepegawaian</a></h5>
                      </div>
                      <div class="collapse show item-1" role="tabpanel" data-parent="#accordion-1">
                          <div class="card-body">
                              <a href="#">
                                  <p class="card-text" style="font-size: 14px;margin-top: 0px;margin-bottom: 0px;">Data Kepegawaian</p>
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
                              <a href="<?= base_url('event'); ?>">
                                  <p class="card-text" style="font-size: 14px;margin-top: 0px;margin-bottom: 0px;">Kegiatan Bidang Pembinaan</p>
                              </a>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
<?php } ?>

<?php if ($title=='Bidang Pidana Umum') { ?>
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
                              <a href="<?=base_url('event/pidum'); ?>">
                                  <p class="card-text" style="font-size: 14px;margin-top: 0px;margin-bottom: 0px;">Kegiatan Bidang Pidana Umum</p>
                              </a>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
<?php } ?>
<?php if ($title=='Bidang Pidana Khusus') { ?>
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
                              <a href="<?= base_url('event/pidsus'); ?>">
                                  <p class="card-text" style="font-size: 14px;margin-top: 0px;margin-bottom: 0px;">Kegiatan Bidang Pidana Khusus</p>
                              </a>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
<?php } ?>
<?php if ($title=='Bidang WBK / WBMM') { ?>
    <div class="col col-md-3 col-lg-3">
              <div role="tablist" id="accordion-1" style="margin-top: 16px;">
                  <div class="card">
                      <div class="card-header" role="tab">
                          <h5 class="mb-0"><a data-toggle="collapse" aria-expanded="false" aria-controls="accordion-1 .item-1" href="#accordion-1 .item-1" style="font-size: 14px;">Kegiatan</a></h5>
                      </div>
                      <div class="collapse show item-1" role="tabpanel" data-parent="#accordion-1">
                          <div class="card-body">
                               <a href="<?= base_url('event/wbk'); ?>">
                                  <p class="card-text" style="font-size: 14px;margin-top: 0px;margin-bottom: 0px;">Kegiatan WBK / WBMM</p>
                              </a>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
<?php } ?>
<?php if ($title=='Barang Bukti') { ?>
    <div class="col col-md-3 col-lg-3">
              <div role="tablist" id="accordion-1" style="margin-top: 16px;">
                  <div class="card">
                      <div class="card-header" role="tab">
                          <h5 class="mb-0"><a data-toggle="collapse" aria-expanded="false" aria-controls="accordion-1 .item-1" href="#accordion-1 .item-1" style="font-size: 14px;">Informasi Barang Bukti</a></h5>
                      </div>
                      <div class="collapse show item-1" role="tabpanel" data-parent="#accordion-1">
                          <div class="card-body">
                              <a href="<?= base_url('barangbukti'); ?>">
                                  <p class="card-text" style="font-size: 14px;margin-top: 0px;margin-bottom: 0px;">Barang Bukti Dimusnahkan</p>
                              </a>
                              <a href="<?= base_url('barangbukti/dirampas'); ?>">
                                  <p class="card-text" style="font-size: 14px;margin-top: 8px;margin-bottom: 0px;">Barang Bukti Dirampas Negara</p>
                              </a>
                              <a href="<?= base_url('barangbukti/kembali'); ?>">
                                  <p class="card-text" style="font-size: 14px;margin-top: 8px;margin-bottom: 0px;">Barang Bukti Dikembalikan</p>
                              </a>
                              <a href="<?= base_url('barangbukti/lelang'); ?>">
                                  <p class="card-text" style="font-size: 14px;margin-top: 8px;margin-bottom: 0px;">Barang Bukti Dilelang</p>
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
                              <a href="<?= base_url('event/bb'); ?>">
                                  <p class="card-text" style="font-size: 14px;margin-top: 0px;margin-bottom: 0px;">Kegiatan Barang Bukti</p>
                              </a>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
<?php } ?>
<?php if ($title=='Bidang Pemeriksa') { ?>
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
                              <a href="<?= base_url('event/pemeriksaan'); ?>">
                                  <p class="card-text" style="font-size: 14px;margin-top: 0px;margin-bottom: 0px;">Kegiatan Bidang Pemeriksa</p>
                              </a>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
<?php } ?>
<?php if ($title=='Bidang Perdata & Tata Usaha Negara') { ?>
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
                              <a href="<?= base_url('datun/bantuan'); ?>">
                                  <p class="card-text" style="font-size: 14px;margin-top: 8px;margin-bottom: 0px;">Permohonan Bantuan Hukum Gratis</p>
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
                              <a href="<?= base_url('event/datun'); ?>">
                                  <p class="card-text" style="font-size: 14px;margin-top: 0px;margin-bottom: 0px;">Kegiatan Bidang Datun</p>
                              </a>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
<?php } ?>
<?php if ($title=='Bidang Intelijen'||$title=='Penyuluhan Dan Penerangan Hukum') { ?>
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

                              <a href="<?= base_url('intelijen/laporan'); ?>">
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
                              <a href="<?= base_url('event/penyuluhan'); ?>">
                                  <p class="card-text" style="font-size: 14px;margin-top: 0px;margin-bottom: 0px;">Penyuluhan Dan Penerangan Hukum</p>
                              </a>
                              <a href="<?= base_url('event/intelijen'); ?>">
                                  <p class="card-text" style="font-size: 14px;margin-top: 8px;margin-bottom: 0px;">Kegiatan Bidang Intelijen</p>
                              </a>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
<?php } ?>