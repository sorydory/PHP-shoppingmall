let userpw = document.querySelector("#userpw");
let checkpw = document.querySelector("#checkpw");
let isPw = false;
let isIdch = false;
checkpw.addEventListener("input",function(){
    //console.log("dddd");
    if(userpw.value === checkpw.value){
        document.querySelector("#pwtext").innerHTML = "비밀번호와 일치합니다.";
        isPw = true;
    }else {
        document.querySelector("#pwtext").innerHTML = "비밀번호와 일치하지 않습니다.";
        isPw = false;
    }
})

function formSubmit(){
    let phone = /^\d{11}$/;
    let num = userpw.value.search(/[0-9]/g);
    let eng = userpw.value.search(/[a-zA-Z]/ig);
    let spe = userpw.value.search(/[`~!@@#$%^&*|₩₩₩'₩";:₩/?]/gi);

    let username = document.querySelector("#name");
    let userid = document.querySelector("#userid");

    let usertel = document.querySelector("#tel");
    if(!username.value || !userid.value || !userpw.value || !checkpw.value || !usertel.value ){
    alert("모든 칸을 입력하셔야합니다.")
    return false;
    } else if(!phone.test(usertel.value)){
        alert("전화번호 양식에 맞게 입력해주세요");
        return false;
    } else if(userpw.value.length < 8 || userpw.value.length > 20){
        alert("비밀번호는 8자리 ~ 20자리 이내로 입력해주세요.");
        return false;
    } else if(userpw.value.search(/\s/) != -1){
        alert("비밀번호는 공백 없이 입력해주세요.");
        return false;
    } else if(num < 0 || eng < 0 || spe < 0 ){
        alert("영문,숫자, 특수문자를 혼합하여 입력해주세요.");
        return false;
    }
    if(!isIdch){
        alert("아이디 중복체크를 해주세요");
        return false;
    }
    if(!isPw){
        alert("비밀번호와 비밀번호 체크가 일치하지않습니다.");
        return false;
    }
    document.checkSubmit.submit();
}
async function idch(){
    let userid = document.querySelector("#userid");
    //console.log(userid);
    try{
        const res = await fetch(`http://localhost/shopping/process/idcheck_process.php?id=${userid.value}`);
        const result = await res.text();
        //console.log(result);
        if(result == "yes") {
            document.querySelector("#idtext").innerHTML = "이미 등록된 아이디 입니다.";
            isIdch = false;
        } else {
            document.querySelector("#idtext").innerHTML = "사용가능한 아이디 입니다.";
            isIdch = true;
        }
    }
    catch(e) {
        console.log(e);
    }
}