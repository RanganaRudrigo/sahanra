<?php $this->view('includes/header_start.php'); ?>
<!-- extra css start --> 

<!-- extra css end -->
<?php $this->view('includes/header_end.php'); ?>
<style>

    .upload_img_single img{
        width: 100px;
    }
    .img-grid li {
        width: 110px;
        padding: 5px;
        margin: 0 10px 10px 10px;
    }
    .thumbnail {
        margin-bottom: 5px;
    }
</style>
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
                        <h4 class="page-title">Image Uploader</h4>
                        <ol class="breadcrumb p-0">
                            <li><a href="<?= base_url('admin') ?>">Dashboard</a></li>
                            <li><a href="<?= base_url('admin/upload') ?>"> Image Uploader</a></li>
                        </ol>
                        <div class="clearfix"></div>
                    </div>
                </div>
            </div>
            <!-- end row -->

            <?php $this->view('includes/notification.php') ; ?>

            <div class="row">
                <div class="col-lg-12">

                    <div class="card-box" >
                        <h4 class="header-title m-t-0 m-b-30">  Images   </h4>


                        <div class="row " >
                            <div class="fileinput-button btn btn-success sepH_b" style="margin: 0 0 10px 10px" >
                                <i class="fa fa-plus"></i>
                                <span>Add files...</span>
                                <input id="image_upload" type="file" name="userfile" multiple>
                            </div>

                            <ul class="img-grid clearfix" id="img_grid_upload"  >
                                <?php foreach ( $images as $img): ?>
                                    <li class="upload_img_single  thumbnail"  >
                                        <img  src="<?= UPT. $img ?>"  class="thumbnail img-responsive" alt=""/>
                                        <div class="upload_img_actions">
                                                     <span class=" fa fa-times pull-right btn  btn-danger  " data-img="<?=$img?>"
                                                           onclick="image_upload.remove($(this))"> </span>
                                            <input type="hidden" name="image[]"  value="<?= $img ?>">
                                        </div>
                                    </li>
                                <?php endforeach; ?>
                            </ul>
                        </div>
                    </div>

                    <button class="btn btn-success pull-right" > Save </button>
 
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
<script src="<?= base_url() ?>assets/plugins/jquery-ui/jquery-ui.min.js"></script>

<!-- multiupload -->
<script src="<?= base_url() ?>assets/plugins/jQuery-UI/jquery.ui.widget.min.js"></script>
<script src="<?= base_url() ?>assets/plugins/jQuery-File-Upload/js/jquery.fileupload.js"></script>
<script src="<?= base_url() ?>assets/plugins/jQuery-File-Upload/js/jquery.iframe-transport.js"></script>
<script src="<?= base_url() ?>assets/plugins/jQuery-File-Upload/js/extras/load-image.min.js"></script>
<script src="<?= base_url() ?>assets/plugins/jQuery-File-Upload/js/jquery.fileupload-process.js"></script>
<script src="<?= base_url() ?>assets/plugins/jQuery-File-Upload/js/jquery.fileupload-image.js"></script>

<script>
    image_upload = {} ;
    image_upload.remove = function (self) {
        if(confirm("Do you want to remove this file ")){
            if(self.data()){
                $.ajax({
                    url : '<?=current_url()?>/delete_image',
                    data : self.data(),
                    success:function (json) {
                        self.closest('li').remove();
                    }
                });
            }else{
                self.closest('li').remove();
            }
        }

    }
    var e = $("<button/>").addClass("btn btn-success btn-block").prop("disabled", !0).text("Processing...").on("click", function (e) {
        var a = $(this), i = a.data();
        a.off("click").text("Abort").on("click", function () {
            a.remove(), i.abort()
        }), i.submit().always(function () {
            a.remove()
        }), e.preventDefault()
    });
    $("#image_upload").fileupload({
        url: URL.base +CONTROLLER + "/do_upload/",
        dataType: "json",
        autoUpload: !1,
        acceptFileTypes: /(\.|\/)(gif|jpe?g|png)$/i,
        maxFileSize: 5e6,
        disableImageResize: /Android(?!.*Chrome)|Opera/.test(window.navigator.userAgent),
        previewMaxWidth: 220,
        previewMaxHeight: 220,
        previewCrop: 0
    }).on("fileuploadsubmit", function (e, a) {
        var i = $("#image_upload");
        return a.formData = {files: i.data(a)}, a.formData.files ? void 0 : (i.focus(), !1)
    }).on("fileuploadadd", function (a, i) {
        i.context = $("<li class='upload_img_single thumbnail' />").prependTo("#img_grid_upload"), $("#upload_progress").length || $("body").append('<div id="upload_progress"><i class="fa fa-spinner fa-spin"></i></div>'), $.each(i.files, function (a, o) {
            var t = $('<div class="upload_img_actions">').wrapInner('<span class=" fa fa-times pull-right btn  btn-danger  " onclick="image_upload.remove($(this))" > </span>  '), n = $('<div />').append(t);
            a || t.append(e.clone(!0).data(i)), n.appendTo(i.context)
        })
    }).on("fileuploadprocessalways", function (e, a) {
        var i = a.index, o = a.files[i], t = $(a.context.children()[i]);
        o.preview && t.prepend(o.preview), o.error && t.find(".upload_img_actions").append($('<div class="alert alert-danger"/>').text(o.error)), i + 1 === a.files.length && a.context.find("button").text("Upload").prop("disabled", !!a.files.error)
    }).on("fileuploadprogressall", function (e, a) {
        $("#upload_progress").addClass("show_progress");
        var i = parseInt(a.loaded / a.total * 100, 10);$("#upload_progress div").width(i+"%").html(i+"%");
        100 == i && setTimeout("$('#upload_progress').removeClass('show_progress')", 500)
    }).on("fileuploaddone", function (e, a) {
        $.each(a.result.files, function (e, i) {
            i.url ? $(a.context.children()[e]).find(".upload_img_actions").append('<div class="alert alert-success"> Success  <input type="hidden" name="image[]" value="' + i.name + '" > </div>') : i.error && $(a.context.children()[e]).find(".upload_img_actions").append($('<div class="alert alert-danger"/>').text(i.error))
        })
    }).on("fileuploadfail", function (e, a) {
        $("#upload_progress").addClass("show_progress"), $.each(a.files, function (e, i) {
            $(a.context.children()[e]).find(".upload_img_actions").append($('<div class="alert alert-danger"/>').text("File upload failed."))
        }), setTimeout("$('#upload_progress').removeClass('show_progress')", 500)
    }).prop("disabled", !$.support.fileInput).parent().addClass($.support.fileInput ? void 0 : "disabled")
</script>

<!-- extra js end -->
<?php $this->view('includes/footer_end.php') ?>
