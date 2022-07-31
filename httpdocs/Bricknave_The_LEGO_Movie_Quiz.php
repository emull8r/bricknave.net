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

$emmet = 0;
$wyldstyle = 0;
$vitruvius = 0;
$unikitty = 0;
$business = 0;
$benny = 0;
$batman = 0;
$badcop = 0;
$metalbeard = 0;

$result = 0;

$qa = $_POST['question_a'];
$qb = $_POST['question_b'];
$qc = $_POST['question_c'];
$qd = $_POST['question_d'];
$qe = $_POST['question_e'];
$qf = $_POST['question_f'];
$qg = $_POST['question_g'];

// Do you prefer building in a specific theme?
switch($qa)
{
case 'yes':
$benny++;
$emmet++;
$metalbeard++;
$unikitty++;
break;
case 'no':
$wyldstyle++;
$vitruvius++;
$batman++;
$badcop++;
$business++;
break;
}
// Do you prefer building in a specific set of colors?
switch($qb)
{
case 'yes':
$benny++;
$unikitty++;
$batman++;
break;
case 'no':
$emmet++;
$metalbeard++;
$wyldstyle++;
$vitruvius++;
$badcop++;
$business++;
break;
}
// Wait, hold on. Let's back track a little. Do you build at all? Like, anything original?
switch($qc)
{
case 'imagination':
$benny++;
$emmet++;
$unikitty++;
$batman++;
$metalbeard++;
$wyldstyle++;
$vitruvius++;
break;
case 'instructions':
$badcop++;
$business++;
break;
}
// Which of these traits do you think represent you the most?
switch($qd)
{
case 'nononsense':
$badcop++;
break;
case 'easygoing':
$emmet++;
break;
case 'bubbly':
$unikitty++;
break;
case 'brooding':
$batman++;
break;
case 'perfectionist':
$business++;
break;
case 'hearty':
$metalbeard++;
break;
case 'advisive':
$vitruvius++;
break;
case 'passionate':
$benny++; // Benny is very passionate about SPACESHIPS!!
break;
case 'focused':
$wyldstyle++;
break;
}
// Music. Do you like it, or really like it?
switch($qe)
{
case 'reallylike':
$emmet++;
$metalbeard++;
$business++;
$batman++; // DARKNESS. NO PARENTS.
case 'like':
$badcop++;
$vitruvius++;
$wyldstyle++;
$benny++;
$unikitty++;
break;
}

// Comformity: Yay or Nay?
switch($qf)
{
case 'yes':
$badcop++;
$business++;
$emmet++;
break;
case 'no':
$metalbeard++;
$batman++;
$vitruvius++;
$wyldstyle++;
$benny++;
$unikitty++;
break;
}

// Which of these colors do you prefer?
switch($qg)
{
case 'black':
$badcop++;
$batman++;
case 'orange':
$emmet++;
break;
case 'white':
$vitruvius++;
break;
case 'magenta':
$wyldstyle++;
break;
case 'blue':
$unikitty++;
$benny++;
$wyldstyle++;
break;
case 'brown':
$metalbeard++;
break;
case 'darkgray':
$batman++;
break;
case 'red':
$business++;
break;
case 'green':
$unikitty++;
break;
}


$result = max($business,$emmet,$unikitty,$wyldstyle,$vitruvius,$benny,$batman,$badcop,$metalbeard);

if ($wyldstyle == $result)
  echo ("<br /><br /><img src='pics/TLM/Wyldstyle.jpg' /><br /><br />
  <span style='font-size:1.4em'>Wyldstyle!</span>
<br />
<br />Here is the HTML code for the badge:<br /><br />
<textarea rows='3' cols='60' readonly='readonly' onClick='this.select();' ><a href='http://www.bricknave.net/Bricknave_The_LEGO_Movie_Quiz.html'><img src='http://www.bricknave.net/pics/TLM/Wyldstyle_badge.jpg' /></a></textarea><br />
<br />
Here is the BBCode for the badge:<br /><br />
<textarea rows='3' cols='60' readonly='readonly' onClick='this.select();' >[url=http://www.bricknave.net/Bricknave_The_LEGO_Movie_Quiz.html][img]http://www.bricknave.net/pics/TLM/Wyldstyle_badge.jpg[/img][/url]</textarea><br />
<br />
Here is what it looks like:<br />
<br />
<a href='http://www.bricknave.net/Bricknave_The_LEGO_Movie_Quiz.html'><img src='http://www.bricknave.net/pics/TLM/Wyldstyle_badge.jpg' /></a><br />
");
else if ($unikitty == $result)
  echo ("<br /><br /><img src='pics/TLM/Princess_Unikitty.jpg' /><br /><br />
  <span style='font-size:1.4em'>Unikitty!</span>
<br />
<br />Here is the HTML code for the badge:<br /><br />
<textarea rows='3' cols='60' readonly='readonly' onClick='this.select();' ><a href='http://www.bricknave.net/Bricknave_The_LEGO_Movie_Quiz.html'><img src='http://www.bricknave.net/pics/TLM/Unikitty_badge.jpg' /></a></textarea><br />
<br />
Here is the BBCode for the badge:<br /><br />
<textarea rows='3' cols='60' readonly='readonly' onClick='this.select();' >[url=http://www.bricknave.net/Bricknave_The_LEGO_Movie_Quiz.html][img]http://www.bricknave.net/pics/TLM/Unikitty_badge.jpg[/img][/url]</textarea><br />
<br />
Here is what it looks like:<br />
<br />
<a href='http://www.bricknave.net/Bricknave_The_LEGO_Movie_Quiz.html'><img src='http://www.bricknave.net/pics/TLM/Unikitty_badge.jpg' /></a><br />
");
else if ($vitruvius == $result)
  echo ("<br /><br /><img src='pics/TLM/Vitruvius.jpg' /><br /><br />
  <span style='font-size:1.4em'>Vitruvius!</span>
<br />
<br />Here is the HTML code for the badge:<br /><br />
<textarea rows='3' cols='60' readonly='readonly' onClick='this.select();' ><a href='http://www.bricknave.net/Bricknave_The_LEGO_Movie_Quiz.html'><img src='http://www.bricknave.net/pics/TLM/Vitruvius_badge.jpg' /></a></textarea><br />
<br />
Here is the BBCode for the badge:<br /><br />
<textarea rows='3' cols='60' readonly='readonly' onClick='this.select();' >[url=http://www.bricknave.net/Bricknave_The_LEGO_Movie_Quiz.html][img]http://www.bricknave.net/pics/TLM/Vitruvius_badge.jpg[/img][/url]</textarea><br />
<br />
Here is what it looks like:<br />
<br />
<a href='http://www.bricknave.net/Bricknave_The_LEGO_Movie_Quiz.html'><img src='http://www.bricknave.net/pics/TLM/Vitruvius_badge.jpg' /></a><br />
");
else if ($emmet == $result)
  echo ("<br /><br /><img src='pics/TLM/Emmet.jpg' /><br /><br />
  <span style='font-size:1.4em'>Emmet!</span>
<br />
<br />Here is the HTML code for the badge:<br /><br />
<textarea rows='3' cols='60' readonly='readonly' onClick='this.select();' ><a href='http://www.bricknave.net/Bricknave_The_LEGO_Movie_Quiz.html'><img src='http://www.bricknave.net/pics/TLM/Emmet_badge.jpg' /></a></textarea><br />
<br />
Here is the BBCode for the badge:<br /><br />
<textarea rows='3' cols='60' readonly='readonly' onClick='this.select();' >[url=http://www.bricknave.net/Bricknave_The_LEGO_Movie_Quiz.html][img]http://www.bricknave.net/pics/TLM/Emmet_badge.jpg[/img][/url]</textarea><br />
<br />
Here is what it looks like:<br />
<br />
<a href='http://www.bricknave.net/Bricknave_The_LEGO_Movie_Quiz.html'><img src='http://www.bricknave.net/pics/TLM/Emmet_badge.jpg' /></a><br />
");
else if ($business == $result)
  echo ("<br /><br /><img src='pics/TLM/Lord_Business.jpg' /><br /><br />
  <span style='font-size:1.4em'>Lord Business!</span>
<br />
<br />Here is the HTML code for the badge:<br /><br />
<textarea rows='3' cols='60' readonly='readonly' onClick='this.select();' ><a href='http://www.bricknave.net/Bricknave_The_LEGO_Movie_Quiz.html'><img src='http://www.bricknave.net/pics/TLM/Lord_Business_badge.jpg' /></a></textarea><br />
<br />
Here is the BBCode for the badge:<br /><br />
<textarea rows='3' cols='60' readonly='readonly' onClick='this.select();' >[url=http://www.bricknave.net/Bricknave_The_LEGO_Movie_Quiz.html][img]http://www.bricknave.net/pics/TLM/Lord_Business_badge.jpg[/img][/url]</textarea><br />
<br />
Here is what it looks like:<br />
<br />
<a href='http://www.bricknave.net/Bricknave_The_LEGO_Movie_Quiz.html'><img src='http://www.bricknave.net/pics/TLM/Lord_Business_badge.jpg' /></a><br />
");
else if ($benny == $result)
  echo ("<br /><br /><img src='pics/TLM/Benny.jpg' /><br /><br />
  <span style='font-size:1.4em'>Benny!</span>
<br />
<br />Here is the HTML code for the badge:<br /><br />
<textarea rows='3' cols='60' readonly='readonly' onClick='this.select();' ><a href='http://www.bricknave.net/Bricknave_The_LEGO_Movie_Quiz.html'><img src='http://www.bricknave.net/pics/TLM/Benny_badge.jpg' /></a></textarea><br />
<br />
Here is the BBCode for the badge:<br /><br />
<textarea rows='3' cols='60' readonly='readonly' onClick='this.select();' >[url=http://www.bricknave.net/Bricknave_The_LEGO_Movie_Quiz.html][img]http://www.bricknave.net/pics/TLM/Benny_badge.jpg[/img][/url]</textarea><br />
<br />
Here is what it looks like:<br />
<br />
<a href='http://www.bricknave.net/Bricknave_The_LEGO_Movie_Quiz.html'><img src='http://www.bricknave.net/pics/TLM/Benny_badge.jpg' /></a><br />
");
else if ($batman == $result)
  echo ("<br /><br /><img src='pics/TLM/Batman.jpg' /><br /><br />
  <span style='font-size:1.4em'>Batman!</span>
<br />
<br />Here is the HTML code for the badge:<br /><br />
<textarea rows='3' cols='60' readonly='readonly' onClick='this.select();' ><a href='http://www.bricknave.net/Bricknave_The_LEGO_Movie_Quiz.html'><img src='http://www.bricknave.net/pics/TLM/Batman_badge.jpg' /></a></textarea><br />
<br />
Here is the BBCode for the badge:<br /><br />
<textarea rows='3' cols='60' readonly='readonly' onClick='this.select();' >[url=http://www.bricknave.net/Bricknave_The_LEGO_Movie_Quiz.html][img]http://www.bricknave.net/pics/TLM/Batman_badge.jpg[/img][/url]</textarea><br />
<br />
Here is what it looks like:<br />
<br />
<a href='http://www.bricknave.net/Bricknave_The_LEGO_Movie_Quiz.html'><img src='http://www.bricknave.net/pics/TLM/Batman_badge.jpg' /></a><br />
");
else if ($badcop == $result)
  echo ("<br /><br /><img src='pics/TLM/Badcop_2.jpg' /><br /><br />
  <span style='font-size:1.4em'>Badcop!</span>
<br />
<br />Here is the HTML code for the badge:<br /><br />
<textarea rows='3' cols='60' readonly='readonly' onClick='this.select();' ><a href='http://www.bricknave.net/Bricknave_The_LEGO_Movie_Quiz.html'><img src='http://www.bricknave.net/pics/TLM/Badcop_badge.jpg' /></a></textarea><br />
<br />
Here is the BBCode for the badge:<br /><br />
<textarea rows='3' cols='60' readonly='readonly' onClick='this.select();' >[url=http://www.bricknave.net/Bricknave_The_LEGO_Movie_Quiz.html][img]http://www.bricknave.net/pics/TLM/Badcop_badge.jpg[/img][/url]</textarea><br />
<br />
Here is what it looks like:<br />
<br />
<a href='http://www.bricknave.net/Bricknave_The_LEGO_Movie_Quiz.html'><img src='http://www.bricknave.net/pics/TLM/Badcop_badge.jpg' /></a><br />
");
else if ($metalbeard == $result)
  echo ("<br /><br /><img src='pics/TLM/Metalbeard.jpg' /><br /><br />
  <span style='font-size:1.4em'>Metalbeard!</span>
<br />
<br />Here is the HTML code for the badge:<br /><br />
<textarea rows='3' cols='60' readonly='readonly' onClick='this.select();' ><a href='http://www.bricknave.net/Bricknave_The_LEGO_Movie_Quiz.html'><img src='http://www.bricknave.net/pics/TLM/Metalbeard_badge.jpg' /></a></textarea><br />
<br />
Here is the BBCode for the badge:<br /><br />
<textarea rows='3' cols='60' readonly='readonly' onClick='this.select();' >[url=http://www.bricknave.net/Bricknave_The_LEGO_Movie_Quiz.html][img]http://www.bricknave.net/pics/TLM/Metalbeard_badge.jpg[/img][/url]</textarea><br />
<br />
Here is what it looks like:<br />
<br />
<a href='http://www.bricknave.net/Bricknave_The_LEGO_Movie_Quiz.html'><img src='http://www.bricknave.net/pics/TLM/Metalbeard_badge.jpg' /></a><br />
");
?>
Be sure to check out the <a href="http://www.thelegomovie.com/" target="_blank">LEGO Movie</a> website!
</p>
<footer>
<a href="http://www.LEGO.com">LEGO&reg;</a> is a trademark of the LEGO Group of companies which does not sponsor, authorize or endorse this site.
The LEGO Brick is copyright & owned by TLG (The LEGO Group).
</footer>
</body>
</html>
