<?php
    include_once "../include/header.php";
?>
    <div id="box">
        <div id="imports">
            <form name="checkSubmit" action="../process/join_process.php" method="post" onsubmit="return false">
            <div class="inp">
                <p>이름</p>
                <input type="text" name="name" id="name" placeholder="이름을 입력해주세요.">
            </div>
            <div class="inp">
                <p>아이디</p>
                <input type="text" name="userid" id="userid" placeholder="아이디를 입력해주세요.">
            </div>
            <button id="idcheck" onclick="idch()">중복체크</button>
            <p id="idtext"></p>
            <div class="inp">
                <p>비밀번호</p>
                <input type="password" name="userpw" id="userpw" placeholder="비밀번호를 입력해주세요.">
            </div>
            <div class="inp">
                <p>비밀번호 확인</p>
                <input type="password" name="checkpw" id="checkpw" placeholder="비밀번호를 다시 입력해주세요">
            </div>
            <p id="pwtext"></p>
            <div class="inp">
                <p>생년월일</p>
                <input type="text" name="birth" id="birth" placeholder="생년월일 입력해주세요 ex.991212">
            </div>
            <div id="gen">
                <p>성별</p>
                남 &nbsp;<input type="radio" name="gender" value="m">
                여 &nbsp;<input type="radio" name="gender" value="f">
            </div>
            <div class="inp">
                <p>주소</p>
                <input type="text" name="addr" id="addr" placeholder="주소를 입력해주세요">
            </div>
            <div class="inp">
                <p>전화번호</p>
                <input type="text" name="tel" id="tel" placeholder="전화번호 입력해주세요">
            </div>
            <button type="submit" id="userJoin" onclick="formSubmit()">회원가입</button>
         </div>
         </form>
    </div>
    
    
<?php
    include_once "../include/footer.php";
?>