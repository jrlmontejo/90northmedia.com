var App = (function($) {
	// private variables here
	var win = $(window);
	var focuspoint = $('.focuspoint');
	var headerLogo = $('.mainHeader_logo-js').eq(0);

	// home
	var mainContent = $('.mainContent-js').eq(0);
	var atf = $('.home_atf-js').eq(0);

	// private functions here	
	function onScroll() {
		if (win.scrollTop() >= 400) {
			headerLogo.fadeIn('fast');
		} else {
			headerLogo.fadeOut('fast');
		}
		return false;
	}

	function setAtfHeight() {
		var topMargin = parseInt(mainContent.css('margin-top'));
		atf.height(win.height() - topMargin);
	}

	return {
		init: function() {
			new WOW().init();

			focuspoint.focusPoint();

			onScroll();
			win.scroll(onScroll);

			setAtfHeight();
			win.resize(setAtfHeight);
		}
	};
})(jQuery.noConflict());

jQuery( document ).ready(function() {
	App.init();
});