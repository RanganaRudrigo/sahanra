/**
 * Created by Gowtham on 2/28/2017.
 */
var imgContainer =null, imgInput =null;
$('.jFiler-items-list')
    .on('click','.icon-jfi-file-image,.jFiler-item-thumb-image img',function (e) {
        e.preventDefault();
        imgContainer = $(this).closest('.jFiler-item-inner').find('img');
        imgInput = $(this).closest('.jFiler-item-inner').find('input[type=hidden]');
        ImageModel.show( );
    }) .on('click','.jFiler-item-trash-action',function (e) {
        e.preventDefault();
        $(this).closest('.jFiler-item').find('img').attr('src',Base+"assets/images/default.png");
    }).on('click','.jFiler-item-times-action',function (e) {
        e.preventDefault();
        $(this).closest('.jFiler-item').remove();
    });
$('body').on('click','.body>.img-grid>.upload_img_single>img',function (e) {
    e.preventDefault();
    if(typeof imgContainer !== null ){
        imgContainer.attr('src',Base + "media/img/thumbs/"+$(this).data('img'));
    }
    if(typeof imgInput !== null ){
        imgInput.val($(this).data('img'));
    }
}).on('click','.add-more-image',function (e) {
    e.preventDefault();
    var img  = ImageLi.show();
    img.find('input[type=hidden]').attr('name',$(this).data('imageName'));
    img.appendTo($(this).data('for'))
})


var ImageModel = ImageModel || (function ($) {
        'use strict';

        // Creating modal dialog's DOM
        var $dialog = $(
            '<div class="draggable-model"   >' +
            '<div class="header"><h3 style="margin:0;"> Image Selector <i class="fa fa-times pull-right" onclick="ImageModel.hide()" ></i> </h3></div>' +
            '<div class="body">' +
            '<i class="fa fa-spin fa-refresh fa-5x" ></i>' +
            '</div>' +
            '</div></div></div>')  ;



        return {
            show: function ( ) {
                if($('body').find('.draggable-model').length){
                    $('body').find('.draggable-model').css('top',$('body').scrollTop()).show();
                }else
                    $dialog
                        .css('top',$('body').scrollTop())
                        .appendTo('body')
                        .draggable();

                $.ajax({
                    url : Api+"uploaded_images",
                    success:function (images) {
                        var ul = $('<ul class="img-grid clearfix" />');
                        for(var i in images ){
                            $('<li class="upload_img_single " />').append($('<img class="thumbnail img-responsive" />').data('img',images[i]).attr('src',Base+'media/img/thumbs/'+images[i])).appendTo(ul);
                        }
                        $('body').find('.draggable-model').find('.body').html(ul);
                    }
                });
            },
            /**
             * Closes dialog
             */
            hide: function () {
               $('body').find('.draggable-model').hide();
            }
        };

    })(jQuery);

var ImageLi = ImageLi || (function ($) {
        'use strict';
        var $img = $('<li class="jFiler-item " >' +
            '<div class="jFiler-item-container">' +
            '<div class="jFiler-item-inner">' +
            '<div class="jFiler-item-thumb">' +
            '<div class="jFiler-item-status"></div>' +
            '<div class="jFiler-item-thumb-image">' +
            '<img src="'+Base+"assets/images/default.png"+'" draggable="false">' +
            '<input   type="hidden" name=""   value="" />'  +
            '</div>' +
            '</div>' +
            '<div class="jFiler-item-assets jFiler-row">' +
            '<ul class="list-inline pull-left">' +
            '<li> <span class="jFiler-item-others"> <i class="icon-jfi-file-image jfi-file-ext-jpg"></i></span> </li>' +
            '</ul>' +
            '<ul class="list-inline pull-right">' +
            '<li><a class="icon-jfi-times jFiler-item-times-action text-danger text-danger"></a> </li>' +
            '</ul>' +
            '<ul class="list-inline pull-right">' +
            '<li><a class="icon-jfi-trash jFiler-item-trash-action"></a> </li>' +
            '</ul>' +
            '</div>' +
            '</div>' +
            '</div>' +
            '</li>');
        return {
            show: function () {
                return $img.clone() ;
            },
            hide: function (self) {
                self.remove();
            }
        };
    })(jQuery);
