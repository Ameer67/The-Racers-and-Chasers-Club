var header = document.getElementsByTagName("HEADER");

function resizeFunc(){
    function headerFunc(){
        if (window.innerWidth > 768 && document.documentElement.scrollTop > 80){ 
            header[0].style.height = "10vh";
        } else {
            header[0].style.height = "25vh";
        } 

        if (window.innerWidth <= 768) {
            header[0].style.height = "100%";
        }

    }
    window.addEventListener("scroll", headerFunc);
    window.addEventListener("resize", headerFunc);
}

window.onload = resizeFunc();
window.onresize = resizeFunc();


