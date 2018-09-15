var application = document.getElementById("application");
var quizsubmit = document.getElementById("quizsubmit");
var gtpaccount = document.getElementById("gtpaccount");
var mic = document.getElementById("mic");
var stealthunits = document.getElementById("stealthunits");

function quizFunction() {
    if (gtpaccount.checked == true && mic.checked == true && stealthunits.value == "1") {
    application.style.display = "block";
    }
    else {
        alert("Try again!");
    }
}

quizsubmit.onclick = quizFunction;

var applicationresults = document.getElementById("applicationresults");
var applicationsubmit = document.getElementById("applicationsubmit");
var xbl = document.getElementById("xbl");
var timezone = document.getElementById("timezone");
var clubdiscover = document.getElementById("clubdiscover");
var share = document.getElementById("share");

var applicationArray = [xbl, timezone, clubdiscover, share];

function insertValues() {
    applicationresults.style.display = "block"; 
    for (i = 0; i < applicationresults.children.length; i++){
        applicationresults.children[i].innerHTML += applicationArray[i].value;
    }
}

applicationsubmit.onclick = insertValues;