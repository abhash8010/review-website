/* JavaScript file for sidebar fucntions that 
allow the user to select sub-categories of the webpage.*/



function openMenu() {
	document.getElementById('side-bar').style.marginLeft = '0';
	document.getElementById('home').style.marginLeft = '250px';
	document.getElementById('image').style.marginLeft='0px';
	document.body.style.backgroundColor = 'rgba(228, 219, 191,.4)';
}
function closeMenu() {
	document.getElementById('side-bar').style.marginLeft = '-250px';
	document.getElementById('home').style.marginLeft = '0px';
	document.getElementById('image').style.marginLeft='0px';
	document.body.style.backgroundColor = 'rgba(228, 219, 191,1)';
}