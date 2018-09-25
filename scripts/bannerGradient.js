var banner = document.getElementsByClassName("banner");
var startingBG = getComputedStyle(banner[0]).backgroundImage;

function gradientFunc() {
    if (window.innerWidth > 768) {
        banner[0].style.backgroundImage = "linear-gradient(to right, rgba(0,0,0,.85), transparent 50%), " + startingBG;
    }
    else {
        banner[0].style.backgroundImage = "linear-gradient(to top, #0a1015, transparent 50%), " + startingBG;
    }
}

window.onload = gradientFunc();
window.onresize = gradientFunc;