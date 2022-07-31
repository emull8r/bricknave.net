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
$lions = 0;
$eagles = 0;
$gorillas = 0;
$crocs = 0;
$wolves = 0;
$ravens = 0;

$qa = $_POST['question_a'];
$qb = $_POST['question_b'];
$qc = $_POST['question_c'];
$qd = $_POST['question_d'];
$qe = $_POST['question_e'];
$qf = $_POST['question_f'];
$qg = $_POST['question_g'];
$qh = $_POST['question_h'];
//Best trait
if ($qa == 'responsible')
{
$lions+=20;
$eagles-=10;
$gorillas-=10;
$ravens-=20;
$crocs-=6;
$wolves-=7;
$lions-=0;
}
if ($qa == 'wise')
{
$eagles+=20;
$ravens-=20;
$crocs-=7;
$wolves-=6;
$lions-=10;
$gorillas-=6;
}
if ($qa == 'percerverant')
{
$wolves+=20;
$eagles-=2;
$ravens-=2;
$crocs-=2;
$wolves-=2;
$lions-=2;
$gorillas-=2;
}
if ($qa == 'no_best_trait')
{
$crocs+=20;
$ravens+=21;
$eagles-=20;
$ravens-=20;
$wolves-=10;
$lions-=20;
$gorillas-=20;
}
if($qa == 'laid_back')
{
$gorillas+=20;
$crocs-=10;
$lions-=7;
$ravens-=0;
$eagles-=6;
$wolves-=10;
}
//Which vehicle?
if ($qb == 'wheels')
{
$lions+=6;
$wolves+=6;
$crocs+=6;
$eagles-=6;
$ravens-=6;
$gorillas-=6;
}
if ($qb == 'air')
{
$eagles+=6;
$ravens+=6;
$lions-=6;
$wolves-=6;
$crocs-=6;
$gorillas-=6;
}
if ($qb == 'water')
{
$crocs+=6;
$eagles-=6;
$ravens-=6;
$lions-=6;
$wolves-=6;
$gorillas-=6;
}
if ($qb == 'air_and_land')
{
$eagles+=6;
$crocs-=6;
$ravens-=6;
$lions-=6;
$wolves-=6;
$gorillas-=6;
}
if ($qb == 'arms_and_legs')
{
$eagles-=6;
$crocs-=6;
$ravens-=6;
$lions-=6;
$wolves-=6;
$gorillas+=6;
}
// Vehicle competition
if ($qc == 'fair_and_friendly')
{
$lions+=6;
$eagles+=6;
$gorillas+=6;
$crocs-=6;
$ravens-=6;
$wolves-=6;
}
if ($qc == 'fair_and_aggressive')
{
$crocs+=6;
$eagles-=6;
$gorillas-=6;
$ravens-=6;
$lions-=6;
$wolves-=6;
}
if ($qc == 'by_cheating')
{
$wolves+=6;
$crocs-=6;
$gorillas-=6;
$ravens-=6;
$lions-=6;
$eagles-=6;
}
if ($qc == 'any_way')
{
$ravens+=6;
$crocs-=6;
$eagles-=6;
$gorillas-=6;
$lions-=6;
$wolves-=6;
}
// Which weapon
if ($qd == 'sword')
{
$lions+=6;
$wolves+=6;
$crocs+=6;
$eagles-=6;
$ravens-=6;
$gorillas-=6;
}
if ($qd == 'axe')
{
$eagles+=6;
$wolves+=6;
$ravens+=6;
$lions-=6;
$crocs-=6;
$gorillas-=6;
}
if ($qd == 'ranged')
{
$lions+=6;
$crocs+=6;
$ravens+=6;
$eagles-=6;
$wolves-=6;
$gorillas-=6;
}
if ($qd == 'blunt')
{
$lions-=6;
$crocs-=6;
$ravens-=6;
$eagles-=6;
$wolves-=6;
$gorillas+=6;
}
// Which base
if ($qe == 'castle')
{
$lions+=6;
$eagles+=6;
$crocs-=6;
$ravens-=6;
$wolves-=6;
$gorillas-=6;
}
if ($qe == 'mobile')
{
$wolves+=6;
$lions-=6;
$eagles-=6;
$crocs-=6;
$ravens-=6;
$gorillas-=6;
}
if ($qe == 'hideout')
{
$crocs+=6;
$wolves-=6;
$lions-=6;
$eagles-=6;
$ravens-=6;
$gorillas-=6;
}
// Paint job
if ($qf == 'yellow' || $qf == 'orange')
{
$lions+=20;
}
if ($qf == 'blue' || $qf == 'white')
{
$eagles+=20;
}
if ($qf == 'red')
{
$wolves+=20;
$ravens+=20;
}
if ($qf == 'gray')
{
$wolves+=20;
$gorillas+=20;
}
if ($qf == 'green')
{
$crocs+=20;
}
if ($qf == 'black')
{
$gorillas+=20;
}
// Which leader
if ($qg == 'responsible')
{
$lions+=6;
}
if ($qg == 'wise')
{
$eagles+=6;
}
if ($qg == 'calm')
{
$gorillas+=6;
}
if ($qg == 'trinkets')
{
$ravens+=6;
}
if ($qg == 'no_leader')
{
$wolves+=6;
}
// Steal it or leave it
if ($qh == 'steal_it')
{
$crocs+=20;
$wolves+=20;
$ravens+=20;
$lions-=17;
$eagles-=17;
$gorillas-=17;
}
if ($qh == 'put_it_back')
{
$lions+=20;
$eagles+=20;
$gorillas+=20;
$crocs-=17;
$wolves-=17;
$ravens-=17;
}

// Neutral
if ($qa == 'neutral')
{
$wolves+=0;
$crocs+=0;
$eagles+=0;
$lions+=0;
$ravens+=0;
$gorillas+=0;
}
if ($qb == 'neutral')
{
$wolves+=0;
$crocs+=0;
$eagles+=0;
$lions+=0;
$ravens+=0;
$gorillas+=0;
}
if ($qc == 'neutral')
{
$wolves+=0;
$crocs+=0;
$eagles+=0;
$lions+=0;
$ravens+=0;
$gorillas+=0;
}
if ($qd == 'neutral')
{
$wolves+=0;
$crocs+=0;
$eagles+=0;
$lions+=0;
$ravens+=0;
$gorillas+=0;
}
if ($qe == 'neutral')
{
$wolves+=0;
$crocs+=0;
$eagles+=0;
$lions+=0;
$ravens+=0;
$gorillas+=6;
}
if ($qf == 'neutral')
{
$wolves+=0;
$crocs+=0;
$eagles+=0;
$lions+=0;
$ravens+=0;
$gorillas+=0;
}
if ($qg == 'neutral')
{
$wolves+=0;
$crocs+=6;
$eagles+=0;
$lions+=0;
$ravens+=0;
$gorillas+=0;
}
if ($qh == 'neutral')
{
$wolves+=0;
$crocs+=0;
$eagles+=0;
$lions+=0;
$ravens+=0;
$gorillas+=0;
}

if ($lions == max($lions, $ravens, $wolves, $crocs, $eagles, $gorillas))
  echo ("If you were in Chima, the Lions would accept you as an honorary member of their tribe!<br /><br /><img src='pics/Laval.jpg' /><br /><br />
You'd be able to help them protect the mystical Chi from Cragger and his goons!<br />
<br />Here is the HTML code for the badge:<br /><br />
<textarea rows='3' cols='60' readonly='readonly' onClick='this.select();' ><a href='http://www.bricknave.net/Bricknave_LEGO_Chima_Quiz.html'><img src='http://www.bricknave.net/pics/Lions_badge.jpg' /></a></textarea><br />
<br />
Here is the BBCode for the badge:<br /><br />
<textarea rows='3' cols='60' readonly='readonly' onClick='this.select();' >[url=http://www.bricknave.net/Bricknave_LEGO_Chima_Quiz.html][img]http://www.bricknave.net/pics/Lions_badge.jpg[/img][/url]</textarea><br />
<br />
Here is what it looks like:<br />
<br />
<a href='http://www.bricknave.net/Bricknave_LEGO_Chima_Quiz.html'><img src='http://www.bricknave.net/pics/Lions_badge.jpg' /></a><br />
");
elseif ($eagles == max($lions, $ravens, $wolves, $crocs, $eagles, $gorillas))
  echo ("If you were in Chima, the Eagles would gladly welcome you into their nest!<br /><br /><img src='pics/Eris.png' /><br /><br />
You'd enjoy discussing philosophy with your new nest-mates,<br />in addition to helping them battle the Crocs and their allies!<br />
<br />Here is the HTML code for the badge:<br /><br />
<textarea rows='3' cols='60' readonly='readonly' onClick='this.select();' ><a href='http://www.bricknave.net/Bricknave_LEGO_Chima_Quiz.html'><img src='http://www.bricknave.net/pics/Eagles_badge.jpg' /></a></textarea><br />
<br />
Here is the BBCode for the badge:<br /><br />
<textarea rows='3' cols='60' readonly='readonly' onClick='this.select();' >[url=http://www.bricknave.net/Bricknave_LEGO_Chima_Quiz.html][img]http://www.bricknave.net/pics/Eagles_badge.jpg[/img][/url]</textarea><br />
<br />
Here is what it looks like:<br />
<br />
<a href='http://www.bricknave.net/Bricknave_LEGO_Chima_Quiz.html'><img src='http://www.bricknave.net/pics/Eagles_badge.jpg' /></a><br />
");
elseif ($gorillas == max($lions, $ravens, $wolves, $crocs, $eagles, $gorillas))
  echo ("If you were in Chima, the Gorillas would love to groove with you!<br /><br /><img src='pics/Gorzan.jpg' /><br /><br />
You'd have fun hanging out with these laid-back dudes and dudettes,<br />along with helping them battle those nasty Crocs!<br />
<br />Here is the HTML code for the badge:<br /><br />
<textarea rows='3' cols='60' readonly='readonly' onClick='this.select();' ><a href='http://www.bricknave.net/Bricknave_LEGO_Chima_Quiz.html'><img src='http://www.bricknave.net/pics/Gorillas_badge.jpg' /></a></textarea><br />
<br />
Here is the BBCode for the badge:<br /><br />
<textarea rows='3' cols='60' readonly='readonly' onClick='this.select();' >[url=http://www.bricknave.net/Bricknave_LEGO_Chima_Quiz.html][img]http://www.bricknave.net/pics/Gorillas_badge.jpg[/img][/url]</textarea><br />
<br />
Here is what it looks like:<br />
<br />
<a href='http://www.bricknave.net/Bricknave_LEGO_Chima_Quiz.html'><img src='http://www.bricknave.net/pics/Gorillas_badge.jpg' /></a><br />
");
elseif ($crocs == max($lions, $ravens, $wolves, $crocs, $eagles, $gorillas))
  echo ("If you were in Chima, you'd be an honorary member of the Crocodile tribe!<br /><br /><img src='pics/Cragger.png' /><br /><br />
You'd be able to help Cragger crush those stupid Lions and steal their precious Chi!<br />
<br />Here is the HTML code for the badge:<br /><br />
<textarea rows='3' cols='60' readonly='readonly' onClick='this.select();' ><a href='http://www.bricknave.net/Bricknave_LEGO_Chima_Quiz.html'><img src='http://www.bricknave.net/pics/Crocs_badge.jpg' /></a></textarea><br />
<br />
Here is the BBCode for the badge:<br /><br />
<textarea rows='3' cols='60' readonly='readonly' onClick='this.select();' >[url=http://www.bricknave.net/Bricknave_LEGO_Chima_Quiz.html][img]http://www.bricknave.net/pics/Crocs_badge.jpg[/img][/url]</textarea><br />
<br />
Here is what it looks like:<br />
<br />
<a href='http://www.bricknave.net/Bricknave_LEGO_Chima_Quiz.html'><img src='http://www.bricknave.net/pics/Crocs_badge.jpg' /></a><br />
");
elseif ($wolves == max($lions, $ravens, $wolves, $crocs, $eagles, $gorillas))
  echo ("If you were in Chima, the Wolves would welcome you into their pack!<br /><br /><img src='pics/Worriz.jpg' /><br /><br />
You'd help your fellow pack members complete any task at hand, no matter the obstacles!<br />
<br />Here is the HTML code for the badge:<br /><br />
<textarea rows='3' cols='60' readonly='readonly' onClick='this.select();' ><a href='http://www.bricknave.net/Bricknave_LEGO_Chima_Quiz.html'><img src='http://www.bricknave.net/pics/Wolves_badge.jpg' /></a></textarea><br />
<br />
Here is the BBCode for the badge:<br /><br />
<textarea rows='3' cols='60' readonly='readonly' onClick='this.select();' >[url=http://www.bricknave.net/Bricknave_LEGO_Chima_Quiz.html][img]http://www.bricknave.net/pics/Wolves_badge.jpg[/img][/url]</textarea><br />
<br />
Here is what it looks like:<br />
<br />
<a href='http://www.bricknave.net/Bricknave_LEGO_Chima_Quiz.html'><img src='http://www.bricknave.net/pics/Wolves_badge.jpg' /></a><br />
");
elseif ($ravens == max($lions, $ravens, $wolves, $crocs, $eagles, $gorillas))
  echo ("If you were in Chima, you'd be an <span style='text-decoration: line-through;'>asset</span> member of the Raven tribe!<br /><br /><img src='pics/Razcal.jpg' /><br /><br />
It'd be a good idea to check if you've been pick-pocketed after the initiation ...<br />
<br />Here is the HTML code for the badge:<br /><br />
<textarea rows='3' cols='60' readonly='readonly' onClick='this.select();' ><a href='http://www.bricknave.net/Bricknave_LEGO_Chima_Quiz.html'><img src='http://www.bricknave.net/pics/Ravens_badge.jpg' /></a></textarea><br />
<br />
Here is the BBCode for the badge:<br /><br />
<textarea rows='3' cols='60' readonly='readonly' onClick='this.select();' >[url=http://www.bricknave.net/Bricknave_LEGO_Chima_Quiz.html][img]http://www.bricknave.net/pics/Ravens_badge.jpg[/img][/url]</textarea><br />
<br />
Here is what it looks like:<br />
<br />
<a href='http://www.bricknave.net/Bricknave_LEGO_Chima_Quiz.html'><img src='http://www.bricknave.net/pics/Ravens_badge.jpg' /></a><br />
");
else
  echo("<br />It seems you'd either fit into all of the tribes or none of them.");
?>
Be sure to check out the <a href="http://www.lego.com/en-us/chima/" target="_blank">LEGO Chima site</a>!
</p>
<footer>
<a href="http://www.LEGO.com">LEGO&reg;</a> is a trademark of the LEGO Group of companies which does not sponsor, authorize or endorse this site.
The LEGO Brick is copyright & owned by TLG (The LEGO Group).
</footer>
</body>
</html>