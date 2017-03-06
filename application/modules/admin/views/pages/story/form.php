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
                        <h4 class="page-title">Story</h4>
                        <ol class="breadcrumb p-0">
                            <li><a href="<?= base_url('admin') ?>">Dashboard</a></li>
                            <li><a href="<?= base_url('admin/story') ?>"> Story</a></li>
                            <li class="active"> Story <?= empty($obj->StoryId)?"Create":"Edit" ?> </li>
                        </ol>
                        <div class="clearfix"></div>
                    </div>
                </div>
            </div>
            <!-- end row -->

            <?php $this->view('includes/notification.php') ; ?>

            <div class="row">
                <div class="col-lg-12" > <a href="<?= base_url('admin/story') ?>" class="fa fa-plus btn btn-primary pull-right m_b_10" > Add New </a> </div>
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
                                                <label for="name">Story Name </label>
                                                <input type="text" id="StoryTitle" name="form[StoryTitle]"
                                                       value="<?= $obj->StoryTitle ?>"
                                                       class="form-control" >
                                            </div>
                                            <div class="form-group">
                                                <label for="description">Short Description</label>
                                                <textarea  rows="5" name="form[ShortDescription]"  class="form-control" ><?= $obj->ShortDescription ?></textarea>
                                            </div>
                                        </div>

                                        <div class="col-lg-6" >
                                            <div class="form-group">
                                                <label> Story Default Image  <small> image size ( 572px * 422px ) </small>  </label>
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
                                                <label for="description">Description</label>
                                                <textarea id="description" rows="5" name="form[Description]"  class="form-control" ><?= $obj->Description ?></textarea>
                                            </div>
                                        </div>
                                    </div>
                                </div>


                            </div>
                        </div>

                    </div>

                    <div class="card-box" >
                        <h4 class="header-title m-t-0 m-b-30">More Images <small> image size (938px * 450px )</small> <i class="fa fa-plus btn btn-primary add-more-image" data-for="#more_image" data-image-name="image[]" ></i> </h4>

                        <div class="row " >
                            <ul id="more_image" class="jFiler-items-list jFiler-items-grid" >
                                <?php $MoreImage = (array) json_decode($obj->MoreImage); ?>
                                <?php foreach ( $MoreImage as $img): ?>
                                    <li class="jFiler-item " >
                                        <div class="jFiler-item-container">
                                            <div class="jFiler-item-inner">
                                                <div class="jFiler-item-thumb">
                                                    <div class="jFiler-item-status"></div>
                                                    <div class="jFiler-item-thumb-image">
                                                        <img
                                                            src="<?= UPT. $img ?>" draggable="false">
                                                        <input   type="hidden" name="image[]"   value="<?=$img  ?>">
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
                                                        <li><a class="icon-jfi-times jFiler-item-times-action text-danger"></a>
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
                                <?php endforeach; ?>
                            </ul>
                        </div>
                    </div>

                    <div class="card-box" >
                        <h4 class="header-title m-t-0 m-b-30">Video  </h4>

                        <div class="row " >
                            <div class="col-lg-12 table-responsive ">
                                <i class="fa fa-plus btn btn-primary pull-right m_b_10 add_row"
                                   data-html="tr"
                                   data-number="td"
                                   data-bind="#video_container"
                                   data-master-id="#add_row_" ></i>
                                 <table class="table table-bordered" id="video_container" >
                                     <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Youtube Url</th>
                                            <th>Action</th>
                                        </tr>
                                     </thead>
                                     <tbody>
                                     <?php $YoutubeUrls = (array) json_decode($obj->YoutubeUrl); ?>
                                     <?php foreach ( $YoutubeUrls as $k => $video): ?>
                                         <tr>
                                             <td><?=$k+1?></td>
                                             <td> <input type="url" class="form-control" name="youtube[]" value="<?= $video ?>" > </td>
                                             <td> <i class="fa fa-times btn btn-danger remove_row"
                                                     data-for="tr"
                                                     data-number="td"
                                                     data-html="tr"
                                                     data-bind="#video_container" ></i> </td>
                                         </tr>
                                     <?php endforeach; ?>
                                     </tbody>
                                 </table>
                            </div>
                        </div>
                    </div>
                    <button class="btn btn-success pull-right" > Save </button>

                    <?= form_close() ?>
                </div>
                <div class="col-lg-4" >
                    <div class="card-box">
                        <h4 class="header-title m-t-0 m-b-30  ">Story List </h4>

                        <div class="record-list" >
                            <ol id="sortable" >
                                <?php foreach ($records as $record): ?>
                                    <li id="row_<?= $record->StoryId ?>" > <a href="<?= base_url("admin/$this->controller/index/$record->StoryId") ?>" class="" ><?= $record->StoryTitle ?>
                                            <i href="<?= base_url("admin/$this->controller/delete/$record->StoryId") ?>" class="delete-btn fa fa-times pull-right " ></i>  </a> </li>
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

<table id="add_row_" style="display: none;" >
    <tr>
        <td></td>
        <td> <input type="url" class="form-control" name="youtube[]"  > </td> 
        <td> <i class="fa fa-times btn btn-danger remove_row"
                data-for="tr"
                data-number="td"
                data-html="tr"
                data-bind="#video_container" ></i> </td>
    </tr>
</table>

<!-- ============================================================== -->
<!-- End Right content here -->
<!-- ============================================================== -->

<?php $this->view('includes/footer_start.php') ?>
<!-- extra js start -->
<script src="<?= base_url() ?>assets/ckeditor/ckeditor.js"></script>
<script src="<?= base_url() ?>assets/plugins/jquery-ui/jquery-ui.min.js"></script>

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