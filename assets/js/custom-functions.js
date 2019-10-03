// FUNCTIONS
function caroufredsel_slider() {
	$(".cs-slider .slides").each(function(){
		var $this    = $(this);
		var ctrlPrev = $(this).closest(".cs-slider").find(".prev");
		var ctrlNext = $(this).closest(".cs-slider").find(".next");

		$this.carouFredSel({
			auto: {
				play: $this.data("auto"),
				timeoutDuration: $this.data("duration"),
			},
			start      : "random",
			width      : $this.data("cs-width"),
			circular   : $this.data("cs-circular"),
			infinite   : $this.data("cs-infinite"),
			height     : $this.data("cs-height"),
			responsive : $this.data("cs-responsive"),
			direction  : $this.data("cs-direction"),
			prev       : ctrlPrev,
			next       : ctrlNext,
			pagination : "."+$this.data("paginate"),
			scroll:{
				items: $this.data("item-scroll"),
				fx   : $this.data("effects"),
			},
			items:{
				height : $this.data("item-height"),
				width  : $this.data("item-width"),
				visible: {
					min: $this.data("min"),
					max: $this.data("max")
				},
			},
			swipe:true,
		});

		$this.touchwipe({
			wipeUp: function(e) {
				e.preventDefault();
			},
			wipeDown: function(e) {
				e.preventDefault();
			},
			wipeLeft: function(e) {
				$this.trigger("next", 1);
			},
			wipeRight: function(e) {
				$this.trigger("prev", 1);
			}
		});
	});
}

function sidebarAffix() {
	var sidebar            = $('.sidebar');
	var sidebarHeight      = $('.sidebar').outerHeight();
	var innercontentHeight = $('.content-wrap').outerHeight();

	var header_height    = $('header#header').outerHeight() + 30;

	var footer_height    = $('footer#footer').outerHeight() || 0;

	var bottom_spacing     = footer_height + 30;

	if ( Modernizr.mq( '(min-width: 992px)' ) ) {
		if( innercontentHeight < sidebarHeight ) {
			sidebar.unstick();
		} else {
			sidebar.sticky({
				topSpacing: header_height,
				bottomSpacing: bottom_spacing,
			});
		}
	} else {
		sidebar.unstick();
	}
}

function adjustTopOffset() {
	var headerHeight = $('header').outerHeight();
	$('main#main-wrapper').css({
		'margin-top': headerHeight,
	});

	$('aside#mobile-menu').css({
		'top': headerHeight,
	});
}

function mobileTrigger() {
	$('.mobile .hamburger').click(function() {
		$(this).toggleClass('is-active');
		$('aside#mobile-menu').toggleClass('is-active');
	});
}

function mobileWalker() {
	// ADD TOGGLE TO MOBILE MENU
	$('#mobile-menu ul.menu li.menu-item-has-children').prepend('<span class="toggle-menu open"></span>');
	// DISPLAY SUBMENU
	$('#mobile-menu .toggle-menu').on('click', function() {
		if ($(this).hasClass('open')) {
			$(this).removeClass('open').addClass('close');
			$(this).siblings('.sub-menu').slideDown();
		} else {
			$(this).removeClass('close').addClass('open');
			$(this).siblings('.sub-menu').slideUp();
		}
	});
}

function loaderToggle() {
	$(".site-loader").css("opacity", 0);
	setTimeout(function(){
		$(".site-loader").css("z-index", -1);
	}, 300);
}

function backToTop() {
	$('body').on('scroll', function() {
		console.log('Scrolling');
		var headerHeight = $('header').outerHeight();

		if ($(this).scrollTop() > headerHeight) {
			$('.back-top').addClass('active');
		} else {
			$('.back-top').removeClass('active');
		}

		if ($(this).scrollTop() > headerHeight) {
			$('header').addClass('scrolled');
		}else{
			$('header').removeClass('scrolled');
		}
	});

	$('.back-top').on('click tap',function () {
		$('.back-top').addClass('fired');
		$('body, html').animate({
				scrollTop: 0
		}, 800, function() {
			$('.back-top').removeClass('fired');
			$('.back-top').removeClass('active');
		});
		return false;
	});
}

function iOSCaretBugFix() {
	var ua = navigator.userAgent,
	scrollTopPosition,
	iOS = /iPad|iPhone|iPod/.test(ua),
	iOS11 = /OS 11_0|OS 11_1|OS 11_2/.test(ua);

	// ios 11 bug caret position
	if ( iOS && iOS11 ) {

		$(document.body).on('show.bs.modal', function(e) {
			if ( $(e.target).hasClass('modal') ) {
				// Get scroll position before moving top
				scrollTopPosition = $(document).scrollTop();

				// Add CSS to body "position: fixed"
				$("body").addClass("iosBugFixCaret");
			}
		});

		$(document.body).on('hide.bs.modal', function(e) {
			if ( $(e.target).hasClass('modal') ) {
				s// Remove CSS to body "position: fixed"
				$("body").removeClass("iosBugFixCaret");

				//Go back to initial position in document
				$(document).scrollTop(scrollTopPosition);
			}
		});
	}
};