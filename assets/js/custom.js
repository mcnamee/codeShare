
/* Make Sidebar full height */
/* ==================================== */
function cs_fullSidebarHeight() {
	var min_height = $(window).height() - $('header').innerHeight();
	if( $(window).width() < 767 ) { min_height = '100%'; }

	$('#cs_sidebar, #cs_content').css( 'min-height', min_height );
}

$(window).ready(function(){ cs_fullSidebarHeight(); });
$(window).resize(function(){ cs_fullSidebarHeight(); });


/* Menu Open/Close */
/* ==================================== */
$(function () {
	$('body').on('click', '.__cs_openMenu', function(event){
		event.preventDefault();
		$('.__menu_to_open').slideToggle();
	});
});


/* Sidebar Accordion */
/* ==================================== */
$(function () {
	// Hide closed content on page load.
	$(".__cs_collapse_header.closed > .__cs_collapse_content").hide();

	// Show / Hide the content when the header is clicked.
	$(".__cs_collapse_header > span").click(function(){

		// Ignore if still locked!
		if ($(this).hasClass("locked")) return false;

		var header = $(this).parent('li');
		var content = $(this).next(".__cs_collapse_content");

		if(header.hasClass("closed")){
			// If it is closed, open it again.
			header.removeClass("closed");
			content.slideDown();
		} else {
			// Else, close it.
			content.stop().slideUp();
			header.addClass("closed");
		}
		return false;
	});
});

/* Show Code Share Box */
/* ==================================== */
$('.__cs_openCodeshare').click(function(event){
	event.preventDefault();
	$('.cs_codeshare').slideToggle();
});