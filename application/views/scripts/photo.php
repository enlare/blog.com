<article>
    <p class="field switch">

        <label for="radio1">
            <input type="radio" id="radio1" name="field"  class="js_radio_photo_video" checked="checked"/>
            Фото
        </label>


        <label for="radio2">
            <input type="radio" id="radio2" name="field" class="js_radio_photo_video" />
            Видео
        </label>
        <!--<label for="radio1" id="getPhoto" class="cb-enable selected"><span>Фото</span></label>-->
        <!--<label for="radio2" id="getVideo" class="cb-disable"><span>Видео</span></label>-->
    </p>

    <div class="adming_gallery_wrapper_gallery">   
    </div>
</article>
<script type="text/javascript" src="<?php echo Url::base(true, true) ?>js/lightbox/js/jquery.lightbox-0.5.min.js"></script>
<script type="text/javascript" src="<?php echo Url::base(true, true) ?>js/uploadify/jquery.uploadify.js"></script>
<link rel="stylesheet" type="text/css" href="<?php echo URL::base(true, true); ?>js/lightbox/css/jquery.lightbox-0.5.css" media="screen" />
<script type="text/javascript">

    //
    //var check = function(){
    //    if (jQuery('#getPhoto').hasClass('selected'))
    //    {
    //  
    //    }
    //    else
    //    {
    //        jQuery('.adming_gallery_wrapper_gallery').empty();
    //    }  
    //};


    jQuery(document).ready(function(){
        if (jQuery('#radio1').prop('checked'))
        {
            jQuery('.video_cell_wrap').remove();
            getGallery();
        }
        if (jQuery('#radio2').prop('checked'))
        {
            getVideo();
        }
        jQuery('.js_radio_photo_video').on('change',function(){
            if (jQuery('#radio1').prop('checked'))
            {
                jQuery('.video_cell_wrap').remove();
                getGallery();
            }
            if (jQuery('#radio2').prop('checked'))
            {
                getVideo();
            }
        });
    });
    function getVideo()
    {
        jQuery('.adming_gallery_wrapper_gallery').empty();
        jQuery.ajax({
            url: baseurl+'ajax/getvideo/0', 
            type: "POST",
            data : {
                to_main : 'yes'
            },
            success: function (html) { 
                if (html != '')
                {
                    jQuery('article').append(html);
                    busy = false;
                    n = n+1;
                }
                else
                {
                    endLoading = 1;
                }   
             } ,
            dataType: 'html'
        });
        var n = 1;
        var endLoading = 0;
        var busy=false;
        $(window).scroll(function(){
            if (endLoading == 1) return;
            
            if ($(document).height() - $(window).height() <= $(window).scrollTop() + 50) 
            {
                if (endLoading == 1) return;
                if (busy == true)
                {
                    return;
                }
                else
                {
                    busy = true;
                    off = n*5;
                    jQuery.ajax({
                        url: baseurl+'ajax/getvideo/'+off, 
                        type: "POST",
                        data : {
                            to_main : 'yes'
                        },
                        success: function (html) { 
                            if (html != '')
                            {
                                jQuery('article').append(html);
                                busy = false;
                                n = n+1;
                            }
                            else
                            {
                                endLoading = 1;
                            }   
                         } ,
                        dataType: 'html'
                    });
                }
            }
               
        })
  
    }
</script>
