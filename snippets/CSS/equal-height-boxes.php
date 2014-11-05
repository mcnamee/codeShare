<?php
/*
 *	Name: Equal Height Boxes
 *	Author: Matt Mcnamee
 *  Description:
 		Make side-by-side boxes an equal height w/ flexbox
 */

$css = 
'.eqh_wrap {
    display: flex;
}

.equal_heights {
    background: #FF003B;
    padding: 20px;
    text-align: center;
}

.equal_heights:nth-of-type(even) {
    background: #CCC;
}
';

$html = 
'<h3 class="text_align_center">Just add display:flex to the parent</h3>
<div class="eqh_wrap grid_18 prefix_5">
    <div class="grid_6 equal_heights">News <br>Section</div>
    <div class="grid_6 equal_heights"><img src="http://dummyimage.com/600x400/000/fff" class="scale_with_grid" /></div>
    <div class="grid_6 equal_heights">Quick Quote</div>
  </div>
';