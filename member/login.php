<?php
    include "../include/header.php";
?>
<div id="loginPage">
    <h2>로그인</h2>
    <form action="../process/login_process.php" method="post">
        <p><input type="text" name="id" placeholder="아이디"></p>
        <p><input type = "password" name = "pw" placeholder="비밀번호"></p>
        <p id="logjoBtn">
            <button type= "submit">로그인</button><br/>
            <button type= "button" onclick="location.href='join.php'">회원가입</button>
        </p>
    </form>
    <p id="searchBtn">
        <button onclick="location.href='finded.php'" id="searchInfob">아이디 찾기</button>
        <button onclick = "location.href='findpw.php'" id="searchInfob">비밀번호 찾기</button>
    </p>
</div>



<?php
    include_once "../include/footer.php";
?>
