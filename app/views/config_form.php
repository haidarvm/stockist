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
                        $form->open(base_url().'config/save/'. $action);
                        $form->input_line("text",'config_name',"Config Name", '', !empty($config->config_name) ? $config->config_name : "",'',true );
                        $form->input_line("text",'value',"Value", '', !empty($config->value) ? $config->value : "",'',true );
                        $action == "update" ? $form->input_hidden('config_id',$config->config_id)  : "";
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
$javascript = '<script>            
              var base_url = "' . base_url() . '";
              </script>
              </script>';
require_once 'template/footer.php';
?>