<html lang="en">
<head>

  <!-- Basic Page Needs
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  <meta charset="utf-8">

  <title>Shawn Her Many Horses <?php
if ( $page->id != 1 ){
echo ' - '.$page->title;
}
?></title>

  <meta name="description" content="">
  <meta name="author" content="">

  <!-- Mobile Specific Metas
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- FONT
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  <link href="//fonts.googleapis.com/css?family=Source+Sans+Pro:400,700" rel="stylesheet" type="text/css">

  <!-- CSS
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  <link rel="stylesheet" href="<?php echo $config->urls->templates ?>styles/normalize.css">
  <link rel="stylesheet" href="<?php echo $config->urls->templates ?>styles/skeleton.css">
  <link rel="stylesheet" href="<?php echo $config->urls->templates ?>styles/jquery.fancybox.css">

  <!-- JavaScript
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script> 
  <script src="<?php echo $config->urls->templates ?>scripts/splash.js"></script>
  <script src="<?php echo $config->urls->templates ?>scripts/main.js"></script>
  <script src="<?php echo $config->urls->templates ?>scripts/jquery.fancybox.js"></script>

  <!-- Favicon
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  <link rel="icon" type="image/png" href="<?php echo $config->urls->templates ?>images/favicon.png">

</head>
<body>

<script>
  window.fbAsyncInit = function() {
    FB.init({
      appId      : '731819200263970',
      xfbml      : true,
      version    : 'v2.3'
    });

// Place following code after FB.init call.

function onLogin(response) {
  if (response.status == 'connected') {
    FB.api('/me?fields=first_name', function(data) {
      var welcomeBlock = document.getElementById('fb-welcome');
      welcomeBlock.innerHTML = 'Hello, ' + data.first_name + '!';
    });
  }
}

FB.getLoginStatus(function(response) {
  // Check login status on load, and if the user is
  // already logged in, go directly to the welcome message.
  if (response.status == 'connected') {
    onLogin(response);
  } else {
    // Otherwise, show Login dialog first.
    FB.login(function(response) {
      onLogin(response);
    }, {scope: 'user_friends, email'});
  }
});

    // ADD ADDITIONAL FACEBOOK CODE HERE
  };

  (function(d, s, id){
     var js, fjs = d.getElementsByTagName(s)[0];
     if (d.getElementById(id)) {return;}
     js = d.createElement(s); js.id = id;
     js.src = "//connect.facebook.net/en_US/sdk.js";
     fjs.parentNode.insertBefore(js, fjs);
   }(document, 'script', 'facebook-jssdk'));
</script>

  <!-- Primary Page Layout
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
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
<h1 id="fb-welcome"></h1>

<?php include("footer.inc"); ?>
