<!DOCTYPE html>
<?php
include 'dbh.inc.php';
include 'comment.inc.php';
?>
<html>
<head>
	<title>Millennium</title>
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
	<img src="milly.jpg">
</div>
<div id="description">
	<h1>Millenium Hall:</h1>
	$3,180 per quarter</br>
	Traditional Dorm style</br>
	Tiles flooring and carpets on the corridors
</div>

<div id="list">
	Comes With:
	<ol type="disc">
		<li>Wardrobe</li>
		<li>Desk with Chairs</li>
		<li>2 extra sets of drawers </li>
		<li>Twin sized bed</li>
	</ol>
</div>

<div id="proscons">
Pros:
<ol type="disc">

	<li>Very social environment</li>
	<li>Lounge at each floor with TVs</li>
	<li>Top floor lounge with the view of the city</li>

</ol>
Cons:
<ol>
	<li>Communal kitchen and bathroom</li>
	<li>Small spaced room</li>
	<li>Central A/C</li>
</ol>

<div id="survey">
Review: </br></br>


<br>
Eshan:</br>
	I have loved millennium till now. It's nice to able to know everyone on your floor and have a good relationships with them. The only thing I would complain about is the room size, which for me isn't much of a deal breaker. 9/10

</div>
</div>

<div class="starbox">
		 <input type="radio" name="star" id="star1"><label for="star1"></label>
		 <input type="radio" name="star" id="star2"><label for="star2"></label>
		 <input type="radio" name="star" id="star3"><label for="star3"></label>
		 <input type="radio" name="star" id="star4"><label for="star4"></label>
		 <input type="radio" name="star" id="star5"><label for="star5"></label>
</div>
<br>
<br>
<br>

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
</body>
</html>
