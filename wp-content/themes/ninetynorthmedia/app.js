var App = (function($) {
	// private variables here
	var win = $(window);
	var focuspoint = $('.focuspoint');

	var currentPage = $('#content').data('id');

	var headerLogo = $('.mainHeader_logo-js').eq(0);
	var mainContent = $('.mainContent-js').eq(0);
	
	var Common = (function() {
		return {
			init: function() {
				new WOW().init();
				focuspoint.focusPoint();

				if (currentPage !== 'home') {
					headerLogo.show();
				}
			}
		};
	})();

	var Home = (function() {
		var atf = $('.home_atf-js').eq(0);

		function setAtfHeight() {
			var topMargin = parseInt(mainContent.css('margin-top'));
			atf.height(win.height() - topMargin);
		}

		function onScroll() {
			if (win.scrollTop() >= 400) {
				headerLogo.fadeIn('fast');
			} else {
				headerLogo.fadeOut('fast');
			}
			return false;
		}

		return {
			init: function() {
				setAtfHeight();
				win.resize(setAtfHeight);

				onScroll();
				win.scroll(onScroll);
			}
		};
	})();

	var About = (function() {
		return {
			init: function() {
				
			}
		};
	})();

	return {
		init: function() {
			Common.init();

			switch(currentPage) {
				case 'home': {
					Home.init();
					break;
				}
				case 'about': {
					About.init();
					break;
				}
			}
		}
	};
})(jQuery.noConflict());

jQuery( document ).ready(function() {
	App.init();
});