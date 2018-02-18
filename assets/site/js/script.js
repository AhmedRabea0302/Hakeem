$(document).ready(function () {
    "use strict"
    var div_tel = $('.div-tel'),
        div_email = $('.div-email'),
        lbl_select = $('.lbl-select');
    lbl_select.on('change', function () {
        if ((this.value) == 1) {
            div_tel.addClass('hide');
            div_email.removeClass('hide');
            
            
        } else if ((this.value) == 2) {
            div_tel.removeClass('hide');
            div_email.addClass('hide');
        }
    });
        
});


    