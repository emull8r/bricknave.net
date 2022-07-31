<!DOCTYPE html>

<!----------------------------------

Evan Mulloy, AKA Bricknave, 2011-now

------------------------------------>

<html>

<head>

<title>Bricknave.net - Sci Fi</title>

<meta charset="UTF-8">

<meta name="viewport" content="width=device-width, initial-scale=1.0">

<meta name="keywords" content="lego, LEGO, bricknave, Bricknave, lego reviews, lego games, lego quizzes, lego mocs, lego creations, lego models, lego builds, mocs, space, scifi, mechs, aliens" />
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

<?php
function dateSort($a,$b)
{
$data1 = exif_read_data ($a);
$date1 = $data1['DateTimeOriginal'];

$data2 = exif_read_data ($b);
$date2 = $data2['DateTimeOriginal'];

return ($date1 > $date2)?-1:1;
}
?>

<?php
	//Change the variable "directory" to the name of the MOC directory you are pulling the images from.
	$directory = "sci_fi";
	//There shall be a limit of how many MOCs are in a row
	$mocMax = 3;
	//Speaking of which, let's count our MOCs
	$mocCount = 0;
	//Grab all the images from the folder
	$images = glob("pics/mocs/".$directory."/*.{png,jpg,jpeg,gif}", GLOB_BRACE);
	usort($images,"dateSort");
	
	
	echo("<table class='mocs'><tr>");
	foreach($images as $image) {
		// We want to put the "name" or "title" underneath each image, but first we must get rid of all the file-related stuff
		$name = str_replace(".jpg", "", "".$image);
		$name = str_replace(".png", "", $name);
		$name = str_replace("pics/mocs/".$directory."/", "", $name);
		$name = str_replace("_", " ", $name);
		echo("<td><img oncontextmenu='return false;' src='".$image."' alt='".$name."'></img><p>".$name."</p></td>");
		$mocCount++;
		// If we've reached the max of MOCs (table data) per row, start a new row
		if(($mocCount % $mocMax) == 0) {
			echo("</tr><tr>");
		}
	}
	echo("</tr></table>");
?>

<footer >
<a href="http://www.LEGO.com">LEGO&reg;</a> is a trademark of the LEGO Group of companies which does not sponsor, authorize or endorse this site.
The LEGO Brick is copyright & owned by TLG (The LEGO Group).
</footer>
</body>
</html>