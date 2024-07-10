<!-- ========== footer start =========== -->
<div class="row mt-80 justify-content-center">
    <!-- end col -->
    <div class="col-lg-5">
        <footer class="footer">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-6 order-last order-md-first">
                        <div class="copyright text-center text-md-start">
                            <p class="text-sm">
                                Designed and Developed by
                                <a href="https://plainadmin.com" rel="nofollow" target="_blank">
                                    PT Hyd-ant Inovasi Semesta hyd-ant.co.id
                                </a>
                            </p>
                        </div>
                    </div>
                    <!-- end col-->
                    <div class="col-md-6">
                        <div class="
                  terms
                  d-flex
                  justify-content-center justify-content-md-end
                ">
                            <a href="#0" class="text-sm">Term & Conditions</a>
                            <a href="#0" class="text-sm ml-15">Privacy & Policy</a>
                        </div>
                    </div>
                </div>
                <!-- end row -->
            </div>
            <!-- end container -->
        </footer>
    </div>
    <!-- ========== footer end =========== -->
    </main>
    <!-- ======== main-wrapper end =========== -->

    <!-- ========= All Javascript files linkup ======== -->
    <script src="<?=base_url();?>assets/js/bootstrap.bundle.min.js"></script>
    <script src="<?=base_url();?>assets/js/polyfill.js"></script>
    <script src="<?=base_url();?>assets/js/main.js"></script>
    <script src="<?=URL;?>assets/js/jquery-3.6.0.min.js"></script>
    <script>
    $.getJSON("<?=base_url();?>api/alert", function(result) {
        $(".quantity").html(result.length)
        $.each(result, function(i, field) {
            $(".notif").append("<li><a href=\"#"+i+"\"><div class=\"content\"><h6>" +field.item_name + "</h6><p> QTY = " + field.quantity+ "</p></div></a></li> ");
        });
    });
    </script>
    <?php function_exists('javascript') ? javascript() : ''; ?>
    <!--  END Load  js for this page -->
    </body>

    </html>