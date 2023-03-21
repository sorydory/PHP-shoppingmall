<?php
    $file = $_FILES['reviewImg'];
    move_uploaded_file($file['tmp_name'], "C:Apache24/htdocs/shopping/img/{$file['name']}");
    $conn = mysqli_connect("localhost","root","1234","shopping");
    $sql = "insert into review(writer,title,kinds,photo1,contents,writedate)
    values('{$_POST['writer']}',
    '{$_POST['title']}',
    '{$_POST['kinds']}',
    '/shopping/img/{$file['name']}',
    '{$_POST['contents']}',
    NOW())";
    echo $sql;
    $result = mysqli_query($conn,$sql); // 쿼리문을 날려줌 (연결선,sql문)
    if($result){
        echo "성공";
    }else {
        echo "실패";
    }
    header("Location:../review.php");
?>