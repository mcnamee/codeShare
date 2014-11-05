
/* Make Sidebar full height */
/* ==================================== */
function cs_fullSidebarHeight() {
	$('#cs_sidebar, #cs_content').css( 'min-height', $(window).height() - $('header').innerHeight() );
}

$(window).ready(function(){ cs_fullSidebarHeight(); });
$(window).resize(function(){ cs_fullSidebarHeight(); });


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