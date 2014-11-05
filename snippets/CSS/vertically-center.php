<?php
/*
 *	Name: Vertically Center
 *	Author: Matt mcnamee
 *  Description:
 		Vertically a block element very easily
 */

$css = 
'.wrapper {
    display: flex;
    align-items: center;
    justify-content: center;

    height: 400px;
    width: 100%;
    padding: 20px;
    margin-bottom: 1em;
    background: rgba(147,128,108,.1);
    border-radius: 3px;
}

.centered_item {
  background: rgba(147,128,108,.1);
  padding: 15px;
  text-align: center;
}
';

$html = 
'<h3 class="text_align_center">Just add the first 3 flex properties to the parent</h3>
<div class="grid_18 wrapper">
  <div class="grid_6 centered_item">Align Center</div>
</div>
';