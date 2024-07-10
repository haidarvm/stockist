<?php
$css  = '
        <style>
        </style>';
require_once 'template/header.php';
// require_once 'template/menu.php';
?>
<!-- ========== section start ========== -->
<section class="section">
    <div class="container-fluid">
        <?php require_once 'template/title_breadcrumb.php'; ?>
        <div class="row">
            <div class="col">
                <div class="card-style settings-card-1 mb-30">
                    <?php
                        $form = new Bas_Form;
                        $form->open(base_url().'item/save/'. $action);
                        $form->input_line("text",'item_name',"Item Name", '', !empty($item->item_name) ? $item->item_name : "",'',true );
                        $form->input_line("text",'item_code',"Item Code", '', !empty($item->item_code) ? $item->item_code : "",'',true );
                        $form->input_line("text",'price',"Price", '', !empty($item->price) ? $item->price : "",'',true );
                        $form->input_line("text",'unit',"Unit", '', !empty($item->unit) ? $item->unit : "",'',true );
                        $form->input_line("text",'location',"Location", '', !empty($item->location) ? $item->location : "",'' );
                        $form->dropdown('category_id', 'Account Name', $category,  !empty($item->category_id) ? $item->category_id : "" );
                        // image upload
                        // category (Account Name) drowdown
                        // unit
                        $action == "update" ? $form->input_hidden('item_id',$item->item_id)  : "";
                        $form->button('Save', 'primary-btn ');
                        $form->a_button( base_url().'item', "Cancel",'danger-btn-outline');
                        $form->close();
                    ?>
                </div>
            </div>
            <!-- end card -->
        </div>
        <!-- end col -->
        <!-- end container -->
    </div>
</section>
<?php
function javascript() {
    ?>

<script>
var base_url = "<?=URL;?>";
<?php
}
require_once 'template/footer.php';
?>