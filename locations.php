<?php require_once($_SERVER['DOCUMENT_ROOT'].'includes/global.php'); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
	<meta name="description" content="Conveniently located offices through out the Baltimore-Washington metropolitan areas. We will settle at any location, even at your home or office.">
	<meta name="Keywords" content="Real Estate Title, Real Estate Settlement, Locations, Silver Spring, Waldorf, Largo, Annapolis, Baltimore, Rockville">
	<meta name="robots" content="index, follow">
	<title>Heritage Title</title>

    <?php require_once($_SERVER['DOCUMENT_ROOT'].'page_includes/head.php'); ?>
</head>
<body class="fixed-sn">
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'page_includes/header.php'); ?>
    <main>

        <div class="container locations-map">

            <div class="row">

                <div class="col-12">
                    <!--Card-->
                    <div class="card card-cascade wider reverse my-4 wow zoomIn">

                        <!--Card image-->
                        <div class="view google-view">
                            <div class="google-maps-holder">
                                <iframe class="custom-google-map" src="https://www.google.com/maps/d/embed?mid=1Jiz_-IRrldUJ3K55tJFQm40VAssDH-RZ" width="100%" height="450"
								></iframe>
                            </div>

                        </div>
                        <!--/Card image-->

                        <!--Card content-->
                        <div class="card-body text-center locations-card wow zoomIn">
                            <!--Title-->
                            <h4 class="card-title"><strong>Our Locations</strong></h4>

                            <p>Conveniently located offices through out the Baltimore-Washington metropolitan areas.</p>
                            <h3>We will also come to you!</h3>
                            <p>We will travel to your home, office or just about anywhere.</p>

                        </div>
                        <!--/.Card content-->

                    </div>
                    <!--/.Card-->

                </div>

            </div>

        </div>

        <!-- Page Intro -->
        <div class="container-full locations-page-intro">
            <div class="row">
                <div class="col-12">
                    <div class="page-intro-small z-depth-3">
                        <div class="view hm-stylish-light">
                            <img src="/img/custom/page-intro/house-web.jpg" class="img-fluid page-intro-img" alt="">
                            <div class="mask">
                                <div class="container">
                                    <div class="carousel-caption text-left">
                                        <h1 class="animated bounceInRight">Locations</h1>
                                        <p class="animated flipInY">View our convenient locations</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Page Intro -->

        <div class="container locations mt-5">

            <div class="row">

                <?php for($i=0;$i<$officesCount;$i++) {
                    if($i == 0) {
                        $animation = 'slideInLeft';
                    } else if($i == 1) {
                        $animation = 'slideInUp';
                    } else if($i == 2) {
                        $animation = 'slideInRight';
                    } else if($i ==3) {
                        $animation = 'slideInLeft';
                    } else if($i == 4) {
                        $animation = 'slideInRight';
                    }
                    ?>

                <div class="col-12 col-md-6 col-lg-4 mt-3 mb-5 wow <?php echo $animation; ?> mx-auto">

                    <div class="card card-cascade wider">

                        <!--Card image-->
                        <div class="view google-view-small">
                            <iframe class="map_div" width="100%" height="200" frameborder="0" src="https://www.google.com/maps/embed/v1/place?key=AIzaSyA8Zq5Euy4JliJ3VrOz91euB_9vSNaHcws&q=<?php echo $offices[$i]['street'].'+'.$offices[$i]['city'].'+'.$offices[$i]['state'].'+'.$offices[$i]['zip']; ?>" allowfullscreen> </iframe>

                        </div>
                        <!--/Card image-->

                        <!--Card content-->
                        <div class="card-body text-center">
                            <!--Title-->
                            <h4 class="card-title"><strong><?php echo $offices[$i]['heading']; ?></strong></h4>
                            <h5 class="indigo-text"><strong><?php echo $offices[$i]['building']; ?></strong></h5>

                            <p class="card-text"><?php echo $offices[ $i ][ 'street' ] . '<br>' . $offices[ $i ][ 'city' ] . ', ' . $offices[ $i ][ 'state' ] . ' ' . $offices[ $i ][ 'zip' ]; ?></p>

                        </div>
                        <!--/.Card content-->

                    </div>

                </div>
                <?php } ?>

            </div>

        </div>

        <!-- Content -->







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
