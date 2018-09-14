var application = document.getElementById("application");
var quizsubmit = document.getElementById("quizsubmit");
var gtpaccount = document.getElementById("gtpaccount");
var mic = document.getElementById("mic");
var stealthunits = document.getElementById("stealthunits");

function quizFunction() {
    if (gtpaccount.checked == true && mic.checked == true && stealthunits.value == "1") {
    application.style.display = "block";
    }
    if (stealthunits != "1") {
        alert("nope!");
    }
}

quizsubmit.onclick = quizFunction;