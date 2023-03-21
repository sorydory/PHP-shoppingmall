<?php
    $conn = mysqli_connect("localhost","root","1234","shopping");
    $sql = "select * from joins where id = '{$_POST['id']}'";
    $result = mysqli_query($conn, $sql);
    if(mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_array($result);
        //var_dump($row);
        //연락처 체크하기
        if($row["tel"]==$_POST["tel"]) {
        ?>
        <script>
            //비밀번호 수정하기 페이지로 이동
            alert("아이디와 연락처가 확인되셨습니다.")
            location.href="../member/editpw.php?id=<?=$row['id']?>"
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
            alert("아이디를 확인해 주세요");
            history.back();
        </script>   
    <?php     
    }
?>