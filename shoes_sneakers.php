<?php
    include_once "./include/header.php";
?>
<?php
    $conn = mysqli_connect("localhost","root","1234","shopping"); // sql과 연결해주는 끈
    $sql = "select * from product where kinds like '스니커즈%'"; //글을 가져오는 갯수의 제한 30개//select한 값을 리턴받음
    $result = mysqli_query($conn,$sql);
    $list="";
    while($row=(mysqli_fetch_array($result))) {//mysqli_fetch_array 받아온 mysqli데이터를 php 에서 쓸수있는 배열로 바꿔줌
        $price = number_format($row['price'],0,'.',',');
        $list = $list."
        <li>
            <a href='./product_detail.php?no={$row['no']}'>
                <img src='{$row['photourl']}'>
                <h3>{$row['name']}</h3>
                <p>$price</p>
            </a>
        </li>";
    }
?>
   <?php
    include_once "./include/menu.php";
?>
    <div id="productPage">
        <div id="title">
            <h1>스 니 커 즈</h1>
            <ul id=tit_ul>
                <li><a href="./shoes_sneakers.php">스니커즈</a></li>
                <li><a href="./shoes_ropper.php">로퍼</a></li>
                <li><a href="./shoes_sliper.php">샌들/슬리퍼</a></li>
            </ul>
        </div>
        <ul class="scrolls">
            <li><i class="fa-solid fa-chevron-up"></i></li>
            <li><i class="fa-solid fa-circle"></i></li>
            <li><i class="fa-solid fa-chevron-down"></i></li>
        </ul>
        <!-- 상품등록 -->
    <div id="setProduct">
        <h2>상품 등록하기</h2>
        <form action="./process/productWrite_process.php" method="post" enctype="multipart/form-data">
        <!-- 종류,이름,나이,색상,이미지  -->
        <table class="writeTable1">
                <tr>
                    <td>종류</td>
                    <td>
                        <select name="kinds">
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
                    <td>이름</td>
                    <td>
                        <input type="text" name="name">
                    </td>
                </tr>
                <tr>
                    <td>사이즈</td>
                    <td>
                        <input type="text" name="size">
                    </td>
                </tr>
                <tr>
                    <td>색상</td>
                    <td>
                        <input type="text" name="color">
                    </td>
                </tr>
                <tr>
                    <td>배송비</td>
                    <td>
                        <input type="text" name="delprice">
                    </td>
                </tr>
                <tr>
                    <td>수량</td>
                    <td>
                        <input type="text" name="quantity">
                    </td>
                </tr>
                <tr>
                    <td>메인이미지</td>
                    <td>
                        <input type="file" name="photourl">
                    </td>
                </tr>
                <tr>
                    <td>sub_img1</td>
                    <td>
                        <input type="file" name="photourl1">
                    </td>
                </tr>
                <tr>
                    <td>sub_img2</td>
                    <td>
                        <input type="file" name="photourl2">
                    </td>
                </tr>
                <tr>
                    <td>sub_img3</td>
                    <td>
                        <input type="file" name="photourl3">
                    </td>
                </tr>
                <tr>
                    <td>sub_img4</td>
                    <td>
                        <input type="file" name="photourl4">
                    </td>
                </tr>
                <tr>
                    <td>detail_img1</td>
                    <td>
                        <input type="file" name="detail_photo1">
                    </td>
                </tr>
                <tr>
                    <td>detail_img2</td>
                    <td>
                        <input type="file" name="detail_photo2">
                    </td>
                </tr>
                <tr>
                    <td>detail_img3</td>
                    <td>
                        <input type="file" name="detail_photo3">
                    </td>
                </tr>
                <tr>
                    <td>detail_img4</td>
                    <td>
                        <input type="file" name="detail_photo4">
                    </td>
                </tr>
                <tr>
                    <td>가격</td>
                    <td>
                        <input type="text" name="price">
                    </td>
                </tr>ㄴ
                <tr>
                    <td colspan="2">
                        <button type="submit" value="등록">등록</button>
                        <button type="reset" value="취소">취소</button>
                    </td>
                </tr>
            </table>    
        </form>
    </div>
    <!-- 상품등록종료 -->
        <div id="contents">
            <ul class="clothList">
                <?=$list?>
            </ul>
        </div>    
    </div>
<?php
    include_once "./include/footer.php";
?>