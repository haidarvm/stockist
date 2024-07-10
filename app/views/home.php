<?php
function css() {
    ?>
<link rel="stylesheet" type="text/css" href="<?=URL; ?>assets/css/all.min.css">
<style>
</style>

<?php
}
require_once 'template/header.php';
?>
<section class="section">
    <div class="container-fluid">
        <?php require_once 'template/title_breadcrumb.php'; ?>
        <div class="tables-wrapper">
            <div class="card-style mb-30">
                <div class="row ">
                    <div class="col-sm-3">
                        <div class="card text-center  mb-3">
                            <div class="card-body" style="background-color: lightgreen">
                                <span style="font-size: 50px; color: Tomato;">
                                <i class="fa-solid fa-arrow-down-wide-short fa-2xl"></i></span>
                            </div>
                            <a href="<?=URL?>stock/new" class="card-footer text-dark bg-transparent stretched-link">Update Stock</a>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="card text-center  mb-3">
                            <div class="card-body" style="background-color: lightblue">
                                <span style="font-size: 50px; color: Dodgerblue;">
                                <i class="fa-solid fa-arrow-down-up-across-line fa-2xl"></i></span>
                            </div>
                            <a href="<?=URL?>stock/new_multi" class="card-footer text-dark bg-transparent stretched-link">Update Stock Multi</a>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="card text-center  mb-3">
                            <div class="card-body" style="background-color: lightcyan">
                                <span style="font-size: 50px; color: Tomato;">
                                <i class="fa-solid fa-cubes-stacked fa-2xl"></i></span>
                            </div>
                            <a href="<?=URL?>item" class="card-footer text-dark bg-transparent stretched-link">List Item</a>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="card text-center  mb-3">
                            <div class="card-body" style="background-color: lightgrey">
                                <span style="font-size: 50px; color: Mediumslateblue;"><i
                                        class="fa-solid fa-users fa-2xl"></i></span>
                            </div>
                            <a href="<?=URL?>user" class="card-footer text-dark bg-transparent stretched-link">List User</a>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="card text-center  mb-3">
                            <div class="card-body" style="background-color: paleturquoise">
                                <span style="font-size: 50px; color: Tomato;"><i
                                        class="fa-solid fa-table fa-2xl"></i></span>
                            </div>
                            <a href="<?=URL?>stock" class="card-footer text-dark bg-transparent stretched-link">Report Stock Availble</a>
                        </div>
                    </div>

                    <div class="col-sm-3">
                        <div class="card text-center  mb-3">
                            <div class="card-body" style="background-color: moccasin">
                                <span style="font-size: 50px; color: Tomato;"><i
                                        class="fa-solid fa-table-cells fa-2xl"></i></span>
                            </div>
                            <a href="<?=URL?>stock_in" class="card-footer text-dark bg-transparent stretched-link">Report Stock In</a>
                        </div>
                    </div>

                    <div class="col-sm-3">
                        <div class="card text-center  mb-3">
                            <div class="card-body" style="background-color: orchid">
                                <span style="font-size: 50px; color: darkturquoise;"><i
                                        class="fa-solid fa-table-columns fa-2xl"></i></span>
                            </div>
                            <a href="<?=URL?>stock_out" class="card-footer text-dark bg-transparent stretched-link">Report Stock Out</a>
                        </div>
                    </div>

                    <div class="col-sm-3">
                        <div class="card text-center  mb-3">
                            <div class="card-body" style="background-color: palevioletred">
                                <span style="font-size: 50px; color: lightgreen;"><i
                                        class="fa-solid fa-table-list fa-2xl"></i></span>
                            </div>
                            <a href="<?=URL?>stock_all" class="card-footer text-dark bg-transparent stretched-link">Report Stock All</a>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="card text-center  mb-3">
                            <div class="card-body" style="background-color: lightpink">
                                <span style="font-size: 50px; color: Tomato;">
                                <i class="fa-solid fa-chart-column fa-2xl"></i></span>
                            </div>
                            <a href="<?=URL?>chart/stock" class="card-footer text-dark bg-transparent stretched-link">Chart Stock Available</a>
                        </div>
                    </div>

                    <div class="col-sm-3">
                        <div class="card text-center  mb-3">
                            <div class="card-body" style="background-color: lightskyblue">
                                <span style="font-size: 50px; color: lightseagreen;"><i
                                        class="fa-solid fa-chart-line fa-2xl"></i></span>
                            </div>
                            <a href="<?=URL?>chart/stock_in" class="card-footer text-dark bg-transparent stretched-link">Chart Stock IN</a>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="card text-center  mb-3">
                            <div class="card-body" style="background-color: lightslategray">
                                <span style="font-size: 50px; color: lightpink;"><i
                                        class="fa-solid fa-chart-bar fa-2xl"></i></span>
                            </div>
                            <a href="<?=URL?>chart/stock_out" class="card-footer text-dark bg-transparent stretched-link">Chart Stock Out</a>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="card text-center  mb-3">
                            <div class="card-body" style="background-color: lightyellow">
                                <span style="font-size: 50px; color: Tomato;"><i
                                        class="fa-solid fa-chart-gantt fa-2xl"></i></span>
                            </div>
                            <a href="<?=URL?>chart/stock_all" class="card-footer text-dark bg-transparent stretched-link">Chart Stock All</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</section>

<?php
function javascript() {
    ?>
<script>
var base_url = "<?=URL;?>";
</script>
<script src="<?=URL;?>assets/js/jquery-3.6.0.min.js"></script>
<script src="<?=URL;?>assets/js/all.min.js"></script>
<script>
</script>
<?php
}
require_once 'template/footer.php';
?>