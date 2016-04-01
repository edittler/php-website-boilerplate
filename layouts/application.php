<!doctype html>
<html class="no-js">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title><?php echo has_content('title') ? yield_content('title', false) . ' - ' : ''; ?>[SITE NAME]</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Place favicon.ico in the root directory -->

    <link rel="stylesheet" href="css/application.css">
    <?php yield_content('stylesheets'); ?>

</head>

<body>
    <?php yield_content(); ?>

    <script src="https://code.jquery.com/jquery-2.2.2.min.js"
            integrity="sha256-36cp2Co+/62rEAAYHLmRCPIych47CvdM+uTBJwSzWjI="
            crossorigin="anonymous"></script>
    <script>
        window.jQuery || document.write('<script src="js/vendor/jquery-2.2.2.min.js"><\/script>')
    </script>
    <script src="js/application.js"></script>
    <?php yield_content('javascripts'); ?>

    <?php if ($config['google_analytics_web_property_id'] != ''): ?>
      <script>
        var _gaq=[['_setAccount','<?php echo $config['google_analytics_web_property_id']; ?>'],['_trackPageview']];
        (function(d,t){var g=d.createElement(t),s=d.getElementsByTagName(t)[0];
        g.src=('https:'==location.protocol?'//ssl':'//www')+'.google-analytics.com/ga.js';
        s.parentNode.insertBefore(g,s)}(document,'script'));
      </script>
    <?php endif; ?>

</body>

</html>
