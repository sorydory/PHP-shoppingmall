<?php
    $file = $_FILES['photourl'];
    $subFile1 = $_FILES['photourl1'];
    $subFile2 = $_FILES['photourl2'];
    $subFile3 = $_FILES['photourl3'];
    $subFile4 = $_FILES['photourl4'];
    $detailFile1 = $_FILES['detail_photo1'];
    $detailFile2 = $_FILES['detail_photo2'];
    $detailFile3 = $_FILES['detail_photo3'];
    $detailFile4 = $_FILES['detail_photo4'];
    
    if($file) {
        move_uploaded_file($file['tmp_name'],"C:Apache24/htdocs/shopping/img/{$file['name']}");
    }
    if($subFile1) {
        move_uploaded_file($subFile1['tmp_name'],"C:Apache24/htdocs/shopping/img/{$subFile1['name']}");
    }
    if($subFile2) {
        move_uploaded_file($subFile2['tmp_name'],"C:Apache24/htdocs/shopping/img/{$subFile2['name']}");
    }
    if($subFile3) {
        move_uploaded_file($subFile3['tmp_name'],"C:Apache24/htdocs/shopping/img/{$subFile3['name']}");
    }
    if($subFile4) {
        move_uploaded_file($subFile4['tmp_name'],"C:Apache24/htdocs/shopping/img/{$subFile4['name']}");
    }
    if($detailFile1) {
        move_uploaded_file($detailFile1['tmp_name'],"C:Apache24/htdocs/shopping/img/{$detailFile1['name']}");
    }
    if($detailFile2) {
        move_uploaded_file($detailFile2['tmp_name'],"C:Apache24/htdocs/shopping/img/{$detailFile2['name']}");
    }
    if($detailFile3) {
        move_uploaded_file($detailFile3['tmp_name'],"C:Apache24/htdocs/shopping/img/{$detailFile3['name']}");
    }
    if($detailFile4) {
        move_uploaded_file($detailFile4['tmp_name'],"C:Apache24/htdocs/shopping/img/{$detailFile4['name']}");
    }
    $conn = mysqli_connect("localhost","root","1234","shopping");
    $sql = "insert into product(kinds,name, size, color, quantity,delprice,photourl,photourl1,photourl2
    ,photourl3,photourl4,detail_photo1,detail_photo2
    ,detail_photo3,detail_photo4,price)
    values('{$_POST['kinds']}',
    '{$_POST['name']}',
    '{$_POST['size']}',
    '{$_POST['color']}',
    '{$_POST['quantity']}',
    '{$_POST['delprice']}',
    '/shopping/img/{$file['name']}',
    '/shopping/img/{$subFile1['name']}',
    '/shopping/img/{$subFile2['name']}',
    '/shopping/img/{$subFile3['name']}',
    '/shopping/img/{$subFile4['name']}',
    '/shopping/img/{$detailFile1['name']}',
    '/shopping/img/{$detailFile2['name']}',
    '/shopping/img/{$detailFile3['name']}',
    '/shopping/img/{$detailFile4['name']}',
    '{$_POST['price']}')";
    
    //var_dump($sql);
    $result = mysqli_query($conn,$sql);
    if($result){
        echo "게시글을 작성했습니다";
    }else{
        echo "게시글 작성 실패";
    }
    //header("Location:../outer_padding.php"); 
?>
<script>
    history.back();
</script>