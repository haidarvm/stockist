<?php
$css  = '<link rel="stylesheet" href="' . base_url() . 'assets/css/autoComplete.min.css">
        <style>
        </style>';
require_once 'template/header.php';
// require_once 'template/menu.php';
?>
<!-- ========== section start ========== -->
<section class="section">
    <div class="container-fluid">
        <!-- ========== title-wrapper start ========== -->
        <div class="title-wrapper pt-30">
            <div class="row align-items-center">
                <div class="col-md-6">
                    <div class="breadcrumb-wrapper ">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item">
                                    <h4><?=$page_title?></h4>
                                </li>
                            </ol>
                    </div>
                </div>
                <!-- end col -->
                <div class="col-md-6">
                    <div class="breadcrumb-wrapper ">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item">
                                    <a href="#0">Dashboard</a>
                                </li>
                                <li class="breadcrumb-item active" aria-current="page">
                                <?=$page_title?>
                                </li>
                            </ol>
                        </nav>
                    </div>
                </div>
                <!-- end col -->
            </div>
            <!-- end row -->
        </div>
        <!-- ========== title-wrapper end ========== -->
        <!-- ========== section end ========== -->
        <div class="row">
            <div class="col">
                <div class="card-style settings-card-1 mb-30">
                    <div class="d-flex align-items-center justify-content-center mb-10">
                        <ul class="nav nav-pills nav-fill" id="myTab" role="tablist">
                            <li class="nav-item " role="presentation">
                                <button class="nav-link active" id="in-tab" data-bs-toggle="tab" data-bs-target="#in"
                                    type="button" role="tab" aria-controls="in" aria-selected="true">Stock In</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link " id="out-tab" data-bs-toggle="tab" data-bs-target="#out"
                                    type="button" role="tab" aria-controls="out" aria-selected="false">Stock Out</button>
                            </li>
                        </ul>
                    </div>
                        <?php
                        $form = new Bas_Form;
                        $form->open(base_url().'stock/save');
                        ?>
                        <div class="d-flex align-items-center justify-content-center">
                            <img src="<?=base_url();?>assets/img/powermonitor.jpg" alt="" width="120" />
                        </div>
		                <div class="input-style-1">
			                <label class="control-label col-sm-2">Product :</label>
                            <input type="text" id="autoComplete" placeholder="Power meter" value="" size="100" />
                        </div>
                        <div class="tab-content" id="myTabContent">
                            <!-- Stock IN -->
                            <div class="tab-pane fade show active" id="in" role="tabpanel" aria-labelledby="in-tab">
                                <?php
                                $form->input('text', 'rak', 'Tempat Rak');
                                $form->input('number', 'quantity_in', 'Stock In', '', '');
                                ?>
                            </div>
                            <!-- Stock Out -->
                            <div class="tab-pane fade" id="out" role="tabpanel" aria-labelledby="out-tab">
                                <?php
                                $form->input('number', 'quantity_out', 'Stock out', '', '');
                                ?>
                                <input type="hidden" class="item_id" name="item_id" />
                            </div>
                        </div>
                        <?php
                        $form->input('text', 'desc', 'Keterangan');
                        $form->input_hidden('item_id');
                        $form->input_hidden('table');
                        $form->button('Save', 'primary-btn ');
                        $form->a_button( base_url().'stock', "Cancel",'danger-btn-outline');
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
// Show Footer SET rules cannot both 0 or null
$javascript = '<script>            
              var base_url = "' . base_url() . '";
              </script>
              <script src="' . base_url() . 'assets/js/autoComplete.min.js"></script>
              <script src="' . base_url() . 'assets/js/jquery-3.6.0.min.js"></script>
              <script src="' . base_url() . 'assets/js/autoComplete.js"></script>
               <script>
                $("input[name=table]").val("stock_in");
                $("input[name=quantity_in]").attr("required", true);
                $("#in-tab").bind("click", function(e) {
                    $("input[name=quantity_in]").attr("required", true);
                    $("input[name=quantity_out]").attr("required", false);
                    $("input[name=quantity_out]").val("");
                    $("input[name=table]").val("stock_in");
                    $("#static").fadeOut();
                });
                $("#out-tab").bind("click", function(e) {
                    $("input[name=quantity_in]").attr("required", false);
                    $("input[name=quantity_in]").val("");
                    $("input[name=quantity_out]").attr("required", true);
                    $("input[name=table]").val("stock_out");
                    $("#static").fadeIn();
                });
              </script>';
require_once 'template/footer.php';
?>