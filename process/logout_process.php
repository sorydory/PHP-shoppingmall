<?php
    session_start();
    $result = session_unset();
    if($result) {
?>
    <script>
    alert("로그아웃 되었습니다.");
    history.back();
    </script>
<?php       
    }
?>