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
$Human = 0;
$Dwarf = 0;
$Elf = 0;
$Hobbit = 0;
$Orc = 0;

$qa = $_POST['question_a'];
$qb = $_POST['question_b'];
$qc = $_POST['question_c'];
$qd = $_POST['question_d'];
$qe = $_POST['question_e'];
$qf = $_POST['question_f'];
$qg = $_POST['question_g'];
$qh = $_POST['question_h'];

if ($qa == "caverns") {
$Dwarf += 1;
}
if ($qa == "forests") {
$Elf += 1;
}
if ($qa == "plains") {
$Human += 1;
}
if ($qa == "neighborhood") {
$Hobbit += 1;
}
if ($qa == "battlefield") {
$Orc += 1;
}

if ($qb == "crafting") {
$Dwarf += 1;
}
if ($qb == "any_art") {
$Elf += 1;
$Human += 1;
}
if ($qb == "gardening") {
$Hobbit += 1;
}
if ($qb == "fighting") {
$Orc += 1;
}

if ($qc == "mining") {
$Dwarf += 1;
}
if ($qc == "healing") {
$Elf += 1;
}
if ($qc == "no_preference") {
$Human += 1;
}
if ($qc == "farming") {
$Hobbit += 1;
}
if ($qc == "fighting") {
$Orc += 1;
}

if ($qd == "gold") {
$Dwarf += 1;
}
if ($qd == "nature") {
$Elf += 1;
}
if ($qd == "any_goods") {
$Human += 1;
$Orc += 1;
}
if ($qd == "food") {
$Hobbit += 1;
}

if ($qe == "vegetables") {
$Elf += 1;
}
if ($qe == "all_of_the_above") {
$Human += 1;
}
if ($qe == "good_plain_food") {
$Hobbit += 1;
}
if ($qe == "meat") {
$Orc += 1;
$Dwarf += 1;
}

if ($qf == "axe") {
$Dwarf += 1;
}
if ($qf == "sword") {
$Elf += 1;
$Human += 1;
}
if ($qf == "my_size") {
$Hobbit += 1;
}
if ($qf == "scimitar") {
$Orc += 1;
}

if ($qg == "spare_life") {
$Hobbit += 1;
$Elf += 1;
$Human += 1;
$Dwarf += 1;
}
if ($qg == "destroy_them") {
$Orc += 2;
$Human += 1;
}
if ($qg == "interrogation") {
$Hobbit += 1;
$Elf += 1;
$Human += 1;
$Dwarf += 1;
$Orc += 1;
}

if ($qh == "stout") {
$Dwarf += 2;
}
if ($qh == "wise") {
$Elf += 2;
}
if ($qh == "no_trait") {
$Human += 2;
}
if ($qh == "simple") {
$Hobbit += 2;
}
if ($qh == "rough") {
$Orc += 2;
}


if ($Human == max($Human, $Hobbit, $Elf, $Dwarf, $Orc))
  echo ("<img src='http://www.bricknave.net/pics/LOTR/Bricknave_LOTR_Quiz_Human.jpg'></img><br />
  <br />
  You are still a Human!<br />
  The Humans are a proud and generally well-liked people.<br />
  They are the middle-ground between the elegance of the Elves and stoutness of the Dwarves.<br />
  <br />
<br />Here is the HTML code for the badge:<br /><br />
<textarea rows='3' cols='60' readonly='readonly' onClick='this.select();' ><a href='http://www.bricknave.net/Bricknave_LEGO_Middle_Earth_Quiz.html'><img src='http://www.bricknave.net/pics/LOTR/Human_Badge.jpg' /></a></textarea><br />
<br />
Here is the BBCode for the badge:<br /><br />
<textarea rows='3' cols='60' readonly='readonly' onClick='this.select();' >[url=http://www.bricknave.net/Bricknave_LEGO_Middle_Earth_Quiz.html][img]http://www.bricknave.net/pics/LOTR/Human_Badge.jpg[/img][/url]</textarea><br />
<br />
Here is what it looks like:<br />
<br />
<a href='http://www.bricknave.net/Bricknave_LEGO_Middle_Earth_Quiz.html'><img src='http://www.bricknave.net/pics/LOTR/Human_Badge.jpg' /></a><br />
");
elseif ($Elf == max($Human, $Hobbit, $Elf, $Dwarf, $Orc))
  echo ("<img src='http://www.bricknave.net/pics/LOTR/Bricknave_LOTR_Quiz_Elf.jpg'></img><br />
  <br />
  You are an Elf!<br />
  The Elves are an elegant and powerful people, known for their excellence in various arts.<br />
  <br />
<br />Here is the HTML code for the badge:<br /><br />
<textarea rows='3' cols='60' readonly='readonly' onClick='this.select();' ><a href='http://www.bricknave.net/Bricknave_LEGO_Middle_Earth_Quiz.html'><img src='http://www.bricknave.net/pics/LOTR/Elf_Badge.jpg' /></a></textarea><br />
<br />
Here is the BBCode for the badge:<br /><br />
<textarea rows='3' cols='60' readonly='readonly' onClick='this.select();' >[url=http://www.bricknave.net/Bricknave_LEGO_Middle_Earth_Quiz.html][img]http://www.bricknave.net/pics/LOTR/Elf_Badge.jpg[/img][/url]</textarea><br />
<br />
Here is what it looks like:<br />
<br />
<a href='http://www.bricknave.net/Bricknave_LEGO_Middle_Earth_Quiz.html'><img src='http://www.bricknave.net/pics/LOTR/Elf_Badge.jpg' /></a><br />
");
elseif ($Dwarf == max($Human, $Hobbit, $Elf, $Dwarf, $Orc))
  echo ("<img src='http://www.bricknave.net/pics/LOTR/Bricknave_LOTR_Quiz_Dwarf.jpg'></img><br />
  <br />
  You are a Dwarf!<br />
  The stout, hardy Dwarves are well known for their craftsmenship and ferocity in battle.<br />
  <br />
<br />Here is the HTML code for the badge:<br /><br />
<textarea rows='3' cols='60' readonly='readonly' onClick='this.select();' ><a href='http://www.bricknave.net/Bricknave_LEGO_Middle_Earth_Quiz.html'><img src='http://www.bricknave.net/pics/LOTR/Dwarf_Badge.jpg' /></a></textarea><br />
<br />
Here is the BBCode for the badge:<br /><br />
<textarea rows='3' cols='60' readonly='readonly' onClick='this.select();' >[url=http://www.bricknave.net/Bricknave_LEGO_Middle_Earth_Quiz.html][img]http://www.bricknave.net/pics/LOTR/Dwarf_Badge.jpg[/img][/url]</textarea><br />
<br />
Here is what it looks like:<br />
<br />
<a href='http://www.bricknave.net/Bricknave_LEGO_Middle_Earth_Quiz.html'><img src='http://www.bricknave.net/pics/LOTR/Dwarf_Badge.jpg' /></a><br />
");
elseif ($Hobbit == max($Human, $Hobbit, $Elf, $Dwarf, $Orc))
  echo ("<img src='http://www.bricknave.net/pics/LOTR/Bricknave_LOTR_Quiz_Hobbit.jpg'></img><br />
  <br />
  You are a Hobbit!<br />
  Although the commonfolk of the Shire are hardly ever warriors or adventurers, they are capable of accomplishing great things.<br />
  <br />
<br />Here is the HTML code for the badge:<br /><br />
<textarea rows='3' cols='60' readonly='readonly' onClick='this.select();' ><a href='http://www.bricknave.net/Bricknave_LEGO_Middle_Earth_Quiz.html'><img src='http://www.bricknave.net/pics/LOTR/Hobbit_Badge.jpg' /></a></textarea><br />
<br />
Here is the BBCode for the badge:<br /><br />
<textarea rows='3' cols='60' readonly='readonly' onClick='this.select();' >[url=http://www.bricknave.net/Bricknave_LEGO_Middle_Earth_Quiz.html][img]http://www.bricknave.net/pics/LOTR/Hobbit_Badge.jpg[/img][/url]</textarea><br />
<br />
Here is what it looks like:<br />
<br />
<a href='http://www.bricknave.net/Bricknave_LEGO_Middle_Earth_Quiz.html'><img src='http://www.bricknave.net/pics/LOTR/Hobbit_Badge.jpg' /></a><br />
");
elseif ($Orc == max($Human, $Hobbit, $Elf, $Dwarf, $Orc))
  echo ("<img src='http://www.bricknave.net/pics/LOTR/Bricknave_LOTR_Quiz_Orc.jpg'></img><br />
  <br />
  You are an Orc!<br />
  Orcs ... Aren't the most well-liked residents around, but they are very powerful when organized.<br />
  <br />
<br />Here is the HTML code for the badge:<br /><br />
<textarea rows='3' cols='60' readonly='readonly' onClick='this.select();' ><a href='http://www.bricknave.net/Bricknave_LEGO_Middle_Earth_Quiz.html'><img src='http://www.bricknave.net/pics/LOTR/Orc_Badge.jpg' /></a></textarea><br />
<br />
Here is the BBCode for the badge:<br /><br />
<textarea rows='3' cols='60' readonly='readonly' onClick='this.select();' >[url=http://www.bricknave.net/Bricknave_LEGO_Middle_Earth_Quiz.html][img]http://www.bricknave.net/pics/LOTR/Orc_Badge.jpg[/img][/url]</textarea><br />
<br />
Here is what it looks like:<br />
<br />
<a href='http://www.bricknave.net/Bricknave_LEGO_Middle_Earth_Quiz.html'><img src='http://www.bricknave.net/pics/LOTR/Orc_Badge.jpg' /></a><br />
");
else
  echo("");
?>
Be sure to check out the <a href="http://thelordoftherings.lego.com/en-us/Default.aspx" target="_blank">LEGO LOTR site</a> and the <a href="http://thehobbit.lego.com/en-us" target="_blank">LEGO Hobbit site</a>!
</p>
<footer>
<a href="http://www.LEGO.com">LEGO&reg;</a> is a trademark of the LEGO Group of companies which does not sponsor, authorize or endorse this site.
The LEGO Brick is copyright & owned by TLG (The LEGO Group).
</footer>
</body>
</html>