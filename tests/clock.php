<?php require_once($_SERVER['DOCUMENT_ROOT'].'includes/global.php'); ?>
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
        <!-- Content -->


<div class="md-form">
    <input placeholder="Selected time" type="text" id="input_starttime" class="form-control timepicker">
    <label for="input_starttime">Light version, 12hours</label>
</div>


        <!-- End Content -->
    </main>

<?php
require_once($_SERVER['DOCUMENT_ROOT'].'page_includes/footer.php');
require_once($_SERVER['DOCUMENT_ROOT'].'page_includes/foot.php');
?>

    <script type="text/javascript">

        $(document).ready(function() {


$('#input_starttime').pickatime({
    // 12 or 24 hour
    twelvehour: true,
});
            

        });

    </script>
</body>

</html>
