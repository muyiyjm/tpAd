<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
    <title>人气校园</title>
    <link rel="stylesheet" type="text/css" href="../lib/weui/weui.css">
    <link rel="stylesheet" type="text/css" href="../css/jquery-weui.css">
    <link rel="stylesheet" type="text/css" href="../css/res.css?v=1">
    <link rel="stylesheet" type="text/css" href="../css/main.css?v=1">
    <link rel="stylesheet" type="text/css" href="../css/yt.css?v=1">
    <script type="text/javascript" src="../lib/jquery-2.1.4.js"></script>
    <script type="text/javascript" src="../js/jquery.liMarquee.js"></script>
    <script type="text/javascript" src="../lib/vue.js"></script>
    <script src="../lib/fastclick.js"></script>
    <script>
        $(function() {
            FastClick.attach(document.body);
        });
    </script>
    <script type="text/javascript" src="../js/jquery-weui.js"></script>
    <script type="text/javascript" src="../js/timeCountDown.js"></script>
    <script type='text/javascript' src='../js/swiper.js' charset='utf-8'></script>
<style>
    img{
        width:100%;
    }
    .weui-flex__item-2{
        flex: 2;
    }
</style>
</head>
<body>
<div class="page">

<?php include ('footer.html');?>
    <header class="">
<img class="" src="../img/banner@2x(1).png">
    </header>
<style>
    .jpt-select_form {
        margin-top: 0;
    }
    .jpt-select_group{
        padding:10px 5px;
    }
    .jpt-select_group .select-group_hd{
        font-size: 16px;
        padding-bottom:10px;
    }
    .jpt-select_group select{
        width:100%;
        height:40px;
        font-size: 16px;
        line-height: 40px;
        appearance:none;
        -moz-appearance:none;
        -webkit-appearance:none;
        /*在选择框的最右侧中间显示小箭头图片*/
        background: url("../img/jiantou@2x.png");
        background-size: auto 30%;
        background-repeat: no-repeat;
        background-position:96% center;
        padding-right: 30px;
        padding-left: 10px;    border-color: #32b16c;
        border-radius: 8px;
        color: #999999;
    }
    .jpt-select_group select:focus{outline:none }
    .jpt-Search {
        height: 18px;
        line-height: 18px;
        display: flex;
        border: 1px solid #32b16c;
        border-radius: 10px;
        padding: 10px 12px;
    }
    .jpt-Search_input {
        width: 24vw;
        flex: 1;
        border: 0;
        font-size: 16px;
        color: #c0c0c0;
        background-color: transparent;
    }

</style>
    <div class="weui-flex ta-c" >
        <div class="weui-flex__item jpt-select_group">
            <select name="nian" id="">
                <option value="1">年级</option>

            </select>
        </div>
        <div class="weui-flex__item jpt-select_group">
            <select name="ban" id="">
                <option value="1">班级</option>

            </select>
        </div>
        <div class="weui-flex__item-2 jpt-select_group">
            <div class=" jpt-Search">
                &nbsp;<input placeholder="搜索姓名" type="search" class="jpt-Search_input">
                <div class="jpt-icon_search">
                    <img src="../img/find1@2x.png">
                </div>
            </div>
        </div>
    </div>
<div class="footer-bottem">

</div>



</div>




</body>
</html>
