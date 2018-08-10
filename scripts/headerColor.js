var header = document.getElementsByTagName("HEADER");
var bor = document.querySelectorAll(".bor");
var number = Math.floor(Math.random() * 2);
console.log(number);

for (i = 0; i < header.length; i++){
    if (number === 0) {
        header[i].style.backgroundImage = "linear-gradient(to right, #002424 15%,#ff8f00)";
        bor[i].style.backgroundImage = "linear-gradient(to right, #002424 15%,#00a6ff)";
    }
}