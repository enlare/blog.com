function getVideoToAdmin()
{
    jQuery.ajax({
        url: baseurl+'ajax/getvideo/0', 
        type: "POST",
        data : {
            to_main : 'no'
        },
        success: function (html) { 
            if (html != '')
            {
                jQuery('.vid_wrap').html(html);
                busy = false;
                n = n+1;
            }
            else
            {
                jQuery('.vid_wrap').html('');
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
                        to_main : 'no'
                    },
                    success: function (html) { 
                        if (html != '')
                        {
                            jQuery('.vid_wrap').append(html);
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


function getReview()
{
    jQuery.ajax({
        url: baseurl+'ajax/getreview/0', 
        type: "POST",
        dataType: 'html',
        success: function (html) { 
            if (html != '')
            {
                jQuery('article').html(html);
                busy = false;
                n = n+1;
            }
            else
            {
                //                jQuery('article').html('');
                endLoading = 1;
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
                    url: baseurl+'ajax/getreview/'+off, 
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


//создание новой записи
jQuery(document).ready(function(){
    
    /////датапикер
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
    };
    $.datepicker.setDefaults($.datepicker.regional['ru']);
    jQuery( "#datapickerNewPost" ).datepicker({
        });
    $( '#editor' ).ckeditor();

    /*новый пост*/
    jQuery('#js__create_post').on('click', function(){
        jQuery.ajax({
            url: baseurl+'admin/post/new', 
            type: "POST",
            data: {
                'content': jQuery( '#editor' ).val(),
                'title': jQuery('#titleNew').val(),
                'categoryId' :jQuery('#categoryId').val(),
                'date' : jQuery('#datapickerNewPost').val(),
                'url' : jQuery('#url').val(),
                'description':jQuery('.textarea_description').val(),
                'tags':jQuery('.input_tags').val()
            } 
            ,
            success: function (msg) { 
                if (msg.error != '')
                {
                     
                //СДЕЛАТЬ НОРМАЛЬНЫЙ ВЫВОД ОШИБОК!!!!
                }
                else
                {
                    window.location = baseurl+'admin/post/';
                }
             } ,
            dataType: 'json'
        });
       
    
    });
    
    
    
    /*превью записи*/
    jQuery('.clickPost').on('click',function(){
        var id = jQuery(this).data('idPost');
        if (jQuery(this).parent('.titlePost').hasClass('is-active__titlePost'))
        {
           
            jQuery('#post'+id).removeClass('is-activePost').addClass('hidden');
            jQuery(this).parent('.titlePost').removeClass('is-active__titlePost');
        }
        else
        {
            jQuery('#post'+id).removeClass('hidden').addClass('is-activePost');
            jQuery(this).parent('.titlePost').addClass('is-active__titlePost');
        }
        
        
    });
    
    /*удалить запись*/
    jQuery('article').on('click','.del_post', function(){
        var idPost = jQuery(this).data('post');
       
        jQuery('#delConf').removeClass('hidden');
        jQuery("#delConf").dialog({
            modal: true,
            buttons: {
                "Удалить": function() {
                    jQuery( this ).dialog( "close" );
                    
                    jQuery.ajax({
                        type: "POST",
                        url: baseurl+"admin/post/delete/",
                        data: {
                            idPost: idPost
                        },
                        dataType: "JSON",
                        success: function(data){
                            if (data.err !='')
                            {
                                jQuery('#post'+idPost).closest('.post-cell').remove();
                                jQuery('article .msg').html('Сообщение было успешно удалено');    
                            }
                        }
                    })

                },
                "Отмена": function() {
                    jQuery( this ).dialog( "close" );
                }
            }
        }) 
    })
    

    
    
    
    /*редактируем пост*/
        
    jQuery('article').on('click','.edit', function(){
        var idPost = jQuery(this).data('editpost');
        jQuery.ajax({
            type: "POST",
            url: baseurl+"admin/post/edit/"+idPost,
            data: {
                idPost: idPost
            },
            dataType: "JSON",
            success: function(data){
                var str='';
                for (i in data)
                {
                    jQuery('#edit'+idPost).removeClass('hidden').addClass('is-activePost');
                    jQuery('#edit'+idPost+' #titleNew').val(data[i].title);
                    jQuery( '#editorEdit'+idPost ).ckeditor();
                    jQuery( '#editorEdit'+idPost ).val( data[i].content);
                    jQuery('#datapickerEditPost'+idPost).datepicker();
                    jQuery('#datapickerEditPost'+idPost).val(data[i].date);
                    jQuery('#editDescription'+idPost).val(data[i].description);
                    jQuery('#editDescription'+idPost).parents('div').find('#description_counter').text(data[i].description.length);
                    jQuery('#input_tags'+idPost).fcbkcomplete({
                        json_url: baseurl+'ajax/gettags', 
                        newel: true, 
                        filter_case: false, 
                        width: "1000"
                    });
                    for(var k in data[i].tags)
                    {
                        jQuery('#input_tags'+idPost).trigger("addItem",[{
                            "title": data[i].tags[k].title, 
                            "value": data[i].tags[k].value
                        }]);
                    }
                    str +='<select name="categoryId">';
                    for (var n in data[i].all_categories)
                    {
                        if (data[i].all_categories.hasOwnProperty()){
                            continue
                        }
                        str+='<option value="'+data[i].all_categories[n].id_category;
                        str+='" ';
                        if (data[i].id_category == data[i].all_categories[n].id_category)
                        {
                            str+='selected ';
                        }
                        str+='>';
                        str+=data[i].all_categories[n].title;
                        str+='</option>';
                    }
                    str+=' </select>';
                    jQuery('#edit'+idPost).find('.select').html(str);
                    
                }
            }
          
        })
    })
    
    
    
    
    /*сохраняем пост*/
    
    jQuery('article').on('click','.js__save_post', function(){
        var idPost = jQuery(this).data('savepost');
        
        jQuery.ajax({
            type: "POST",
            url: baseurl+"admin/post/save/"+idPost,
            data: {
                'content':jQuery('#editorEdit'+idPost).val(),
                'title': jQuery('#edit'+idPost).find('#titleNew').val(),
                'categoryId' :jQuery('#edit'+idPost).find('.select').find('select').val(),
                'date' : jQuery('#datapickerEditPost'+idPost).val(),
                'description':jQuery('#editDescription'+idPost).val(),
                'tags':jQuery('#input_tags'+idPost).val()
            }, 
            dataType: "JSON",
            success: function(data){
                if (data.msg == "ok")
                {
                    jQuery('#edit'+idPost).removeClass('isactivePost').addClass('hidden');
                }
            }
        })
    })
    
    
    /*редактируем категорию*/
    
    jQuery('article').on('click','.edit_cat', function(){
        var id_category = jQuery(this).data('editcat');
        jQuery.ajax({
            type: "POST",
            url: baseurl+"admin/category/edit/"+id_category,
            data: {
                idPost: id_category
            },
            dataType: "JSON",
            success: function(data){

                for (i in data)
                {

                    jQuery('#text_cat'+id_category).addClass('hidden');
                    jQuery('#edit_cat'+id_category).removeClass('hidden');
                    //                    jQuery( '#edit_cat'+id_category ).find('.textbox').val( data[i].title);
                    if (data[i].is_comment == 'yes')
                    {
                        jQuery( '#edit_cat'+id_category ).find('.checkbox').attr('checked',true);
                    }
                    else
                    {
                        jQuery( '#edit_cat'+id_category ).find('.checkbox').attr('checked',false);
                    }
                }
            }
          
        })
    });
    
    
    /*сохраняем категорию*/
    
    jQuery('.cat-cell').on('click','.save_cat', function(){
        var id_category = jQuery(this).data('saveCat');
        jQuery.ajax({
            type: "POST",
            url: baseurl+"admin/category/save/"+id_category,
            data: {
                idCategory: id_category,
                //                title: jQuery( '#edit_cat'+id_category ).find('.textbox').val(),
                is_comment : jQuery( '#edit_cat'+id_category ).find('.checkbox').is(':checked')
            },
            dataType: "JSON",
            success: function(data){
                jQuery('#text_cat'+id_category).removeClass('hidden');
                //                jQuery('#text_cat'+id_category).find('.clickPost').html(data.title);
                jQuery('#edit_cat'+id_category).addClass('hidden');
          
                if (data.is_comment == 'yes')
                {
                       
                    jQuery('#text_cat'+id_category).find('.isComment').removeClass('hidden');                            
                    jQuery( '#edit_cat'+id_category ).find('.checkbox').attr('checked',true);
                }
                else
                {
                    jQuery('#text_cat'+id_category).find('.isComment').addClass('hidden');
                    jQuery( '#edit_cat'+id_category ).find('.checkbox').attr('checked',false);
                }  
            }
       
       
        })   
    })
    
    
    
    //*создане категории*//

    jQuery('.add__cat').on('click', function(){
        jQuery('.create___cat').removeClass('hidden');
        jQuery('.add__cat').addClass('hidden');
    })
    
    jQuery('.add__new_cat').on('click', function(){
        jQuery.ajax({
            type: "POST",
            url: baseurl+"admin/category/new/",
            data: {
                
                title: jQuery('#cat_title').val(),
                catTitle : jQuery('#cat_url').val(),
                is_comment : jQuery( 'create___cat').find('.checkbox').is(':checked')
            },
            dataType: "JSON",
            success: function(data){
                if (data.error == ''){
                    var str = '';
                    str+= '<li data-cat-cell ="'+data.cat.id_category+'" class="cat-cell titlePost">';
                    str+='<div class="textCat_wrap" id="text_cat'+data.cat.id_category+'">';
                    str+= '<span class="clickPost">';
                    str+=   data.cat.title;
                    str+= '</span>';
                    str+='<span class="isComment';
                    if (data.cat.is_comment != "yes")
                    {
                        str += 'hidden';
                    }
                    str += '">Раздел разрешен для комментирования</span>';       
                    str+='<a href="javascript:void(0)" class="edit-btns del_cat" data-cat ="'+data.cat.id_category+'"></a>';       
                    str+='<a href="javascript:void(0)" class="edit-btns edit_cat" data-editcat ="'+data.cat.id_category+'"></a>';
                    str+='</div>';
                    str+='<div class="inputCat_wrap hidden" id="edit_cat'+data.cat.id_category+'">';
                    str+='<input type="text" value="" class="textbox">';
                    str+='<label for="check'+data.cat.id_category+'"> ';
                    str+='<input type="checkbox" class="checkbox">';
                    str+='Разрешить комментарии для данного раздела';
                    str+='</label>';
                    str+='<a href="javascript:void(0)" class="edit-btns save_cat" data-save-cat ="'+data.cat.id_category+'"></a>';
                    str+='</div>';
                    str+='</li>';
                    if (jQuery('#category_ul').size() != 0)
                    {
                        jQuery('#category_ul').append(str);
                        jQuery('.create___cat').addClass('hidden');
                        jQuery('.add__cat').removeClass('hidden');
                        
                    //                        СДЕЛАТЬ СКРОЛЛ!!!
                    //                        scrollTo('#text_cat'+data.cat.id_category);
                    }
                    else
                    {
                        var str_all = '';
                        str_all += '<ul id="category_ul">';
                        str_all +=str;
                        str_all +='</ul>';
                        jQuery('article').append(str_all);
                        
                    }
                
                
                }
            }
        })
    
    
    
    })
    
    
    
    /*удаление категории*/
    jQuery('.cat-cell').on('click','.del_cat', function(){
        var idCategory = jQuery(this).data('cat');
       
        jQuery('#delCat').removeClass('hidden');
        jQuery("#delCat").dialog({
            modal: true,
            buttons: {
                "Удалить": function() {
                    jQuery( this ).dialog( "close" );
                    
                    jQuery.ajax({
                        type: "POST",
                        url: baseurl+"admin/category/delete/",
                        data: {
                            idCategory: idCategory
                        },
                        dataType: "JSON",
                        success: function(data){
                            if (data.err !='')
                            {
                                jQuery('#text_cat'+idCategory).parent('li').remove();
                                jQuery('article .msg').html('Раздел удален');    
                            }
                        }
                    })

                },
                "Отмена": function() {
                    jQuery( this ).dialog( "close" );
                }
            }
        });       
    })
    
    /*новый пункт главного меню*/
    jQuery('.js__create_menu').on('click', function(){
        var href_var = '';
        if (jQuery('#choose_cat_menu').prop('checked'))
        {
            href_var = 'category';
        } 
        else
        {
            href_var = 'post';
        }
        jQuery.ajax({
            url: baseurl+'admin/menu/newmenu', 
            type: "POST",
            data: {
                'menu_title': jQuery('#newMenu').val(),
                'href_var': href_var,
                'categoryId': jQuery('.cat_for_menu').val(),
                'postId': jQuery('.post_for_menu').val()
            } 
            ,
            success: function (msg) { 
                if (msg.error != '')
                {
                     
                //СДЕЛАТЬ НОРМАЛЬНЫЙ ВЫВОД ОШИБОК!!!!
                }
                else
                {
                    var str='';
                    str+= '<li class="ui-state-default">';
                    str+= msg.content.titleMenu;
                    str+='</li>';
                    jQuery('#sortable').prepend(str);
                }
             } ,
            dataType: 'json'
        });
    });
    
    
    
    
    /*новый пункт подменю*/
    jQuery('.js__create_submenu').on('click', function(){
        //        var href_var = '';
        //        if (jQuery('#choose_cat_submenu').prop('checked'))
        //        {
        //            href_var = 'category';
        //        } 
        //        else
        //        {
        //            href_var = 'post';
        //        }
        jQuery.ajax({
            url: baseurl+'admin/menu/newsubmenu', 
            type: "POST",
            data: {
                'menu_title': jQuery('#newsubMenu').val(),
                //                'href_var': href_var,
                //                'categoryId': jQuery('.cat_for_submenu').val(),
                'postId': jQuery('.post_for_submenu').val(),
                'parent': jQuery('.post_for_parentmenu').val()
            } 
            ,
            success: function (msg) { 
                if (msg.error != '')
                {
                     
                //СДЕЛАТЬ НОРМАЛЬНЫЙ ВЫВОД ОШИБОК!!!!
                }
                else
                {
                    var str='';
                    if (jQuery('#sortable li').find('ul').size() ==0)
                    {
                        str+= ' <ul id="submenu">';
                        str+= '<li>';
                        str+='<span class="title_sub">'+ msg.content.titleMenu+'</span>';
                        str+='<span class="title_sub hidden"><input type="text" value="'+msg.content.titleMenu+'">';
                  
                        str+='</span>';
//                        str+='<a href="javascript:void(0)" class="edit-subs edit_sub" data-editsub ="'+msg.content.idMenu+'"></a>';
//                        str+='<a href="javascript:void(0)" class="edit-subss del_sub" data-delsub ="'+msg.content.idMenu+'">';
                        str+='<img src="'+baseurl+'images/del_sub.png"></a>';
                  
//                        str+='<a href="javascript:void(0)" class="edit-subs save_sub" data-savesub ="'+msg.content.idMenu+'">save</a>';
                        str+='</li>';
                        str+='</ul>';
                        jQuery('#sortable #'+msg.content.parent).append(str);
                    }
                    else
                    {
                        str+= '<li>';
                        str+= msg.content.titleMenu;
                        
//                        str+=' <a href="javascript:void(0)" class="edit-subs edit_sub" data-editsub ="'+msg.content.idMenu+'">'+
//                            '<img src="'+baseurl+'images/edit_sub.png"></a>';
                        str+='<a href="javascript:void(0)" class="edit-subs del_sub" data-delsub ="'+msg.content.idMenu+'">'+
                            '<img src="'+baseurl+'images/del_sub.png"></a>';
//                        str+='<a href="javascript:void(0)" class="edit-subs save_sub" data-savesub ="'+msg.content.idMenu+'">'+
//                            '<img src="'+baseurl+'images/save_sub.png"></a>';
                  
                        str+='</li>';
                        jQuery('#sortable #'+msg.content.parent+' ul').prepend(str);
                    }
                }
             } ,
            dataType: 'json'
        });
    });
    
    
    
    
    jQuery('.del_sub').on('click', function(){
        //        alert('222');
        //        console.log(jQuery(this).data('delsub'));
        var self = this;
        jQuery.ajax({
            type: "POST",
            url: baseurl+"admin/menu/delsub/",
            data: {
                idMenu: jQuery(this).data('delsub')
            },
            dataType: "json",
            success: function(data){
                if (data.err == undefined)
                {
                    jQuery(self).closest('li').remove();
                //                                jQuery('#text_cat'+idCategory).parent('li').remove();
                //                                jQuery('article .msg').html('Раздел удален');    
                }
            }
        })
    })

    jQuery('#js_add_video').click(function(){
        jQuery.ajax({
            type: "POST",
            url: baseurl+"admin/video/add",
            data: {
                code: jQuery('.additing_videos').find('textarea').val()
            },
            dataType: "json",
            success: function(data){
                if (data.res !='success')
                {
                    jQuery('.msg').html('Видео добавлено');
                    getVideoToAdmin();
                }
                else
                {
                    jQuery('.msg').html(data.res);
                }
            }
        });



    });
    
    
    jQuery('article').on('click','.del_vid',function(){
        var id = jQuery(this).data('delVid');
        jQuery.ajax({
            type: "POST",
            url: baseurl+"admin/video/del",
            data: {
                id: id
            },
            dataType: "json",
            success: function(data){
                if (data.res =='success')
                {
                    getVideoToAdmin();
                }
                else
                {
                    jQuery('.msg').html(data.res);
                }
            }
        });
    }); 
    
    /*ответ на отзыв*/
    
    jQuery('article').on('click','.writeRe',function(){
        jQuery(this).closest('.review_cell').find('.answ').removeClass('hidden');
        jQuery(this).addClass('hidden');
    });
    
    jQuery('article').on('click','.js__re_btn',function(){
        var id = jQuery(this).data('idReview');
        jQuery.ajax({
            type: "POST",
            url: baseurl+"admin/reviews/re",
            data: {
                id: id,
                text : jQuery(this).parent('.answ').find('textarea').val()
            },
            dataType: "json",
            success: function(data){
                if (data.res =='success')
                {
                    
                }
                else
                {
                    jQuery('.msg').html(data.res);
                }
            }
        });
    }); 
    
    
    /*удаление отзыва*/
    
    jQuery('article').on('click','.del_review',function(){
        var id = jQuery(this).data('delReview');
        jQuery.ajax({
            type: "POST",
            url: baseurl+"admin/reviews/delete",
            data: {
                id: id
            },
            dataType: "json",
            success: function(data){
                if (data.res =='success')
                {
                    getReview();
                }
                else
                {
                    jQuery('.msg').html(data.res);
                }
            }
        });
    });
    
    /*меняем статус*/
    
    
    jQuery('article').on('change', '.statReviewSelect', function(){
        var id = $(this).siblings(".del_review").data('delReview');
//        console.log(id);
        jQuery.ajax({
            type: "POST",
            url: baseurl+"admin/reviews/changestatus",
            data: {
                status: jQuery(this).val(),
                id:id
            },
            dataType: "json",
            success: function(data){
                if (data.res =='success')
                {
                    getReview();
                }
                else
                {
                    jQuery('.msg').html(data.res);
                }
            }
        });
    });
    
    
});
//Получение галереи в админке
function getGallery()
{
    jQuery.post(baseurl+'ajax/getgallery',{
        'from_admin':'1'
    },function(data){
        jQuery('.adming_gallery_wrapper_gallery').html('').append(data);
        jQuery('.adming_gallery_wrapper_gallery a').lightBox({
            imageLoading: baseurl+'js/lightbox/images/lightbox-ico-loading.gif',
            imageBtnClose: baseurl+'js/lightbox/images/lightbox-btn-close.gif',
            imageBtnPrev: baseurl+'js/lightbox/images/lightbox-btn-prev.gif',
            imageBtnNext: baseurl+'js/lightbox/images/lightbox-btn-next.gif'
        })
    }, 'html');
}
//Счетчик символов поля description
jQuery('.textarea_description').live('keyup', function(){
    jQuery(this).parent('div').find('#description_counter').text(jQuery(this).val().length);
});
    
    