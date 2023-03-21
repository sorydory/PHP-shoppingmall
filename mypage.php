<?php
    include_once "./include/header.php";
?>
    <div id="myPage">
        <div id="safe">
            <h2>마이페이지 점검중..</h2>
            <img src="./img/img_error03.png" alt="">
        </div>
        <p>죄송합니다!!! 아직 완성하지 못했어욤...</p>
    </div>

    <script>
        const p = document.querySelector("p");
        const safe = document.querySelector("#safe")
        function ss() {
            setTimeout(() => {
            safe.style.display = "none"
            p.style.top ="500px"
        }, 3000);
        }
        ss();
    </script>
<?php
    include_once "./include/footer.php";
?>