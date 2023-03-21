<?php 
    $conn = mysqli_connect("localhost","root","1234","shopping");
    //패스워드랑 패스워드체크가 일치하는 확인
    if($_POST["userpw"] == $_POST["checkpw"]){
        $password = password_hash($_POST["userpw"], PASSWORD_DEFAULT);
        $sql = "insert into joins(name,id,pw,birth,gender,addr,tel,writerdate)
        values('{$_POST['name']}','{$_POST['userid']}','{$password}'
        ,'{$_POST['birth']}','{$_POST['gender']}','{$_POST['addr']}'
        ,'{$_POST['tel']}',NOW())";
        var_dump($sql);
        $result = mysqli_query($conn, $sql);
        if($result){
        ?>
        <script>
            alert("회원가입 되셧습니다.");
            location.replace("../member/login.php");
        </script>
        <?php
            echo "성공";
        }else {
            echo "실패";
        }
       
    }
    else {
?>
<script>
    alert("비밀번호 체크가 일치하지 않습니다.");
    location.replace("../member/join.php");
</script>
<?php
    }
?> 