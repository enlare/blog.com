<div class="adming_gallery_wrapper_btn_upload">
    <input id="file_upload1" name="file_upload1" type="file" multiple="true">
</div>
<div class="adming_gallery_wrapper_gallery"></div>
<script type="text/javascript" src="<?php echo Url::base(true,true)?>js/lightbox/js/jquery.lightbox-0.5.min.js"></script>
<script type="text/javascript" src="<?php echo Url::base(true,true)?>js/uploadify/jquery.uploadify.js"></script>
<script type="text/javascript">

    jQuery(document).ready(function(){
        getGallery();
        jQuery('.item_gallery_close_btn').live('click', function(){
            if(confirm('Удалить изображение?'))
            {
                var filename = jQuery(this).parents('div').find('img').attr('alt');
                if(filename != undefined)
                {
                    jQuery.post(baseurl+'ajax/removephoto',
                            {'filename':filename, 'from_admin':'1'},
                            function(data){
                                if(data != undefined)
                                {
                                    if(data.success != undefined)
                                    {
                                        getGallery();
                                    }
                                }
                            },
                            "json");
                }
            }
        });
        

        jQuery('#file_upload1').uploadify({
            'swf'      : baseurl+'js/uploadify/uploadify.swf',
            'uploader' : baseurl+'ajax/uploadimage',
            'buttonClass' : 'jopa',
            'buttonText':'Выберите изображения',
            'height':30,
            'width':250,
            'preventCaching' : false,
            'fileSizeLimit' :'0',
            'onQueueComplete' : function(file, data, response) {getGallery()}
            // Your options here
        });
    });

</script>




