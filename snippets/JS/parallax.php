<?php
/*
 *	Name: Show 'Other' Field
 *	Author: Matt Mcnamee
 *  Description:
 		Show 'other' field when radio box option selected
 */

$html = 
'<div class="grid_24 parallax_banner parallax" style="background-image: url(\'http://dummyimage.com/1900x500/000/fff\');">
    <div class="container_24">
        <div class="grid_24 inner">
            <div class="parallax_heading">
                <h2>Lorem Ipsum</h2>
            </div>
        </div>
    </div>
</div>

<div class="grid_24 parallax_banner parallax" style="background-image: url(\'http://dummyimage.com/1900x500/CCC/000\');">
    <div class="container_24">
        <div class="grid_24 inner">
            <div class="parallax_heading">
                <h2>Second Banner</h2>
            </div>
        </div>
    </div>
</div>
';

$css =
'.parallax {
    overflow: hidden;

    height: 600px;
}

.parallax_heading {
    position: relative;
}
';

$js = 
'var p_selector = $(".parallax"),
    p_velocity = "0.3",
    p_text_selector = $(".parallax_heading"),
    p_text_velocity = "0.5";

$("body").ready(function(){
  /* On load add the data attrs for parallax */
  p_selector.each(function(){
     var positionFromTop = $(this).offset().top;

     if( !$(this).attr("data-stellar-background-ratio") ) { $(this).attr("data-stellar-background-ratio", p_velocity ); }
     $(this).attr("data-stellar-offset-parent" );
  });

  /* On load add the data attrs for parallax headings */
  p_text_selector.each(function(){
     if( !$(this).attr("data-stellar-ratio") ) { $(this).attr("data-stellar-ratio", p_text_velocity ); }
     if( !$(this).attr("data-stellar-vertical-offset") ) { $(this).attr("data-stellar-vertical-offset", "500" );       }
});

/* Then Init the Parallax plugins */
if( $("html").hasClass("no-touch") ) {
    $(window).stellar();
}
});
';

$plugins = array(
    'js' => array(
        'http://markdalgleish.com/projects/stellar.js/js/stellar.js'
    )
);