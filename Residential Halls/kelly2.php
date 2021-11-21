<!DOCTYPE html>
<?php
include 'dbhkelly.inc.php';
include 'comment.inckellu.php';
?>
<html>
<head>
	<title>Kelly hall</title>
	<link rel="stylesheet" type="text/css" href="ResdTemplate.css">
	<script type="text/javascript" src="ResdTemplate.js"></script>
</head>
<body>
	<div id="home">

<div id="toolbar">

<img src="sidebar.png" alt="Expand Menu" onmouseenter="openMenu()" id="image">
<p id="tooltext">
	<a href="index.php"> Home</a>
	<a href="#"> About us</a>
	<a href="#"> Contact us</a>
</p>
</div>
<div id="side-bar" class="sidebar" onmouseleave="closeMenu()">
	<a href="index.php"><img src="drexel1.png" id="DrexelImg" alt="Millenium hall"></a>
	<ol>
		<a href="ResdOpt.html"><li>Residential Halls</li></a>
		<a href="#"><li> Dinings</li></a>
		<a href="#"><li> Parties</li></a>
	</ol>
</div>
<div id="resdpic">
	<img src="kelly.jpg">
</div>
<div id="description">
	Kelly Hall: </br></br>
	$3,180 per quarter</br>
	Traditional Dorm style</br>
	Tiles flooring and carpets on the corridors
</div>

<div id="list">
	Comes With:
	<ol type="disc">
		<li>Wardrobe</li>
		<li>Desk with Chairs</li>
		<li>Set of drawers </li>
		<li>Twin sized bed</li>
	</ol>
</div>

<div id="proscons">
Pros:
<ol type="disc">

	<li>Very social environment</li>
	<li>Lounge at each floor with TVs</li>
	<li>Private A/Cs</li>
</ol>
Cons:
<ol>
	<li>Communal bathroom</li>
	<li>Small spaced room</li>

</ol>

<div id="survey">
Review: </br></br>
Danil:</br>
	Kelly is a standard traditional dorm. There is nothing very special about the hall. It is just average in my opinion. I don't mind living here but I would choose another dorm to live in if given a chance to choose again.
	<br>6/10
	<?php
	echo "<form method='POST' action='".setComments($conn)."'>
	    <input type='hidden' name='uid' value='Anonymous'>
	    <input type='hidden' name='date' value='".date('Y-m-d H:i:s')."'>
	    <textarea name='message' rows='8' cols='80'></textarea>
	    <button type='submit' name='commentSubmit'>Comment</button>
	</form>";

	getComments($conn);
	?>

</div>
</div>
</div>
</body>
</html>
