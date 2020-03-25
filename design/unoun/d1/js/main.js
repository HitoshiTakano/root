function faqSlide(_this){
	_this.hasClass('open') ? _this.removeClass('open') : _this.addClass('open');
}
$(function(){
	$('a[href^="#"]').on('click', function(){
		var target = $(this).attr('href');
		if(target=='#opener') faqSlide($(this));
		return false;
	});
});
