<?php

// Init environtment
$content = array();
include('functions.php');

// Set page properties
title('Index');
stylesheets('index');
javascripts('index');

// Include layout
include("layouts/header.php");

?>

    <p>Hello world! This is PHP Website Boilerplate.</p>

<?php

include("layouts/footer.php");

?>
