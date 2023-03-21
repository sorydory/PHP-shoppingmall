<?php
    include_once "./include/header.php";
?>
<?php 
    $conn = mysqli_connect("localhost","root","1234","shopping");
    $sql = "select * from review where no={$_GET['no']}";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_array($result);
?>
    <div id="newPage2">
        <div id="reviewPage">
            <h2><?=$row['title']?></h2> 
            <div id="reviewLi">
                <ul>
                    <li>
                        <p>글쓴이:</p>
                        <span><?=$row['writer']?></span> 
                    </li>
                    <li>
                        <p>카테고리:</p>
                        <span><?=$row['kinds']?></span> 
                    </li>
                    <li>
                        <div><img src="<?=$row['photo1']?>" alt=""></div> 
                    </li>
                    <li>
                        <div><?=$row['contents']?></div> 
                    </li>
                </ul>
            </div>
            
            <div class="reviewBtn">
                <form action="update.php" method="post">
                    <input type="hidden" name="no" value="<?=$row['no']?>">
                    <button type="submit">수정</button>
                </form>
                <form action="./process/reviewdel_process.php" method="post">
                    <input type="hidden" name="no" value="<?=$row['no']?>">
                    <button type="submit">삭제</button>
                </form>
            </div>
            <div id="passList">
                <h2><a href="./review.php">게시글 리스트 보기</a></h2>
            </div>
        </div>
    </div>
<?php
    include_once "./include/footer.php";
?>