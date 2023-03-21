<?php 
    echo $_POST["no"];
    $conn = mysqli_connect("localhost","root","1234","shopping");
    $sql = "delete from review where no={$_POST["no"]}";
    $result = mysqli_query($conn, $sql);
    if($result){
        echo "삭제되었습니다.";
    }else {
        echo "실패했습니다.";
    }
    header("Location:../review.php");
?>