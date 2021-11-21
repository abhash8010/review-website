<!DOCTYPE html>
<?php
include 'dbhurban.inc.php';
include 'commenturban.inc.php';
?>
<html>
<head>
    <title>Urban Eatery</title>
    <link rel="stylesheet" type="text/css" href="diningTemplate.css">
    <link rel="stylesheet" type="text/css" href="ResdTemplate.css">
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
    <div id='image-dinning'><img src="urban.jpg" alt=""></div>
    <div id="description">
        <h1>Urban Eatery</h1>

        <p>
           Urban offers students a large variety of favorite foods.<br /> <br />
           Urban Eatery offers a variety of options inside the dining:<br/>
           Ignite, Smoothie express, Vespa, U.C. Veg etc. offers a variety of options for the students.<br /><br />
            It offers variety of both vegetarian and non-vegetarian dishes<br /><br />
            Urban offers only one item per swipe. But you can always use multiple swipes at any time.
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
    <div class='starbox'>
    <input type='radio' name='rating' value='5' id='star5'><label for='star5'></label>
    <input type='radio' name='rating' value='4' id='star4'><label for='star4'></label>
    <input type='radio' name='rating' value='3' id='star3'><label for='star3'></label>
    <input type='radio' name='rating' value='2' id='star2'><label for='star2'></label>
    <input type='radio' name='rating' value='1' id='star1'><label for='star1'></label>
    </div>
    <br><br><br>
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
