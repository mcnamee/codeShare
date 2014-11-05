<?php
/*
 *	Name: Accordion
 *	Author: Shea Stevenson
 *  Description:
 		For Header / Content sections. Click the header to toggle the content.
 		Works best with FontAwesome and Modernizr.
 */

$css = 
'.collapse_header {
    cursor: pointer;
}

.collapse_header:after {
    display:            inline-block;
    font-family:        "FontAwesome";
    font-weight:        normal;
    content:            "\f0d8";
    margin-left:        5px;
    float: right;

    -webkit-transform:  rotate(0deg);
    -moz-transform:     rotate(0deg);
    -ms-transform:      rotate(0deg);
    -o-transform:       rotate(0deg);
    transform:          rotate(0deg);

    -webkit-transition: -webkit-transform ease 0.2s;
    -moz-transition:    -moz-transform ease 0.2s;
    -ms-transition:     -ms-transform ease 0.2s;
    -o-transition:      -o-transform ease 0.2s;
    transition:         transform ease 0.2s;
}

.collapse_header.closed:after {
    -webkit-transform: rotate(180deg);
    -moz-transform:    rotate(180deg);
    -ms-transform:     rotate(180deg);
    -o-transform:      rotate(180deg);
    transform:         rotate(180deg);
}

.no-csstransforms .collapse_header.closed:after {
    content: "\f0d7";
}
';

$html = 
'<h2 class="collapse_header">Heading to open/close</h2>
<div class="collapse_content">
   This is the content to hide.
</div>

<h2 class="collapse_header closed">Heading (Auto Closed)</h2>
<div class="collapse_content">
   This content is already hidden.
</div>

<h2 class="collapse_header closed">Heading to open/close</h2>
<div class="collapse_content">
   Also works with other elements that are not divs.
</div>
';

$js = 
'$(function () {
	// Hide closed content on page load.
	$(".collapse_header.closed + .collapse_content").hide();

	// Show / Hide the content when the header is clicked.
	$(".collapse_header").click(function(){

		// Ignore if still locked!
		if ($(this).hasClass("locked")) return false;

		var header = $(this);
		var content = $(this).next(".collapse_content");

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
';

$plugins = array();