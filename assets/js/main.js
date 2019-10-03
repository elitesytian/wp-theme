// MAJOR EVENTS

// READY
$( document ).ready(function() {
	iOSCaretBugFix();
	backToTop();
});

// LOAD
$( window ).on( "load", function() {
	loaderToggle();
	adjustTopOffset();
});

// RESIZE
$(window).resize(function() {
	adjustTopOffset();
});

// ORIENTATION CHANGE
$(window).on('orientationchange', function() {
	adjustTopOffset();
});
