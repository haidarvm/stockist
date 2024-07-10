<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="shortcut icon" href="assets/images/favicon.svg" type="image/x-icon" />
    <title><?= APP;?></title>

    <!-- ========== All CSS files linkup ========= -->
    <link rel="stylesheet" href="<?=URL;?>assets/css/bootstrap.min.css" />
    <link rel="stylesheet" href="<?=URL;?>assets/css/main.css" />
</head>

<body>
    <!-- ======== main-wrapper start =========== -->
    <main class="">
        <!-- ========== header start ========== -->

        <!-- ========== signin-section start ========== -->
        <section class="signin-section">
            <div class="container-fluid">
                <!-- ========== title-wrapper start ========== -->
                <!-- ========== title-wrapper end ========== -->

                <div class="row mt-80 justify-content-center">

                    <!-- end col -->


                    <div class="col-sm-8 col-lg-5">

                        <div class="signin-wrapper">
                            <div class="form-wrapper">
                                <div class="row">
                                    <div class="col-sm-8  mx-auto text-center">
                                        <img src="<?=base_url();?>assets/img/logo.png" width="220" alt="logo" />
                                        <h6 class="mb-15 mt-25">Login</h6>
                                        <p class="text-sm mb-25">
                                            <?=APP;?>
                                        </p>
                                        <?=$message;?>
                                    </div>
                                </div>
                                <div class="row">
                                    <?php 
                                        $form = new Bas_Form;
                                        $form->open(base_url().'auth/login');
                                        $form->input("text",'username',"User Name", 'username', '','' );
                                        $form->input("password",'password',"Password", 'password', '','' );
                                        $form->button("Login", " primary-btn");
                                        $form->close();
                                        ?>
                                </div>
                                <!-- end row -->
                                </form>
                            </div>
                        </div>
                    </div>
                    <!-- end col -->
                </div>
                <!-- end row -->
            </div>
        </section>
        <!-- ========== signin-section end ========== -->


        <?php
require_once 'template/footer.php';
?>