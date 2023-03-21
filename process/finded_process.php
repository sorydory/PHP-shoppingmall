<?php
    $conn = mysqli_connect("localhost","root","1234","shopping");
    $sql = "select * from joins where name = '{$_POST['name']}'";
    $result = mysqli_query($conn, $sql);
    if(mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_array($result);
        //var_dump($row);
        //연락처 체크하기
        if($row["tel"]==$_POST["tel"]) {
        ?>
        <script>
            //고객님의 id는 ***입니다 경고창 출력
            alert("고객님의 아이디는 <?=$row['id']?>입니다");
            location.href="../member/login.php"; //id값도 같이 넘김
        </script>
        <?php    
        }else {
        ?>    
        <script>
        //연락처를 확인해주세요 경고창 출력
        alert("연락처를 확인해주세요");
        history.back();
        </script>
        <?php    
        }
    }
    else {
    ?>
        <script>
            //고객님의 id는 입니다 경고창 출력
            alert("이름을 확인해 주세요");
            history.back();
        </script>   
    <?php     
    }
?>