/* 스크롤이벤트 */
const lis = document.querySelectorAll(".scrolls li");
const wh = window.innerHeight;
const subBuy = document.querySelector("#subBuy");

console.log(lis);
console.log(wh);
for(let i = 0; i< lis.length; i++) {
    lis[i].addEventListener("click", function(){
        window.scrollTo({top: i * wh, behavior: "smooth"})
    })
}

document.addEventListener("scroll", function(){
    let sct1 = document.documentElement.scrollTop;
    console.log(sct1);
})



/* 상단 메뉴 마우스이벤트*/

let hidden1 = document.querySelector("#headmenu #headmeanuUl>li:nth-child(1)");
let hidden2 = document.querySelector("#headmenu #headmeanuUl>li:nth-child(2)");
let hidden3 = document.querySelector("#headmenu #headmeanuUl>li:nth-child(3)");
let hidden4 = document.querySelector("#headmenu #headmeanuUl>li:nth-child(4)");
let hidden5 = document.querySelector("#headmenu #headmeanuUl>li:nth-child(5)");
let menu0 = document.querySelector(".hiddenMenu1");
let menu1 = document.querySelector(".hiddenMenu2");
let menu2 = document.querySelector(".hiddenMenu3");
let menu3 = document.querySelector(".hiddenMenu4");
let menu4 = document.querySelector(".hiddenMenu5");
let displaymenu1 = document.querySelector(".displaymenu1");
let displaymenu2 = document.querySelector(".displaymenu2");
let displaymenu3 = document.querySelector(".displaymenu3");
let displaymenu4 = document.querySelector(".displaymenu4");
let displaymenu5 = document.querySelector(".displaymenu5");
console.log(hidden1);
console.log(hidden2);
console.log(hidden3);
console.log(hidden4);
console.log(hidden5);


displaymenu1.addEventListener("mouseenter", function(){
    menu0.style.top="35px"
})
displaymenu2.addEventListener("mouseenter", function(){
    menu1.style.top="35px"
})

displaymenu3.addEventListener("mouseenter", function(){
    menu2.style.top="35px"
})

displaymenu4.addEventListener("mouseenter", function(){
    menu3.style.top="35px"
})

displaymenu5.addEventListener("mouseenter", function(){
    menu4.style.top="35px"
})


hidden1.addEventListener('mouseleave',()=>{
    menu0.style.top="-110px";
});
hidden2.addEventListener('mouseleave',()=>{
    menu1.style.top="-110px";
});
hidden3.addEventListener('mouseleave',()=>{
    menu2.style.top="-110px";
});
hidden4.addEventListener('mouseleave',()=>{
    menu3.style.top="-110px";
});
hidden5.addEventListener('mouseleave',()=>{
    menu4.style.top="-110px";
});

/* 상단 메뉴 마우스이벤트 끝*/

/* 상품등록 */
const newProduct = document.querySelector("header ul #newPro");
const setProduct = document.querySelector("#setProduct");
const btn1 = document.querySelector("#setProduct tr td button:first-child");
const btn2 = document.querySelector("#setProduct tr td button:last-child");
console.log(newProduct);
console.log(setProduct);
console.log(btn1);
newProduct.addEventListener("click", function(){
    console.log("등록클릭")
    setProduct.classList.add("on");
})
btn1.addEventListener("click", function(){
    setProduct.classList.remove("on");
    console.log("닫기")
})

btn2.addEventListener("click", function(){
    setProduct.classList.remove("on");
    console.log("닫기")
})

//상세보기 서브구매


    

    