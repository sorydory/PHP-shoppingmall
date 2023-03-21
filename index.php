<?php
    include_once "./include/header.php";
?>
<?php
    include_once "./include/menu.php";
?>
        
    
    <!--상단 /-->
    <!--컨텐츠 시작-->
        
    <div id="imgView">
        <div id="imgDivs"></div>
    </div>
        <!-- 그리드 시작 -->
    <div id="page2">   
        <h4>RECOMMEND ITEM</h4>
        <h5>추천하는 아이템</h5>
        <div id="gridCon"class="innerCon" >
            <div>
                <a href="#"><img src="./img/2-1.jpg" alt=""></a>
                <div class="blackbg">
                    <!-- <a href="">래더 배색 자켓(Ivory)</a><br/>
                    <a href="">69,500원</a> -->
                </div>
            </div>
            <div>   
                <a href="#"><img src="./img/2-2.jpg" alt=""></a>
                <div class="blackbg">
                    <!-- <a href="">[남녀공용]믹스 골지 니트집업(챠콜)</a><br/>
                    <a href="">59,400원</a> -->
                </div>
            </div>
            <div>
                <a href="#"><img src="./img/2-3.jpg" alt=""></a>
                <div class="blackbg">
                    <!-- <a href="">[남녀공용]믹스 골지 니트집업(브라운)</a><br/>
                    <a href="">59,500원</a> -->
                </div>
            </div>
            <div>
                <a href="#"><h3>I i i m  S t y l e</h3></a>
            </div>
            <div>  
                <a href="#"><img src="./img/2-4.jpg" alt=""></a>
                <div class="blackbg">
                    <!-- <a href="">패딩 항공 점퍼</a><br/>
                    <a href="">89,200원</a> -->
                </div>
            </div>
            <div>
                <a href="#"><img src="./img/2-5.jpg" alt=""></a>
                <div class="blackbg">
                    <!-- <a href="">퀄팅 에코 레더 자켓</a><br/>
                    <a href="">118,400원</a> -->
                </div>
            </div>
            <div>    
                <a href="#"><img src="./img/2-6.jpg" alt=""></a>
                <div class="blackbg">
                    <!-- <a href="">하이넥 발마칸 울코트</a><br/>
                    <a href="">119,800원</a> -->
                </div>
            </div>
            <div>  
                <a href="#"><img src="./img/2-7.jpg" alt=""></a>
                <div class="blackbg">
                    <!-- <a href="">지브라 모헤어 앙고라 니트</a><br/>
                    <a href="">45,200원</a> -->
                </div>
            </div>
            <div>
                <a href="#"><img src="./img/2-8.jpg" alt=""></a>  
                <div class="blackbg">
                    <!-- <a href="">빈티지 워싱 와이드핏 데님팬츠</a><br/>
                    <a href="">39,800원</a> -->
                </div>          
            </div>
        </div>
    </div> 
    <!-- 그리드 끝 -->
    <!-- scroll -->
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
                            <option value="넥타이">넥타이</option>
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
                        <input type="file" name="detail_photol1">
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
                </tr>
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
<?php
    $conn = mysqli_connect("localhost","root","1234","shopping");
    $sql = "select * from review LIMIT 4";
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
    <div id="mainPage3"> 
        <div id="review">
            <h2><a href="review.php">review ></a></h2>
            <table class="listTable">
                <tr>
                    <th>번호</th>
                    <th>제목</th>
                    <th>글쓴이</th>
                    <th>카테고리</th>
                    <th>등록일</th>
                </tr>
                <?=$list?>
            </table>
        </div>   
    <!-- <canvas width="1900" height="200"></canvas> -->
</div>
<?php
    include_once "./include/footer.php";
?>
