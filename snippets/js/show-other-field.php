<?php
/*
 *	Name: Show 'Other' Field
 *	Author: Matt Mcnamee
 *  Description:
 		Show 'other' field when radio box option selected
 */

$html = 
'<div class="grid_8 prefix_8"><form>
    <div class="__other_available">
        <input type="radio" id="111" class="__other_options" name="field_name" value="111" /> <label for="111">Option 1</label><br />
        <input type="radio" id="222" class="__other_options" name="field_name"  value="111" /> <label for="222">Option 2</label><br />
        <input type="radio" id="other" class="__other_options" name="field_name" value="other" /> <label for="other">Other</label><br />
    
        <input type="text" placeholder="Other" class="__other_field" />
    </div>

    <hr />

    <div class="__other_available">
        <select name="field_name_2" class="__other_options">
            <option value=""> --- </option>
            <option>Option 1</option>
            <option>Option 2</option>
            <option>Option 3</option>
            <option value="other">Other</option>
        </select>

        <input type="text" placeholder="Other" class="__other_field" />
    </div>
</form></div>
';

$js = 
'$(".__other_available").each(function(){
    var container = $(this),
        selector = container.find(".__other_options"),
        selector_equals = "other",
        selector_is = container.find("input[value=\'" + selector_equals + "\']:not(.__other_field)"),
        hidden_selector = container.find(".__other_field");

    if( !selector_is.is(":checked") || !$(this).val() == selector_equals ) {
        hidden_selector.hide();
    }

    selector.change(function() {
        if( selector_is.is(":checked") || $(this).val() == selector_equals ) {
            hidden_selector.show();
        } else {
            hidden_selector.hide();
        }
    });
});
';

$plugins = array();