<article>
<div class="review__wrapper">
    <h3>Оставить отзыв: </h3>
    <div id="reviewForm">
        <span class="msg hidden"></span> 
        <p><span class="float_rev">email*</span>
            <span class="float_rev float_input">
                <input type="text" id="rev_email" class="textbox">
                <span class="rev_err rev_email hidden"></span>
            </span>
            
        </p>
        <p>
            <span class="float_rev">Ваш отзыв
            <span>максимум 255 символов</span>
            </span> 
  
            <span class="float_rev float_input">
                <textarea id="rev_text"></textarea>
                <span class="rev_err rev_text hidden"></span>
            </span>
        </p>
        <button type="button" class="blue__btn js__add_review">отправить</button>
    </div>
</div>
    </article>
<script>
    jQuery(document).ready(function(){
        getReviewToMain();
    })
</script>