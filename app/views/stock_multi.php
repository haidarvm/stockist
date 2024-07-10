<?php
function css() {
    ?>
<link rel="stylesheet" href="<?=URL;?>assets/css/autoComplete.min.css">
<style>
</style>
<?php
}
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
                    $form->open(base_url().'stock/save_multi');
                    ?>
                    <div class="table-wrapper">
                        <table class="table responsive">
                            <thead>
                                <tr>
                                    <th>
                                        <h6>Nama Barang</h6>
                                    </th>
                                    <th>
                                        <h6 class="text-success">Stock IN</h6>
                                    </th>
                                    <th>
                                        <h6 class="text-danger">Stock Out</h6>
                                    </th>
                                </tr>
                                <!-- end table row-->
                            </thead>
                            <tbody>
                                <?php 
                                for ($x = 0; $x <= 10; $x++) { ?>
                                <tr>
                                    <td class="min-width">
                                        <?php $form->input_only_multi('text', 'item', 'Item','','','','col-sm-12'. '','autocomplete'.$x,'autoComplete');
                                        $form->input_hidden('autocomplete'.$x);?>
                                    </td>
                                    <td class="min-width">
                                        <?php $form->input_only_multi('number', 'quantity_in', 'QTY IN', '',  '', '', 'col-sm-12');?>
                                    </td>
                                    <td class="min-width">
                                        <?php $form->input_only_multi('number', 'quantity_out', 'QTY OUT', '',  '', '', 'col-sm-12');?>
                                    </td>
                                </tr>
                                <?php } 
                                ?>
                            </tbody>
                        </table>
                        <?php
                        $form->button('Save', 'primary-btn ');
                        $form->close();
                        ?>
                    </div>
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
<script src="<?=URL;?>assets/js/autoComplete.min.js"></script>
<script src="<?=URL;?>assets/js/autoCompleteMulti.js?v=1.2"></script>
<!--<script src="<?=URL;?>assets/js/autoComplete.js"></script>-->
<script>
<?php for($i =0; $i <= 10; $i++){ 
echo 'create_autocomplete("#autocomplete' . $i. '");';
} ?>
</script>
<?php
}
require_once 'template/footer.php';
?>