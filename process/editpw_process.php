<?php
    if($_POST["pw"]==$_POST["pwch"]) {
        //패스워드 암호화 시키기
        $password = password_hash("{$_POST['pw']}", PASSWORD_DEFAULT);
        $conn = mysqli_connect("localhost","root","1234","shopping");
        $sql = "update joins
        set pw = '{$password}'
        where id='{$_POST['id']}'";
        $result = mysqli_query($conn, $sql);
        if($result) {
        ?>
            <script>
                //패스워드가 변경되었습니다.
                alert("패스워드가 변경되었습니다.");
                location.href="../member/login.php";
            </script>  
            <?php 
        } else {
            ?>
            <script>
                alert("패스워드와 패스워드체크가 일치하지 않습니다.");
                history.back();
            </script>
    <?php

        }
    }else {
    ?>
    <script>
        alert("패스워드와 패스워드체크가 일치하지 않습니다.");
        history.back();
    </script>
    <?php
    }
?>