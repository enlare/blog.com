<div class="wrapper_admin_photo_main">

    <div class="adming_gallery_wrapper_btn_upload" style="position: relative;">
        <input id="file_upload1" name="file_upload1" type="file" multiple="true">
    </div>
    <input id="crop_image" type="button"  class="lnk-btn" value="Обрезать  и поместить на главную">
    <div class="photo_wrapper"></div>
</div>
<script type="text/javascript" src="<?php echo Url::base(true,true)?>js/uploadify/jquery.uploadify.js"></script>
<script type="text/javascript" src="<?php echo Url::base(true,true)?>js/jcrop/js/jquery.Jcrop.min.js"></script>
<script type="text/javascript">
    var jcrop_api;
    var params = {};
    function getCoords(c)
    {
        params['x'] = (c.x);
        params['y'] = (c.y);
        params['width'] = (c.w);
        params['height'] = (c.h);
      
    }
    function getImage()
    {
        jQuery('.photo_wrapper').empty().append(jQuery('<img>').css('width','1000px').attr({'src':baseurl+'images/header/tmp.jpg','id':'cropbox'}));
        jcrop_api = jQuery('#cropbox').Jcrop({onChange: getCoords, onSelect: getCoords, aspectRatio:20/7});
        jQuery('#crop_image').show();

    }
    jQuery(document).ready(function(){
        jQuery('#file_upload1').uploadify({
                'swf'      : baseurl+'js/uploadify/uploadify.swf',
                'uploader' : baseurl+'ajax/uploadheaderimage',
                'buttonText':'Выберите изображение',
                'multi': false,
                'height':30,
                'width':250,
                'preventCaching' : false,
                'fileSizeLimit' :'0',
                'onQueueComplete' : function(file, data, response) {getImage()}
                // Your options here
            });
        jQuery('#crop_image').click(function(){
            jQuery.post(baseurl+'image/cropheader',{'params':params}, function(data){
                if(data != undefined && data.success != undefined)
                {
                    alert('Вы можете оценить результат на главной странице сайта');
                }
            },"json");
        });

    });
</script>