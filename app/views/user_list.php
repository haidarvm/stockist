<?php
require_once 'template/header.php';
?>
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
                                $form->a_button( base_url().'user/add', "Add User",'primary-btn');
                                ?>
                                <div class="table-wrapper table-responsive">
                                    <table class="table" id="stocklist">
                                        <thead>
                                            <tr>
                                                <th>
                                                    <h6>User Id</h6>
                                                </th>
                                                <th>
                                                    <h6>User Name</h6>
                                                </th>
                                                <th>
                                                    <h6>Level</h6>
                                                </th>
                                                <th>
                                                    <h6>Full Name</h6>
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
                                            <?php foreach($user as $row) { ?>
                                            <tr>
                                                <td>
                                                    <p><?=$row->user_id;?></p>
                                                </td>
                                                <td class="min-width">
                                                    <p><?=$row->username;?></p>
                                                </td>
                                                <td class="min-width">
                                                    <p><?=$row->level_id;?></p>
                                                </td>
                                                <td class="min-width">
                                                    <p><?=$row->full_name;?></p>
                                                </td>
                                                <td class="min-width">
                                                    <p><?=tglJamDate($row->created_at);?></p>
                                                </td>
                                                <?php if ($session->get('user_data')['level'] == 1) { ?>
                                                <td>
                                                    <div class="action">
                                                        <span class="text-danger">
                                                            <a class="text-success" href="<?=base_url().'user/edit/'.$row->user_id;?>"><i
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