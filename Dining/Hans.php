<!DOCTYPE html>
<?php
include 'dbhdining.inc.php';
include 'commentdining.inc.php';
?>
<html>
<head>
    <title>Handschumacher Dining Center</title>
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
    <div id='image-dinning'><img src="hans.jpg" alt=""></div>
    <div id="description">
        <h1>Handschumacher Dining Center</h1>

        <p>
            Hans offers students a large variety of favorite foods.<br /> <br />It has an all-you-can-eat option as
            well as a To-go option as well.<br /><br />
            It offers variety of both vegetarian and non-vegetarian dishes
            <br /><br />
            Currency Accepted:<br />
            Meal Swipes, Dining Dollars, DragonDollars, Credit card, and Cash.


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