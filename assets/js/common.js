var App = {
    event : null ,
    init : function () {
        this.event = (navigator.userAgent.match(/iP/i)) ? "touchstart" : "click";
        this.logout();
        this.deleteAlert();
        this.removeBtn();
        this.addRow();
        this.removeRow();
    },

    logout : function () {

        $('.logout').on(this.event,function () {
            $.ajax({
                url : BaseUrl+"home/logout" ,
                success : function (json) {
                    location.href = BaseUrl;
                },
                error: function () {
                    alert("Invalid Request");
                }
            });
        })
    },
    removeBtn : function () {
        $("body").on("click",".btn-remove",function (e) {
            e.preventDefault();
            $(this).closest($(this).data('remove')).remove();
        })
    },
    deleteAlert : function () {
        $(".delete-btn").click(function (e) {
            e.preventDefault();
            var self = $(this);
            console.log(self.data('title'));
            swal({
                title: self.data('title') || "Are you sure?",
                text: self.data('text') || "Do Your Want To Delete This Records ???",
                type: self.data('type') || "warning",
                showCancelButton: true,
                cancelButtonClass: 'btn-secondary waves-effect',
                confirmButtonClass:self.data('confirmButtonClass')|| 'btn-warning',
                confirmButtonText: self.data('confirmButtonText') || "Yes, delete it!",
                closeOnConfirm: false
            }, function () {
                location.href = self.attr('href');
            });
        });
    },
    SerialNoChecker : function () {
        $("body").off('blur', '.serial_no_checker').on("blur",".serial_no_checker",function (e) {
            console.log("Serial No Checker");
            e.preventDefault();
            var $this = $(this);
            $.ajax({
                url : Api + "item/serial_no",
                data : {SerialNo : $this.val() },
                success : function (json) {
                    if(json.hasError){
                        console.log("Serial No validation error");
                        $this.addClass('form-control-danger').val("").closest('td').addClass('has-danger');
                    }else{
                        $this.removeClass('form-control-danger').closest('td').removeClass('has-danger');
                    }
                }
            });
        })
    } , 
    addRow : function () {
        $('.add_row').click(function () {
            var bind =$(this).data('bind') , masterId =  $(this).data('masterId') , html = $(this).data('html') , number = $(this).data('number');
            if(typeof bind !== undefined && typeof masterId !== undefined && $(masterId).length   &&
                typeof html !== undefined  && $(masterId).find(html).length  ){
                $(bind).append($(masterId).find(html).clone());
                if(typeof number !== undefined) {
                    $(bind).find(html).eq($(bind).find(html).length-1).find(number).first().html($(bind).find(html).length  - 1);

                }
            }
        });
    },
    removeRow : function () {
        $('body').on('click','.remove_row',function () {
            if(typeof $(this).data('for') !== undefined){
                $(this).closest($(this).data('for')).remove();            }
            var bind = $(this).data('bind') , html = $(this).data('html'), number = $(this).data('number') ;
            if(typeof number !== undefined && typeof bind !== undefined && typeof html !== undefined){
                for(var i=1 ; i < $(bind).find(html).length ; i++ ){
                    $(bind).find(html).eq(i).find(number).first().html(i);
                }
            }
        }) ;
    }

};

$(function () {
    App.init();
})

var AjaxLoader = AjaxLoader || (function ($) {
        'use strict';
        var $dialog = $(
            '<div class="modal fade" data-backdrop="static" id="AjaxLoader" data-keyboard="false" tabindex="-1" role="dialog" aria-hidden="true" style="padding-top:15%; overflow-y:visible;">' +
            '<div class="modal-dialog modal-sm">' +
            '<div class="modal-content loader-center">' +
            '<div class="modal-body">' +
            '<i class="fa fa-spinner fa-spin fa-5x" ><i>' +
            '</div>' +
            '</div></div></div>');
        return {
            show: function () {
				if($('body').find('#AjaxLoader').length){
					$('body').find('#AjaxLoader').modal('show');
				}else
					$dialog.modal();
				
            },
            hide: function () {
                $dialog.modal('hide');
				//$('body').find('#AjaxLoader,.modal-backdrop').remove();
            }
        };

    })(jQuery);

var ajaxModel = ajaxModel || (function ($) {
        'use strict';

        // Creating modal dialog's DOM
        var $dialog = $(
            '<div class="modal fade" id="ajaxModel" data-backdrop="static" data-keyboard="false" tabindex="-1" role="dialog" aria-hidden="true" style="padding-top:15%; overflow-y:visible;">' +
            '<div class="modal-dialog modal-m">' +
            '<div class="modal-content">' +
            '<div class="modal-header"><h3 style="margin:0;"></h3></div>' +
            '<div class="modal-body">' + 
            '</div>' +
            '</div></div></div>')  ;
			
			

        return {
            /**
             * Opens our dialog
             * @param message Custom message
             * @param options Custom options:
             * 				  options.dialogSize - bootstrap postfix for dialog size, e.g. "sm", "m";
             * 				  options.progressType - bootstrap postfix for progress bar type, e.g. "success", "warning".
             */
            show: function (title , message , options) { 
                // Assigning defaults
                if (typeof options === 'undefined') {
                    options = {};
                }
                if (typeof title === 'undefined') {
                    title = '';
                }
                if (typeof message === 'undefined') {
                    message = '';
                }
                var settings = $.extend({
                    dialogSize: 'm', 
                    onHide: null // This callback runs after the dialog was hidden
                }, options);
				
                // Configuring dialog
                $dialog.find('.modal-dialog').attr('class', 'modal-dialog').addClass('modal-' + settings.dialogSize); 
                $dialog.find('h3').text(title);
                $dialog.find('.modal-body').html(message);
                // Adding callbacks
                if (typeof settings.onHide === 'function') {
                    $dialog.off('hidden.bs.modal').on('hidden.bs.modal', function (e) {
                        settings.onHide.call($dialog);
                    });
                }
                // Opening dialog
                $dialog.modal();
            },
            /**
             * Closes dialog
             */
            hide: function () {
                $dialog.modal('hide'); 
                $('body').find('#ajaxModel,.modal-backdrop').remove();
            } 
		}; 

    })(jQuery);
	
	$(function(){
		$('body').on('click','.close_model',function (e) {
			e.preventDefault();
			ajaxModel.hide();
        })
	})

