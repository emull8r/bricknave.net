<!DOCTYPE html>

<!----------------------------------

Evan Mulloy, AKA Bricknave, 2011-now

------------------------------------>

<html>

<head>
<title>Bricknave.net - Result</title>

<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<link rel="stylesheet" type="text/css" href="Bricknave_Style.css" />

<link rel="shortcut icon" href="http://www.Bricknave.net/pics/website/Bricknave_Favicon.gif" />

<script src="googleAnalytics.js"></script>

<div class="header">
<img src="pics/website/Header.png"></img>
</div>
<div class="nav">
<ul><li><a href="Home.html">Home</a></li><li><a href="Gallery.html">Gallery</a></li><li><a href="About.html">About</a></li><li><a href="Follow_Me.html">Follow me</a></li><li><a href="Fun.html">Fun</a></li></ul>
</div>
</head>
<body>
<p>
<?php

$kai = 0;
$zane = 0;
$cole = 0;
$jay = 0;
$nya = 0;
$lloyd = 0;
$wu = 0;
$garmadon = 0;

$result = 0;

$qa = $_POST['question_a'];
$qb = $_POST['question_b'];
$qc = $_POST['question_c'];
$qd = $_POST['question_d'];
$qe = $_POST['question_e'];
$qf = $_POST['question_f'];
$qg = $_POST['question_g'];

switch($qa)
{
case 'headstrong':
$cole++;
$lloyd++;
$kai++;
$garmadon++;
break;
case 'fierce':
$nya++;
$kai++;
$garmadon++;
break;
case 'calm':
$zane++;
$wu++;
break;
case 'witty':
$jay++;
break;
case 'compassionate':
$lloyd++;
$wu++;
break;
case 'intelligent':
$jay++;
$zane++;
$nya++;
break;
}

switch($qb)
{
case 'headstrong':
$cole++;
$lloyd++;
$kai++;
$garmadon++;
break;
case 'fierce':
$nya++;
$kai++;
$garmadon++;
break;
case 'calm':
$zane++;
$wu++;
break;
case 'witty':
$jay++;
break;
case 'compassionate':
$lloyd++;
break;
case 'intelligent':
$jay++;
$zane++;
$nya++;
break;
}
// armor type
switch($qc)
{
case 'armor':
$garmadon++;
break;
case 'gi':
$kai++;
$zane++;
$jay++;
$wu++;
$cole++;
$lloyd++;
break;
case 'both':
$nya++;
break;
}
// tech savvy
switch($qd)
{
case 'no':
$garmadon++;
$kai++;
$wu++;
$cole++;
$lloyd++;
break;
case 'yes':
$zane++;
$nya++;
$jay++;
break;
}
// big or few
switch($qe)
{
case 'big':
$garmadon++;
break;
case 'few':
$kai++;
$zane++;
$nya++;
$jay++;
$wu++;
$cole++;
$lloyd++;
break;
}
//spinning
switch($qf)
{
case 'no':
$garmadon++;
$nya++;
break;
case 'yes':
$kai++;
$zane++;
$jay++;
$wu++;
$cole++;
$lloyd++;
break;
}
//dragon
switch($qg)
{
case 'no':
$garmadon++;
$cole++; // Cole was initally afraid of dragons
$nya++;
break;
case 'yes':
$kai++;
$wu++;
$jay++;
$zane++;
$llyod++;
break;
}
//energy or weapon
switch($qh)
{
case 'energy':
$lloyd++;
$garmadon++; // Garmadon uses magic a lot
$wu--;
$lloyd++;
break;
case 'weapon':
$kai++;
$jay++;
$zane++;
$cole++;
$nya++;
$wu++;
break;
}
//video games
switch($qi)
{
case 'yes':
$lloyd++;
$kai++;
$jay++;
$zane++;
$cole++;
$wu--;
$wu--;
break;
case 'no':
$nya++;
$wu++;
$lloyd--;
$lloyd--;
$garmadon++; 
break;
}

$result = max($nya,$kai,$jay,$zane,$cole,$lloyd,$wu,$garmadon);

if ($zane == $result)
  echo ("<br /><br /><img src='pics/Zane.jpg' /><br /><br />
  You are most like Zane, the intelligent Ninja of ice!
<br />
<br />Here is the HTML code for the badge:<br /><br />
<textarea rows='3' cols='60' readonly='readonly' onClick='this.select();' ><a href='http://www.bricknave.net/Bricknave_LEGO_NinjaGo_Quiz.html'><img src='http://www.bricknave.net/pics/Zane_badge.jpg' /></a></textarea><br />
<br />
Here is the BBCode for the badge:<br /><br />
<textarea rows='3' cols='60' readonly='readonly' onClick='this.select();' >[url=http://www.bricknave.net/Bricknave_LEGO_NinjaGo_Quiz.html][img]http://www.bricknave.net/pics/Zane_badge.jpg[/img][/url]</textarea><br />
<br />
Here is what it looks like:<br />
<br />
<a href='http://www.bricknave.net/Bricknave_LEGO_NinjaGo_Quiz.html'><img src='http://www.bricknave.net/pics/Zane_badge.jpg' /></a><br />
");
else if ($jay == $result)
  echo ("<br /><br /><img src='pics/Jay.jpg' /><br /><br />
  You are most like Jay, the wisecracking Ninja of lightning!
<br />
<br />Here is the HTML code for the badge:<br /><br />
<textarea rows='3' cols='60' readonly='readonly' onClick='this.select();' ><a href='http://www.bricknave.net/Bricknave_LEGO_NinjaGo_Quiz.html'><img src='http://www.bricknave.net/pics/Jay_badge.jpg' /></a></textarea><br />
<br />
Here is the BBCode for the badge:<br /><br />
<textarea rows='3' cols='60' readonly='readonly' onClick='this.select();' >[url=http://www.bricknave.net/Bricknave_LEGO_NinjaGo_Quiz.html][img]http://www.bricknave.net/pics/Jay_badge.jpg[/img][/url]</textarea><br />
<br />
Here is what it looks like:<br />
<br />
<a href='http://www.bricknave.net/Bricknave_LEGO_NinjaGo_Quiz.html'><img src='http://www.bricknave.net/pics/Jay_badge.jpg' /></a><br />
");
else if ($cole == $result)
  echo ("<br /><br /><img src='pics/Cole.jpg' /><br /><br />
  You are most like Cole, the tough Ninja of earth!
<br />
<br />Here is the HTML code for the badge:<br /><br />
<textarea rows='3' cols='60' readonly='readonly' onClick='this.select();' ><a href='http://www.bricknave.net/Bricknave_LEGO_NinjaGo_Quiz.html'><img src='http://www.bricknave.net/pics/Cole_badge.jpg' /></a></textarea><br />
<br />
Here is the BBCode for the badge:<br /><br />
<textarea rows='3' cols='60' readonly='readonly' onClick='this.select();' >[url=http://www.bricknave.net/Bricknave_LEGO_NinjaGo_Quiz.html][img]http://www.bricknave.net/pics/Cole_badge.jpg[/img][/url]</textarea><br />
<br />
Here is what it looks like:<br />
<br />
<a href='http://www.bricknave.net/Bricknave_LEGO_NinjaGo_Quiz.html'><img src='http://www.bricknave.net/pics/Cole_badge.jpg' /></a><br />
");
else if ($kai == $result)
  echo ("<br /><br /><img src='pics/Kai.jpg' /><br /><br />
  You are most like Kai, the fierce Ninja of fire!
<br />
<br />Here is the HTML code for the badge:<br /><br />
<textarea rows='3' cols='60' readonly='readonly' onClick='this.select();' ><a href='http://www.bricknave.net/Bricknave_LEGO_NinjaGo_Quiz.html'><img src='http://www.bricknave.net/pics/Kai_badge.jpg' /></a></textarea><br />
<br />
Here is the BBCode for the badge:<br /><br />
<textarea rows='3' cols='60' readonly='readonly' onClick='this.select();' >[url=http://www.bricknave.net/Bricknave_LEGO_NinjaGo_Quiz.html][img]http://www.bricknave.net/pics/Kai_badge.jpg[/img][/url]</textarea><br />
<br />
Here is what it looks like:<br />
<br />
<a href='http://www.bricknave.net/Bricknave_LEGO_NinjaGo_Quiz.html'><img src='http://www.bricknave.net/pics/Kai_badge.jpg' /></a><br />
");
else if ($nya == $result)
  echo ("<br /><br /><img src='pics/Nya.jpg' /><br /><br />
  You are most like Nya, a techie and secret Samurai!
<br />
<br />Here is the HTML code for the badge:<br /><br />
<textarea rows='3' cols='60' readonly='readonly' onClick='this.select();' ><a href='http://www.bricknave.net/Bricknave_LEGO_NinjaGo_Quiz.html'><img src='http://www.bricknave.net/pics/Nya_badge.jpg' /></a></textarea><br />
<br />
Here is the BBCode for the badge:<br /><br />
<textarea rows='3' cols='60' readonly='readonly' onClick='this.select();' >[url=http://www.bricknave.net/Bricknave_LEGO_NinjaGo_Quiz.html][img]http://www.bricknave.net/pics/Nya_badge.jpg[/img][/url]</textarea><br />
<br />
Here is what it looks like:<br />
<br />
<a href='http://www.bricknave.net/Bricknave_LEGO_NinjaGo_Quiz.html'><img src='http://www.bricknave.net/pics/Nya_badge.jpg' /></a><br />
");
else if ($lloyd == $result)
  echo ("<br /><br /><img src='pics/Lloyd.jpg' /><br /><br />
  You are most like Lloyd, the mystical Green Ninja!
<br />
<br />Here is the HTML code for the badge:<br /><br />
<textarea rows='3' cols='60' readonly='readonly' onClick='this.select();' ><a href='http://www.bricknave.net/Bricknave_LEGO_NinjaGo_Quiz.html'><img src='http://www.bricknave.net/pics/Lloyd_badge.jpg' /></a></textarea><br />
<br />
Here is the BBCode for the badge:<br /><br />
<textarea rows='3' cols='60' readonly='readonly' onClick='this.select();' >[url=http://www.bricknave.net/Bricknave_LEGO_NinjaGo_Quiz.html][img]http://www.bricknave.net/pics/Lloyd_badge.jpg[/img][/url]</textarea><br />
<br />
Here is what it looks like:<br />
<br />
<a href='http://www.bricknave.net/Bricknave_LEGO_NinjaGo_Quiz.html'><img src='http://www.bricknave.net/pics/Lloyd_badge.jpg' /></a><br />
");
else if ($wu == $result)
  echo ("<br /><br /><img src='pics/Wu.jpg' /><br /><br />
  You are most like Sensei Wu, a wise master of peace (and Spinjitzu)!
<br />
<br />Here is the HTML code for the badge:<br /><br />
<textarea rows='3' cols='60' readonly='readonly' onClick='this.select();' ><a href='http://www.bricknave.net/Bricknave_LEGO_NinjaGo_Quiz.html'><img src='http://www.bricknave.net/pics/Wu_badge.jpg' /></a></textarea><br />
<br />
Here is the BBCode for the badge:<br /><br />
<textarea rows='3' cols='60' readonly='readonly' onClick='this.select();' >[url=http://www.bricknave.net/Bricknave_LEGO_NinjaGo_Quiz.html][img]http://www.bricknave.net/pics/Wu_badge.jpg[/img][/url]</textarea><br />
<br />
Here is what it looks like:<br />
<br />
<a href='http://www.bricknave.net/Bricknave_LEGO_NinjaGo_Quiz.html'><img src='http://www.bricknave.net/pics/Wu_badge.jpg' /></a><br />
");
else if ($garmadon == $result)
  echo ("<br /><br /><img src='pics/Garmadon.jpg' /><br /><br />
  You are most like Lord Garmadon! Ninjas better watch out!
<br />
<br />Here is the HTML code for the badge:<br /><br />
<textarea rows='3' cols='60' readonly='readonly' onClick='this.select();' ><a href='http://www.bricknave.net/Bricknave_LEGO_NinjaGo_Quiz.html'><img src='http://www.bricknave.net/pics/Garmadon_badge.jpg' /></a></textarea><br />
<br />
Here is the BBCode for the badge:<br /><br />
<textarea rows='3' cols='60' readonly='readonly' onClick='this.select();' >[url=http://www.bricknave.net/Bricknave_LEGO_NinjaGo_Quiz.html][img]http://www.bricknave.net/pics/Garmadon_badge.jpg[/img][/url]</textarea><br />
<br />
Here is what it looks like:<br />
<br />
<a href='http://www.bricknave.net/Bricknave_LEGO_NinjaGo_Quiz.html'><img src='http://www.bricknave.net/pics/Garmadon_badge.jpg' /></a><br />
");
?>

Be sure to check out the <a href="http://www.lego.com/en-us/ninjago" target="_blank">LEGO NinjaGo site</a>!
</p>
<footer>
<a href="http://www.LEGO.com">LEGO&reg;</a> is a trademark of the LEGO Group of companies which does not sponsor, authorize or endorse this site.
The LEGO Brick is copyright & owned by TLG (The LEGO Group).
</footer>
</body>
</html>