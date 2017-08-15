<html>
<?php include("header.html"); ?>


<body>
<?php include('footer.html'); ?>

<div class="page">
   <header class="jpt-header_1 jpt-header_king header-detail_1">
       <div class="swiper-container">
           <div class="swiper-wrapper">
               <div class="swiper-slide"> <img src="../img/banner@2x.png"></div>
           </div>
           <div class="swiper-pagination"></div>
       </div>
       <div class="weui-cell pb-0">
           <div class="notice-hd weui-cell__hd">
               <label class=" weui-label">公告</label>
           </div>
           <div class="notice-bd  weui-cell__bd">
               <ul class="scroll">
                   <li class="notice-item">
                       <div class="notice-item_hd"><img src="../img/details-horn@2x.png"></div>
                       <div class="notice-item_bd">16级12班王雪报道</div>
                   </li>
                   <li class="notice-item">
                       <div class="notice-item_hd"><img src="../img/details-horn@2x.png"></div>
                       <div class="notice-item_bd">16级12班王雪报道</div>
                   </li>
                   <li class="notice-item">
                       <div class="notice-item_hd"><img src="../img/details-horn@2x.png"></div>
                       <div class="notice-item_bd">16级12班王雪报道</div>
                   </li>
                   <li class="notice-item">
                       <div class="notice-item_hd"><img src="../img/details-horn@2x.png"></div>
                       <div class="notice-item_bd">16级12班王雪报道</div>
                   </li>
                   <li class="notice-item">
                       <div class="notice-item_hd"><img src="../img/details-horn@2x.png"></div>
                       <div class="notice-item_bd">16级12班王雪报道</div>
                   </li>
                   <li class="notice-item">
                       <div class="notice-item_hd"><img src="../img/details-horn@2x.png"></div>
                       <div class="notice-item_bd">16级12班王雪报道</div>
                   </li>
                   <li class="notice-item">
                       <div class="notice-item_hd"><img src="../img/details-horn@2x.png"></div>
                       <div class="notice-item_bd">16级12班王雪报道</div>
                   </li>
               </ul>
           </div>
       </div>
       <div class="detail-enfant_hd">
           <img src="../img/pic-child-1@2x.png">
           <div class="detail-enfant_hd-table">
               <div class="weui-flex">
                   <div class="weui-flex__item">
                    姓名：<span>赫敏 格兰杰</span>
                   </div>
                   <div class="weui-flex__item">
                       编号：<span>12345</span>
                   </div>
               </div>
               <div class="weui-flex">
                   <div class="weui-flex__item">
                       排名：<span>5</span>
                   </div>
                   <div class="weui-flex__item">
                       票数：<span>12345</span>
                   </div>
               </div>
           </div>
           <button class="weui-btn  bth-y_1 mt-15">&nbsp;</button>
           <button class="weui-btn  bth-y_2 mt-15">&nbsp;</button>
       </div>

   </header>

    <div class="detail-ablum">

        <div class="datail-ablum_item">
            <img class="item_img" src="../img/pic-child-1@2x.png">
        </div>

        <div class="datail-ablum_item">
            <img class="item_img" src="../img/pic-child-1@2x.png">
        </div>

        <div class="datail-ablum_item">
            <img class="item_img" src="../img/pic-child-1@2x.png">
        </div>

    </div>

</div>











<div class="footer-bottem">
<script>
    $(".swiper-container").swiper({
        loop: false,
        autoplay: 3000
    });
    //    公告代码
    $(function () {
        var num = 0;
        function goLeft() {
            //750是根据你给的尺寸，可变的
            if (num == -750) {
                num = 0;
            }
            num -= 1;
            $(".scroll").css({
                left: num
            })
        }

        //设置滚动速度
        var timer = setInterval(goLeft, 20);
        //设置鼠标经过时滚动停止
        $(".box").hover(function () {
                clearInterval(timer);
            },
            function () {
                timer = setInterval(goLeft, 20);
            })
    });
    //    公告代码 end
</script>
</body>

</html>