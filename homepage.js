window.setInterval(function posY() {
    var positionY = window.scrollY

    if (positionY >= 189) {
        document.getElementById('textOne').className = 'textOneAfter';
    } else {
        document.getElementById('textOne').className = 'textOne';
    }
    if (positionY >= 1360) {
        document.getElementById('textTwo').className = 'textTwoAfter';
    } else {
        document.getElementById('textTwo').className = 'textTwo';
    }
}, 50)
