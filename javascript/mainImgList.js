/* 캔버스 슬라이더 */
const canvas = document.querySelector("canvas");
const ctx = canvas.getContext("2d");
let timer=0;
let interval;
let z = 0;
//이미지 생성
let products = [];
class New_clothes {
    constructor(img) {
        this.x = 2000;
        this.y = 0;
        this.width = 200;
        this.height = 200;
        this.img = img; 
    }
    draw() {
        let product = new Image();
        product.src = this.img;
        ctx.drawImage(product, this.x, this.y, this.width, this.height)
        
    }
}

let list = ["./img/img_lights1.jpg","./img/img_lights2.jpg","./img/img_lights3.jpg","./img/img_lights4.jpg"];
function start() {
    timer++;
    //console.log(timer);
    ctx.clearRect(0,0,canvas.width,canvas.height);
    //animation = requestAnimationFrame(start);
    if(timer % 200 == 0) {
        let nlist = new New_clothes(list[z]);
        products.push(nlist);
        plus()   
    }
    products.forEach((item, index, arr)=>{
        item.x-=1;
        item.draw();
        if(item.x === -200) {
            arr.splice(index, 1)
        }  
    })
    
}
//여러사진 출력하기위해 index +1
function plus(){
    z++;
    console.log(z)
    if(z >= 4) {
        z = 0;
    }
}
//마우스 올렸을 때 정지
canvas.addEventListener("mouseenter", function(){
    stopIt();
})
canvas.addEventListener("mouseleave", function(){
    startIt();
})

function stopIt() {
    clearInterval(interval)
}
function startIt() {
    interval = setInterval(function(){
        start();
    },10) 
}
    
startIt()

//좌표 확인용
canvas.addEventListener("click",(e)=>{
    let mouseX = e.layerX
    let mouseY = e.layerY;
    console.log(mouseX, mouseY)
})