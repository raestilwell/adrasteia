<!DOCTYPE html>
<head>
<title>The Isles of Adrasteia | A Free MUD RPG | Donate</title>
<link rel="icon" href="../../resources/images/layout/logo/favicon.png" type="image/x-icon">

<!--Meta Tags-->
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="The Isles of Adrasteia is a free Multi-User Dungeon (MUD) role playing game. This online, browser-based RPG is a Teen rated online game.">
<meta name="keywords" content="free online rpg, web based, role playing game, adrasteia, the isles of, muds, mucks, multiplayer, free rpg, online game, free online multiplayer game, browser-based rpg, fantasy rpg, fantasy role playing game">

<!-- CSS -->
	<link rel="stylesheet" type="text/css" href="../../resources/css/normalize.css">
	<link rel="stylesheet" type="text/css" href="../../resources/css/master.css">

<!--Fonts -->
<link href='http://fonts.googleapis.com/css?family=Alegreya' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>

<!-- jQuery -->
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
 <script type="text/javascript" language="javascript" charset="utf-8" src="../../resources/js/nav.js"></script>

  <!--Google Analytics-->
 <script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-64207527-1', 'auto');
  ga('send', 'pageview');

</script>
</head>

<body>

<!-- Header Content-->
<?php
include('../../template/header.php');
?>

<div class="wrap">

<div class="scroll">
<img src="../../resources/images/layout/main/scrolltop.png"/>
</div>


<!--Left Colum Content-->
<?php
include('../../template/left-col.php');
?>

<!--Main Content-->

<section class="main left">
<div id="animate">
<h1>We appreciate the help!</h1>

<p>We're dedicated to keeping the Isles of Adrasteia a free place where writers can push their creativity to the limits and beyond. Unfortunately, our rent for this home isn't free, and any and all donations from the players go straight to helping fund the game for the upcoming year!</p>

<br/>

<center>
<form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">
<input type="hidden" name="cmd" value="_s-xclick">
<input type="hidden" name="hosted_button_id" value="MSA9PLHL7RU84">
<input type="image" src="https://www.paypalobjects.com/en_US/i/btn/btn_donateCC_LG.gif" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
<img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1">
</form>
</center>



</div>
</section>

<!--Right Column Content-->
<?php
include('../../template/right-col.php');
?>


<div class="scroll" style="clear:both;">
<img src="../../resources/images/layout/main/scrollbottom.png"/>
</div>

</div>

<!--Footer Content-->
<?php
include('../../template/footer.php');
?>


</body>
</html>