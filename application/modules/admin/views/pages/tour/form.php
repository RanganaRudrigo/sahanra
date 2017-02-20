<?php $this->view('includes/header_start.php'); ?>
<!-- extra css start -->
<link href="<?= base_url('assets/plugins/bootstrap-tagsinput/css/bootstrap-tagsinput.css') ?>" rel="stylesheet"  />
<!-- extra css end -->
<?php $this->view('includes/header_end.php'); ?>
<style>

    /* AUTOCOMPLETE */
    .autocomplete-suggestions {
        border: 1px solid #f9f9f9;
        background: #ffffff;
        cursor: default;
        overflow: auto;
        -webkit-box-shadow: 0 2px 2px rgba(0, 0, 0, 0.15);
        -moz-box-shadow: 0 2px 2px rgba(0, 0, 0, 0.15);
        box-shadow: 0 2px 2px rgba(0, 0, 0, 0.15); }

    .autocomplete-suggestion {
        padding: 4px 10px;
        white-space: nowrap;
        overflow: hidden; }

    .autocomplete-no-suggestion {
        padding: 4px 8px; }

    .autocomplete-selected {
        background: rgba(236, 238, 239, 0.5);
        cursor: pointer; }

    .autocomplete-suggestions strong {
        font-weight: 600;
        color: #2b3d51; }

    .autocomplete-group {
        padding: 2px 5px; }

    .autocomplete-group strong {
        font-weight: bold;
        font-size: 16px;
        color: #2b3d51;
        display: block; }

    #Destination-container {
        padding-left:0 ;
        margin-top: 10px;
    }

    #Destination-container li  {
         border: 1px solid #ddd;
        margin-bottom: 2px;
        padding:2px;
        width: 50%;
        list-style: none;
    }
    #Destination-container li i {
        float: right;
        margin: 5px;
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
                        <h4 class="page-title">Tour</h4>
                        <ol class="breadcrumb p-0">
                            <li><a href="<?= base_url('admin') ?>">Dashboard</a></li>
                            <li><a href="<?= base_url('admin/slider') ?>"> Tour</a></li>
                            <li class="active"> Tour <?= empty($obj->TourId)?"Create":"Edit" ?> </li>
                        </ol>
                        <div class="clearfix"></div>
                    </div>
                </div>
            </div>
            <!-- end row -->

            <?php $this->view('includes/notification.php') ; ?>

            <div class="row">
                <div class="col-lg-12" > <a href="<?= base_url('admin/tours') ?>" class="fa fa-plus btn btn-primary pull-right m_b_10" > Add New </a> </div>
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
                                                <label for="name"> Package </label>
                                                <select  name="form[PackageId]" class="form-control" >
                                                    <option value="" > Select </option>
                                                    <?php foreach ($packages as $package): ?>
                                                        <option value="<?=$package->PackageId ?>" <?= $package->PackageId == $obj->PackageId ?"selected":"" ?> > <?= $package->PackageTitle ?> </option>
                                                    <?php endforeach;  ?>
                                                </select>

                                            </div>
                                            <div class="form-group" >
                                                <label for="name">Tour Name </label>
                                                <input type="text" id="TourTitle" name="form[TourTitle]"
                                                       value="<?= $obj->TourTitle ?>"
                                                       class="form-control" >
                                            </div>
                                            <div class="form-group">
                                                <label for="description">Short Description</label>
                                                <textarea  rows="5" name="form[ShortDescription]"  class="form-control" ><?= $obj->ShortDescription ?></textarea>
                                            </div>
                                        </div>

                                        <div class="col-lg-6" >
                                            <div class="form-group">
                                                <label> Tour Default Image  <small> image size ( 540px * 480px ) </small>  </label>
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
                                            <div class="form-group" >
                                                <label for="name"> Destination Covered </label>
                                                <input type="text"  id="Map"   class="form-control"  >
                                                <ul id="Destination-container" >
                                                    <?php if(isset($obj->destinations) && !empty($obj->destinations) ){
                                                        foreach ($obj->destinations as $destination):
                                                            echo "<li id='destination-li-$destination->id' > 
                                    $destination->text <input type='hidden' name='DestinationCovered[]' value='$destination->id' >
                                     <i class='fa fa-times text-danger' ></i>
                                     </li>";
                                                        endforeach;
                                                    } ?>
                                                </ul>
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
                                                <label> Banner Image  <small> image size ( 1920px * 1280px) </small>  </label>
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
                    <div class="card-box">
                        <h4 class="header-title m-t-0 m-b-30"> Day Details </h4>
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <!--
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="form-group" >
                                                <label for="name"> Price </label>
                                                <input type="number" id="Price" name="form[Price]"
                                                       value="<?= $obj->Price ?>"
                                                       class="form-control" >
                                            </div>
                                        </div>
                                        <div class="col-lg-6" >
                                            <div class="form-group" >
                                                <label for="name"> Discount % </label>
                                                <input type="number" id="Discount" name="form[Discount]"
                                                       value="<?= $obj->Discount ?>"
                                                       class="form-control" >
                                            </div>
                                        </div>
                                        <div class="col-lg-6" >
                                            <div class="form-group" >
                                                <label for="name"> No Of Pack <small>( No of head per pack )</small> </label>
                                                <input type="number" id="NoOdPack" name="form[NoOdPack]"
                                                       value="<?= $obj->NoOdPack ?>"
                                                       class="form-control" >
                                            </div>
                                        </div>
                                    </div>
                                    -->
                                    <div class="row" >
                                        <div class="col-lg-6" >
                                            <div class="form-group" >
                                                <label for="Days"> No of Days </label>
                                                <input type="number" id="Days" name="form[Days]"
                                                       value="<?= $obj->Days ?>"
                                                       class="form-control" >
                                            </div>
                                        </div>
                                        <div class="col-lg-6" >
                                            <div class="form-group" >
                                                <label for="Nights"> No Of Nights </label>
                                                <input type="number" id="Nights" name="form[Nights]"
                                                       value="<?= $obj->Nights ?>"
                                                       class="form-control" >
                                            </div>
                                        </div>
                                    </div>
                                </div>


                            </div>
                        </div>

                    </div>

                    <div class="card-box" >
                        <h4 class="header-title m-t-0 m-b-30">More Images <small> image size ( 938px * 450px )</small> </h4>

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

                    <button class="btn btn-success pull-right" > Save </button>

                    <?= form_close() ?>
                </div>
                <div class="col-lg-4" >
                    <div class="card-box">
                        <h4 class="header-title m-t-0 m-b-30  ">Tour List </h4>

                        <div class="record-list" >
                            <ol id="sortable" >
                                <?php foreach ($records as $record): ?>
                                    <li id="row_<?= $record->TourId ?>" >
                                        <a href="<?= base_url("admin/$this->controller/index/$record->TourId") ?>" class="" ><?= $record->TourTitle ?>
                                            <i href="<?= base_url("admin/$this->controller/days/$record->TourId") ?>" class=" fa fa-edit pull-right " ></i>
                                            <i href="<?= base_url("admin/$this->controller/delete/$record->TourId") ?>" class="delete-btn fa fa-times pull-right " ></i>  </a> </li>
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
<script src="<?= base_url() ?>assets/plugins/jQuery-UI/jquery.ui.widget.min.js"></script>
<script src="<?= base_url() ?>assets/plugins/jQuery-File-Upload/js/jquery.fileupload.js"></script>
<script src="<?= base_url() ?>assets/plugins/jQuery-File-Upload/js/jquery.iframe-transport.js"></script>
<script src="<?= base_url() ?>assets/plugins/jQuery-File-Upload/js/extras/load-image.min.js"></script>
<script src="<?= base_url() ?>assets/plugins/jQuery-File-Upload/js/jquery.fileupload-process.js"></script>
<script src="<?= base_url() ?>assets/plugins/jQuery-File-Upload/js/jquery.fileupload-image.js"></script>
<script src="<?= base_url() ?>assets/js/uploader.js"></script>

<script src="<?= base_url() ?>assets/plugins/autocomplete/jquery.autocomplete.min.js"></script>


<!-- extra js end -->
<?php $this->view('includes/footer_end.php') ?>

<script>

    $(function () {
        $('.fa-edit').click(function (e) {
            e.preventDefault();
            e.stopPropagation();
            location.href = $(this).attr('href');
        });
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

    $('#Map').autocomplete({
        'source': function(request, response) {
            if(request.length){
                $.ajax({
                    url: "<?= base_url('admin/destinations/getAll') ?>",
                    data:{str: request},
                    dataType: 'json',
                    success: function(json) {
                        response($.map(json, function(item) {
                            return {
                                label:item['text'] ,
                                value: item['value']
                            }
                        }));
                    }
                });
            }
        },
        'select': function(a) {
            $('#Map').val("");
            if(!$("#destination-li-"+a.value).length){
                $('<input>').attr({
                    type : 'hidden' ,
                    name :'DestinationCovered[]',
                    value: a.value
            }).appendTo($("<li>")
                    .attr({value:a.value , id :'destination-li-'+a.value})
                    .append(a.label + " <i class='fa fa-times text-danger' ></i>" )
                    .appendTo("#Destination-container"))
                ;
            }
        }
    });

    $("#Destination-container").on("click",'i',function () {
        $(this).closest('li').remove();
    })

</script>