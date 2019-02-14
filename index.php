<?php require_once($_SERVER['DOCUMENT_ROOT'].'includes/global.php');
error_reporting(E_ALL);
ini_set('display_errors', 'On');
 ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
	<meta name="google-site-verification" content="EFxYxWkV6PXOkt6pDt7Uy2PJmv3LMIfsorU0s-bDGCA" />
	<meta name="description" content="Real Estate settlement company offering residential and commercial settlements. We will settle at any location, even at your home or office.">
	<meta name="Keywords" content="Heritage Title, Annapolis, Title, Settlements, Real Estate, Closing, Annapolis, Escrow, Real Estate Title, Real Estate Settlement, Real Estate Closing, Title Insurance">
	<meta name="robots" content="index, follow">
	<title>Heritage Title - Servicing Maryland, DC and Virginia</title>

    <?php require_once($_SERVER['DOCUMENT_ROOT'].'page_includes/head.php'); ?>
</head>

<body class="fixed-sn page-index">
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'page_includes/header.php'); ?>

    <main>


        <!-- Content -->

        <?php require_once($_SERVER['DOCUMENT_ROOT'].'page_includes/slider.php'); ?>


        <div class="container index-cards">
            <!-- Three columns of text below the carousel -->
            <div class="row">
                <div class="col-lg-4 wow bounceInLeft mb-5">

                <!--Card-->
                <div class="card card-cascade wider">

                    <!--Card image-->
                    <div class="view gradient-card-header index-card1">
                        <h2 class="h2-responsive">Convenient Settlement Locations</h2>
                    </div>
                    <!--/Card image-->

                    <!--Card content-->
                    <div class="card-body text-left">

                        <p class="card-text">
                            <strong>Office Locations</strong> <br>
                            <?php for($i=0;$i<$officesCount;$i++) {
                                echo ''.$offices[$i]['heading'].'';
                                if($i < ($officesCount - 1)) {
                                    echo ' • ';
                                }
                            } ?>
                        </p>
                        <p class="card-text"><strong>WE COME TO YOU!</strong>
                            <br>
                            We will provide settlements in any location, even your home.
                        </p>
                            <a href="/locations.php" rel="canonical" class="orange-text mt-1 d-flex flex-row-reverse">
                            <h5 class="waves-effect p-2">Office Location Details <i class="fa fa-chevron-right"></i></h5>
                        </a>
                    </div>
                    <!--/.Card content-->

                </div>
                <!--/.Card-->

                </div>
                <!-- /.col-lg-4 -->
                <div class="col-lg-4 wow bounceInUp mb-5">
                    <!--Card-->
                    <div class="card card-cascade wider">

                        <!--Card image-->
                        <div class="view gradient-card-header index-card2">
                            <h2 class="h2-responsive">Residential and Commercial Settlements</h2>
                        </div>
                        <!--/Card image-->

                        <!--Card content-->
                        <div class="card-body text-center">

                            <p class="card-text">PURCHASES & REFINANCING<br><br>
                                IN MARYLAND, WASHINGTON, D.C., AND VIRGINIA<br><br>
                                FOR:<br>
                                Conventional | FHA | VA | USDA | Bank-Owned | Short Sales |
                                Foreclosures | HELOC’s | Reverse Mortgages | 203K</p>
                        </div>
                        <!--/.Card content-->

                    </div>
                    <!--/.Card-->
                </div>
                <!-- /.col-lg-4 -->
                <div class="col-lg-4 wow bounceInRight mb-5">
                    <!--Card-->
                    <div class="card card-cascade wider">

                        <!--Card image-->
                        <div class="view gradient-card-header index-card3">
                            <h2 class="h2-responsive">Get An<br>Instant Quote</h2>
                        </div>
                        <!--/Card image-->

                        <!--Card content-->
                        <div class="card-body text-left">

                            <p class="card-text">
                                <strong>Access our Closing Cost App</strong>
                                <br>
                                Features:<br>
                                Title Quotes<br>
                                Loan Estimate Quotes<br>
                                Seller Net Sheets<br>
                                Buyer Estimates<br>
                                ALTA Settlement Statements<br>
                                <button type="button" class="btn btn-default z-depth-3 show-quote float-right mt-4">Get Instant Quote</button>
                            </p>
                        </div>
                        <!--/.Card content-->

                    </div>
                    <!--/.Card-->
                </div>
                <!-- /.col-lg-4 -->
            </div>
            <!-- /.row -->
        </div>

        <div class="container-full index-why-use pt-5">

            <section>

                <!--Grid row-->
                <div class="row pt-2 mt-5 mb-5">

                    <div class="container">
                        <div class="row">

                            <!--Grid column-->
                            <div class="col-lg-5 mb-r center-on-small-only wow zoomIn">
                                <img src="/img/custom/page-why-use-us/home-buyers-web.jpg" alt="" class="img-fluid z-depth-5">
                            </div>
                            <!--Grid column-->

                            <!--Grid column-->
                            <div class="col-lg-7 pl-5 pr-5">

                                <!--Grid row-->
                                <div class="row pb-3 wow fadeInUp mb-4">
                                    <div class="col-2 col-md-1">
                                        <i class="fa fa-check-square-o fa-lg blue-text" aria-hidden="true"></i>
                                    </div>
                                    <div class="col-10">
                                        <h5 class="font-bold text-left mb-1 dark-grey-text">Guaranteed Lowest Fees! </h5>
                                    </div>
                                </div>
                                <!--Grid row-->

                                <!--Grid row-->
                                <div class="row pb-3 wow fadeInUp mb-4">
                                    <div class="col-2 col-md-1">
                                        <i class="fa fa-check-square-o fa-lg blue-text" aria-hidden="true"></i>
                                    </div>
                                    <div class="col-10">
                                        <h5 class="font-bold text-left mb-1 dark-grey-text">Closings performed anytime, anywhere</h5>
                                    </div>
                                </div>
                                <!--Grid row-->

                                <!--Grid row-->
                                <div class="row pb-3 wow fadeInUp mb-4">
                                    <div class="col-2 col-md-1">
                                        <i class="fa fa-check-square-o fa-lg blue-text" aria-hidden="true"></i>
                                    </div>
                                    <div class="col-10">
                                        <h5 class="font-bold text-left mb-1 dark-grey-text">$695 flat fee for all services *</h5>
                                    </div>
                                </div>
                                <!--Grid row-->

                                <!--Grid row-->
                                <div class="row pb-3 wow fadeInUp mb-4">
                                    <div class="col-2 col-md-1">
                                        <i class="fa fa-check-square-o fa-lg blue-text" aria-hidden="true"></i>
                                    </div>
                                    <div class="col-10">
                                        <h5 class="font-bold text-left mb-1 dark-grey-text">Rushed title orders</h5>
                                    </div>
                                </div>
                                <!--Grid row-->

                                <!--Grid row-->
                                <div class="row pb-3 wow fadeInUp">
                                    <div class="col-2 col-md-1">
                                        <i class="fa fa-check-square-o fa-lg blue-text" aria-hidden="true"></i>
                                    </div>
                                    <div class="col-10">
                                        <h5 class="font-bold text-left mb-1"><a href="javascript: void(0);" class="show-quote dark-grey-text">Estimated closing costs within one hour</a></h5>
                                    </div>
                                </div>
                                <!--Grid row-->

                            </div>
                            <!--Grid column-->

                        </div>

                    </div>

                </div>
                <!--Grid row-->

            </section>

        </div>


        <div class="container">
            <div class="row">

                <div class="col-12 col-lg-6 mt-5 mb-5 wow fadeInRight">

                    <!-- Card -->
                    <div class="card card-image" style="background-image: url(/img/custom/page-index/surprised2-web.jpg);">

                        <!-- Content -->
                        <div class="text-white text-center d-flex align-items-center rgba-stylish-strong py-5 px-4">
                            <div class="w-100">
                                <h5 class="orange-text"><strong>GUARANTEED LOWEST FEES!</strong></h5>
                                <h3 class="card-title pt-2 "><strong>$100 Best Rate Guarantee</strong></h3>
                                <p>We will beat any competitors' pricing by $100. You will not find a better deal for you title needs. *</p>
                                <a class="btn btn-default" href="/our-fees.html" rel="canonical"><i class="fa fa-clone left"></i> More Info</a>
                            </div>
                        </div>
                        <!-- Content -->
                    </div>
                    <!-- Card -->

                </div>

                <div class="col-12 col-lg-6 mt-5 mb-5 wow fadeInLeft">

                    <!-- Card -->
                    <div class="card card-image" style="background-image: url(/img/custom/page-index/surprised1-web.jpg);">

                        <!-- Content -->
                        <div class="text-white text-center d-flex align-items-center rgba-indigo-strong py-5 px-4">
                            <div class="w-100">
                                <h5 class="yellow-text"><strong>$695 FLAT FEE</strong></h5>
                                <h3 class="card-title pt-2"><strong>Purchases and Refis!</strong></h3>
                                <p>No gimmicks! One fee for all of our services, it's that simple!.**<br><br></p>
                                <a class="btn btn-default" href="/our-fees.html" rel="canonical"><i class="fa fa-clone left"></i> More Info</a>
                            </div>
                        </div>
                        <!-- Content -->
                    </div>
                    <!-- Card -->

                </div>

            </div>
            <!-- /.row -->
        </div>

        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="disclaimer">* This guarantee/discount does not apply to title insurance or 3rd party fees.
                        <br>
                        ** $695 does not include title insurance and 3rd party fees. No other discounts or coupons may be applied to this price.
                        </div>
                </div>
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


            $('.carousel').carousel({
                interval: 5000
            });

        });
    </script>
</body>

</html>
