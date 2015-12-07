<html lang="en">
<head>

  <meta charset="utf-8">

  <title>Shawn Her Many Horses <?php
if ( $page->id != 1 ){
echo ' - '.$page->title;
}
?></title>

  <meta name="description" content="">
  <meta name="author" content="">

  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link href="//fonts.googleapis.com/css?family=Source+Sans+Pro:400,700" rel="stylesheet" type="text/css">

  <link rel="stylesheet" href="<?php echo $config->urls->templates ?>styles/normalize.css">
  <link rel="stylesheet" href="<?php echo $config->urls->templates ?>styles/skeleton.css">
  <link rel="stylesheet" href="<?php echo $config->urls->templates ?>styles/jquery.fancybox.css">

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script> 
  <script src="<?php echo $config->urls->templates ?>scripts/splash.js"></script>
  <script src="<?php echo $config->urls->templates ?>scripts/main.js"></script>
  <script src="<?php echo $config->urls->templates ?>scripts/jquery.fancybox.js"></script>

  <link rel="icon" type="image/png" href="<?php echo $config->urls->templates ?>images/favicon.png">

</head>
<body>

  <div class="container">
    <div class="row">
      <div class="column">
        <h1 class="splash"><?php echo $pages->get("/")->title ?></h1>
        <?php if($page->editable()) echo "<p><a href='$page->editURL'>Edit</a></p>"; ?>
      </div>
    </div>
    <div class="row">
    <?php include ("navigation.inc"); ?>

      <div class="nine columns">

