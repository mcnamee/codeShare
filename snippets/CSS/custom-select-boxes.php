<?php
/*
 *	Name: Custom Select Boxes
 *	Author: Shea Stevenson
 *  Description:
 		Style select boxes to look great!
 */

$css = 
'.custom_select {
    position: relative;
}

.custom_select select {
    position:    relative;
    z-index:     10;
    width:       100% !important;
    height:      41px !important;
    line-height: 36px;
    border:      0px none transparent;
}

/* dynamically created SPAN, placed below the SELECT */
.custom_select span {
    background: #FFFFFF;
    position:      absolute;
    bottom:        0;
    top:           0;
    float:         left;
    left:          0;
    right:         0;
    line-height:   39px;
    text-indent:   9px;
    border-radius: 2px;
    color:         #b7c1c7;
    cursor:        default;
    z-index:       1;
    border:        1px solid #cedae0;
    text-align:    left;
    font-size:     13px;
}

/* Button on the side of the select box */
.custom_select span:after {
    font-family: FontAwesome;
    content: "\f0d7"; /* fa-caret-down */
    display: block;
    position: absolute;
    right: -1px;
    top: -1px;
    bottom: -1px;
    background: #E5F2FA;
    border: 1px solid #cedae0;
    border-radius: 0px 2px 2px 0px;
    color: #AFBCC4;
    padding: 0px 16px;
    text-indent: 0px;
}
';

$js =
'$(document).ready(function () {
    if (!$.browser.opera) {
        /* Find all the select boxes and wrap them up. */
        $("select").each(function(){
            var current_select = $(this);

            /* Check if already wrapped. */
            if(! current_select.closest(".custom_select").length ) {
                $(this).wrap("<div class=\'custom_select\'></div>");
            }
        });

        /* Do the magic on all the wrapped selects. */
        $(".custom_select select").each(function () {
            var title = "-- Select an Option --";

            if ($("option:selected", this).val() != "") {
                title = $("option:selected", this).text();
            } else {
                title = $("option:first-child", this).text();
            }

            $(this)
                .css({"z-index": 10, "opacity": 0, "-khtml-appearance": "none"})
                .after("<span>" + title + "</span>")
                .change(function () {
                    val = $("option:selected", this).text();
                    $(this).next().text(val);
                });
        });
    };
});
';

$html = 
'<div class="grid_12 prefix_6">
    <select>
        <option value=""> --- </option>
        <option>Pick Me</option>
        <option>I\'m a more humble option</option>
        <option>Nooo Pick Me</option>
    </select>
</div>
';