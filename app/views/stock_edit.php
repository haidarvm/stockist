<?php
require_once 'template/header.php';
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
                        $form->open(base_url().'stock/update/'.$table);
                        ?>
                    <div class="d-flex align-items-center justify-content-center">
                        <!-- <img src="<?=base_url();?>assets/img/powermonitor.jpg" alt="" width="120" /> -->
                    </div>
                    <div class="d-flex align-items-center mb-30">
                        <div class="profile-image">
                            <img src="<?=base_url();?>assets/img/powermonitor.jpg" alt="" width="120" />

                        </div>
                        <div class="profile-meta pl-30">
                            <h5 class="text-bold text-dark mb-10">Product</h5>
                            <p class=" text-black"><?=$stock->item_name;?></p>
                        </div>
                    </div>
                    <?php
                        $form->input_line('text', 'quantity', $page_title, '', $stock->quantity, '',true, 'text-danger');
                        $form->input_line('text', 'desc', 'Description');
                        $form->input_line('text', 'created_at', 'Date', '', tglJamDate($stock->created_at),true);
                        $form->input_hidden('stock_id',$stock->stock_id);
                        $form->input_hidden('item_id',$stock->item_id);
                        $form->input_hidden('old_quantity',$stock->quantity);
                        $form->button('Save', 'primary-btn ');
                        $form->a_button( base_url().$table, "Cancel",'danger-btn-outline');
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
</script>
</script>
<?php
}
require_once 'template/footer.php';
?>