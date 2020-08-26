(function ($) {
    'use strict';

    $(document).ready(function () {
        //MB
        $('.date_mb').on('change',function(){
            $(this).siblings('span').text('[live_mb id="mb" date="'+$(this).val()+'"]');
        });

        //MT
        $('#slt_mt').on('change',function(){
            $(this).siblings('span').text('[live_mt id="mt_'+$(this).val()+'" date="'+$('.date_mt').val()+'"]');
        });

        $('.date_mt').on('change',function(){
            $(this).siblings('span').text('[live_mt id="mt_'+$('#slt_mt').val()+'" date="'+$('.date_mt').val()+'"]');
        });

        //MT
        $('#slt_mn').on('change',function(){
            $(this).siblings('span').text('[live_mn id="mn_'+$(this).val()+'" date="'+$('.date_mn').val()+'"]');
        });

        $('.date_mn').on('change',function(){
            $(this).siblings('span').text('[live_mn id="mn_'+$('#slt_mn').val()+'" date="'+$('.date_mn').val()+'"]');
        });

        $('#slt_custom_sub').on('change',function(){
            let id = $('option:selected', this).attr('data-id');
            let title = $('option:selected', this).attr('data-title');

            $('.id_custom').val(id);
            $('.title_custom').val(title);
        });
    });

}(jQuery));
