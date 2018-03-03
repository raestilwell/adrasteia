<!DOCTYPE html>
<head>
<title>The Isles of Adrasteia | A Free MUD RPG | Register</title>
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

 <script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-64207527-1', 'auto');
  ga('send', 'pageview');

</script>
 
 <style>
	.main h4 {margin-bottom: 0;	}
	
</style>
 
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
<h1>Register Your Character</h1>
<p>The descriptions of Adrasteia's currently established game races can be found on our <a href="http://adrasisles.com/wiki/index.php?title=Category:Races" target="_blank">world wiki race page.</a> Any character or race can operate within any available class, so long as the logical relationship between the nature of a particular race and class can be exercised. (It wouldn't make sense for an Underworld Nymph to be a paladin, for example) Use the character registration form below, to build your character, bearing in mind that you do have unlimited customization options to develop it further, once you enter the game. Contact an administrator for help in this regard.</p>
<div class="left" style="margin-left: 20px;">
<form method=post action=http://adrasisles.com/register.php>
                    <h4>Character Name:</h4>
                    <input name=username type=text class="textfield">
                    
                    <h4>Password:</h4>
                    <input name=pass1 type=password class="textfield">
                    
                    <h4>Confirm Password:</h4>
                    <input name=pass2 type=password class="textfield">
                    
                    <h4>Race:</h4>
                    <select name=race class="textfield">
                      <option value=1>Custom</option>
                      <option value=2>Avian</option>
                      <option value=3>Human</option>
                      <option value=4>Elf</option>
                      <option value=5>Lycan</option>
                      <option value=6>Dwarf</option>
                      <option value=7>Hobbit</option>
                      <option value=8>Fae</option>
                      <option value=9>Dragon</option>
                      <option value=10>Halfling</option>
                      <option value=11>Vampire</option>
                      <option value=12>Nymph</option>
                      <option value=13>Drow</option>
                      <option value=14>Deep Elf</option>
                    </select>
                    
                    <h4>Class:</h4>
                    <select name=iclass class="textfield">
                      <option value=1>Custom</option>
                      <option value=2>Artisan</option>
                      <option value=3>Assassin</option>
                      <option value=4>Bard</option>
                      <option value=5>Druid</option>
                      <option value=6>Illusionist</option>
                      <option value=7>Mage</option>
                      <option value=8>Knight</option>
                      <option value=9>Paladin</option>
                      <option value=10>Priest</option>
                      <option value=11>Ranger</option>
                      <option value=12>Rogue</option>
                      <option value=13>Thief</option>
                      <option value=14>Warrior</option>
                    </select>

                    <h4>Deity:</h4>
                    <select name=deity class="textfield">
                      <option value=1>None Specified</option>
                      <option value=2>Faithless</option>
                      <option value=3>Astra</option>
                      <option value=4>Nox</option>
                      <option value=5>Chron</option>
                      <option value=6>Nyx</option>
                      <option value=7>Diiroehn</option>
                      <option value=8>Sela</option>
                      <option value=9>Jirhai</option>
                      <option value=10>Meran</option>
                      <option value=11>Valdek</option>
                      <option value=12>Zagreus</option>
                      <option value=13>Seria</option>
                      <option value=14>Wraith</option>
                    </select>
                    
                    <h4>Gender:</h4>
                    <select name=gender class="textfield">
                      <option value=1>Female</option>
                      <option value=2>Male</option>
                      <option value=3>None</option>
                    </select>
                    
                    <h4>Eyes:</h4>
                    <select name=eyes class="textfield">
                      <option value=1>Black</option>
                      <option value=2>Blue</option>
                      <option value=9>Brown</option>
                      <option value=3>Green</option>
                      <option value=4>Grey</option>
                      <option value=5>Hazel</option>
                      <option value=6>Orange</option>
                      <option value=7>Red</option>
                      <option value=10>Violet</option>
                      <option value=8>Yellow</option>
                    </select>
                    
                    <h4>Hair:</h4>
                    <select name=hair class="textfield">
                      <option value=1>Bald</option>
                      <option value=2>Black</option>
                      <option value=3>Blonde</option>
                      <option value=7>Brown</option>
                      <option value=4>Grey</option>
                      <option value=5>Red</option>
                      <option value=6>White</option>
                    </select>
                    
                    <h4>Skin:</h4>
                    <select name=skin class="textfield">
                      <option value=1>White</option>
                      <option value=2>Pale</option>
                      <option value=3>Tanned</option>
                      <option value=4>Brown</option>
                      <option value=5>Dark</option>
                      <option value=6>Black</option>
                      <option value=7>Green</option>
                    </select>
                    
                    <h4>Height:</h4>
                    <select name=height class="textfield">
                      <option value=1>Very Short</option>
                      <option value=2>Short</option>
                      <option value=3>Average</option>
                      <option value=4>Tall</option>
                      <option value=5>Very Tall</option>
                    </select>
                    
                    <h4>Build:</h4>
                    <select name=build class="textfield">
                      <option value=1>Athletic</option>
                      <option value=2>Slender</option>
                      <option value=3>Lithe</option>
                      <option value=4>Skinny</option>
                      <option value=5>Average</option>
                      <option value=6>Curvy</option>
                      <option value=7>Stocky</option>
                      <option value=8>Fat</option>
                    </select>
                    <br><br>
                   </p>
                </td></tr>
              </table>
            </td>
	      </tr>
      </table></td>
</div>

<div class="left" style="padding-top: 50px; margin-left: 70px;">
  <img src="../../resources/images/illustrations/hobbit.png"/>
  <br/>
  <center><input type=submit value="Register!"> <input type=reset value="Reset Fields"></center>
  </form>
</div>



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