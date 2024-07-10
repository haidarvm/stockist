<?php
function css() {
    ?>
<link rel="stylesheet" type="text/css" href="<?=URL; ?>assets/css/datatables.min.css">
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
                                <h6 class="mb-10"><?=$page_title;?></h6>
                                <?php
                                $form = new Bas_Form;
                                $form->a_button( base_url().'item/add', "Add item",'primary-btn mb-10');
                                ?>
                                <div class="table-wrapper table-responsive">
                                    <table class="table" id="datatable">
                                        <thead>
                                            <tr>
                                                <th>
                                                    <h6>item Id</h6>
                                                </th>
                                                <th>
                                                    <h6>item Name</h6>
                                                </th>
                                                <th>
                                                    <h6>Price</h6>
                                                </th>
                                                <th>
                                                    <h6>item Code</h6>
                                                </th>
                                                <th>
                                                    <h6>Category</h6>
                                                </th>
                                                <th>
                                                    <h6>Location</h6>
                                                </th>
                                                <th>
                                                    <h6>Create Date</h6>
                                                </th>
                                                <?php if ($session->get('user_data')['level'] == 1) { ?>
                                                <th>
                                                    <h6>Action</h6>
                                                </th>
                                                <?php } ?>
                                            </tr>
                                            <!-- end table row-->
                                        </thead>
                                        <tbody>
                                            <?php foreach($item as $row) { ?>
                                            <tr>
                                                <td >
                                                    <p><?=$row->item_id;?></p>
                                                </td>
                                                <td class="min-width">
                                                    <p><?=$row->itemname;?></p>
                                                </td>
                                                <td >
                                                    <p><?=number_format($row->price);?></p>
                                                </td>
                                                <td class="min-width">
                                                    <p><?=$row->item_code;?></p>
                                                </td>
                                                <td class="min-width">
                                                    <p><?=$row->category_name;?></p>
                                                </td>
                                                <td class="min-width">
                                                    <p><?=$row->location;?></p>
                                                </td>
                                                <td class="min-width">
                                                    <p><?=tglJamDate($row->created_at);?></p>
                                                </td>
                                                <?php if ($session->get('user_data')['level'] == 1) { ?>
                                                <td>
                                                    <div class="action">
                                                        <span class="text-danger">
                                                            <a class="text-success"
                                                                href="<?=base_url().'item/edit/'.$row->item_id;?>"><i
                                                                    class="lni lni-pencil"></i></a> |
                                                            <a class="text-danger" href="#"><i
                                                                    class="lni lni-trash-can"></a></i>
                                                        </span>
                                                    </div>
                                                </td>
                                                <?php } ?>
                                            </tr>
                                            <?php } ?>
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
$order = 5;
define('ORDER', 5);
function javascript() {
    ?>
    <script>            
var base_url = "<?=URL;?>";
var orderby = "<?= ORDER;?>";
var pageshow = 50;
var exportcolumns = [0,1,2,3,4];
</script>
<script src="<?=URL;?>assets/js/jquery-3.6.0.min.js"></script>
<script type="text/javascript" charset="utf8" src="<?=URL;?>assets/js/datatables.min.js"></script>
<script type="text/javascript" charset="utf8" src="<?=URL;?>assets/js/moment.min.js"></script>
<script type="text/javascript" charset="utf8" src="<?=URL;?>assets/js/datetime-moment.js"></script>
<script type="text/javascript" charset="utf8" src="<?=URL;?>assets/js/datatable.js"></script>
<?php
}
require_once 'template/footer.php';
?>