<!DOCTYPE html>
<?php
include 'dbhnorth.inc.php';
include 'commentnorth.inc.php';
?>
<html>
<head>
    <title>Northside Dining Terrace</title>
    <link rel="stylesheet" type="text/css" href="diningTemplate.css">
    <script type="text/javascript" src="diningTemplate.js"></script>
</head>

<body>
    <div id="description">
    </div>

    <div id="toolbar">

        <img src="sidebar.png" alt="Expand Menu" onmouseenter="openMenu()" id="image">
        <p id="tooltext">
            <a href="#"> Home</a>
            <a href="#"> About us</a>
            <a href="#"> Contact us</a>
        </p>
    </div>
    <div id='image-dinning'><img src="northside.jpg" alt=""></div>
    <div id="description">
        <h1>Northside Dining Terrace</h1>

        <p>
            Northside Dining Terrace offers students a selection of items from Chinese kitchen and Chick-fil-a.<br /> <br />
            Students can eat at the dining or outside at the race lawn. They can take it with them too.<br /><br />
            It offers variety of both vegetarian and non-vegetarian dishes.
            <br /><br />
            There is a grocery store attached to the dining as well.
            <br /><br />
            Currency Accepted:<br />
            Dining Dollars, DragonDollars, Credit card, and Cash.


        </p>
        <p>
            <h3>Regular Hours:</h3>
            <h4>Breakfast:</h4>
            Mon - Fri 7:00AM - 11:00AM<br />
            <h4>Brunch:</h4>
            Sat - Sun 10:00AM - 4:00PM<br />
            <h4>Lunch:</h4>
            Mon - Fri 11:00AM - 2:30PM<br />
            <h4>Light Lunch:</h4>
            Mon - Fri 2:30PM - 5:00PM<br />
            <h4>Dinner:</h4>
            Mon - Fri 5:00PM - 9:00PM<br />

        </p>
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

    <div id="side-bar" class="sidebar" onmouseleave="closeMenu()">
        <img src="drexel1.png" id="DrexelImg">
        <ul>
            <a href="#">
                <li>Residential Halls</li>
            </a>
            <a href="#">
                <li> Dinings</li>
            </a>
            <a href="#">
                <li> Parties</li>
            </a>
		</ul>

    </div>

</body>

</html>