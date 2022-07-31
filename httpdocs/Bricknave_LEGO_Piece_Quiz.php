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
$brick2x4 = 0;
$brick4knobs = 0;
$pegaxle = 0;
$cheese = 0;
$beam = 0;
$tube = 0;
$tire = 0;
$joint = 0;

$result = 0;

//$a = $_POST['question_a'];
$b = $_POST['question_b'];
$c = $_POST['question_c'];
$d = $_POST['question_d'];
$e = $_POST['question_e'];
$f = $_POST['question_f'];
$g = $_POST['question_g'];
$h = $_POST['question_h'];
/*
switch($a) {
case '1':
$tire += 1;
$joint += 1;
break;
case '2':
$pegaxle += 1;
break;
case '3':
$tube += 1;
$brick2x4 += 1;
$brick4knobs += 1;
$beam += 1;
$cheese += 1;
break;
}*/
switch($b) {
case 'house':
$brick2x4 += 1;
break;
case 'person':
$joint += 1;
$pegaxle += 1;
break;
case 'car':
$pegaxle += 1;
$tire += 1;
$beam += 1;
break;
case 'any':
$cheese += 1;
$tube += 1;
$brick4knobs += 1;
break;
}
switch($c) {
case 'rainbow':
$brick2x4 += 1;
$beam += 1;
$cheese += 1;
$tube += 1;
break;
case 'monochrome':
$tire += 1;
$pegaxle += 1;
$brick4knobs += 1;
$joint += 1;
break;
}
switch($d) {
case 'yes':
$tube += 1;
break;
case 'no':
$brick2x4 += 1;
$beam += 1;
$pegaxle += 1;
$cheese += 1;
$joint += 1;
$brick4knobs += 1;
$tire += 1;
break;
}
switch($e) {
case 'common':
$brick2x4 += 1;
$beam += 1;
$pegaxle += 1;
$cheese += 1;
$joint += 1;
break;
case 'rare':
$tube += 1;
$brick4knobs += 1;
$tire += 1;
break;
}
switch($f) {
case 'sturdy':
$joint += 1;
$tire += 1;
$brick2x4 += 1;
$beam += 1;
break;
case 'delicate':
$brick4knobs += 1;
$pegaxle += 1;
$tube += 1;
$cheese += 1;
break;
}
switch($g) {
case 'small':
$joint += 1;
$brick4knobs += 1;
$pegaxle += 1;
$tire += 1;
$cheese += 1;
break;
case 'big':
$beam += 1;
$brick2x4 += 1;
$tube += 1;
break;
}
switch($h) {
case 'specific':
$tire += 2;
break;
case 'tough':
$beam += 2;
break;
case 'flexible':
$joint += 2;
$tube += 2;
$brick2x4 += 2;
break;
case 'connections':
$brick4knobs += 2;
break;
case 'dual':
$pegaxle += 2;
break;
case 'sharp':
$cheese += 2;
break;
}

$result = max($brick2x4,$brick4knobs,$tube,$joint,$tire,$cheese,$beam,$pegaxle);

if($result == $brick2x4) {
echo("<br /><span style='font-size:1.4em'>You are a Brick 2x4!</span>
<br />
<br />
<a href='http://www.bricknave.net/Bricknave_LEGO_Piece_Quiz.html'><img src='http://www.bricknave.net/pics/piecequiz/brick2x4_badge.png' /></a>
<br />
<span style='font-size:1.4em'>You are useful in many ways and form the foundation!</span>
<br />
<br />Here is the HTML code for the badge:<br /><br />
<textarea rows='3' cols='60' readonly='readonly' onClick='this.select();' ><a href='http://www.bricknave.net/Bricknave_LEGO_Piece_Quiz.html'><img src='http://www.bricknave.net/pics/piecequiz/brick2x4_badge.png' /></a></textarea><br />
<br />
Here is the BBCode for the badge:<br /><br />
<textarea rows='3' cols='60' readonly='readonly' onClick='this.select();' >[url=http://www.bricknave.net/Bricknave_LEGO_Piece_Quiz.html][img]http://www.bricknave.net/pics/piecequiz/brick2x4_badge.png[/img][/url]</textarea><br />");
} else if($result == $tire) {
echo("<br /><span style='font-size:1.4em'>You are a Tire!</span>
<br />
<br />
<a href='http://www.bricknave.net/Bricknave_LEGO_Piece_Quiz.html'><img src='http://www.bricknave.net/pics/piecequiz/tire_badge.png' /></a>
<br />
<span style='font-size:1.4em'>No other can fill your role better than you!</span>
<br />
<br />Here is the HTML code for the badge:<br /><br />
<textarea rows='3' cols='60' readonly='readonly' onClick='this.select();' ><a href='http://www.bricknave.net/Bricknave_LEGO_Piece_Quiz.html'><img src='http://www.bricknave.net/pics/piecequiz/tire_badge.png' /></a></textarea><br />
<br />
Here is the BBCode for the badge:<br /><br />
<textarea rows='3' cols='60' readonly='readonly' onClick='this.select();' >[url=http://www.bricknave.net/Bricknave_LEGO_Piece_Quiz.html][img]http://www.bricknave.net/pics/piecequiz/tire_badge.png[/img][/url]</textarea><br />");
} else if($result == $tube) {
echo("<br /><span style='font-size:1.4em'>You are a Flex Tube!</span>
<br />
<br />
<a href='http://www.bricknave.net/Bricknave_LEGO_Piece_Quiz.html'><img src='http://www.bricknave.net/pics/piecequiz/tube_badge.png' /></a>
<br />
<span style='font-size:1.4em'>No matter how many times you are cut down, you remain flexible!</span>
<br />
<br />Here is the HTML code for the badge:<br /><br />
<textarea rows='3' cols='60' readonly='readonly' onClick='this.select();' ><a href='http://www.bricknave.net/Bricknave_LEGO_Piece_Quiz.html'><img src='http://www.bricknave.net/pics/piecequiz/tube_badge.png' /></a></textarea><br />
<br />
Here is the BBCode for the badge:<br /><br />
<textarea rows='3' cols='60' readonly='readonly' onClick='this.select();' >[url=http://www.bricknave.net/Bricknave_LEGO_Piece_Quiz.html][img]http://www.bricknave.net/pics/piecequiz/tube_badge.png[/img][/url]</textarea><br />");
} else if($result == $joint) {
echo("<br /><span style='font-size:1.4em'>You are a Ball Joint!</span>
<br />
<br />
<a href='http://www.bricknave.net/Bricknave_LEGO_Piece_Quiz.html'><img src='http://www.bricknave.net/pics/piecequiz/joint_badge.png' /></a>
<br />
<span style='font-size:1.4em'>When you have a partner to work with, you make a flexible team!</span>
<br />
<br />Here is the HTML code for the badge:<br /><br />
<textarea rows='3' cols='60' readonly='readonly' onClick='this.select();' ><a href='http://www.bricknave.net/Bricknave_LEGO_Piece_Quiz.html'><img src='http://www.bricknave.net/pics/piecequiz/joint_badge.png' /></a></textarea><br />
<br />
Here is the BBCode for the badge:<br /><br />
<textarea rows='3' cols='60' readonly='readonly' onClick='this.select();' >[url=http://www.bricknave.net/Bricknave_LEGO_Piece_Quiz.html][img]http://www.bricknave.net/pics/piecequiz/joint_badge.png[/img][/url]</textarea><br />");
} else if($result == $brick4knobs) {
echo("<br /><span style='font-size:1.4em'>You are a Brick 1x1 with 4 Knobs!</span>
<br />
<br />
<a href='http://www.bricknave.net/Bricknave_LEGO_Piece_Quiz.html'><img src='http://www.bricknave.net/pics/piecequiz/brick1x1w4knobs_badge.png' /></a>
<br />
<span style='font-size:1.4em'>You excel when it comes to connecting with others!</span>
<br />
<br />Here is the HTML code for the badge:<br /><br />
<textarea rows='3' cols='60' readonly='readonly' onClick='this.select();' ><a href='http://www.bricknave.net/Bricknave_LEGO_Piece_Quiz.html'><img src='http://www.bricknave.net/pics/piecequiz/brick1x1w4knobs_badge.png' /></a></textarea><br />
<br />
Here is the BBCode for the badge:<br /><br />
<textarea rows='3' cols='60' readonly='readonly' onClick='this.select();' >[url=http://www.bricknave.net/Bricknave_LEGO_Piece_Quiz.html][img]http://www.bricknave.net/pics/piecequiz/brick1x1w4knobs_badge.png[/img][/url]</textarea><br />");
} else if($result == $cheese) {
echo("<br /><span style='font-size:1.4em'>You are a Cheese Slope!</span>
<br />
<br />
<a href='http://www.bricknave.net/Bricknave_LEGO_Piece_Quiz.html'><img src='http://www.bricknave.net/pics/piecequiz/cheese_badge.png' /></a>
<br />
<span style='font-size:1.4em'>When surrounded by others like you, you can make something stunning!</span>
<br />
<br />Here is the HTML code for the badge:<br /><br />
<textarea rows='3' cols='60' readonly='readonly' onClick='this.select();' ><a href='http://www.bricknave.net/Bricknave_LEGO_Piece_Quiz.html'><img src='http://www.bricknave.net/pics/piecequiz/cheese_badge.png' /></a></textarea><br />
<br />
Here is the BBCode for the badge:<br /><br />
<textarea rows='3' cols='60' readonly='readonly' onClick='this.select();' >[url=http://www.bricknave.net/Bricknave_LEGO_Piece_Quiz.html][img]http://www.bricknave.net/pics/piecequiz/cheese_badge.png[/img][/url]</textarea><br />");
} else if($result == $beam) {
echo("<br /><span style='font-size:1.4em'>You are a Technic Beam!</span>
<br />
<br />
<a href='http://www.bricknave.net/Bricknave_LEGO_Piece_Quiz.html'><img src='http://www.bricknave.net/pics/piecequiz/beam_badge.png' /></a>
<br />
<span style='font-size:1.4em'>You are depended on to help hold everything together!</span>
<br />
<br />Here is the HTML code for the badge:<br /><br />
<textarea rows='3' cols='60' readonly='readonly' onClick='this.select();' ><a href='http://www.bricknave.net/Bricknave_LEGO_Piece_Quiz.html'><img src='http://www.bricknave.net/pics/piecequiz/beam_badge.png' /></a></textarea><br />
<br />
Here is the BBCode for the badge:<br /><br />
<textarea rows='3' cols='60' readonly='readonly' onClick='this.select();' >[url=http://www.bricknave.net/Bricknave_LEGO_Piece_Quiz.html][img]http://www.bricknave.net/pics/piecequiz/beam_badge.png[/img][/url]</textarea><br />");
} else if($result == $pegaxle) {
echo("<br /><span style='font-size:1.4em'>You are a Peg/Axle!</span>
<br />
<br />
<a href='http://www.bricknave.net/Bricknave_LEGO_Piece_Quiz.html'><img src='http://www.bricknave.net/pics/piecequiz/pegaxle_badge.png' /></a>
<br />
<span style='font-size:1.4em'>You are capable of fitting into two completely different worlds!</span>
<br />
<br />Here is the HTML code for the badge:<br /><br />
<textarea rows='3' cols='60' readonly='readonly' onClick='this.select();' ><a href='http://www.bricknave.net/Bricknave_LEGO_Piece_Quiz.html'><img src='http://www.bricknave.net/pics/piecequiz/pegaxle_badge.png' /></a></textarea><br />
<br />
Here is the BBCode for the badge:<br /><br />
<textarea rows='3' cols='60' readonly='readonly' onClick='this.select();' >[url=http://www.bricknave.net/Bricknave_LEGO_Piece_Quiz.html][img]http://www.bricknave.net/pics/piecequiz/pegaxle_badge.png[/img][/url]</textarea><br />");
} else {
echo("<br /><span style='font-size:1.4em'>You are a Pizza!</span>
<br />
<br />
<a href='http://www.bricknave.net/Bricknave_LEGO_Piece_Quiz.html'><img src='http://www.bricknave.net/pics/piecequiz/pizza_badge.png' /></a>
<br />
<span style='font-size:1.4em'>OMNOMNOMNOMNOMNOM!</span>
<br />
<br />Here is the HTML code for the badge:<br /><br />
<textarea rows='3' cols='60' readonly='readonly' onClick='this.select();' ><a href='http://www.bricknave.net/Bricknave_LEGO_Piece_Quiz.html'><img src='http://www.bricknave.net/pics/piecequiz/pizza_badge.png' /></a></textarea><br />
<br />
Here is the BBCode for the badge:<br /><br />
<textarea rows='3' cols='60' readonly='readonly' onClick='this.select();' >[url=http://www.bricknave.net/Bricknave_LEGO_Piece_Quiz.html][img]http://www.bricknave.net/pics/piecequiz/pizza_badge.png[/img][/url]</textarea><br />");
}
?>
<br />
Oh, and hey, check out Brick Box!<br /><br />
<a href='BrickBox.html' target='_blank'><img src='pics/BrickBoxScreenshot.png' /></a>
</p>
<footer>
<a href="http://www.LEGO.com">LEGO&reg;</a> is a trademark of the LEGO Group of companies which does not sponsor, authorize or endorse this site.
The LEGO Brick is copyright & owned by TLG (The LEGO Group).
</footer>
</body>
</html>