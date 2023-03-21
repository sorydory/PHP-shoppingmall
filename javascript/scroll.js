document.addEventListener("scroll", function(){
    let sct = document.documentElement.scrollTop;
    console.log(sct);
    if(sct < 700) {
        subBuy.classList.add("on");
        console.log(11111);
    }
    else if(sct >= 700) {
        subBuy.classList.remove("on");
    }
})