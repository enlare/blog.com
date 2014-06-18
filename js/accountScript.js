function getReviewToMain()
{
    
    jQuery.ajax({
        url: baseurl+'ajax/getreviewtomain/0', 
        type: "POST",
        dataType: 'html',
        success: function (html) { 
            if (html != '')
            {
                jQuery('article').append(html);
                busy = false;
                n = n+1;
            }  
         } 
        
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
                off = n*15;
                jQuery.ajax({
                    url: baseurl+'ajax/getreviewtomain/'+off, 
                    type: "POST",
                    dataType: 'html',
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
                     } 
                });
            }
        }
               
    })
}


$(document).ready(function()
    {
        jQuery.ajax({
            url: baseurl+'events/getevent', 
            type: "POST",
            dataType: 'json',
            success: function (data) { 
                $.datepicker.regional['ru'] = {
                    clearText: 'Очистить', 
                    clearStatus: '',
                    closeText: 'Закрыть', 
                    closeStatus: '',
                    prevText: '<Пред',  
                    prevStatus: '',
                    nextText: 'След>', 
                    nextStatus: '',
                    currentText: 'Сегодня', 
                    currentStatus: '',
                    monthNames: ['Январь','Февраль','Март','Апрель','Май','Июнь',
                    'Июль','Август','Сентябрь','Октябрь','Ноябрь','Декабрь'],
                    monthNamesShort: ['Янв','Фев','Мар','Апр','Май','Июн',
                    'Июл','Авг','Сен','Окт','Ноя','Дек'],
                    dayNames: ['воскресенье','понедельник','вторник','среда','четверг','пятница','суббота'],
                    dayNamesShort: ['вск','пнд','втр','срд','чтв','птн','сбт'],
                    dayNamesMin: ['Вс','Пн','Вт','Ср','Чт','Пт','Сб'],
                    dateFormat: 'dd/mm/yy'
                };
                $.datepicker.setDefaults($.datepicker.regional['ru']);
                $("#datepicker").datepicker(
                {
//                    beforeShow:function(inpu)
                    beforeShowDay: function(dates) {
                        if (data.event !='')
                        {
                            var dat = $.datepicker.formatDate("dd/mm/yy", dates);
                            for (var n in data.event)
                            {  
                                if (data.event[n].date == dat)
                                {
                                    return [true, 'ui-state-active', data.event[n].title];                          
                                }
                            }
                            return [true, ""];
                        }
                    }
                    ,
                    onSelect: function(dateText, inst)
                    {
                        window.location = baseurl+'events/' + dateText;
                    }
                })
            }              
        })      
        /*добавляем комеентарии*/         
        jQuery('.js_add_comment').on('click', function(){
            jQuery.ajax({
                url: baseurl+'newcomment/', 
                type: "POST",
                data: {
                    'commentator': jQuery(this).closest('table').find('.commentator').val(),
                    'comment': jQuery(this).closest('table').find('.comment').val(),
                    'email': jQuery(this).closest('table').find('.email').val(),
                    'postId' :jQuery(this).closest('table').data('toPost'),
                    'captcha_com' : jQuery(this).closest('table').find('.captcha_comment').val(),
                    'url' : jQuery('#url').val()
                },
                dataType : "json" 
                ,
                success: function (msg) {
                    if (msg.error == '')
                    {
                        var str = '';
                        str+='<li class="comment_wrap ';
                        if (counter_for_com % 2 == 0)
                        {
                            str += 'gray';
                        }
                        str+='" id="parent"'+msg.res.parent_id+'>';
                        str+='<img class="floating">';
                        str+='<div class="floating">';
                        str+='<p><span class="commentator">';
                        str+=msg.res.commentator;
                        str+='</span>';
                        str+=' &nbsp; написал &nbsp;';
                  
                        str+='<span class="dateComment">';
                        str+=msg.res.datetime+'</span>';
                        str+='</p>';
                        str+='<p>'+msg.res.comment+'</p>';
                        str+='</div>';
                        str+='</li>';
                        if (jQuery('.commentsBlock').find('ul').size() !=0 )
                        {
                            jQuery('.comment_cell').find('ul').prepend(str);
                            jQuery("img.captcha").attr("src","/captcha/default?id="+Math.floor(Math.random()*1000000));

                        }
                        else
                        {
                            jQuery('.comment_cell').append('<ul>'+str+'</ul>');
                            jQuery("img.captcha").attr("src","/captcha/default?id="+Math.floor(Math.random()*1000000));
                        }  
                    }
                }
            })    
        })
        
        /*поиск*/
        jQuery('#searchInpt').on('keypress',function(e){
   
            if(e.which == 13) {
                window.location =baseurl+'search/?f='+jQuery('#searchInpt').val();
                
            }

        })
        
        
        jQuery('.js__add_review').on('click', function(){
            jQuery(this).attr('disabled',true);
            jQuery.ajax({
                url: baseurl+'reviews/addreview/', 
                type: "POST",
                data: {
                    'rev_text': jQuery('#rev_text').val(),
                    'rev_email': jQuery('#rev_email').val()
                },
                dataType : "json",
                success: function (msg) {
                    jQuery(this).attr('disabled',false);
                    if (msg.err == '')
                    {
                        jQuery('#reviewForm .msg').html(msg.msg);
                        jQuery('#reviewForm .msg').removeClass('hidden');
                    }
                    else
                    {
                        if (msg.err.hasOwnProperty('rev_email')) 
                        {
                            jQuery('.rev_email').html(msg.err.rev_email);
                            jQuery('.rev_email').removeClass('hidden');
                        }
                        if (msg.err.hasOwnProperty('rev_text')) 
                        {
                            jQuery('.rev_text').html(msg.err.rev_text);
                            jQuery('.rev_text').removeClass('hidden');
                        }
                    
                    }
                }
            })
        })
        
    })
    
function getGallery()
{
    jQuery.post(baseurl+'ajax/getgallery',{},function(data){
        jQuery('.adming_gallery_wrapper_gallery').html('').append(data);
        jQuery('.adming_gallery_wrapper_gallery a').lightBox({
            imageLoading: baseurl+'js/lightbox/images/lightbox-ico-loading.gif',
            imageBtnClose: baseurl+'js/lightbox/images/lightbox-btn-close.gif',
            imageBtnPrev: baseurl+'js/lightbox/images/lightbox-btn-prev.gif',
            imageBtnNext: baseurl+'js/lightbox/images/lightbox-btn-next.gif'
        })
    }, 'html');
}



function getVideo()
{
   var n = 0;
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
                    off = n*15;
                    jQuery.ajax({
                        url: baseurl+'ajax/getvideo/'+off, 
                        type: "POST",
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