<?php 
    //json파일을 php객체형태로 변환
    $json = json_decode(file_get_contents('php://input'));
    $c_no = $json->c_no;
    $conn = mysqli_connect("localhost","root","1234","shopping");
    $sql = "delete from basket where c_no={$c_no}";
    $result = mysqli_query($conn, $sql);
    if($result){
        echo "yes";
    }else {
        echo "no";
    }
?>