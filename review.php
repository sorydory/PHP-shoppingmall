<?php
    include_once "./include/header.php";
?>
<?php
    $conn = mysqli_connect("localhost","root","1234","shopping");

    $sqltotal = "select * from review";
    $resultotal = mysqli_query($conn, $sqltotal);
    $total = mysqli_num_rows($resultotal);

    $list_num = 5;

    $page_num = 10;

    $page = isset($_GET['page']) ? $_GET['page'] : 1;
    echo $page."<br/>";
    $total_page = ceil($total/$list_num);
    $total_block = ceil($total_page / $page_num);
    $now_block = ceil($page/$page_num);
    $s_pageNum = ($num_block-1) * $page_num + 1;

    if($s_pageNum <= 0) {
        $s_pageNum = 1;
    }

    $e_pageNum = $now_block * $page_num;

    if($e_pageNum <= 0) {
        $s_pageNum = 1;
    }

    $e_pageNum = $now_block * $page_num;

    if($e_pageNum > $total_page) {
        $e_pageNum = $total_page;
    }

    $start = ($page-1)*$list_num;
    echo $page."<br/>";
    echo $total."<br/>";


    $sql = "select * from review LIMIT {$start}, {$list_num};";
    $result = mysqli_query($conn, $sql);
    $list="";
    while($row =(mysqli_fetch_array($result))) {
        $list = $list."
        <tr>
            <td>{$row['no']}</td>
            <td><a href='./detail_view.php?no={$row['no']}'>{$row['title']}</a></td>
            <td>{$row['writer']}</td>
            <td>{$row['kinds']}</td>
            <td>{$row['writedate']}</td>
        </tr>
        ";
    }
?>
    <div id="page3"> 
        <div id="review">
            <h2>review</h2>
            <table class="listTable">
                <tr>
                    <th>번호</th>
                    <th>제목</th>
                    <th>글쓴이</th>
                    <th>카테고리</th>
                    <th>등록일</th>
                </tr>
                <?=$list?>
                <tr>
                    <td colspan="4">
                        <?php
                            if($page <= 1) {
                                ?>
                                <a href="review.php?page=1">이전</a>
                                <?php
                            }else {
                                ?>
                                <a href="review.php?page=<?=$page-1?>">이전</a>
                                <?php
                            }
                        ?>
                        <?php
                            for($print_page = $s_pageNum; $print_page <= $e_pageNum; $print_page++){
                                ?>
                                <a href="review.php?page=<?=$print_page?>"><?=$print_page?></a>
                                <?php
                            }
                            ?>
                            <?php
                            if($page >= $total_page) {
                                ?>
                                <a href="review.php?page=<?=$total_page?>">다음</a>
                                <?php
                            }else {
                                ?>
                                <a href="review.php?page=<?=$page+1?>">다음</a>
                                <?php
                            }
                            ?>
                    </td>
                </tr>
            </table>
            <?php
                if(isset($_SESSION['userid'])){
            ?>
            <div id="wBtn">
                <a href="./write.php"><div id="writeBtn">작성하기</div></a>
            </div>    
            <?php
                } else {
                    ?>
                    <script>
                        alert("로그인해주세요");
                    </script>
                    <?php
                }
            ?>
            <div id="home"><a href="./index.php">홈 화면</a></div>
        </div>
    </div>
<?php
    include_once "./include/footer.php";
?>