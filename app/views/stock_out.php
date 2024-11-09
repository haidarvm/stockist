<?php
function css() {
    ?>
<link rel="stylesheet" href="<?=URL; ?>assets/css/autoComplete.min.css">
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
                        $form->open(base_url() . 'stock/save');
                        ?>

                    <!-- <div class="profile-info">
                        <div class="profile-image">
                            <img src="<?=base_url();?>assets/img/powermonitor.jpg" alt="" width="120" />
                        </div>
                    </div> -->
                    <?php
                        $form->input_line('text', 'item_name', 'Item', '', '', '', '', '', 'autocomplete01');
                        ?>
                        <!-- Stock Out -->
                            <?php
                                $form->input_line('number', 'quantity_out', 'Stock out', '', '');
                                ?>
                            <input type="hidden" class="item_id" name="item_id" />
                    <?php
                        $form->input_line('text', 'desc', 'Description');
                        $form->input_hidden('item_id');
                        $form->input_hidden('table');
                        $form->button('Save', 'primary-btn ');
                        $form->a_button(base_url() . 'stock', 'Cancel', 'danger-btn-outline');
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
var base_url = "<?=URL; ?>";
</script>
<script src="<?=URL; ?>assets/js/autoComplete.min.js"></script>
<script src="<?=URL; ?>assets/js/jquery-3.6.0.min.js"></script>
<script src="<?=URL; ?>assets/js/autoComplete.js"></script>
<script src="<?=URL; ?>assets/js/sweetalert.min.js"></script>
<script>
create_autocomplete("#autocomplete01");

$("input[name=table]").val("stock_out");
$("input[name=quantity_in]").attr("required", true);

$("input[name=quantity_out]").attr("required", true);
$("input[name=table]").val("stock_out");
$("#static").fadeIn();
var hash = window.location.hash;
hash && $('ul.nav a[href="' + hash + '"]').tab('show');
hash == '#out' ? $("#in").hide() : $("#out").hide();
$("#out-tab").addClass("active");
$("input[name=table]").val("stock_out");
$("input[name=quantity_out]").attr("required", false);
console.log(getParam("update"));

    // showSwal();

    function showSwal() {
        if(getParam("update") == "in" || getParam("update") == "out") {
            swal("Alert!", "Anda berhasil update data", "success");
        }
    }


    function getParam(name) {
        url = window.location.href.split('/');
        // console.log(url[4])
        return url[4];
        // return decodeURI(
        //     (RegExp(name + '=' + '(.+?)(&|$)').exec(location.search) || [, null])[1]
        // );
    }
</script>
<?php
                        }
require_once 'template/footer.php';
?>