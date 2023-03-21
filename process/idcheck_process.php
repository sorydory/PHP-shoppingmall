<?php 
    $userid = $_GET['id'];
    $conn = mysqli_connect("localhost","root","1234","shopping");
    $sql = "select * from joins where id='{$userid}'";
    $result = mysqli_query($conn, $sql);
    if(mysqli_num_rows($result)>0){
        echo "yes";
    }else {
        echo "no";
    }
?>