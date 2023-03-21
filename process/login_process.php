<?php
    //입력받은 데이터가 있는지 검색
    $conn = mysqli_connect("localhost","root","1234","shopping");
    $sql = "select * from joins where id='{$_POST['id']}'";
    $result = mysqli_query($conn,$sql);
    //아이디가 있다면
    if(mysqli_num_rows($result)==1){//해당하는 데이터의 총 갯수를 알려줌
        $row = mysqli_fetch_array($result);
        //비밀번호 일치하는지 확인
        if(password_verify($_POST["pw"], $row["pw"])){
            session_start();
            $_SESSION['userid']=$_POST["id"];
        }else {
            ?>
            <!-- 자바스크립트 입력을 위한 php 종료 재시작 -->
            <script>
                alert("비밀번호가 틀렸습니다.");
                history.back();
            </script>
            <?php
        }
        if(isset($_SESSION['userid'])){
            ?>
            <!-- 자바스크립트 입력을 위한 php 종료 재시작 -->
            <script>
                alert("로그인 되었습니다.");
                location.replace("/shopping/index.php");
            </script>
            <?php
        }else {
            echo "세션이 없습니다.";
        }
    }else{
        ?>
        <!-- 자바스크립트 입력을 위한 php 종료 재시작 -->
        <script>
            alert("아이디 혹은 비밀번호가 틀렸습니다.");
            history.back();
        </script>
        <?php
    }
?>