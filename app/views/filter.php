<?php

$form = new Bas_Form;
// $action = !empty(uri(2)) ? uri(1) .'/'. uri(2) : uri(1);
$action = uri(2);

$form->open( $action, '', 'get');
echo '<div class="row " style="max-width:1000px;">';
$form->input_on_small('text', 'date_start','Start Date',!empty($date_start) ? $date_start : '','','','datepicker  ', 'input_start', "",'col-sm-3');
// echo ' <div class="w-100 d-none d-md-block"></div>';
$form->input_on_small('text', 'date_end','End Date', !empty($date_end) ? $date_end : '' ,'','','datepicker','input_end', "", 'col-sm-3');
// echo '</div>';
// echo '<div class="row " style="max-width:800px;">';
$form->input_only_search('text', 'item_name', 'Item', checkVal($item,'item_name'), '', '', '','autocomplete01');
$form->button_xs('Clear', 'float-left btn btn-secondary btn-sm  ', 'all-date');
$form->button_xs('Filter', 'btn btn-primary btn-sm');
// $form->input_line('text', 'product', 'Product', '', '', '', '','','autoComplete');
$form->input_hidden('item_id');
$form->close();
echo '</div>';

?>