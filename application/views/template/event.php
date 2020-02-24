<div class="col col-md-6 col-lg-9">
                <h1 style="text-align: center; margin-bottom: 40px;">Kegiatan <?= $title ?></h1>
                <hr>

                                    <?php foreach ($post as $data) : ?>
                                        <div class="post-preview">
                    <a href="<?php echo base_url('event/getId/' .$data['id_post']) ?>">
                        <div class="row">
                            <div class="col-4">
                                <img src="<?= base_url('assets'); ?>/images/<?= $data['image']; ?>" style="width: 100%;height: 100%;margin-left: 16px;">
                            </div>
                            <div class="col-8">
                                <h4 class="post-title"><?= $data['judul']; ?></h4>
                                <h4 class="post-subtitle" style="font-weight: lighter;"><?= $data['subjudul']; ?></h4>
                                <h6 class="post-meta" style="font-style: oblique; font-weight: inherit;">September 24, 2018</h6>
                            </div>
                        </div>
                    </a>
                </div>
                <hr>
                <hr>
                                    <?php endforeach; ?>

                
                <div class="clearfix"><button class="btn btn-primary float-right" type="button">Older Posts&nbsp;⇒</button></div>
            </div>
        </div>
    </div>
        <?php 
        include 'footer.php' ?>