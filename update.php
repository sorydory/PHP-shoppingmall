<?php
    include_once "./include/header.php";
?>
<?php 
    $conn = mysqli_connect("localhost","root","1234","shopping");
    $sql = "select * from review where no={$_POST["no"]}";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_array($result);
?>
    <div id="newPage">
        <div id="writePage">
            <h2>리뷰 수정하기</h2>
            <form action="./process/updata_process.php" method="post" enctype="multipart/form-data">
                <table class="writeTable">
                    <tr>
                        <td>제목</td>
                        <td>
                            <input type="text" name="title" value="<?=$row['title']?>">
                        </td>
                    </tr>
                    <tr>
                        <td>글쓴이</td>
                        <?php 
                            if(isset($_SESSION['userid'])){
                        ?>
                        <td>
                            <input type="text" value="<?=$_SESSION['userid']?>" name="writer">
                        </td>
                        <?php      
                            }
                        ?>
                    </tr>
                    <tr>
                        <td>카테고리</td>
                        <td>
                            <select name="kinds" value="<?=$row['kinds']?>">
                                <option value="">선택해주세요</option>
                                <option value="NEW">NEW</option>
                                <option value="BEST">BEST</option>
                                <option value="패딩/점퍼">패딩/점퍼</option>
                                <option value="가디건">가디건</option>
                                <option value="코트">코트</option>
                                <option value="맨투맨/후드">맨투맨/후드</option>
                                <option value="니트">니트</option>
                                <option value="셔츠">셔츠</option>
                                <option value="카고/조거">카고/조거</option>
                                <option value="트레이닝">트레이닝</option>
                                <option value="베이직">베이직</option>
                                <option value="머플러">머플러</option>
                                <option value="안경/선글라스">안경/선글라스</option>
                                <option value="기타">기타</option>
                                <option value="스니커즈">스니커즈</option>
                                <option value="로퍼">로퍼</option>
                                <option value="샌들/슬리퍼">샌들/슬리퍼</option>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td>이미지</td>
                        <td>
                            <input type="file" name="reviewImg" multiple>
                        </th>
                    </tr>
                    <tr>
                        <td>내용</td>
                        <td>
                            <textarea name="contents" cols="60" rows="15"><?=$row['contents']?></textarea>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="2">
                        <div id="writeBtn1">
                                <input type="hidden" name="no" value="<?=$row['no']?>">
                                <button type="submit" value="등록">등록</button>
                                <button type="reset" value="취소"><a href="./detail_view.php?no=<?=$row['no']?>">취소</a></button>
                        </td>
                    </tr>
                </table>    
            </form>
        </div>
    </div>
<?php
    include_once "./include/footer.php";
?>
