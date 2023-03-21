<?php 
    include_once "./include/header.php";
    session_start();
?>
<?php 
    $conn = mysqli_connect("localhost","root","1234","shopping");
    $sql = "select product.photourl, product.name, product.price,
    product.delprice, basket.c_quantity, basket.c_no,
    basket.c_memberid,basket.c_size, basket.c_color 
    from product inner join basket 
    on product.no = basket.c_pno
    where basket.c_memberid = '{$_SESSION['userid']}'
    ";
    $result = mysqli_query($conn, $sql);
    $list="";
    while($row=(mysqli_fetch_array($result))){
        //50000 => 50,000
        $totalProduct = number_format($row['price']*$row['c_quantity'],0,'.',',');
        $totaldelProduct = number_format($row['price']*$row['c_quantity']+$row['delprice'],0,'.',',');
        $deleprice = number_format($row['delprice'],0,'.',',');
        $price = number_format($row['price'],0,'.',',');
        $list = $list."
        <tr class='trTwo'>
            <td class='tdTwo'><input type='checkbox' checked class='cartcheck' 
            data-price='{$row['price']}' 
            data-del='{$row['delprice']}' 
            data-quan='{$row['c_quantity']}'> 
            <img src='{$row['photourl']}' width='150'></td>
            <td><p id='cartName'>{$row['name']}</p> 
            *사이즈 : {$row['c_size']} *컬러 :{$row['c_color']} 
            <td>{$row['c_quantity']}</td>
            <td>{$totalProduct}</td>
            <td>{$deleprice}</td>
            <td><button class='del' data-no='{$row['c_no']}' 
            onclick='cartdel(this)'>삭제</button></td></td>   
        </tr>
        ";
    }
?>
<?php
    include_once "./include/menu.php";
?>
        <div id="newPage">
            <div id="cartPage">
                <h2>장바구니</h2>
                <div id="cartForm">
                    <table class="cartList" cellspacing="0">
                        <tr>
                            <th>상품사진</th>
                            <th>상품정보</th>
                            <th>주문수량</th>
                            <th>가격</th>
                            <th>배송비</th>  
                            <th>선택</th>
                        </tr>
                        <?=$list?>
                    </table>
                </div>    
                <div id="cartForm1">    
                    <table class="cartList1" cellspacing="0" >
                        <tr>
                            <th>총 상품금액</th>
                            <th rowspan="2"><span>+</span></th>
                            <th>총 배송비</th>
                            <th rowspan="2"><span>=</span></th>
                            <th>결제예정금액</th>
                        </tr>
                        <tr>
                            <td>
                                <span class="price">
                                    <span id="productprice">97,000</span>원
                                </span>
                            </td>
                            <td>
                                <span class="price">
                                    <span id="delprice">0</span>원
                                </span>
                            </td>
                            <td>
                                <span class="price">
                                    <span id="totaprice">97,000</span>원
                                </span>
                            </td>
                        </tr>
                    </table>
                </div>
            </div>    
        </div>
    <script>
        const checkinputs = document.querySelectorAll('.cartcheck');
        checkinputs.forEach(ch=>{
            ch.addEventListener('click',totalprice);
        })
        function totalprice(){
            let totalprice = 0;
            let totaldel = 0;
            let totaltal = 0;
            checkinputs.forEach(ch=>{
                if(ch.checked){
                    const {price,del,quan} = ch.dataset;
                    totalprice += price*quan;
                    totaldel = Number(del);
                }
            })
            //전체상품가격 + 전체배송료
            totaltal = totalprice+totaldel;
            document.querySelector('#productprice').innerHTML = totalprice.toLocaleString('ko-KR');
            document.querySelector('#delprice').innerHTML = totaldel.toLocaleString('ko-KR');
            document.querySelector('#totaprice').innerHTML = totaltal.toLocaleString('ko-KR');
        }
        totalprice();
        async function cartdel(cartlist){
            //cart 번호 
            const {no} = cartlist.dataset;
            try{
                const res = await fetch(`http://localhost/shopping/process/cartdel_process.php`,{
                    method: "POST",
                    header: {
                        "Content-Type":"application/json",
                    },
                    body : JSON.stringify({
                        c_no: no
                    })
                });
                const result = await res.text();
                if(result=="yes"){
                    console.log("삭제");
                    location.reload();
                }else {
                    console.log("삭제안됨");
                }
            }
            catch(e){
                console.log(e);
            }
        }
    </script>
    <?php 
        include_once "./include/footer.php";
    ?>