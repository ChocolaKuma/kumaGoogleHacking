<?php
//https://www.google.com/search?as_q=nintendo+wii

$googlestring = "https://www.google.com/search?as_q=";

if(isset($_GET['search'])){$googlestring = $googlestring + "+" + $_GET['search'];};
if(isset($_GET['intitle'])){$googlestring = $googlestring + "+intitle:";};
if(isset($_GET['mp3'])){$googlestring = $googlestring + "+mp3" ;};
if(isset($_GET['mp4'])){$googlestring = $googlestring + "+mp4";};
if(isset($_GET['avi'])){$googlestring = $googlestring + "+avi";};
if(isset($_GET['mkv'])){$googlestring = $googlestring + "+mkv";};


echo $googlestring;

?>

<html>
<style>

</style>

<table align="center">
<form>

<tr "center"><td align="center"><img src="" height="400" width="400"></td></tr>
<tr "center"><td align="center">Search <input type="text" name="search"></td></tr>

<tr "center"><td align="center">|<input type="radio" name="intitle"> intitle| </td></tr>
<tr "center"><td align="center">
|
<input type="radio" name="mp3">  mp3 |
<input type="radio" name="mp4"> mp4 |
<input type="radio" name="avi"> avi |
<input type="radio" name="mkv"> mkv |
</tr></td><tr align="center"><td align="center">
<br>
<input type="submit" name="Enter"></tr></td>
</form>
<tr "center"><td align="center"><br><br><br>
notes: <a href="http://www.our-picks.com/archives/2007/01/30/google-search-urls-revealed-or-how-to-create-your-own-search-url/">our-picks.com</a>
</td></tr>

</html


><hr>

<form action="" method="post">
<input type="radio" name="radio" value="Radio 1">Radio 1
<input type="radio" name="radio" value="Radio 2">Radio 2
<input type="radio" name="radio" value="Radio 3">Radio 3
<input type="submit" name="submit" value="Get Selected Values" />
</form>
