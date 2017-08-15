<html>
<?php include("header.html"); ?>

<body>
<?php include('footer.html'); ?>
<div class="page">
    <header class="header-fixed">
        <div class="report-title">
            报到页面
        </div>

    </header>
    <div class="report-header"></div>
    <div class="report-form weui-cells_form">

        <div class="report-form_group">
            <div class="report-group_hd">
                学校:
            </div>
            <!--            <div class="weui-cell__hd"><label class="weui-label">qq</label></div>-->
            <div class="report-group_bd">
                <select>
                    <option value="0"></option>
                    <option value="1">德州学院</option>
                    <option value="2">山东大学</option>
                    <option value="3">潍坊学院</option>
                    <option value="4">北京大学</option>
                    <option value="5">维护大学</option>
                </select>
            </div>
        </div>
        <div class="weui-flex">
            <div class="weui-flex__item report-form_group">
                <div class="report-group_hd">年级:</div>
                <div class="report-group_bd">
                    <select>
                        <option value="0"></option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                    </select>
                </div>
            </div>
            <div class="weui-flex__item report-form_group">
                <div class="report-group_hd">班级:</div>
                <div class="report-group_bd">
                    <select>
                        <option value="0"></option>
                        <option value="1">1</option>
                        <option value="2">23</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                    </select>
                </div>
            </div>
        </div>


        <div class="report-form_group">
            <div class="report-group_hd">
                上传头像:
            </div>
            <div class="report-group_bd weui-uploader__bd">
                <div class="weui-uploader__input-box jpt-uploader__input-box">
                    <span class="jpt-uploader_input-desc">点击上传</span>
                    <input id="uploaderInput" class="weui-uploader__input" type="file" accept="image/*" multiple="">
                </div>
            </div>
        </div>





        <div class="report-form_group">
            <div class="report-group_hd">
                姓名:
            </div>
            <div class="report-group_bd">
                <div class="weui-cell__bd report-groud_input">
                    <input class="weui-input" type="text" placeholder="">
                </div>
            </div>
        </div>
        <div class="report-form_group">
            <div class="report-group_hd">
                电话: <span class="c-99">（非必填，填写后他人可查看）</span>
            </div>
            <div class="report-group_bd">
                <div class="weui-cell__bd report-groud_input">
                    <input class="weui-input" type="tel">
                </div>
            </div>
        </div>
        <div class="report-form_group">
            <div class="report-group_hd">
                微信: <span class="c-99">（非必填，填写后他人可查看）</span>
            </div>
            <div class="report-group_bd">
                <div class="weui-cell__bd report-groud_input">
                    <input class="weui-input" type="text">
                </div>
            </div>
        </div>
        <div class="report-form_group">
            <div class="report-group_hd">
                给母校/老同学的寄语: <span class="c-99">（70字以内）</span>
            </div>
            <div class="report-group_bd">
                <div class="weui-cell__bd report-groud_input">
                    <textarea class="weui-textarea"  rows="4"></textarea>
                </div>
            </div>
        </div>
        <button class="weui-btn  bth-vote mt-15">确认提交</button>
    </div>
    <div class="footer-bottem">
    </div>
</body>
</html>