<!DOCTYPE html>
<head>
<title>The Isles of Adrasteia | A Free MUD RPG | Register</title>
<link rel="icon" href="resources/images/layout/logo/favicon.png" type="image/x-icon">

<!--Meta Tags-->
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="The Isles of Adrasteia is a free Multi-User Dungeon (MUD) role playing game. This online, browser-based RPG is a Teen rated online game.">
<meta name="keywords" content="free online rpg, web based, role playing game, adrasteia, the isles of, muds, mucks, multiplayer, free rpg, online game, free online multiplayer game, browser-based rpg, fantasy rpg, fantasy role playing game">

<!-- CSS -->
	<link rel="stylesheet" type="text/css" href="resources/css/normalize.css">
	<link rel="stylesheet" type="text/css" href="resources/css/master.css">

<!--Fonts -->
<link href='http://fonts.googleapis.com/css?family=Alegreya' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>

<!-- jQuery -->
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
 <script type="text/javascript" language="javascript" charset="utf-8" src="resources/js/nav.js"></script>

 <script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-64207527-1', 'auto');
  ga('send', 'pageview');

</script>
 
<style>
	h4, h1{
		text-align: center;
		margin: 0 auto;
	}
</style> 
</head>

<body>

<!-- Header Content-->
<?php
include('template/header.php');
?>

<div class="wrap">

<div class="scroll">
<img src="resources/images/layout/main/scrolltop.png"/>
</div>


<!--Left Colum Content-->
<?php
include('template/left-col.php');
?>

<!--Main Content-->

<section class="main left">
<div id="animate">

<?
require("scripts/function.s");
$IP = $_SERVER['REMOTE_ADDR'];

$IPcheck = explode(".",$IP);
$IPcheck[3] = "*";
$IPcheck = implode(".",$IPcheck);

$username = $_POST['username'];
$pass1 = $_POST['pass1'];
$pass2 = $_POST['pass2'];
$race = $_POST['race'];
$iclass = $_POST['iclass'];
$deity = $_POST['deity'];
$gender = $_POST['gender'];
$eyes = $_POST['eyes'];
$hair = $_POST['hair'];
$skin = $_POST['skin'];
$height = $_POST['height'];
$build = $_POST['build'];

if ($username == "") die("<h4>You did not enter a username. Please click Back on your browser and do so.</h4>
				<br/>
			<center><img src=\"resources/images/illustrations/hobbit.png\" style=\"padding-top: 50px;\"/></center>");

$username = strtolower($username);
$username = ucwords($username);

for ($i = 0; $i < strlen($username); $i++) if (!(ord($username[$i]) >= 97 && ord($username[$i]) <= 122) && !(ord($username[$i]) >= 65 && ord($username[$i]) <= 90)) die("Your username may only contain letters. Please click Back on your browser and correct it.<BR>");

if (isuser($username)) die("<h4>That username is already in use. Please click Back on your browser and use a different one.</h4>
				<br/>
			<center><img src=\"resources/images/illustrations/hobbit.png\" style=\"padding-top: 50px;\"/></center>");

if (strlen($username) > 15) die("<h4>Your username may not be more than 15 characters long. Please click Back on your browser and correct it.</h4>
				<br/>
			<center><img src=\"resources/images/illustrations/hobbit.png\" style=\"padding-top: 50px;\"/></center>");

if (strlen($username) < 3) die("<h4>Your username may not be less than 3 characters long. Please click Back on your browser and correct it.</h4>
				<br/>
			<center><img src=\"resources/images/illustrations/hobbit.png\" style=\"padding-top: 50px;\"/></center>");

if ($pass1 !== $pass2) die("<h4>Your passwords did not match. Please click Back on your browser and correct it.</h4>
				<br/>
			<center><img src=\"resources/images/illustrations/hobbit.png\" style=\"padding-top: 50px;\"/></center>");

if (strlen($pass1) < 4) die("<h4>Your password must be at least four characters long. Please click Back on your browser and correct it.</h4>
				<br/>
			<center><img src=\"resources/images/illustrations/hobbit.png\" style=\"padding-top: 50px;\"/></center>");

if ($pass1 == "") die("<h4>You did not enter a password. Please click Back on your browser and do so.</h4>
				<br/>
			<center><img src=\"resources/images/illustrations/hobbit.png\" style=\"padding-top: 50px;\"/></center>");

switch($race){
	case 1:
		$irace = "custom";
		$iflags = "(Undercommon)";
		break;
	case 2:
		$irace = "avian";
		$iflags = "(Avian)(fly)(levitate)(battle)";
		break;
	case 3:
		$irace = "human";
		$iflags = "(Undercommon)(brawl)(survival)";
		break;
	case 4:
		$irace = "elf";
		$iflags = "(Elvish)(archery)(agility)(stealth)";
		break;
	case 5:
		$irace = "lycan";
		$iflags = "(Undercommon)(transform)(brawl)(might)";
		break;
	case 6:
		$irace = "dwarf";
		$iflags = "(Dwarvish)(craft)(dig)(forge)";
		break;
	case 7:
		$irace = "hobbit";
		$iflags = "(Undercommon)(brew)(craft)(forge)(sneak)";
		break;
	case 8:
		$irace = "fae";
		$iflags = "(Faelen)(dust)(fly)(levitate)(shift)";
		break;
	case 9:
		$irace = "dragon";
		$iflags = "(Draken)(breathattack)(fly)(illusion)(levitate)(might)";
		break;
	case 10:
		$irace = "half-elf";
		$iflags = "(Undercommon)(archery)(agility)(forage)(stealth)";
		break;
	case 11:
		$irace = "vampire";
		$iflags = "(sneak)(mindcontrol)(might)(speed)";
		break;
	case 12:
		$irace = "nymph";
		$iflags = "(alchemy)(illusion)(seduction)(waterwalk)";
		break;
	case 13:
		$irace = "drow";
		$iflags = "(Drow)(battle)(forge)(torture)";
		break;
	case 14:
		$irace = "deep elf";
		$iflags = "(Delanian)(battle)(forge)(tattoo)";
		break;
	default:
		die("<h4>You did not select a race. Click Back on your browser and do so.</h4>
						<br/>
			<center><img src=\"resources/images/illustrations/hobbit.png\" style=\"padding-top: 50px;\"/></center>");
}

switch($iclass){
	case 1:
		$iclass = "custom";
		break;
	case 2:
		$iclass = "artisan";
		break;
	case 3:
		$iclass = "assassin";
		break;
	case 4:
		$iclass = "bard";
		break;
	case 5:
		$iclass = "druid";
		break;
	case 6:
		$iclass = "illusionist";
		break;
	case 7:
		$iclass = "mage";
		break;
	case 8:
		$iclass = "knight";
		break;
	case 9:
		$iclass = "paladin";
		break;
	case 10:
		$iclass = "priest";
		break;
	case 11:
		$iclass = "ranger";
		break;
	case 12:
		$iclass = "rogue";
		break;
	case 13:
		$iclass = "thief";
		break;
	case 14:
		$iclass = "warrior";
		break;
	default:
		die("<h4>You did not select a class. Click Back on your browser and do so.</h4>
						<br/>
			<center><img src=\"resources/images/illustrations/hobbit.png\" style=\"padding-top: 50px;\"/></center>");
}

switch($deity){
	case 1:
		$ideity = "none";
		break;
	case 2:
		$ideity = "faithless";
		break;
	case 3:
		$ideity = "Astra";
		break;
	case 4:
		$ideity = "Nox";
		break;
	case 5:
		$ideity = "Chron";
		break;
	case 6:
		$ideity = "Nyx";
		break;
	case 7:
		$ideity = "Diiroehn";
		break;
	case 8:
		$ideity = "Sela";
		break;
	case 9:
		$ideity = "Jirhai";
		break;
	case 10:
		$ideity = "Meran";
		break;
	case 11:
		$ideity = "Valdek";
		break;
	case 12:
		$ideity = "Zagreus";
		break;
	case 13:
		$ideity = "Seria";
		break;
	case 14:
		$ideity = "Wraith";
		break;
	default:
		die("<h4>You did not select a deity. Click Back on your browser and do so.</h4>
						<br/>
			<center><img src=\"resources/images/illustrations/hobbit.png\" style=\"padding-top: 50px;\"/></center>");
}

switch($gender){
	case 1:
		$igender = "female";
		break;
	case 2:
		$igender = "male";
		break;
	case 3:
	$igender = "none";
	break;
	default:
		die("<h4>You did not select a gender. Click Back on your browser and do so.</h4>
						<br/>
			<center><img src=\"resources/images/illustrations/hobbit.png\" style=\"padding-top: 50px;\"/></center>");
}
switch($eyes){
	case 1:
		$ieyes = "black";
		break;
	case 2:
		$ieyes = "blue";
		break;
	case 3:
		$ieyes = "green";
		break;
	case 4:
		$ieyes = "grey";
		break;
	case 5:
		$ieyes = "hazel";
		break;
	case 6:
		$ieyes = "orange";
		break;
	case 7:
		$ieyes = "red";
		break;
	case 8:
		$ieyes = "yellow";
		break;
	case 9:
		$ieyes = "brown";
		break;
	case 10:
		$ieyes = "violet";
		break;
	default:
		die("<h4>You did not select an eye color. Click Back on your browser and do so.</h4>
			<br/>
			<center><img src=\"resources/images/illustrations/hobbit.png\" style=\"padding-top: 50px;\"/></center>");
}

switch($hair){
	case 1:
		$ihair = "no";
		break;
	case 2:
		$ihair = "black";
		break;
	case 3:
		$ihair = "blonde";
		break;
	case 4:
		$ihair = "grey";
		break;
	case 5:
		$ihair = "red";
		break;
	case 6:
		$ihair = "white";
		break;
	case 7:
		$ihair = "brown";
		break;
	default:
		die("<h4>You did not select a hair color. Click Back on your browser and do so.</h4>
						<br/>
			<center><img src=\"resources/images/illustrations/hobbit.png\" style=\"padding-top: 50px;\"/></center>");
}

switch($skin){
	case 1:
		$iskin = "white";
		break;
	case 2:
		$iskin = "pale";
		break;
	case 3:
		$iskin = "tanned";
		break;
	case 4:
		$iskin = "brown";
		break;
	case 5:
		$iskin = "dark";
		break;
	case 6:
		$iskin = "black";
		break;
	case 7:
		$iskin = "green";
		break;
	default:
		die("<h4>You did not select a skin color. Click Back on your browser and do so.</h4>
						<br/>
			<center><img src=\"resources/images/illustrations/hobbit.png\" style=\"padding-top: 50px;\"/></center>");
}

switch($height){
	case 1:
		$iheight = "very short";
		break;
	case 2:
		$iheight = "short";
		break;
	case 3:
		$iheight = "of average height";
		break;
	case 4:
		$iheight = "tall";
		break;
	case 5:
		$iheight = "very tall";
		break;
	default:
		die("<h4>You did not select a height. Click Back on your browser and do so.</h4>
			<br/>
			<center><img src=\"resources/images/illustrations/hobbit.png\" style=\"padding-top: 50px;\"/></center>");
}

switch($build){
	case 1:
		$ibuild = "athletic";
		break;
	case 2:
		$ibuild = "slender";
		break;
	case 3:
		$ibuild = "lithe";
		break;
	case 4:
		$ibuild = "skinny";
		break;
	case 5:
		$ibuild = "of average build";
		break;
	case 6:
		$ibuild = "curvy";
		break;
	case 7:
		$ibuild = "stocky";
		break;
	case 8:
		$ibuild = "fat";
		break;
	default:
		die("<h4>You did not select a build. Click Back on your browser and do so.</h4>
			<br/>
			<center><img src=\"resources/images/illustrations/hobbit.png\" style=\"padding-top: 50px;\"/></center>");
}

$iflags .= "(equip)";
$dbh=dbconnect();
mysql_select_db("adrasis_database");
$dmp = md5(md5($pass1));
$created = time();
$query = "INSERT INTO users(username,name,password,race,class,deity,gender,eyes,hair,skin,build,height,created,flags)";
$query .= " VALUES('$username', '$username', '$dmp', '$irace', '$iclass', '$ideity', '$igender', '$ieyes', '$ihair', '$iskin', '$ibuild', '$iheight', '$created', '$iflags')";
$sql_query = mysql_query($query) or die ("Insertion error on $username: ".mysql_error()."<br>");
if ($igender == "female") mysql_query("UPDATE users SET body = 'cotton dress' WHERE username = '$username'");
else mysql_query("UPDATE users SET body = 'cotton shirt', legs = 'cotton pants' WHERE username = '$username'");
mysql_close($dbh);

echo "<h1>Character created successfully.</h1>
<p><strong>Username:</strong> $username</p>
<p><strong>Race:</strong> $irace</p>
<p><strong>Gender:</strong> $igender</p>";
?>

<center><img src="resources/images/illustrations/hobbit.png" style="padding-top: 50px;"/></center>

</div>
</section>

<!--Right Column Content-->
<?php
include('template/right-col.php');
?>


<div class="scroll" style="clear:both;">
<img src="resources/images/layout/main/scrollbottom.png"/>
</div>

</div>

<!--Footer Content-->
<?php
include('template/footer.php');
?>


</body>
</html>