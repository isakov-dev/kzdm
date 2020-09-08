$(document).ready(function(){
    if ($('.select').length) {
        $('.select').select2({
            width: '100%'
        });
    }
    
   
    $('.wrapper-burger').on('click', function (){
        $('.configurator-filter').toggleClass('configurator-filter-active');
    });
    refreshComplekt();
})
$(document).on('click','.complektTrigger', function(e) {
    e.preventDefault;    
    if (!$(this).hasClass('not-suitable')&&!$(this).hasClass('except_block')){
      
        $(this).toggleClass('choise');
        refreshComplekt();
    }
});
$(document).on("click",".removeFromComplekt",function(e){
    e.preventDefault();
    var id=$(this).data("id");
    $('.complektTrigger[data-id="'+id+'"]').trigger("click");
})
/**
 * на js вставляем блок
 */
function refreshComplekt()
{
    $('#complekt_total').html(['']);
    var tCount=0;
    $('.complektTrigger').removeClass("except_block");
    var countSections=[];
    $('.complektTrigger.choise').each(function(){
        var id=$(this).data("id");
        var thisExcept=exceptEls[id];
        if (thisExcept) {
            $(thisExcept).each(function(key,data){               
                $('.complektTrigger[data-id="'+data+'"]').addClass("except_block").removeClass("choise");   
              
                $('.offer__item[data-id="'+data+'"]').remove();     
                var Exceptinfo=allEls[data];
                if (countSections[Exceptinfo.SECTION]) {
                    countSections[info.SECTION]--;
                }       
            })
          
        }
    });
    $('.complektTrigger.choise').each(function(){
        
        var id=$(this).data("id");
        var info=allEls[id];
        
        
        if (countSections[info.SECTION]) {
            countSections[info.SECTION]++;
        }
        else{
            countSections[info.SECTION]=1;
        }
        
        var item=' <div class="offer__item" data-id="'+info.ID+'"><div class="offer__item-img"><img src="'+info.IMAGE+'" alt=""></div>'
        +'<div class="offer__item-name"><span class="offer__item-fullname">'+info.SECTION+' ('+countSections[info.SECTION]+')</span><span class="offer__item-subname">'+info.NAME+'</span></div>'
        +'<button class="offer__item-btn removeFromComplekt" data-id="'+info.ID+'"></button> <input type="hidden" name="configurator_items[]" value="'+info.NAME+'"></div>';

      
        $('#complekt_total').append(item);
        
        tCount++;
    })
    $('#your_count_mobile').text(tCount);
}

//отправка заявки
$(document).on("click","#send_commerce",function(e){

    $('#configurator-form').find(".hidden_items").remove();
    $('#configurator-form').find("input[name='BASE_ITEM']").val($('#config_base_name').val());
    $('input[name="configurator_items[]"]').each(function(){
        var hidden="<input type='hidden' name='ITEMS[]' value='"+$(this).val()+"' class='hidden_items'>";
        $('#configurator-form').append(hidden);
       
    })
    
})