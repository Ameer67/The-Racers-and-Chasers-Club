var application = document.getElementById("application");
var quizsubmit = document.getElementById("quizsubmit");
var badresponse = document.getElementById("badresponse");
var gtpaccount = document.getElementById("gtpaccount");
var mic = document.getElementById("mic");
var gamemodemap = document.getElementById("gamemodemap");
var stealthunits = document.getElementById("stealthunits");
var applicationstep3 = document.getElementById("applicationstep3");

function quizFunction() {
    if (gtpaccount.checked == true && mic.checked == true && gamemodemap.value == "Open Patrol" && stealthunits.value == "1") {
        application.style.display = "block";
        applicationstep3.style.display = "block";
    }
    else {
        badresponse.style.display = "block";
    }
}

quizsubmit.onclick = quizFunction;

var applicationresults = document.getElementById("applicationresults");
var applicationsubmit = document.getElementById("applicationsubmit");
var xbl = document.getElementById("xbl");
var timezone = document.getElementById("timezone");
var clubdiscover = document.getElementById("clubdiscover");
var share = document.getElementById("share");
var applicationstep4 = document.getElementById("applicationstep4");
var applicationArray = [xbl, timezone, clubdiscover, share];

function insertValues() {
    applicationresults.style.display = "block"; 
    applicationstep4.style.display = "block";
    for (i = 0; i < applicationresults.children.length; i++){
        applicationresults.children[i].innerHTML += applicationArray[i].value;
    }
}

applicationsubmit.onclick = insertValues;