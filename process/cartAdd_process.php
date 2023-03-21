<?php
    $conn = mysqli_connect("localhost","root","1234","shopping");
    //var_dump(isset($_POST['c_memberid']));
    if(empty($_POST['c_memberid'])){
        ?>
        <script>
            alert("로그인해주세요");
            history.back();
        </script>
        <?php
    }else{
        $sql = "insert into basket(c_memberid,c_pno,c_quantity,c_size,c_color)
        values('{$_POST['c_memberid']}',
        {$_POST['c_pno']},
        {$_POST['c_quantity']},
        '{$_POST['c_size']}',
        '{$_POST['c_color']}')";
        $result = mysqli_query($conn, $sql);
        if($result){
            //echo "성공";
        ?>
        <script>
            alert("장바구니에 담았습니다.");
            history.back();
        </script>
        <?php
        }else {
            echo "result 실패";
        }
    }
    
?>