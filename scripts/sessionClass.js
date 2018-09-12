var sessionClass = document.querySelectorAll(".sessionclass");

for (i = 0; i < sessionClass.length; ++i){
  if (sessionClass[i].textContent === "S2"){
    sessionClass[i].style.backgroundColor = "#3b4fe3";
  }
  else if (sessionClass[i].textContent === "S1"){
    sessionClass[i].style.backgroundColor = "#882ff2";
  }
  else if (sessionClass[i].textContent === "A"){
    sessionClass[i].style.backgroundColor = "#ca351a";
  }
  else if (sessionClass[i].textContent === "B"){
    sessionClass[i].style.backgroundColor = "#e0521c";
  }
  else if (sessionClass[i].textContent === "C"){
    sessionClass[i].style.backgroundColor = "#deb80c";
  }
  else if (sessionClass[i].textContent === "D"){
    sessionClass[i].style.backgroundColor = "#1baaeb";
  }
  else {
    //No more colors/classes!
  }
}
