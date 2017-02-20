<?php $this->view('includes/header_start.php'); ?>
<!-- extra css start -->
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
                        <h4 class="page-title">Publication</h4>
                        <ol class="breadcrumb p-0">
                            <li><a href="<?= base_url('admin') ?>">Dashboard</a></li>
                            <li><a href="<?= base_url('admin/publications') ?>"> Publication</a></li>
                            <li class="active"> Publication <?= empty($obj->PublicationId)?"Create":"Edit" ?> </li>
                        </ol>
                        <div class="clearfix"></div>
                    </div>
                </div>
            </div>
            <!-- end row -->

            <?php $this->view('includes/notification.php') ; ?>

            <div class="row">
                <div class="col-lg-12" > <a href="<?= base_url('admin/publication') ?>" class="fa fa-plus btn btn-primary pull-right m_b_10" > Add New </a> </div>
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
                                                <label for="name">Publication Name </label>
                                                <input type="text" id="PublicationTitle" name="form[PublicationTitle]"
                                                       value="<?= $obj->PublicationTitle ?>"
                                                       class="form-control" >
                                            </div>
                                        </div>

                                        <div class="col-lg-6" >
                                            <div class="form-group">
                                                <label> Publication Default Image  <small> image size ( 570px * 686px ) </small>  </label>
                                            </div>
                                            <div class="fileinput-button btn btn-success sepH_b">
                                                <i class="fa fa-plus"></i>
                                                <span> Add file </span>
                                                <input class="image_upload" data-for="#default_img_grid_upload"  data-name="Image"  type="file" name="userfile">
                                            </div>
                                            <input   type="hidden" name="form[Image]"   value="">
                                            <ul class="img-grid2 img-grid  clearfix" id="default_img_grid_upload">
                                                <?php if ($obj->Image): ?>
                                                    <li>
                                                        <div class="upload_img_single thumbnail">
                                                            <img src="<?= UPT. $obj->Image ?>"
                                                                 class="thumbnail img-responsive" alt=""/>
                                                            <div class="upload_img_actions">
                                                                <span class=" fa fa-times pull-right btn  btn-danger  "
                                                                      onclick="image_upload.remove($(this))"> </span>
                                                                <input
                                                                    type="hidden" name="form[Image]"
                                                                    value="<?= $obj->Image ?>"></div>
                                                        </div>
                                                    </li>
                                                <?php endif; ?>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="row" >
                                        <div class="col-lg-12" >
                                            <div class="form-group">
                                                <label for="description">Short Description</label>
                                                <textarea  rows="5" name="form[ShortDescription]"  class="form-control" ><?= $obj->ShortDescription ?></textarea>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row" >
                                        <div class="col-lg-12" >
                                            <div class="form-group">
                                                <label for="description">Description</label>
                                                <textarea id="description" rows="5" name="form[Description]"  class="form-control" ><?= $obj->Description ?></textarea>
                                            </div>
                                        </div>
                                        <div class="col-lg-6" >
                                            <div class="form-group">
                                                <label> Banner Image  <small> image size (  1920px * 1280px ) </small>  </label>
                                            </div>
                                            <div class="fileinput-button btn btn-success sepH_b">
                                                <i class="fa fa-plus"></i>
                                                <span> Add file </span>
                                                <input class="image_upload" data-for="#default_BannerImage"  data-name="BannerImage"  type="file" name="userfile">
                                            </div>
                                            <input   type="hidden" name="form[BannerImage]"   value="">
                                            <ul class="img-grid2 img-grid  clearfix" id="default_BannerImage">
                                                <?php if ($obj->BannerImage): ?>
                                                    <li>
                                                        <div class="upload_img_single thumbnail">
                                                            <img src="<?= UPT. $obj->BannerImage ?>"
                                                                 class="thumbnail img-responsive" alt=""/>
                                                            <div class="upload_img_actions">
                                                                <span class=" fa fa-times pull-right btn  btn-danger  "
                                                                      onclick="image_upload.remove($(this))"> </span>
                                                                <input
                                                                    type="hidden" name="form[BannerImage]"
                                                                    value="<?= $obj->BannerImage ?>"></div>
                                                        </div>
                                                    </li>
                                                <?php endif; ?>
                                            </ul>
                                        </div>
                                    </div>
                                </div>


                            </div>
                        </div>

                    </div>

                    <div class="card-box" >
                        <h4 class="header-title m-t-0 m-b-30">More Images <small> image size (938px * 450px )</small> </h4>

                        <div class="row " >
                            <div class="fileinput-button btn btn-success sepH_b">
                                <i class="fa fa-plus"></i>
                                <span>Add files...</span>
                                <input id="image_upload" type="file" name="userfile" multiple>
                            </div>

                            <ul class="img-grid clearfix" id="img_grid_upload">
                                <?php $MoreImage = (array) json_decode($obj->MoreImage); ?>
                                <?php foreach ( $MoreImage as $img): ?>
                                    <li class="upload_img_single  thumbnail"  >
                                        <img  src="<?= UPT. $img ?>"  class="thumbnail img-responsive" alt=""/>
                                        <div class="upload_img_actions">
                                                     <span class=" fa fa-times pull-right btn  btn-danger  "
                                                           onclick="image_upload.remove($(this))"> </span>
                                            <input type="hidden" name="image[]"  value="<?= $img ?>">
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
                        <h4 class="header-title m-t-0 m-b-30  ">Publication List </h4>

                        <div class="record-list" >
                            <ol id="sortable" >
                                <?php foreach ($records as $record): ?>
                                    <li id="row_<?= $record->PublicationId ?>" > <a href="<?= base_url("admin/$this->controller/index/$record->PublicationId") ?>" class="" ><?= $record->PublicationTitle ?>
                                            <i href="<?= base_url("admin/$this->controller/delete/$record->PublicationId") ?>" class="delete-btn fa fa-times pull-right " ></i>  </a> </li>
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

<!-- multiupload -->
<script src="<?= base_url() ?>assets/plugins/jQuery-UI/jquery.ui.widget.min.js"></script>
<script src="<?= base_url() ?>assets/plugins/jQuery-File-Upload/js/jquery.fileupload.js"></script>
<script src="<?= base_url() ?>assets/plugins/jQuery-File-Upload/js/jquery.iframe-transport.js"></script>
<script src="<?= base_url() ?>assets/plugins/jQuery-File-Upload/js/extras/load-image.min.js"></script>
<script src="<?= base_url() ?>assets/plugins/jQuery-File-Upload/js/jquery.fileupload-process.js"></script>
<script src="<?= base_url() ?>assets/plugins/jQuery-File-Upload/js/jquery.fileupload-image.js"></script>
<script src="<?= base_url() ?>assets/js/uploader.js"></script>

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