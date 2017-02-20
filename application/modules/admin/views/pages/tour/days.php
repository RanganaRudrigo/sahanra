<?php $this->view('includes/header_start.php'); ?>
<!-- extra css start -->
<link href="<?= base_url('assets/plugins/select2/css/select2.min.css') ?>" rel="stylesheet"  />
<!-- extra css end -->
<?php $this->view('includes/header_end.php'); ?>

<!-- ============================================================== -->
<!-- Start right Content here -->
<!-- ============================================================== -->


<div class="content-page">
    <!-- Start content -->
    <div class="content">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <div class="page-title-box">
                        <h4 class="page-title"> <?= $tour->TourTitle     ?> </h4>
                        <ol class="breadcrumb p-0">
                            <li><a href="<?= base_url('admin') ?>">Dashboard</a></li>
                            <li><a href="<?= base_url('admin/tour') ?>"> Tour</a></li>
                            <li class="active"> <?= $tour->TourTitle     ?> </li>
                        </ol>
                        <div class="clearfix"></div>
                    </div>
                </div>
            </div>
            <!-- end row -->

            <?php $this->view('includes/notification.php') ; ?>

            <div class="row">
                <div class="col-lg-12">
                    <?php $obj = json_decode($tour->TourDays,true );   ?>
                    <?= form_open() ?>
                    <?php for($i=1;$tour->Days+1 > $i ; $i++): ?>
                        <div class="card-box">
                            <h4 class="header-title m-t-0 m-b-30"> Day <?=$i?> </h4>
                            <div class="row" >
                                <div class="col-lg-12" >
                                    <div class="form-group">
                                        <label for="description">Description</label>
                                        <textarea id="description-<?=$i?>" rows="5" name="TourDays[<?=$i?>]"  class="form-control" ><?= isset($obj[$i])?$obj[$i] :"" ?></textarea>
                                    </div>
                                </div>
                            </div>

                        </div>
                    <?php endfor ?>


                    <button class="btn btn-success pull-right" > Save </button>

                    <?= form_close() ?>
                </div>

            </div>
        </div>
        <!-- end col -->
    </div>
    <!-- end row -->

</div>
<!-- container -->



<!-- ============================================================== -->
<!-- End Right content here -->
<!-- ============================================================== -->

<?php $this->view('includes/footer_start.php') ?>
<!-- extra js start -->
<script src="<?= base_url() ?>assets/ckeditor/ckeditor.js"></script>
<script src="<?= base_url() ?>assets/plugins/jquery-ui/jquery-ui.min.js"></script>

<!-- multiupload -->
<script src="<?= base_url() ?>assets/plugins/jQuery-UI/jquery.ui.widget.min.js"></script>
<script src="<?= base_url() ?>assets/plugins/jQuery-File-Upload/js/jquery.fileupload.js"></script>
<script src="<?= base_url() ?>assets/plugins/jQuery-File-Upload/js/jquery.iframe-transport.js"></script>
<script src="<?= base_url() ?>assets/plugins/jQuery-File-Upload/js/extras/load-image.min.js"></script>
<script src="<?= base_url() ?>assets/plugins/jQuery-File-Upload/js/jquery.fileupload-process.js"></script>
<script src="<?= base_url() ?>assets/plugins/jQuery-File-Upload/js/jquery.fileupload-image.js"></script>
<script src="<?= base_url() ?>assets/js/uploader.js"></script>

<script src="<?= base_url() ?>assets/plugins/select2/js/select2.full.min.js"></script>
<!-- extra js end -->
<?php $this->view('includes/footer_end.php') ?>

<script>

    $(function () {
        <?php for($i=1;$tour->Days+1 > $i ; $i++): ?>
            CKEDITOR.replace( 'description-<?=$i?>' );
        <?php endfor ?>

    })
</script>