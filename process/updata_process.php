<?php 
  //var_dump($_POST);
  $file = $_FILES['reviewImg'];
  move_uploaded_file($file['tmp_name'], "C:Apache24/htdocs/shopping/img/{$file['name']}");  
  $conn = mysqli_connect("localhost","root","1234","shopping");
  $sql = "update review set no ={$_POST['no']},
  title='{$_POST['title']}',
  kinds ='{$_POST['kinds']}',
  photo1 = '/shopping/img/{$file['name']}',
  contents='{$_POST['contents']}'
  where no={$_POST['no']}";
  echo $sql;
  $result = mysqli_query($conn, $sql);
  if($result){
    echo "성공";
  }else {
    echo "실패";
  }
  header("Location:../review.php");
?>