<?php
function css() {
    ?>
<link rel="stylesheet" type="text/css" href="<?=URL; ?>assets/css/datatables.min.css">
<link rel="stylesheet" type="text/css" href="<?=URL; ?>assets/css/bootstrap-datepicker3.min.css">
<link rel="stylesheet" href="<?=URL;?>assets/css/autoComplete.min.css">
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
                                <h6 class="mb-10  mt-20"><?=str_unslug($page_title, '_');?> - <?= checkVal($item,'item_name');?> Available </h6>
                                <p class="text-sm mb-20">
                                    Available Stock All Item 
                                </p>
                                <div id="highcharts"></div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</section>
<?php
// GLOBAL $order;
$order =  $table == 'stock_in' ? 5 : 4;
define('URLPARAM', $current_url);
// echo URLPARAM;
define('dates', $table);
define('ORDER', !empty($item) ? 5 : $order);
$columns = !empty($column) ? $column : '[0,1,2,3,4]';
$columns = $table == 'stock_in' ? '[0,1,2,3,4,5]' : $columns;
function javascript() {
    ?>
<script>
var base_url = "<?=URL; ?>";
var orderby = "<?= ORDER; ?>";
console.log(orderby);
var pageshow = 50;
var exportcolumns = '.$columns.';
</script>
<script src="<?=URL; ?>assets/js/jquery-3.6.0.min.js"></script>
<script src="<?=URL;?>assets/js/autoComplete.min.js"></script>
<script type="text/javascript" charset="utf8" src="<?=URL; ?>assets/js/bootstrap-datepicker.min.js"></script>
<script type="text/javascript" charset="utf8" src="<?=URL; ?>assets/js/moment.min.js"></script>
<script type="text/javascript" charset="utf8" src="<?=URL; ?>assets/js/highstock.js"></script>
<script type="text/javascript" charset="utf8" src="<?=URL; ?>assets/js/export-data.js"></script>
<script type="text/javascript" charset="utf8" src="<?=URL; ?>assets/js/exporting.js"></script>
<script type="text/javascript" charset="utf8" src="<?=URL;?>assets/js/script.js?v=1.1"></script>
<script src="<?=URL;?>assets/js/autoComplete.js?v=1.1"></script>
<script>
$.getJSON('<?=URL?>api/stock/<?=URLPARAM;?>', function (data) {
    // Create the chart
        // console.log(data);
    Highcharts.stockChart('highcharts', {

        rangeSelector: {
            selected: 1
        },

        title: {
            text: 'Stock'
        },
        series: [{
            name: 'Stock',
            data: data,
            marker: {
                enabled: true,
                radius: 3
            },
            shadow: true,
            tooltip: {
                valueDecimals: 2
            }
        }]
    });
});
create_autocomplete("#autocomplete01");
</script>
<?php
}
require_once 'template/footer.php';
?>