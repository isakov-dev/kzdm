tippy('[data-tippy-content]');

$(document).ready(function () {
    $('.full-slider').on('afterChange', (event, slick, currentSlide, nextSlide) => {
        let currentItem = $(slick.$slides.get(currentSlide));
        let needle = currentItem.find('.full-slider__item');
        let id = needle.data('id');

        $('.homepage-middle-slider__content').removeClass('active');
        $('.homepage-middle-slider__content[data-id="' + id + '"]').addClass('active');
    });

    //$('input[type="tel"]').inputmask({'mask': '+9{1,3}(999)999-99-99'});
    $('input[type="tel"]').inputmask({'mask': '+7 (999) 999 99 99'});
});


//------Виджет Bitrix24------//
(function(w,d,u){
        var s=d.createElement('script');s.async=true;s.src=u+'?'+(Date.now()/60000|0);
        var h=d.getElementsByTagName('script')[0];h.parentNode.insertBefore(s,h);
})(window,document,'https://cdn-ru.bitrix24.ru/b4420285/crm/site_button/loader_2_zd6el0.js');

window.addEventListener('onBitrixLiveChat', function(event)
{
	var widget = event.detail.widget;

	// Обработка событий 
	widget.subscribe({
		type: BX.LiveChatWidget.SubscriptionType.sessionStart,
		callback: function(data) {
			yaCounter45274878.reachGoal('chatsend');
			gtag('event', 'chatsend', {'event_category': 'chat'});      
		}
	});
	widget.subscribe({
		type: BX.LiveChatWidget.SubscriptionType.userForm,
		callback: function(data) {
			yaCounter45274878.reachGoal('chatcontact');
			gtag('event', 'chatcontact', {'event_category': 'chat'});      
		}
	});
});