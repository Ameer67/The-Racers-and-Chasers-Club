var banner = document.getElementsByClassName("banner");
var startingBG = getComputedStyle(banner[0]).backgroundImage;

function gradientFunc() {
    if (window.innerWidth > 768) {
        console.log("A");
        banner[0].style.backgroundImage = "linear-gradient(to right, black, transparent 50%), " + startingBG;
    }
    else {
        console.log("B");
        banner[0].style.backgroundImage = "linear-gradient(to top, #0a1015, transparent 50%), " + startingBG;
    }
}

window.onload = gradientFunc();
window.onresize = gradientFunc;