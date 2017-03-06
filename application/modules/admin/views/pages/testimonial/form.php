<?php $this->view('includes/header_start.php'); ?>
<!-- extra css start -->
<link href="<?=base_url('assets/plugins/jquery.filer/css/jquery.filer.css')?>" rel="stylesheet" />
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
                        <h4 class="page-title">Testimonial</h4>
                        <ol class="breadcrumb p-0">
                            <li><a href="<?= base_url('admin') ?>">Dashboard</a></li>
                            <li><a href="<?= base_url('admin/slider') ?>"> Testimonial</a></li>
                            <li class="active"> Testimonial <?= empty($obj->TestimonialId)?"Create":"Edit" ?> </li>
                        </ol>
                        <div class="clearfix"></div>
                    </div>
                </div>
            </div>
            <!-- end row -->

            <?php $this->view('includes/notification.php') ; ?>

            <div class="row">
                <div class="col-lg-12" > <a href="<?= base_url('admin/testimonial') ?>" class="fa fa-plus btn btn-primary pull-right m_b_10" > Add New </a> </div>
            </div>
            <div class="row">
                <div class="col-lg-8">
                    <?= form_open() ?>
                    <div class="card-box">
                        <h4 class="header-title m-t-0 m-b-30">General Information</h4>
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="form-group" >
                                                <label for="name">Testimonial Author Name </label>
                                                <input type="text" id="TestimonialTitle" name="form[TestimonialTitle]"
                                                       value="<?= $obj->TestimonialTitle ?>"
                                                       class="form-control" >
                                            </div>
                                        </div>

                                        <div class="col-lg-6" >
                                            <div class="form-group">
                                                <label> Testimonial Author Profile Picture <br/> <small> image size ( 300px * 300px ) </small>  </label>
                                            </div>

                                            <ul class="jFiler-items-list jFiler-items-grid" >
                                                <li class="jFiler-item " >
                                                    <div class="jFiler-item-container">
                                                        <div class="jFiler-item-inner">
                                                            <div class="jFiler-item-thumb">
                                                                <div class="jFiler-item-status"></div>
                                                                <div class="jFiler-item-thumb-image">
                                                                    <img
                                                                        src="<?= $obj->Image ? UPT. $obj->Image : base_url('assets/images/default.png') ?>" draggable="false">
                                                                    <input   type="hidden" name="form[Image]"   value="<?= $obj->Image ?>">
                                                                </div>
                                                            </div>
                                                            <div class="jFiler-item-assets jFiler-row">
                                                                <ul class="list-inline pull-left">
                                                                    <li>
                                                                        <span class="jFiler-item-others">
                                                                            <i class="icon-jfi-file-image jfi-file-ext-jpg"></i></span>
                                                                    </li>
                                                                </ul>
                                                                <ul class="list-inline pull-right">
                                                                    <li><a class="icon-jfi-trash jFiler-item-trash-action"></a>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>

                                    </div>
                                    <div class="row" >
                                        <div class="col-lg-12" >
                                            <div class="form-group">
                                                <label for="description"> Author Detail</label>
                                                <input type="text" value="<?= $obj->ShortDescription ?>" name="form[ShortDescription]" class="form-control">
                                                <!-- <textarea  rows="5" name="form[ShortDescription]"  class="form-control" ><?= $obj->ShortDescription ?></textarea> -->
                                            </div> 
                                        </div>
                                    </div>
                                    <div class="row" >
                                        <div class="col-lg-12" >
                                            <div class="form-group">
                                                <label for="description"> Description</label>
                                                <textarea   rows="5" name="form[Description]"  class="form-control" ><?= $obj->Description ?></textarea>
                                            </div>
                                        </div>
                                    </div>
                                   <!-- <div class="row" >
                                        <div class="col-lg-12" >
                                            <div class="form-group">
                                                <label for="description">Description</label>
                                                <textarea id="description" rows="5" name="form[Description]"  class="form-control" ><?/*= $obj->Description */?></textarea>
                                            </div>
                                        </div>
                                    </div>-->
                                </div>

                                <button class="btn btn-success pull-right" > Save </button>
                            </div>

                        </div>

                    </div>




                    <?= form_close() ?>
                </div>
                <div class="col-lg-4" >
                    <div class="card-box">
                        <h4 class="header-title m-t-0 m-b-30  ">Testimonial List </h4>

                        <div class="record-list" >
                            <ol id="sortable" >
                                <?php foreach ($records as $record): ?>
                                    <li id="row_<?= $record->TestimonialId ?>" > <a href="<?= base_url("admin/$this->controller/index/$record->TestimonialId") ?>" class="" ><?= $record->TestimonialTitle ?>
                                            <i href="<?= base_url("admin/$this->controller/delete/$record->TestimonialId") ?>" class="delete-btn fa fa-times pull-right " ></i>  </a> </li>
                                <?php endforeach; ?>
                            </ol>
                        </div>
                    </div>
                </div>
                <!-- end row -->
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
<script src="<?= base_url() ?>assets/js/image-selector.js"></script>

<!-- extra js end -->
<?php $this->view('includes/footer_end.php') ?>

<script>

    $(function () {
        CKEDITOR.replace( 'description' );
        $( "#sortable" )
            .sortable({
                update: function (event, ui) {
                    var data = $(this).sortable('serialize');
                    $.ajax({
                        data: data,
                        type: 'POST',
                        url: BaseUrl + '<?= $this->controller ?>/reorder',
                        success : function (response) {
                            console.log(response);
                        }
                    });
                }
            })
            .disableSelection();

    })
</script>