<?php
    include_once "../include/header.php";
?>
<div id="loginPage" >
    <h2>패스워드 변경</h2>
    <form action="../process/editpw_process.php" method="post">
        <input type="hidden" value="<?=$_GET['id']?>" name="id">
        <p><input type="password" name="pw" placeholder="새로운 비밀번호를 입력해주세요"></p>
        <p class="loginPage2"><input type="password" name="pwch" placeholder="비밀번호를 다시 입력해주세요"></p>
        <p id="logjoBtn">
            <button type="submit">변경</button><br/>
            <button type="reset">취소</button>
        </p>
    </form>
</div>
<?php
    include_once "../include/footer.php";
?>