var App = (function($) {
	// private variables here
	var win = $(window);
	var headerLogo = $('.mainHeader_logo-js').eq(0);

	// private functions here	
	function onScroll() {
		if (win.scrollTop() >= 400) {
			headerLogo.fadeIn('fast');
		} else {
			headerLogo.fadeOut('fast');
		}
	}

	return {
		init: function() {
			onScroll();
			win.scroll(onScroll);
		}
	};
})(jQuery.noConflict());

jQuery( document ).ready(function() {
	App.init();
});