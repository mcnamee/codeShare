
/* Make Sidebar full height */
/* ==================================== */
function fullSidebarHeight() {
	$('#cs_sidebar, #cs_content').css( 'min-height', $(window).height() - $('header').innerHeight() );
}

$(window).ready(function(){ fullSidebarHeight(); });
$(window).resize(function(){ fullSidebarHeight(); });
