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
		var productTitle = $('.featuredProduct .box_title');
		var productDesc = $('.featuredProduct .box_desc');
		var productLink = $('.featuredProduct .box_link');

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

		function initProductSlider() {
			$('#lightSlider').lightSlider({
				adaptiveHeight: true,
				item: 4,
				slideMove: 2,
				responsive: [
					{
						breakpoint: 1200,
						settings: {
							item: 3,
							slideMove: 1
						}
					},
					{
						breakpoint: 768,
						settings: {
							item: 2,
							slideMove: 1
						}
					},
					{
						breakpoint: 576,
						settings: {
							item: 1,
							slideMove: 1
						}
					}
				]
			});
		}

		function clampBoxContent() {
			productTitle.truncate({ lines: 2 });
			productDesc.truncate({ lines: 2 });
			productLink.truncate({ lines: 1 });
		}

		return {
			init: function() {
				setAtfHeight();
				win.resize(setAtfHeight);

				onScroll();
				win.scroll(onScroll);

				initProductSlider();

				clampBoxContent();
				win.resize(clampBoxContent);
			}
		};
	})();

	var Solutions = (function() {
		var boxTitle = $('.solutions_entry .box_title');
		var boxDesc = $('.solutions_entry .box_desc');
		var boxLink = $('.solutions_entry .box_link');

		function clampBoxContent() {
			boxTitle.truncate({ lines: 1 });
			boxDesc.truncate({ lines: 2 });
			boxLink.truncate({ lines: 1 });
		}

		return {
			init: function() {
				clampBoxContent();
				win.resize(clampBoxContent);
			}
		};
	})();

	var Services = (function() {
		return {
			init: function() {

			}
		};
	})();

	var About = (function() {
		var gallery = $('#aboutGallery');

		function initGallery() {
			var p = gallery.portfolio({
				loop: true,
				height: '350px',
				showArrows: false
			});
			p.init();
		}

		return {
			init: function() {
				initGallery();
			}
		};
	})();

	var Contact = (function() {
		var officeLocation = {
			lat: 14.662886,
			lng: 121.043350
		};
		var mapStyles = [{
      "featureType": "administrative",
      "elementType": "labels.text.fill",
      "stylers": [{ "color": "#ca2031" }]
  	}, {
      "featureType": "administrative.province",
      "elementType": "all",
      "stylers": [{
        "visibility": "off"
      }]
    }, {
      "featureType": "administrative.land_parcel",
      "elementType": "labels.text.fill",
      "stylers": [{
        "saturation": "-1"
      }]
    }, {
      "featureType": "landscape",
      "elementType": "all",
      "stylers": [{
        "saturation": -100
      }, {
        "lightness": 65
      }, {
        "visibility": "on"
      }]
    }, {
      "featureType": "landscape.man_made",
      "elementType": "geometry.fill",
      "stylers": [{
        "visibility": "on"
      }, {
        "lightness": "18"
      }, {
        "saturation": "26"
      }, {
        "gamma": "2.05"
      }, {
        "color": "#ebebeb"
      }]
	  }, {
	    "featureType": "landscape.man_made",
	    "elementType": "geometry.stroke",
	    "stylers": [{
	      "visibility": "on"
	    }, {
	      "color": "#918f8f"
	    }]
	  }, {
	    "featureType": "landscape.man_made",
	    "elementType": "labels.text.fill",
	    "stylers": [{
	      "weight": "0.01"
	    }, {
	      "visibility": "on"
	    }, {
	      "lightness": "0"
	    }, {
	      "color": "#be0000"
	    }]
	  }, {
	    "featureType": "landscape.natural.landcover",
	    "elementType": "geometry.fill",
	    "stylers": [{
	      "visibility": "simplified"
	    }, {
	      "saturation": "0"
	    }, {
	      "color": "#aa9e9e"
	    }]
	  }, {
	    "featureType": "landscape.natural.terrain",
	    "elementType": "geometry.fill",
	    "stylers": [{
	      "visibility": "simplified"
	    }]
	  }, {
	    "featureType": "poi",
	    "elementType": "all",
	    "stylers": [{
	      "saturation": -100
	    }, {
	      "lightness": 51
	    }, {
	      "visibility": "simplified"
	    }]
	  }, {
	    "featureType": "road",
	    "elementType": "geometry.fill",
	    "stylers": [{
	      "color": "#b9b9b9"
	    }]
	  }, {
	    "featureType": "road",
	    "elementType": "labels.text.fill",
	    "stylers": [{
	      "color": "#000000"
	    }]
	  }, {
	    "featureType": "road",
	    "elementType": "labels.text.stroke",
	    "stylers": [{
	      "weight": "0.01"
	    }, {
	      "hue": "#ff0000"
	    }, {
	      "visibility": "off"
	    }]
	  }, {
	    "featureType": "road.highway",
	    "elementType": "all",
	    "stylers": [{
	      "saturation": -100
	    }, {
	      "visibility": "simplified"
	    }]
	  }, {
	    "featureType": "road.arterial",
	    "elementType": "all",
	    "stylers": [{
	      "saturation": -100
	    }, {
	      "lightness": 30
	    }, {
	      "visibility": "on"
	    }]
	  }, {
	    "featureType": "road.local",
	    "elementType": "all",
	    "stylers": [{
	      "saturation": -100
	    }, {
	      "lightness": 40
	    }, {
	      "visibility": "on"
	    }]
	  }, {
	    "featureType": "transit",
	    "elementType": "all",
	    "stylers": [{
	      "saturation": -100
	    }, {
	      "visibility": "simplified"
	    }]
	  }, {
	    "featureType": "water",
	    "elementType": "geometry",
	    "stylers": [{
	      "hue": "#ffff00"
	    }, {
	      "lightness": -25
	    }, {
	      "saturation": -97
	    }]
	  }, {
	    "featureType": "water",
	    "elementType": "labels",
	    "stylers": [{
	      "visibility": "on"
	    }, {
	      "lightness": -25
	    }, {
	      "saturation": -100
	    }]
	  }];
		var mapBox = $('#map');
		var map, marker;

		function removeMapStyles() {
			if (map) {
				map.set('styles', []);
			}
		}

		function addMapStyles() {
			if (map) {
				map.set('styles', mapStyles);
			}
		}

		return {
			init: function() {
				mapBox.on('mouseenter', function() {
					removeMapStyles();
				});

				mapBox.on('mouseleave', function() {
					addMapStyles();
				});
			},
			initMap: function() {
        map = new google.maps.Map(mapBox[0], {
          zoom: 15,
          center: officeLocation,
          scrollwheel: false,
          styles: mapStyles,
          mapTypeControl: false,
          streetViewControl: false,
          keyboardShortcuts: false,
        });

        marker = new google.maps.Marker({
          position: officeLocation,
          map: map,
          title: '90 Degrees North Media, Inc.'
        });
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
				case 'contact': {
					Contact.init();
					break;
				}
				case 'solutions': {
					Solutions.init();
					break;
				}
				case 'services': {
					Services.init();
					break;
				}
			}
		},
		initMap: function() {
			Contact.initMap();
		}
	};
})(jQuery.noConflict());

jQuery( document ).ready(function() {
	App.init();
});