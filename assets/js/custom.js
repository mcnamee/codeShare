
/* Make Sidebar full height */
/* ==================================== */
function cs_fullSidebarHeight() {
	$('#cs_sidebar, #cs_content').css( 'min-height', $(window).height() - $('header').innerHeight() );
}

$(window).ready(function(){ cs_fullSidebarHeight(); });
$(window).resize(function(){ cs_fullSidebarHeight(); });


/* Code Editor */
/* ==================================== */


/* Show Code Share Box */
/* ==================================== */
$('.__cs_openCodeshare').click(function(event){
	event.preventDefault();
	$('.cs_codeshare').slideToggle();
});