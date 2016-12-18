<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:69:"E:\xampp\htdocs\tp5\public/../application/index\view\index\index.html";i:1482040171;}*/ ?>
 <!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>从前慢</title>
    <!--WOW动态css-->
    <link href="__STATIC__/css/animate.min.css" rel="stylesheet" type="text/css">
    <!--幻灯片JS-->
    <link rel="stylesheet" href="__STATIC__/css/jquery.fullPage.css">
    <link rel="stylesheet" href="__STATIC__/css/style.css">
</head>

<body>
    <div id="fullpage">
        <div class="section">
            <div class="sq_menu_container">
                <div class="sq_menu">
                    <div class="sq_m_span">
                        <span></span>
                        <span></span>
                        <span></span>
                    </div>
                    <div class="sq_m_meun">
                        TANG
                    </div>
                </div>
                <div class="sq_meun_back"></div>
                <div class="sq_meun_nav">
                    <div class="sq_nav_1 nav0">
                        <span class="sq_nav_park"></span>
                        <span class="sq_nav_left" id="shou">首页</span>
                    </div>
                    <script type="text/javascript">
                    </script>
                    <?php if(\think\Session::get('username')): ?>
                    <div class="sq_nav_1 nav1">
                        <span class="sq_nav_park"></span>
                        <span class="sq_nav_left"><a href="<?php echo url('user/loginout'); ?>">退出</a><!-- <a href="<?php echo url('user/register'); ?>"> 注册</a> --></span>
                    </div>
                    <?php else: ?>
                    <div class="sq_nav_1 nav1">
                        <span class="sq_nav_park"></span>
                        <span class="sq_nav_left"><a href="<?php echo url('user/login'); ?>">登录</a><a href="<?php echo url('user/register'); ?>"> 注册</a></span>
                    </div>
                    <?php endif; ?>
                   <!--  <div class="sq_nav_1 nav2">
                        <span class="sq_nav_park"></span>
                        <span class="sq_nav_left">生活馆</span>
                    </div>
                    <div class="sq_nav_1 nav3">
                        <span class="sq_nav_park"></span>
                        <span class="sq_nav_left">社区</span>
                    </div> -->
                    <div class="sq_nav_1 nav4">
                        <span class="sq_nav_park"></span>
                        <?php if(\think\Session::get('user_type') != null): ?>
                        <span class="sq_nav_left"><a href="__SITE__/admin/index/index">管理后台</a></span>
                        <?php endif; ?>
                    </div>
                    <div class="sq_nav_1 nav5">
                        <span class="sq_nav_park"></span>
                        <span class="sq_nav_left">   </span>
                    </div> 
                    <div class="sq_nav_1 nav6">
                        <span class="sq_nav_park"></span>
                        <span class="sq_nav_left"></span>
                    </div>
                </div>
            </div>
            <!--QQ-电话-->
            <div class="sq_concat">
                <div class="sq_concat_back">
                    <div class="sq_phone"><img src="__STATIC__/img/index/phone.png" alt="联系电话"></div>
                    <div class="sq_qq"><img src="__STATIC__/img/index/qq.png" alt="联系QQ"></div>
                    <div class="sq_weixin"><img src="__STATIC__/img/index/weixin.png" alt="微信"></div>
                </div>
            </div>
            <div class="sq_center sq_position"><img src="__STATIC__/img/index/er.png"></div>
            <div class="sq_center_1 sq_position"><img src="__STATIC__/img/index/zuiwai.png"></div>
            <div class="sq_center_2"><img src="__STATIC__/img/index/nei.png"></div>
            <!--从这里开始-->
            <div class="sq_start">从这里开始</div>
            <div class="sq_mouse">
                <img src="__STATIC__/img/index/shubiao.png">
                <div class="sq_m_small"></div>
            </div>
            <div class="bg">
                <img src="__STATIC__/img/index/FirstScreen.jpg" alt="第一屏">
            </div>
        </div>
        <div class="section">
            <!--<div class="bg" style="z-index:3"><img src="images/index/2zhezhao.png"></div>-->
            <div class="sq_tow_screen">
                <p>给愿意静下来，欣赏发现生变美好事物，并且分享故事的人的空间</p>
            </div>
            <div class="sq_tow_msg" style="z-index: 6">
                <ul>
                    <li class="sq_li1">
                        <div class="sq_img">
                            <img src="__STATIC__/img/index/book.png" alt="视觉设计">
                            <p class="sq_img_s1">品牌视觉设计</p>
                            <p>Brand visual design</p>
                        </div>
                    </li>
                    <li class="sq_li2">
                        <div class="sq_img">
                            <img src="__STATIC__/img/index/pc.png" alt="网站建设">
                            <p class="sq_img_s1">品牌网站建设</p>
                            <p>Brand website construction</p>
                        </div>
                    </li>
                    <li class="sq_li3">
                        <div class="sq_img">
                            <img src="__STATIC__/img/index/ipod.png" alt="商务设计">
                            <p class="sq_img_s1">电子商务设计</p>
                            <p>Electronic commerce design</p>
                        </div>
                    </li>
                    <li class="sq_li4">
                        <div class="sq_img">
                            <img src="__STATIC__/img/index/Aphone.png" alt="移动应用设计">
                            <p class="sq_img_s1">移动应用设计</p>
                            <p>Mobile application design</p>
                        </div>
                    </li>
                </ul>
            </div>
            <div class="sq_zw"><img src="__STATIC__/img/index/zhewen.png"></div>
            <div class="bg">
                <img src="__STATIC__/img/index/FirstScreen2.jpg" alt="第二屏">
            </div>
        </div>
        <div class="section">
            <!--<div class="bg" style="z-index:3"><img src="images/index/2zhehzoa.jpg.png"></div>-->
            <div class="sq_three">
                FUN
                <div class="sq_three_s1">
                    <span class="sq_three_s1_span"></span>
                    <span class="sq_three_s1_span1"></span>
                </div>
            </div>
            <div class="sq_three_s2" style="z-index: 6">
                <ul>
                    <li>
                        <div class="sq_three_img">
                            <div class="sq_three_re" style="position: relative;">
                                <img src="__STATIC__/img/index/an1.jpg" alt="社区">
                                <div class="sq_z_back"></div>
                                <span class="sq_z_left"><img src="__STATIC__/img/index/zoom_1.png"></span>
                                <span class="sq_z_right"><img src="__STATIC__/img/index/zoom_2.png"></span>
                            </div>
                            <div class="sq_three_top">
                                &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp;
                                <span>time slowly</span>
                                <span style="font-size: 18px;">社区</span>
                            </div>
                            <div class="sq_three_top" style="color:#787878">2015.05.18</div>
                            <div class="sq_three_top sq_solid" style="width:270px;background: #959595;height: 2px;"></div>
                        </div>
                    </li>
                    <li>
                        <div class="sq_three_img">
                            <div class="sq_three_re" style="position: relative;">
                                <img src="__STATIC__/img/index/an2.jpg" alt="生活馆">
                                <div class="sq_z_back"></div>
                                <span class="sq_z_left"><img src="__STATIC__/img/index/zoom_1.png"></span>
                                <span class="sq_z_right"><img src="__STATIC__/img/index/zoom_2.png"></span>
                            </div>
                            <div class="sq_three_top">
                                &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp;
                                <span>Life fun</span>
                                <span style="font-size: 18px;">生活馆</span>
                            </div>
                            <div class="sq_three_top" style="color:#787878">2017.01.01</div>
                            <div class="sq_three_top sq_solid" style="width:270px;background: #959595;height: 2px;"></div>
                        </div>
                    </li>
                    <li>
                        <div class="sq_three_img">
                            <div class="sq_three_re" style="position: relative;">
                                <img src="__STATIC__/img/index/an3.jpg" alt="原创">
                                <div class="sq_z_back"></div>
                                <span class="sq_z_left"><img src="__STATIC__/img/index/zoom_1.png"></span>
                                <span class="sq_z_right"><img src="__STATIC__/img/index/zoom_2.png"></span>
                            </div>
                            <div class="sq_three_top">
                                &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp;
                                <span>PERSON life</span>
                                <span style="font-size: 18px;">原创</span>
                            </div>
                            <div class="sq_three_top" style="color:#787878">2015.05.18</div>
                            <div class="sq_three_top sq_solid" style="width:270px;background: #959595;height: 2px;"></div>
                        </div>
                    </li>
                    <!--   <li>
                        <div class="sq_three_img">
                            <div class="sq_three_re" style="position: relative;">
                                <img src="images/index/an4.jpg" alt="西部传媒">
                                <div class="sq_z_back"></div>
                                <span class="sq_z_left"><img src="images/index/zoom_1.png"></span>
                                <span class="sq_z_right"><img src="images/index/zoom_2.png"></span>
                            </div>

                            <div class="sq_three_top">
                                <span>Western media</span>
                                <span style="font-size: 18px;">西部传媒</span>
                            </div>
                            <div class="sq_three_top" style="color:#787878">2015.05.18</div>
                            <div class="sq_three_top sq_solid" style="width:270px;background: #959595;height: 2px;"></div>
                        </div>
                    </li> -->
                </ul>
            </div>
            <div class="sq_three_s3">
                <div class="sq_three_all">ALL</div>
            </div>
            <div class="bg">
                <img src="__STATIC__/img/index/FirstScreen3.jpg" alt="第三屏">
            </div>
        </div>
        <div class="section">
            <div class="bg" style="z-index:3"><img src="__STATIC__/img/index/2zhehzoa.jpg"></div>
            <div class="sq_four">
                <img src="__STATIC__/img/index/ready.png">
            </div>
            <div class="sq_four_all">We are ready,you?</div>
            <div class="sq_four2"><img src="__STATIC__/img/index/go.png"></div>
            <div class="bg">
                <img src="__STATIC__/img/index/FirstScreen4.jpg" alt="第四屏">
            </div>
        </div>
    </div>
    <script type="text/javascript" src="__STATIC__/js/jquery.js"></script>
    <script type="text/javascript" src="__STATIC__/js/jquery-ui.min.js"></script>
    <script type="text/javascript" src="__STATIC__/js/jquery.fullPage.min.js"></script>
    <script type="text/javascript" src="__STATIC__/js/style.js"></script>
    <script type="text/javascript">
    $(function() {

        $("#shou").click(function() {

            window.location.href = '/index/life/life';
        });


        $('#fullpage').fullpage({
            'verticalCentered': false,
            anchors: ['page1', 'page2', 'page3', 'page4'],
            'navigation': true, //是否显示导航栏
            'navigationPosition': 'left' //导航栏的位置
        });


        var back = $(".sq_concat_back").find("div");
        var img = ["__STATIC__/img/index/phone_1.png", "__STATIC__/img/index/qq_1.png", "__STATIC__/img/index/weixin_1.png"];
        var imgs = ["__STATIC__/img/index/phone.png", "__STATIC__/img/index/qq.png", "__STATIC__/img/index/weixin.png"];
        back.hover(function() {
            $(this).children("img").attr("src", img[back.index(this)]);
        }, function() {
            $(this).children("img").attr("src", imgs[back.index(this)]);
        });

        var sq_img = $(".sq_three_s2 ul").find("li");
        sq_img.hover(function() {
            $(this).children("div").children(".sq_three_re").children(".sq_z_back").css({
                "opacity": "0.7"
            });
            $(this).children("div").children(".sq_solid").css("background", "#3CAF5A");
            $(this).children("div").children(".sq_three_re").children(".sq_z_left").animate({
                "opacity": "1",
                "left": "38%"
            }, 500);
            $(this).children("div").children(".sq_three_re").children(".sq_z_right").animate({
                "opacity": "1",
                "right": "45%"
            }, 500);
        }, function() {
            $(this).children("div").children(".sq_three_re").children(".sq_z_back").css("opacity", "0");
            $(this).children("div").children(".sq_solid").css("background", "#959595");
            $(this).children("div").children(".sq_three_re").children(".sq_z_left").animate({
                "opacity": "0",
                "left": "0"
            }, 500);
            $(this).children("div").children(".sq_three_re").children(".sq_z_right").animate({
                "opacity": "0",
                "right": "0"
            }, 500);
        });
    });
    </script>
</body>

</html>
