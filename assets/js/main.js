// MAJOR EVENTS

// READY
$( document ).ready(function() {
	iOSCaretBugFix();
	backToTop();
});

// LOAD
$( window ).on( "load", function() {
	loaderToggle();
});

// RESIZE
$(window).resize(function() {

});

// ORIENTATION CHANGE
$(window).on('orientationchange', function() {

});
