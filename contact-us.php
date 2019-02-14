<?php require_once($_SERVER['DOCUMENT_ROOT'].'includes/global.php'); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
	<meta name="description" content="Contact Heritage Title. Located at 175 Admiral Cochrane Dr., Suite 111 Annapolis, MD 21401">
	<meta name="Keywords" content="Heritage Title, Annapolis, Maryland">
	<meta name="robots" content="index, follow">
    <title>Heritage Title</title>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'page_includes/head.php'); ?>
</head>
<body class="fixed-sn">
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'page_includes/header.php'); ?>

    <main>
    <!-- Content -->

    <div class="container-full">

            <div class="row">
                <div class="col-12 animated zoomIn">
                    <div class="google-map"><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3101.7980255294647!2d-76.55206658439364!3d38.97427965001326!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89b7f6c55d97ec4b%3A0xff704bd52bfa6a24!2sHeritage+Title!5e0!3m2!1sen!2sus!4v1515898203117" frameborder="0" style="border:0" allowfullscreen></iframe></div>
                </div>
            </div>

        </div>

        <div class="container">
            <!--Section heading-->
            <h2 class="section-heading h1 pt-4 mb-5 animated slideInRight">Contact us</h2>


            <div class="row">

                <!--Grid column-->
                <div class="col-md-4 col-lg-4 contact-locations animated zoomIn">
                    <h5 class="title mb-4 font-bold">Corporate Location</h5>
                    <!--Info-->
                    <p><i class="fa fa-map-marker mr-3"></i> 175 Admiral Cochrane Dr.<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Suite 111<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Annapolis, MD 21401</p>
                    <p><i class="fa fa-phone mr-3"></i> <a class="phone-link" href="tel:866-913-4095">(866) 913-4095</a></p>
                    <p><i class="fa fa-print mr-3"></i> (410) 571-6396 </p>
                </div>
                <!--Grid column-->

                <!--Grid column-->
                <div class="col-md-8 col-lg-8 animated zoomIn">
                    <div id="contact_form">
                        <div class="form-row">
                            <div class="col-12 md-form">
                                <i class="fa fa-user prefix blue-text"></i>
                                <input type="text" class="form-control required" id="contact_name">
                                <label for="contact_name">Name</label>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col-12 md-form">
                                <i class="fa fa-envelope prefix blue-text"></i>
                                <input type="email" class="form-control required" id="contact_email">
                                <label for="contact_email">Email</label>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col-12 md-form">
                                <i class="fa fa-phone-square prefix blue-text"></i>
                                <input type="text" class="form-control phone" id="contact_phone">
                                <label for="contact_phone">Phone</label>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col-12 md-form">
                                <i class="fa fa-pencil prefix blue-text"></i>
                                <textarea type="text" id="contact_message" class="md-textarea required" style="height: 100px"></textarea>
                                <label for="contact_message">Message</label>
                            </div>
						</div>
                        <button class="btn btn-default" id="submit_form">Send Message <i class="fa fa-paper-plane-o ml-1"></i></button>

                    </div>


                </div>
                <!--Grid column-->

            </div>

        </div>

    <!-- End Content -->
</main>
<?php
require_once($_SERVER['DOCUMENT_ROOT'].'page_includes/footer.php');
require_once($_SERVER['DOCUMENT_ROOT'].'page_includes/foot.php');
?>

    <script type="text/javascript">

        $(document).ready(function() {



        });

    </script>
</body>

</html>
