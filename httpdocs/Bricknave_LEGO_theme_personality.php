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
$creator = 1;
$action = 1;
$historical = 1;
$town = 1;
$technic = 1;
$space = 1;

$qa = $_POST['question_a'];
$qb = $_POST['question_b'];
$qc = $_POST['question_c'];
$qd = $_POST['question_d'];
$qe = $_POST['question_e'];
$qf = $_POST['question_f'];
$qg = $_POST['question_g'];
$qh = $_POST['question_h'];

if ($qa == 'down_to_earth')
{
$town+=10;
$historical+=10;
$technic+=3;
}

if ($qb == 'minifigs')
{
$town+=8;
$historical+=8;
$space+=8;
$action+=8;
}

if ($qb == 'depends_on_set')
{
$town+=11;
$historical+=11;
$space+=11;
$action+=11;
$creator+=11;
}

if ($qd == 'alts_yes')
{
$creator+=6;
$technic+=6;
}

if ($qd == 'alts_no')
{
$town+=6;
$historical+=6;
$space+=6;
$action+=6;
}
if ($qg == 'no_modern_vehicles')
{
$space+=8;
$historical+=8;
}

if ($qf == 'no_modern_weapons')
{
$space+=9;
$historical+=9;
}

if ($qf == 'prefer_peace')
{
$technic+=9;
$creator+=9;
}

if ($qh == 'make_own_story')
{
$town+=3;
$creator+=3;
$technic+=3;
}

if ($qh == 'two_factions')
{
$historical+=3;
$space+=3;
$action+=1;
}

if ($qa == 'creator')
{
$creator+=10;
}
if ($qb == 'creator')
{
$creator+=8;
}
if ($qc == 'creator')
{
$creator+=6;
}
if ($qd == 'creator')
{
$creator+=4;
}
if ($qe == 'creator')
{
$creator+=10;
}
if ($qf == 'creator')
{
$creator+=9;
}
if ($qg == 'creator')
{
$creator+=8;
$technic+=8;
}
if ($qh == 'creator')
{
$creator+=3;
}


if ($qa == 'action')
{
$action+=10;
}
if ($qb == 'action')
{
$action+=7;
}
if ($qc == 'action')
{
$action+=6;
}
if ($qd == 'action')
{
$action+=4;
}
if ($qe == 'action')
{
$action+=10;
}
if ($qf == 'action')
{
$action+=9;
}
if ($qg == 'action')
{
$action+=8;
}
if ($qh == 'action')
{
$action+=3;
}

if ($qa == 'historical')
{
$historical+=10;
}
if ($qb == 'historical')
{
$historical+=4;
}
if ($qc == 'historical')
{
$historical+=8;
}
if ($qd == 'historical')
{
$historical+=6;
}
if ($qe == 'historical')
{
$historical+=10;
}
if ($qf == 'historical')
{
$historical+=9;
}
if ($qg == 'historical')
{
$historical+=20;
}
if ($qh == 'historical')
{
$historical+=3;
}



if ($qa == 'town')
{
$town+=10;
}
if ($qb == 'town')
{
$town+=6;
}
if ($qc == 'town')
{
$town+=7;
}
if ($qd == 'town')
{
$town+=20;
}
if ($qe == 'town')
{
$town+=10;
$technic+=10;
}
if ($qf == 'town')
{
$town+=9;
}
if ($qg == 'town')
{
$town+=8;
}
if ($qh == 'town')
{
$town+=3;
}

if ($qa == 'technic')
{
$technic+=10;
}
if ($qb == 'technic')
{
$technic+=7;
}
if ($qc == 'technic')
{
$technic+=6;
}
if ($qd == 'technic')
{
$technic+=4;
}
if ($qe == 'technic')
{
$technic+=10;
}
if ($qf == 'technic')
{
$technic+=9;
}
if ($qg == 'technic')
{
$technic+=8;
}
if ($qh == 'technic')
{
$technic+=3;
}

if ($qa == 'space')
{
$space+=10;
}
if ($qb == 'space')
{
$space+=7;
}
if ($qc == 'space')
{
$space+=6;
}
if ($qd == 'space')
{
$space+=4;
}
if ($qe == 'space')
{
$space+=10;
}
if ($qf == 'space')
{
$space+=9;
}
if ($qg == 'space')
{
$space+=8;
}
if ($qh == 'space')
{
$space+=3;
}

if ($creator == max($creator, $space, $action, $historical, $town, $technic))
  echo ('You are most like Creator!<br /><br /><img src="pics/Creator.jpg" /><br /><br />
Creator does not have a specific flavor, but yet it is not bland.<br />
It can be an airplane today, a lion tomorrow and a motorcycle the next day.<br />
There are many possibilities as to what can be built with Creator.<br />
<br />Here is the HTML code for the badge:<br /><br />
<textarea rows="3" cols="60" readonly="readonly" onClick="this.select();" ><a href="http://www.bricknave.net/Bricknave_LEGO_theme_personality.html"><img src="http://www.bricknave.net/pics/Creator_badge.jpg" /></a></textarea><br />
<br />
Here is the BBCode for the badge:<br /><br />
<textarea rows="3" cols="60" readonly="readonly" onClick="this.select();" >[url=http://www.bricknave.net/Bricknave_LEGO_theme_personality.html][img]http://www.bricknave.net/pics/Creator_badge.jpg[/img][/url]</textarea><br />
<br />
Here is what it looks like:<br />
<br />
<a href="http://www.bricknave.net/Bricknave_LEGO_theme_personality.html"><img src="http://www.bricknave.net/pics/Creator_badge.jpg" /></a><br />
');
elseif ($action == max($creator, $space, $action, $historical, $town, $technic))
  echo ('You are most like the Action Themes!<br /><br /><img src="pics/Action_Themes.gif" /><br /><br />
Pretty much every year the LEGO Group introduces one or two original themes that include the following:<br />
Heroes, villains, vehicles and a volley of weapons.<br />
Action themes may seem like pure violence at first, but sometimes there are educational elements to them.<br />
On the website of Orient Expedition (a continuation of Adventurers), there was a page full of real-life<br />
facts about the countries the heroes explored.<br />
<br />Here is the HTML code for the badge:<br /><br />
<textarea rows="3" cols="60" readonly="readonly" onClick="this.select();" ><a href="http://www.bricknave.net/Bricknave_LEGO_theme_personality.html"><img src="http://www.bricknave.net/pics/Action_Themes_badge.jpg" /></a></textarea><br />
<br />
Here is the BBCode for the badge:<br /><br />
<textarea rows="3" cols="60" readonly="readonly" onClick="this.select();" >[url=http://www.bricknave.net/Bricknave_LEGO_theme_personality.html][img]http://www.bricknave.net/pics/Action_Themes_badge.jpg[/img][/url]</textarea><br />
<br />
Here is what it looks like:<br />
<br />
<a href="http://www.bricknave.net/Bricknave_LEGO_theme_personality.html"><img src="http://www.bricknave.net/pics/Action_Themes_badge.jpg" /></a><br />
');
elseif ($historical == max($creator, $space, $action, $historical, $town, $technic))
  echo ('You are most like the Historical themes!<br /><br /><img src="pics/Historical.jpg" /><br /><br />
Something from the past is a vital part of any fan convention table,<br />
whether it is something from the days of yore or the Age of Sail.<br />
Historical MOCs are usually down to Earth, but sometimes they take place in magical<br />
lands of adventure (which have the possibility of featuring people from different eras).<br />
Historical themes always manifest themselves in one form or another every year,<br />
even if it is just one set or a Collectible Minifigure.<br />
<br />Here is the HTML code for the badge:<br /><br />
<textarea rows="3" cols="60" readonly="readonly" onClick="this.select();" ><a href="http://www.bricknave.net/Bricknave_LEGO_theme_personality.html"><img src="http://www.bricknave.net/pics/Historical_badge.jpg" /></a></textarea><br />
<br />
Here is the BBCode for the badge:<br /><br />
<textarea rows="3" cols="60" readonly="readonly" onClick="this.select();" >[url=http://www.bricknave.net/Bricknave_LEGO_theme_personality.html][img]http://www.bricknave.net/pics/Historical_badge.jpg[/img][/url]</textarea><br />
<br />
Here is what it looks like:<br />
<br />
<a href="http://www.bricknave.net/Bricknave_LEGO_theme_personality.html"><img src="http://www.bricknave.net/pics/Historical_badge.jpg" /></a><br />
');
elseif ($town == max($creator, $space, $action, $historical, $town, $technic))
  echo ('You are most like the City-related themes!<br /><br /><img src="pics/City.jpg" /><br /><br />
Sets based on real life never go away.  A peaceful neighborhood or a bustling City is<br />
just as interesting as a spaceship or a castle, but in a more mellow way.<br />
The advantage of City-themed builds is the possibility of utilizing some trains.<br />
<br />Here is the HTML code for the badge:<br /><br />
<textarea rows="3" cols="60" readonly="readonly" onClick="this.select();" ><a href="http://www.bricknave.net/Bricknave_LEGO_theme_personality.html"><img src="http://www.bricknave.net/pics/City_badge.jpg" /></a></textarea><br />
<br />
Here is the BBCode for the badge:<br /><br />
<textarea rows="3" cols="60" readonly="readonly" onClick="this.select();" >[url=http://www.bricknave.net/Bricknave_LEGO_theme_personality.html][img]http://www.bricknave.net/pics/City_badge.jpg[/img][/url]</textarea><br />
<br />
Here is what it looks like:<br />
<br />
<a href="http://www.bricknave.net/Bricknave_LEGO_theme_personality.html"><img src="http://www.bricknave.net/pics/City_badge.jpg" /></a><br />
');
elseif ($technic == max($creator, $space, $action, $historical, $town, $technic))
  echo ("You are most like Technic!<br /><br /><img src='pics/Technic.jpg' /><br /><br />
Technic isn't all childs play.<br />
It can be used to create contraptions and robots, in addition to very sturdy models.<br />
Technic doesn't focus on looks, but it can go beyond what normal LEGO bricks can do.<br />
<br />Here is the HTML code for the badge:<br /><br />
<textarea rows='3' cols='60' readonly='readonly' onClick='this.select();' ><a href='http://www.bricknave.net/Bricknave_LEGO_theme_personality.html'><img src='http://www.bricknave.net/pics/Technic_badge.jpg' /></a></textarea><br />
<br />
Here is the BBCode for the badge:<br /><br />
<textarea rows='3' cols='60' readonly='readonly' onClick='this.select();' >[url=http://www.bricknave.net/Bricknave_LEGO_theme_personality.html][img]http://www.bricknave.net/pics/Technic_badge.jpg[/img][/url]</textarea><br />
<br />
Here is what it looks like:<br />
<br />
<a href='http://www.bricknave.net/Bricknave_LEGO_theme_personality.html'><img src='http://www.bricknave.net/pics/Technic_badge.jpg' /></a><br />
");
elseif ($space == max($creator, $space, $action, $historical, $town, $technic))
  echo ("You are most like Space!<br /><br /><img src='pics/Space.jpg' height='50%' width='50%'/><br /><br />
A cornerstone LEGO theme, Space always shows up in one form or another,<br />
whether it be a line of playsets or a collectible Minifigure.<br />
Space has little restrictions in terms of building.<br />
You could build a town car with strange pieces showing on the outside and it wouldn't look right,<br />
but you could incorporate those same pieces into the engine of a spacecraft without reprecussion.<br />
<br />Here is the HTML code for the badge:<br /><br />
<textarea rows='3' cols='60' readonly='readonly' onClick='this.select();' ><a href='http://www.bricknave.net/Bricknave_LEGO_theme_personality.html'><img src='http://www.bricknave.net/pics/Space_badge.jpg' /></a></textarea><br />
<br />
Here is the BBCode for the badge:<br /><br />
<textarea rows='3' cols='60' readonly='readonly' onClick='this.select();' >[url=http://www.bricknave.net/Bricknave_LEGO_theme_personality.html][img]http://www.bricknave.net/pics/Space_badge.jpg[/img][/url]</textarea><br />
<br />
Here is what it looks like:<br />
<br />
<a href='http://www.bricknave.net/Bricknave_LEGO_theme_personality.html'><img src='http://www.bricknave.net/pics/Space_badge.jpg' /></a><br />
");
else
  echo('You are most like Creator!<br /><br /><img src="pics/Creator.jpg" /><br /><br />
Creator does not have a specific flavor, but yet it is not bland.<br />
It can be an airplane today, a lion tomorrow and a motorcycle the next day.<br />
Creator is very diverse, and there is an unlimited amount of possibilities of what it can become.<br />
<br />Here is the HTML code for the badge:<br /><br />
<textarea rows="3" cols="60" readonly="readonly" onClick="this.select();" ><a href="http://www.bricknave.net/Bricknave_LEGO_theme_personality.html"><img src="http://www.bricknave.net/pics/Creator_badge.jpg" /></a></textarea><br />
<br />
Here is the BBCode for the badge:<br /><br />
<textarea rows="3" cols="60" readonly="readonly" onClick="this.select();" >[url=http://www.bricknave.net/Bricknave_LEGO_theme_personality.html][img]http://www.bricknave.net/pics/Creator_badge.jpg[/img][/url]</textarea><br />
<br />
Here is what it looks like:<br />
<br />
<a href="http://www.bricknave.net/Bricknave_LEGO_theme_personality.html"><img src="http://www.bricknave.net/pics/Creator_badge.jpg" /></a><br />
');
?>

</p>
<footer>
<a href="http://www.LEGO.com">LEGO&reg;</a> is a trademark of the LEGO Group of companies which does not sponsor, authorize or endorse this site.
The LEGO Brick is copyright & owned by TLG (The LEGO Group).
</footer>
</body>
</html>