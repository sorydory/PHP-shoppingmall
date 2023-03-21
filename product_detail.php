<?php
    include_once "./include/header.php";
    session_start();
?>
<?php 
     $conn = mysqli_connect("localhost","root","1234","shopping");
     $sql = "select * from product where no = '{$_GET['no']}'";
     $result = mysqli_query($conn, $sql);
     $row = mysqli_fetch_array($result);
     $price = number_format($row['price'],0,'.',',');
     $deleprice = number_format($row['delprice'],0,'.',',');
     //var_dump($sql);
     //var_dump($row);
     $color = "";
     $size = "";
     
     if($row['color']!=""){
        //"흰색,블루,핑크"  => ["흰색","블루","핑크"]
        $newColorArr = explode(",",$row['color']);
        foreach($newColorArr as $value){
            $color = $color."<option value='{$value}'>{$value}</option>";
        }
     }
     //var_dump($row['size']);
     if($row['size']!=""){
        //"s,m,l"  => ["s","m","l"]
        $newSizeArr = explode(",",$row['size']);
        foreach($newSizeArr as $value){
            $size = $size."<option value='{$value}'>{$value}</option>";
        }  
     }
?>
<?php
    include_once "./include/menu.php";
?>
<div id="newPage">
    <div id="detailall">
        <div id="bigimg">
            <div id="watchImg">
                <img src=<?=$row['photourl']?> alt="">
            </div>
            <ul class="smallimg">
                <li><img src='<?=$row['photourl1']?>' alt=""></li>
                <li><img src='<?=$row['photourl2']?>' alt=""></li>
                <li><img src='<?=$row['photourl3']?>' alt=""></li>
                <li><img src='<?=$row['photourl4']?>' alt=""></li>    
            </ul>
        </div>
        <form id="productsForm" method="post" action="./process/cartAdd_process.php">
            <div id="productForm">
                <input type="hidden" name="c_pno" value="<?=$row['no']?>"> 
                <?php 
                    if(isset($_SESSION['userid'])){
                ?>
                <input type="hidden" value="<?=$_SESSION['userid']?>" name="c_memberid">
                <?php      
                    }
                ?>   
                <h2><?=$row['name']?></h2>
                <div>
                    <p>가격</p>
                    <p><?=$price?>원</p>
                </div>
                <div>
                    <p>배송료</p>
                    <p><?=$deleprice?>원</p>
                </div>
                <div>
                    <p>수량</p>
                    <input type="number" id="quantity" name="c_quantity" value="1" min="1" max="<?=$row['quantity']?>">
                </div>
                <?php
                    if($row['size']!=""){
                ?>
                <div>
                    <p>사이즈</p>
                    <select name="c_size">
                        <?=$size?>
                    </select>
                </div>
                <?php      
                    }
                ?>
                <?php
                    if($row['color']!=""){
                ?>
                <div>
                    <p>색상</p>
                    <select name="c_color">
                        <?=$color?>
                    </select>
                </div>
                <?php      
                    }
                ?>
            </div>
            <div class="liBtn">
                <button type="submit">장바구니담기</button>
                <button type="submit">BUY NOW</button>
            </div>
        </form>
    </div>
    <div id="color">
        <h1>INFO</h1>
    </div>
    <ul class="info1">
        <h3>MODEL INFO</h3>
        <li>175cm/68kg</li>
        <li>평소 착용사이즈</li>
        <li>상의:L/하의:S~M ( S은 딱맞는편 )</li>
        <li>신발:255(칼발)mm</li>
        <li>-FREE(95~105) 모델 착용</li>
    </ul>
    <div class="revimg">
        <img src="<?=$row['detail_photo1']?>" alt="">
        <img src="<?=$row['detail_photo2']?>" alt="">
        <img src="<?=$row['detail_photo3']?>" alt="">
        <img src="<?=$row['detail_photo4']?>" alt="">
    </div>
    <div class="text1 text">
        <h3>주의사항</h3>
        <p>
        - 어두운 색상, 유색 제품의 경우 착용시 물빠짐 및 이염이 발생 할 수 있습니다.</br>
        밝은 색상의 의류, 가방 및 신발 등 이염에 주의하여주세요.</br>
        - 폰기종, 해상도에 따라 사진의 색상과 실제 색상이 다를 수 있는 점 참고 부탁드립니다.</br>
        </p>
    </div>
    <div class="text2 text">
        <h3><strong>WASHING METHOD</strong></h3>
        <p>
        * 모든 의류에 건조기 사용은 권장하지 않습니다.</br>
        - 첫 세탁은 드라이크리닝 혹은 손세탁을 추천드리며 소재에 따라 세탁탭과 아래 세탁법을 참조해 세탁해주세요.</br>
        - 데님 및 색감이 강한 의류는 밝은 톤의 의류와 함께 이염 가능성이 있으니 주의해주세요.</br>
        - 세탁 과정에서 부주의로 발생된 불량 및 훼손에 대해서는 교환 및 반품이 불가합니다.</br>
        </p>
    </div>
    <div class="text3 text">
        <h2>CHECK !</h2>
        <p>
        CALL CENTE</br>
        1234-1234</br>
        월 - 금 11:00~17:00  (점심시간 12:00~13:00)</br>
        (주말 및 공휴일 휴무)</br>
        * 최근 고객센터 문의량이 증가하여</br>
        문의를 통해 남겨주시면</br>
        순차적으로 답변드립니다.
        </p>
    </div>
    <div class="text4 text">
        <h3>불량 여부 안내</h3>
        <p>
        아래의 해당되는 제품은 불량이 아님을 알려드립니다.</br>
        - 재봉 과정에서 생긴 실밥이 나온 경우</br>
        - 배송 중 발생한 상품의 구김</br>
        - 제조과정, 원단이 가진 냄새</br>
        - 패턴의 위치 차이</br></br>
        - 니트류 소재 특성상 뭉침, 짜임이 느슨한 부분 등 불규칙한 부분</br>
        - 상세페이지 내 표기된 사이즈 표기의 오차 (약 1~3cm)</br>
        - 재생산, 리오더 과정 중 색상, 사이즈 등의 작은 차이</br>
        - 수제화 등 제작 상품은 제품 특성상 환불이 어렵습니다.</br>
        -의류에 초크 자국이 묻은 경우</br>
        - 모니터 해상도, 차이로 인해 실제 색상과 다소 차이가 있을 수 있으며,</br>
        이에 해당하는 경우 반품 및 교환이 불가합니다.</br></br>
        전자상거래 법 제21조에 의거하여 아래의 경우 교환/반품 불가한 항목에 해당할 수 있습니다.</br>
        - 개별 주문·생산되는 상품을 청약철회 시 판매자에게 회복할 수 없는 피해가 예상되어 별도로</br>
        그 사실을 고지하고 소비자의 사전동의를 얻은 경우</br>
        - 소비자에게 책임이 있는 사유로 제품의 변형이나 세탁 및 훼손을 한 경우</br>
        - 계약택배사가 아닌 타택배로 상품이 분실 또는 훼손된 경우</br>
        - 불량상품 또는 오배송된 상품을 착용했거나 오염·훼손한 경우
        </p>
    </div>
    <div class="revimg">
    <img src="./img/size.png" alt="">
    </div>
    <div id="subBuy" class="on">
        <div id="subDetailall">
            <div id="subBigimg">
                <div id="subWatchImg">
                    <img src=<?=$row['photourl']?> alt="">
                </div>
            </div>
            <form id="subProductsForm" method="post" action="./process/cartAdd_process.php">
                <div id="subProductForm">
                    <input type="hidden" name="c_pno" value="<?=$row['no']?>"> 
                    <?php 
                        if(isset($_SESSION['userid'])){
                    ?>
                    <input type="hidden" value="<?=$_SESSION['userid']?>" name="c_memberid">
                    <?php      
                        }
                    ?>   
                    <h2><?=$row['name']?></h2>
                    <div>
                        <p>가격</p>
                        <p><?=$price?>원</p>
                    </div>
                    <div>
                        <p>배송료</p>
                        <p><?=$deleprice?>원</p>
                    </div>
                    <div>
                        <p id="quan">수량</p>
                        <input type="number" id="quantity" name="c_quantity" value="1" min="1" max="<?=$row['quantity']?>">
                    </div>
                    <?php
                        if($row['size']!=""){
                    ?>
                    <div>
                        <p>사이즈</p>
                        <select name="c_size">
                            <?=$size?>
                        </select>
                    </div>
                    <?php      
                        }
                    ?>
                    <?php
                        if($row['color']!=""){
                    ?>
                    <div>
                        <p>색상</p>
                        <select name="c_color">
                            <?=$color?>
                        </select>
                    </div>
                    <?php      
                        }
                    ?>
                </div>
                <div class="subLiBtn">
                    <button type="submit">장바구니담기</button>
                    <button type="submit">BUY NOW</button>
                </div>
            </form>
        </div>
    </div>

<?php
    $conn2 = mysqli_connect("localhost","root","1234","shopping");
    $sql2 = "select * from review where kinds like '{$row['kinds']}%'";
    $result2 = mysqli_query($conn2, $sql2);
    $list2="";
    //var_dump($sql);
    while($row =(mysqli_fetch_array($result2))) {
        $list2 = $list2."
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
            <h2><a href="./review.php">review ></a></h2>
            <table class="listTable">
                <tr>
                    <th>번호</th>
                    <th>제목</th>
                    <th>글쓴이</th>
                    <th>카테고리</th>
                    <th>등록일</th>
                </tr>
                <?=$list2?>
            </table>
        </div>   
    </div> 
<script src="./javascript/scroll.js"></script>
<?php
    include_once "./include/footer.php";
?>