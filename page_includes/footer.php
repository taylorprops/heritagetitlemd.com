<?php require_once($_SERVER['DOCUMENT_ROOT'].'page_includes/modals/success.php'); ?>
<!--Footer-->
<footer class="page-footer center-on-small-only wow fadeIn" data-wow-delay="0.6s">

    <!--Footer Links-->
    <div class="container">
        <div class="row my-4">

            <div class="col-md-3 col-lg-3">
                <h5 class="title mb-4 font-bold">Corporate Location</h5>
                <!--Info-->
                <p><i class="fa fa-map-marker mr-3"></i> 175 Admiral Cochrane Dr.<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Suite 111<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Annapolis, MD 21401</p>
                <p><i class="fa fa-phone mr-3"></i> (866) 913-4095</p>
                <p><i class="fa fa-print mr-3"></i> (410) 571-6396 </p>
            </div>

            <hr class="clearfix w-100 d-md-none">

            <div class="col-md-3 col-lg-3">
                <h5 class="title mb-4 font-bold">Other Locations</h5>
                <p>
                    <?php for($i=0;$i<$officesCount;$i++) { ?>
                    <a href="locations.php"><?php echo $offices[$i]['heading']; ?></a><br>
                    <?php } ?>
                </p>
            </div>

            <hr class="clearfix w-100 d-md-none">

            <div class="col-md-3 col-lg-3">
                <h5 class="title mb-4 font-bold">Office Hours</h5>
                <p>
                    Monday - Friday 9:00am - 5:00pm<br>
                    Evenings and weekends by appointment only.
                </p>
            </div>

            <hr class="clearfix w-100 d-md-none">

            <div class="col-md-3 col-lg-3 text-center">
                <h5 class="title mb-4 font-bold">Follow Us</h5>
                <!--Social buttons-->
                <div class="social-section mt-2 ">
                    <!--Facebook-->
                    <a type="button" class="btn-floating btn-small btn-fb" href="https://www.facebook.com/Heritage-Title-Ltd-189929308173692/"><i class="fa fa-facebook"></i></a>
                    <!--Linkedin-->
                    <a type="button" class="btn-floating btn-small btn-tw" href="https://www.linkedin.com/in/heritage-title-inc-37a00a92/"><i class="fa fa-linkedin"></i></a>
                </div>
            </div>


        </div>
    </div>
    <!--/.Footer Links-->

    <!--Copyright-->
    <div class="footer-copyright">
        <div class="container-fluid">
            © 2018 Copyright: <a href="http://heritagetitlemd.com"> Heritage Title, LTD </a>

        </div>
    </div>
    <!--/.Copyright-->

</footer>
<!--/.Footer-->
