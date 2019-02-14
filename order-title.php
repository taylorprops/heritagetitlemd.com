<?php require_once($_SERVER['DOCUMENT_ROOT'].'includes/global.php'); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Heritage Title</title>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'page_includes/head.php'); ?>
</head>
<body class="fixed-sn">
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'page_includes/header.php'); ?>
    <main>

        <!-- Page Intro -->
        <div class="container-full">
            <div class="row">
                <div class="col-12">
                    <div class="page-intro-small">
                        <div class="view hm-stylish-light">
                            <img src="/img/custom/page-intro/house-web.jpg" class="img-fluid page-intro-img" alt="">
                            <div class="mask">
                                <div class="container">
                                    <div class="carousel-caption text-left">
                                        <h1 class="animated bounceInRight">Our Fees</h1>
                                        <p class="animated flipInY">GUARANTEED to be the lowest!</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Page Intro -->

        <!-- Content -->



        <!-- End Content -->
    </main>

<?php
require_once($_SERVER['DOCUMENT_ROOT'].'page_includes/footer.php');
require_once($_SERVER['DOCUMENT_ROOT'].'page_includes/foot.php');
?>

    <script type="text/javascript">

        $(document).ready(function() {

            function street_search(search_ele_id) {
                var autocomplete = new google.maps.places.Autocomplete($('#'+search_ele_id)[0], {});
                var results = [];
                google.maps.event.addListener(autocomplete, 'place_changed', function() {
                    var place = autocomplete.getPlace();
                    results['street_number'] = place.address_components[0].short_name;
                    results['street'] = place.address_components[1].short_name;
                    results['city'] = place.address_components[2].short_name;
                    results['state'] = place.address_components[5].short_name;
                    results['zip'] = place.address_components[7].short_name;
                    results['county'] = place.address_components[4].short_name;
                    return results;
                });
            }



        });

    </script>
</body>

</html>
