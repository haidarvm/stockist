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
                        $form->open(base_url().'user/save/'. $action);
                        $form->input_line("text",'username',"Username", '', !empty($user->username) ? $user->username : "",'',true );
                        $form->input_line("text",'full_name',"Full Name", '', !empty($user->full_name) ? $user->full_name : "",'',true );
                        $form->input_line("text",'level_id',"Level Id", '', !empty($user->level_id) ? $user->level_id : "",'',true );
                        $form->input_line("password",'password',"Password",'','','',$action == "insert" ? true : false);
                        $action == "update" ? $form->input_hidden('user_id',$user->user_id)  : "";
                        $form->button('Save', 'primary-btn ');
                        $form->a_button( base_url().'user', "Cancel",'danger-btn-outline');
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