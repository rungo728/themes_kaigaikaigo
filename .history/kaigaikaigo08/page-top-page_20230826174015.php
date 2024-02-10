<?php
/*
Template Name: top-page
*/
// Rest of code
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- pre -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@400;700&display=swap" rel="stylesheet">

  <!-- css -->
  <link rel="stylesheet" href="<?= get_template_directory_uri() ?>/css/common.css">
  <link rel="stylesheet" href="<?= get_template_directory_uri() ?>/css/home.css">
  <!-- js -->
  <link rel="dns-prefetch" href="https://ajax.googleapis.com">
  <link rel="preload" as="script" href="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="<?= get_template_directory_uri() ?>/js/common.js" type="text/javascript"></script>
  <title>TOP-page</title>
</head>
<body>
  topです
<?php get_footer(); ?>
</body>
</html>