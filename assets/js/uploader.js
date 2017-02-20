/**
 * Created by Gowtham on 1/5/2017.
 */

image_upload = {
    init: function () {
        if ($("#image_upload").length) {
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
                previewCrop: !0
            }).on("fileuploadsubmit", function (e, a) {
                var i = $("#image_upload");
                return a.formData = {files: i.data(a)}, a.formData.files ? void 0 : (i.focus(), !1)
            }).on("fileuploadadd", function (a, i) {
                i.context = $("<li/>").appendTo("#img_grid_upload"), $("#upload_progress").length || $("body").append('<div id="upload_progress"><i class="fa fa-spinner fa-spin"></i></div>'), $.each(i.files, function (a, o) {
                    var t = $('<div class="upload_img_actions">').wrapInner('<span class=" fa fa-times pull-right btn  btn-danger  " onclick="image_upload.remove($(this))" > </span>  '), n = $('<div class="upload_img_single thumbnail" />').append(t);
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
        }
    }, remove: function (e) {
        confirm("Do you want to remove this file ") && e.closest("li").remove()
    },
    default_image: function () {
        var e = $("<button/>").addClass("btn btn-success btn-block").prop("disabled", !0).text("Processing...").on("click", function (e) {
            var a = $(this), i = a.data();
            a.off("click").text("Abort").on("click", function () {
                a.remove(), i.abort()
            }), i.submit().always(function () {
                a.remove()
            }), e.preventDefault()
        }), a = null;
        $(".image_upload").click(function () {
            a = $(this)
        }).fileupload({
            url: URL.base +CONTROLLER + "/do_upload/",
            dataType: "json",
            autoUpload: !1,
            acceptFileTypes: /(\.|\/)(gif|jpe?g|png)$/i,
            maxFileSize: 5e6,
            disableImageResize: /Android(?!.*Chrome)|Opera/.test(window.navigator.userAgent),
            previewMaxWidth: 220,
            previewMaxHeight: 220,
            previewCrop: !0
        }).on("fileuploadsubmit", function (e, a) {
            var i = $(".image_upload");
            return a.formData = {files: i.data(a)}, a.formData.files ? void 0 : (i.focus(), !1)
        }).on("fileuploadadd", function (i, o) {
            $(a.data("for")).html(" "), o.context = $("<li/>").appendTo(a.data("for")), $("#upload_progress").length || $("body").append('<div id="upload_progress"><i class="fa fa-spinner fa-spin"></i></div>'), $.each(o.files, function (a, i) {
                var t = $('<div class="upload_img_actions">').wrapInner('<span class=" fa fa-times pull-right btn  btn-danger  " onclick="image_upload.remove($(this))" > </span> '), n = $('<div class="upload_img_single thumbnail" />').append(t);
                a || t.append(e.clone(!0).data(o)), n.appendTo(o.context)
            })
        }).on("fileuploadprocessalways", function (e, a) {
            var i = a.index, o = a.files[i], t = $(a.context.children()[i]);
            o.preview && t.prepend(o.preview), o.error && t.find(".upload_img_actions").append($('<div class="alert alert-danger"/>').text(o.error)), i + 1 === a.files.length && a.context.find("button").text("Upload").prop("disabled", !!a.files.error)
        }).on("fileuploadprogressall", function (e, a) {
            $("#upload_progress").addClass("show_progress");
            var i = parseInt(a.loaded / a.total * 100, 10);$("#upload_progress div").width(i+"%").html(i+"%");
            100 == i && setTimeout("$('#upload_progress').removeClass('show_progress')", 500)
        }).on("fileuploaddone", function (e, i) {
            $.each(i.result.files, function (e, o) {
                o.url ? $(i.context.children()[e]).find(".upload_img_actions").append('<div class="alert alert-success">Upload success <br/><input type="hidden" name="form[' + a.data("name") + ']" value="' + o.name + '" > </div>') : o.error && $(i.context.children()[e]).find(".upload_img_actions").append($('<div class="alert alert-danger"/>').text(o.error))
            })
        }).on("fileuploadfail", function (e, a) {
            $("#upload_progress").addClass("show_progress"), $.each(a.files, function (e, i) {
                $(a.context.children()[e]).find(".upload_img_actions").append($('<div class="alert alert-danger"/>').text("File upload failed."))
            }), setTimeout("$('#upload_progress').removeClass('show_progress')", 500)
        }).prop("disabled", !$.support.fileInput).parent().addClass($.support.fileInput ? void 0 : "disabled")
    }
}

$(function () {
    image_upload.init();
    image_upload.default_image();
})