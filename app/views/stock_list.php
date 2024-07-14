<?php
function css() {
    ?>
<link rel="stylesheet" type="text/css" href="<?=URL; ?>assets/css/datatables.min.css">
<link rel="stylesheet" type="text/css" href="<?=URL; ?>assets/css/bootstrap-datepicker3.min.css">
<link rel="stylesheet" href="<?=URL; ?>assets/css/autoComplete.min.css">
<style>
</style>
<?php
}
require_once 'template/header.php';?>
<section class="section">
    <div class="container-fluid">
        <?php require_once 'template/title_breadcrumb.php'; ?>
        <div class="row">
            <div class="col">
                <div class="tables-wrapper">
                    <div class="row align-items-center">
                        <div class="col-lg-12">
                            <div class="card-style mb-30">
                                <?php
                                require_once 'filter.php';
                                ?>
                                <h6 class="mb-10  mt-20"><?=str_unslug($page_title, '_');?> -
                                    <?= checkVal($item, 'item_name');?> Available </h6>
                                <p class="text-sm mb-20">
                                    Available Stock All Item
                                </p>
                                <!-- <a  href="<?=URL?>pdf" class="main-btn primary-btn rounded-md btn-hover mr-15 mb-20">PDF</a> -->
                                <div class="table-wrapper table-responsive">
                                    <table class="table table-bordered" id="datatable">
                                        <thead>
                                            <tr>
                                                <th>
                                                    <h6>No</h6>
                                                </th>
                                                <th>
                                                    <h6>Nama Barang</h6>
                                                </th>
                                                <!-- <th>
                                                    <h6>Jenis</h6>
                                                </th> -->
                                                <?php
                                                if (!empty($all)) {
                                                    ?>
                                                <th>
                                                    <h6>Status</h6>
                                                </th>
                                                <?php
                                                } ?>
                                                <th>
                                                    <h6>Qty <?=$table == 'stock_out' ? 'Pemakaian' : 'Masuk';?></h6>
                                                </th>
                                                <th>
                                                    <h6>Total </h6>
                                                </th>
                                                <th>
                                                    <h6>Tanggal <?=$table == 'stock_out' ? 'Pemakaian' : 'Masuk';?></h6>
                                                </th>
                                                <?php
                                                if (!empty($table) && $table != 'stock') {
                                                    ?>
                                                <th>
                                                    <h6>Sisa Stock</h6>
                                                </th>
                                                <?php
                                                } 
                                                if($session->get("user_data")["level"] == 1 && $table != 'stock') {?>
                                                <th class="text-center">
                                                    <h6>Action</h6>
                                                </th>
                                                <?php } ?>
                                            </tr>
                                            <!-- end table row-->
                                        </thead>
                                        <tbody>
                                            <?php
                                            $i = 1;
                                            foreach ($stock as $row) { ?>
                                            <tr>
                                                <td >
                                                    <?=$i++;?>
                                                </td>
                                                <td class="min-width">
                                                    <div class="lead">
                                                        <!-- <div class="lead-image">
                                                            <img src="<?=base_url();?>assets/img/powermonitor.jpg"
                                                                alt="" />
                                                        </div> -->
                                                        <?php
                                                        $class = $row->quantity <= $minimal ? 'text-danger' : '';
                                                        ?>
                                                        <div class="lead-text">
                                                            <p class="<?=$class;?>"><?=$row->item_name;?></p>
                                                        </div>
                                                    </div>
                                                </td>
                                                <!-- <td class="min-width">
                                                    <p><?=$row->item_code . ' ' . $row->category_name;?></p>
                                                </td> -->
                                                <?php
                                                if (!empty($all)) {
                                                    ?>
                                                <td class="min-width">
                                                    <p class="text-danger"><?=strtoupper($row->status); ?></p>
                                                </td>
                                                <?php
                                                }?>
                                                <td class="min-width">
                                                    <p class="text-danger">
                                                        <?=$row->quantity . ' <span class="text-sm text-gray">' . $row->unit;?></span>
                                                    </p>
                                                </td>
                                                <td class="min-width">
                                                    <p class="text-danger">
                                                        <?php
                                                        if($table == 'stock_in') { 
                                                            echo number_format($row->price * $row->quantity) ;
                                                        } else {
                                                            echo number_format($row->selling_price * $row->quantity) ;
                                                        }?></span>
                                                    </p>
                                                </td>
                                                <td class="min-width datetime">
                                                    <p><?=$table == 'stock' ? tglJamDate($row->updated_at) : tglJamDate($row->created_at);?>
                                                    </p>
                                                </td>
                                                <?php
                                                if (!empty($table) && $table != 'stock') {
                                                    ?>
                                                <td class="min-width">
                                                    <p class="text-danger text-center">
                                                        <?=$row->qty ?></span>
                                                    </p>
                                                </td>
                                                <?php
                                                }
                                                if ($session->get('user_data')['level'] == 1 && $table != "stock") {?>
                                                <td class="text-center">
                                                    <div class="action text-center">
                                                        <span class="text-danger ">
                                                            <?php
                                                            // echo $item;
                                                            // echo $row->status;
                                                            // if(empty($item) && $table == "stock") {
                                                            //     $edit = "href='".base_url().$table."/edit/".$row->item_id."'";
                                                            // } elseif(!empty($item) && $table == "stock") {
                                                            //     $edit = "href='".base_url()."stock_".$row->status."/edit/".$row->stock_id."'";
                                                            // } else {
                                                            //     $edit = "href='".base_url().$table."/edit/".$row->stock_id."'";
                                                            // }
                                                            $edit_id = $row->status == 'stock' ? $row->item_id : $row->stock_id;
                                                            $edit = "href='" . base_url() . $row->status . '/edit/' . $edit_id . "'";
                                                            // $edit = empty($item) && $table == "stock" ? "href='".base_url().$table."/edit/".$row->item_id."'"  : "href='".base_url().$table."/edit/".$row->stock_id."'";
                                                            // $edit = !empty($item) && $table == "stock" ? "href='".base_url()."stock_".$row->status."/edit/".$row->stock_id."'"  :  $edit;
                                                            ?>
                                                            <a class="text-success" <?=$edit;?>><i
                                                                    class="lni lni-pencil"></i></a> 
                                                                <?php if($table != 'stock') { ?> |
                                                            <a class="text-danger" onclick="return confirm('Apakah Anda yakin ingin menghapus?')"  href="<?=base_url(). 'stock/delete/'. $table. '/'. $row->stock_id . '/'. $row->item_id .'/'. $row->quantity ?>"><i
                                                                    class="lni lni-trash-can"></a></i>
                                                                    <?php } ?>
                                                        </span>
                                                    </div>
                                                </td>
                                            </tr>
                                            <?php } }?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<?php
// Show Footer
$order =  4;
define('ORDER', !empty($item) ? 4 : $order);
$columns = !empty($column) ? $column : '[0,1,2,3,4]';
define('COLUMNS', $table == 'stock_in' ? '[0,1,2,3,4,5]' : $columns);
function javascript() {
    ?>
<script>
var base_url = "<?=URL; ?>";
var orderby = "<?= ORDER; ?>";
console.log(orderby);
var pageshow = 50;
var exportcolumns = <?=COLUMNS; ?>;
</script>
<script src="<?=URL; ?>assets/js/jquery-3.6.0.min.js"></script>
<script src="<?=URL; ?>assets/js/autoComplete.min.js"></script>
<script src="<?=URL; ?>assets/js/autoComplete.js?v=1.1"></script>
<script type="text/javascript" charset="utf8" src="<?=URL; ?>assets/js/datatables.min.js"></script>
<script type="text/javascript" charset="utf8" src="<?=URL; ?>assets/js/bootstrap-datepicker.min.js"></script>
<script type="text/javascript" charset="utf8" src="<?=URL; ?>assets/js/moment.min.js"></script>
<script type="text/javascript" charset="utf8" src="<?=URL; ?>assets/js/datetime-moment.js"></script>
<script type="text/javascript" charset="utf8" src="<?=URL; ?>assets/js/jszip.min.js"></script>
<script type="text/javascript" charset="utf8" src="<?=URL; ?>assets/js/datatable.js?v=1.2"></script>
<script type="text/javascript" charset="utf8" src="<?=URL; ?>assets/js/script.js?v=1.1"></script>

<script>
create_autocomplete("#autocomplete01");
</script>
<?php
}
require_once 'template/footer.php';
?>