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
$mocer = 1;
$reviewer = 1;
$trader = 1;
$customizer = 1;
$engineer = 1;

$qa = $_POST['question_a'];
$qb = $_POST['question_b'];
$qc = $_POST['question_c'];
$qd = $_POST['question_d'];
$qe = $_POST['question_e'];
$qf = $_POST['question_f'];
$qg = $_POST['question_g'];
$qh = $_POST['question_h'];
//build it
if ($qe == 'build_it')
{
$mocer+=1;
$trader+=1;
$customizer+=1;
$reviewer+=1;
$engineer+=1;
}
// no games
if ($qf == 'no_games')
{
$mocer+=0;
}
//mocer
if ($qa == 'mocer')
{
$mocer+=10;
}
if ($qb == 'mocer')
{
$mocer+=7;
}
if ($qc == 'mocer')
{
$mocer+=6;
}
if ($qd == 'mocer')
{
$mocer+=4;
}
if ($qe == 'mocer')
{
$mocer+=10;
}
if ($qf == 'mocer')
{
$mocer+=2;
}
if ($qg == 'mocer')
{
$mocer+=8;
}
if ($qh == 'mocer')
{
$mocer+=3;
}
//reviewer
if ($qa == 'reviewer')
{
$reviewer+=10;
}
if ($qb == 'reviewer')
{
$reviewer+=7;
}
if ($qc == 'reviewer')
{
$reviewer+=6;
}
if ($qd == 'reviewer')
{
$reviewer+=4;
}
if ($qe == 'reviewer')
{
$reviewer+=20;
}
if ($qf == 'reviewer')
{
$reviewer+=2;
}
if ($qg == 'reviewer')
{
$reviewer+=8;
}
if ($qh == 'reviewer')
{
$reviewer+=3;
}
//trader
if ($qa == 'trader')
{
$trader+=10;
}
if ($qb == 'trader')
{
$trader+=4;
}
if ($qc == 'trader')
{
$trader+=8;
}
if ($qd == 'trader')
{
$trader+=6;
}
if ($qe == 'trader')
{
$trader+=7;
}
if ($qf == 'trader')
{
$trader+=2;
}
if ($qg == 'trader')
{
$trader+=20;
}
if ($qh == 'trader')
{
$trader+=3;
}
//customizer
if ($qa == 'customizer')
{
$customizer+=10;
}
if ($qb == 'customizer')
{
$customizer+=6;
}
if ($qc == 'customizer')
{
$customizer+=7;
}
if ($qd == 'customizer')
{
$customizer+=20;
}
if ($qe == 'customizer')
{
$customizer+=4;
}
if ($qf == 'customizer')
{
$customizer+=2;
}
if ($qg == 'customizer')
{
$customizer+=8;
}
if ($qh == 'customizer')
{
$customizer+=3;
}

// engineer
if ($qa == 'engineer') {
$engineer += 15; // higher numbers because engineer has fewer questions
}
if ($qh == 'engineer') {
$engineer += 10;
}
if ($qg == 'engineer') {
$engineer += 13;
}
// neutral
if ($qa == 'neutral')
{
$customizer+=1;
$trader+=1;
$reviewer+=1;
$mocer+=1;
$engineer+=1;
}
if ($qb == 'neutral')
{
$customizer+=1;
$trader+=1;
$reviewer+=1;
$mocer+=1;
$engineer+=1;
}
if ($qc == 'neutral')
{
$customizer+=1;
$trader+=1;
$reviewer+=1;
$mocer+=1;
$engineer+=1;
}
if ($qd == 'neutral')
{
$customizer+=0; // the neutral option isn't suitable for customizers
$trader+=1;
$reviewer+=1;
$mocer+=1;
$engineer+=1;
}
if ($qe == 'neutral')
{
$customizer+=1;
$trader+=2;
$reviewer+=1;
$mocer+=2;
$engineer+=2;
}
if ($qf == 'neutral')
{
$customizer+=1;
$trader+=1;
$reviewer+=1;
$mocer+=1;
$engineer+=1;
}
if ($qg == 'neutral')
{
$customizer+=1;
$trader+=1;
$reviewer+=1;
$mocer+=1;
$engineer+=1;
}
if ($qh == 'neutral')
{
$customizer+=1;
$trader+=1;
$reviewer+=1;
$mocer+=1;
$engineer+=1;
}

if ($mocer == max($mocer, $trader, $reviewer, $customizer, $engineer))
  echo ("Congratulations, you are the Purist MOCer!<br /><br /><img src='pics/purist_mocer_vig.jpg' /><br /><br />A brilliant designer, your computer is cluttered with pictures of your past creations, and your brain is cluttered with ideas of your future creations!<br />
Whether you've created a vignette filled with nice part usages, or a diorama that is a seriously huge investment of parts, you can amaze people with your imagination!<br /><br />
Here is the HTML code for a Purist MOCer badge:<br /><br />
<textarea rows='3' cols='60' readonly='readonly' onClick='this.select();' ><a href='http://www.bricknave.net/Bricknave_LEGO_Fan_Quiz.html'><img src='http://www.bricknave.net/pics/Purist_MOCer_Widget.jpg' /></a></textarea><br />
<br />
Here is the BBCode for the badge:<br /><br />
<textarea rows='3' cols='60' readonly='readonly' onClick='this.select();' >[url=http://www.bricknave.net/Bricknave_LEGO_Fan_Quiz.html][img]http://www.bricknave.net/pics/Purist_MOCer_Widget.jpg[/img][/url]</textarea><br />
<br />
Here is what it looks like:<br />
<br />
<a href='http://www.bricknave.net/Bricknave_LEGO_Fan_Quiz.html'><img src='http://www.bricknave.net/pics/Purist_MOCer_Widget.jpg' /></a><br />
");
elseif ($reviewer == max($mocer, $trader, $reviewer, $customizer, $engineer))
  echo ("You are the most like the Reviewer archetype!<br /><br /><img src='pics/Reviewer_Vignette.jpg' /><br /><br />You know when and where to look for the latest set! Once you have your hands on it, you will make sure to alert your fellow fans whether they should pick it up or not.<br />
Your opinion benefits the Traders, Customizers and Purist MOCers in the LEGO community!
<br /><br />
Note: It is assumed that you, as a LEGO fan, are first and foremost a MOCer.
<br /><br />
Here is the code for a Reviewer badge:<br /><br />
<textarea rows='3' cols='60' readonly='readonly' onClick='this.select();' ><a href='http://www.bricknave.net/Bricknave_LEGO_Fan_Quiz.html'><img src='http://www.bricknave.net/pics/Reviewer_Widget.jpg' /></a></textarea><br />
<br />
Here is the BBCode for the badge:<br /><br />
<textarea rows='3' cols='60' readonly='readonly' onClick='this.select();' >[url=http://www.bricknave.net/Bricknave_LEGO_Fan_Quiz.html][img]http://www.bricknave.net/pics/Reviewer_Widget.jpg[/img][/url]</textarea><br />
<br />
Here is what it looks like:<br />
<br />
<a href='http://www.bricknave.net/Bricknave_LEGO_Fan_Quiz.html'><img src='http://www.bricknave.net/pics/Reviewer_Widget.jpg' /></a><br />
");
elseif ($trader == max($mocer, $trader, $reviewer, $customizer, $engineer))
  echo ("You are the most like the Trader arechetype!<br /><br /><img src='pics/Trader_Vignette.jpg'/><br /><br />Whether your trading post is online or at an event, you have rows of brick-hungry creators drooling at your feet, desperate to obtain a chunk of your stock.<br />
You play a vital part in the fan community, because you supply pieces to the MOCers and Customizers, and maybe even a set or two for the Reviewers.
<br /><br />
Note: It is assumed that you, as a LEGO fan, are first and foremost a MOCer.
<br /><br />
Here is the code for a Trader badge:<br /><br />
<textarea rows='3' cols='60' readonly='readonly' onClick='this.select();' ><a href='http://www.bricknave.net/Bricknave_LEGO_Fan_Quiz.html'><img src='http://www.bricknave.net/Bricknave_LEGO_Fan_Quiz.html' /></a></textarea><br />
<br />
Here is the BBCode for the badge:<br /><br />
<textarea rows='3' cols='60' readonly='readonly' onClick='this.select();' >[url=http://www.bricknave.net/Bricknave_LEGO_Fan_Quiz.html][img]http://www.bricknave.net/pics/Trader_Widget.jpg[/img][/url]</textarea><br />
<br />
Here is what it looks like:<br />
<br />
<a href='http://www.bricknave.net/Bricknave_LEGO_Fan_Quiz.html'><img src='http://www.bricknave.net/pics/Trader_Widget.jpg' /></a><br />
");
elseif ($customizer == max($mocer, $trader, $reviewer, $customizer, $engineer))
  echo ("You are the most like the Customizer archetype!<br /><br /><img src='pics/Bricknave_Customizer_Vignette.jpg' /><br /><br />The plastic pieces you have just aren't enough for you --<br />-- you must sculpt, paint, and cut to discover the true potential of your masterpiece!<br />
Since you're willing you go beyond any limits, you have the power to take the basic form of a Minifig, and morph it into a complex character.
<br /><br />
Note: It is assumed that you, as a LEGO fan, are first and foremost a MOCer.
<br /><br />
Here is the code for a Customizer badge:<br /><br />
<textarea rows='3' cols='60' readonly='readonly' onClick='this.select();' ><a href='http://www.bricknave.net/Bricknave_LEGO_Fan_Quiz.html'><img src='http://www.bricknave.net/pics/Customizer_Widget.jpg' /></a></textarea><br />
<br />
Here is the BBCode for the badge:<br /><br />
<textarea rows='3' cols='60' readonly='readonly' onClick='this.select();' >[url=http://www.bricknave.net/Bricknave_LEGO_Fan_Quiz.html][img]http://www.bricknave.net/pics/Customizer_Widget.jpg[/img][/url]</textarea><br />
<br />
Here is what it looks like:<br />
<br />
<a href='http://www.bricknave.net/Bricknave_LEGO_Fan_Quiz.html'><img src='http://www.bricknave.net/pics/Customizer_Widget.jpg' /></a><br />
");
elseif ($engineer == max($mocer, $trader, $reviewer, $customizer, $engineer))
  echo ("You are the most like the Engineer archetype!<br /><br /><img src='pics/Engineer_Vignette.jpg' />
<br /><br />As a LEGO Fan who mostly specializes in things that move, you can amaze builders and non-builders alike.<br />Aesthetics aren't your main priority, but your MOCs don't have to look pretty as long as they can move! 
<br /><br />
Note: It is assumed that you, as a LEGO fan, are first and foremost a MOCer.
<br />
<br />Here is the code for the Engineer badge:<br /><br />
<textarea rows='3' cols='60' readonly='readonly' onClick='this.select();' ><a href='http://www.bricknave.net/Bricknave_LEGO_Fan_Quiz.html'><img src='http://www.bricknave.net/pics/Engineer_Widget.jpg' /></a></textarea><br />
<br />
Here is the BBCode for the badge:<br /><br />
<textarea rows='3' cols='60' readonly='readonly' onClick='this.select();' >[url=http://www.bricknave.net/Bricknave_LEGO_Fan_Quiz.html][img]http://www.bricknave.net/pics/Engineer_Widget.jpg[/img][/url]</textarea><br />
<br />
Here is what it looks like:<br />
<br />
<a href='http://www.bricknave.net/Bricknave_LEGO_Fan_Quiz.html'><img src='http://www.bricknave.net/pics/Engineer_Widget.jpg' /></a><br />
");
else
  echo("<img src='pics/fan_quiz_question.jpg' /><br /><br />You are a unique kind of LEGO fan!");
?>

</p>
<footer>
<a href="http://www.LEGO.com">LEGO&reg;</a> is a trademark of the LEGO Group of companies which does not sponsor, authorize or endorse this site.
The LEGO Brick is copyright & owned by TLG (The LEGO Group).
</footer>
</body>
</html>