<?php
include('check_lang.php');
?>

<!DOCTYPE html>
<html>

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta name="description" content="<?php echo $langs['about_meta']; ?>" />
    <script src="scripts/jquery-1.8.3.js"></script>
    <script src="scripts/jquery.reveal.js"></script>
    <script src="scripts/jquery.cookie.js"></script>
    <script src="scripts/baidu_js_push.js"></script>
    <script src="scripts/common.js"></script>
    <link rel="icon" href="images/favicon.ico" type="image/x-icon" />
    <link rel=stylesheet href="style/reset.css">
    <link rel=stylesheet href="style/common.css">
    <link rel=stylesheet href="style/base.css">
    <link rel=stylesheet href="style/header.css">
    <link rel=stylesheet href="style/shopcart.css">
    <link rel=stylesheet href="style/footer_1.css">
    <link rel=stylesheet href="style/reveal.css">
    <link rel=stylesheet href="style/login.css">
    <link rel=stylesheet href="style/about.css">
    <title><?php echo $langs['about_title']; ?></title>
    <script>
        var _hmt = _hmt || [];
        (function() {
            var hm = document.createElement("script");
            hm.src = "//hm.baidu.com/hm.js?9bb651f2bb5622d49b0299560d6559cd";
            var s = document.getElementsByTagName("script")[0];
            s.parentNode.insertBefore(hm, s);
        })();
    </script>
</head>

<body>

    <?php require_once 'layouts/header.php'; ?>
    <div class="about-content">
        <div class="about-header">
            <div class="header-text-bg">
            </div>
        </div>
        <div class="about-nav">
            <div class="nav">
                <ul>
                    <li><a forward="guanyuwomen" class="static"><?php echo $langs['about_us']; ?></a></li>
                    <li><a forward="lianxiwomen" class="static"><?php echo $langs['contact_us']; ?></a></li>
                    <li><a forward="tousujianyi" class="static"><?php echo $langs['suggestion']; ?></a></li>
                    <li><a forward="jiaruwomen" class="static"><?php echo $langs['join_us']; ?></a></li>
                    <li><a forward="shangjiaruzhu" class="static"><?php echo $langs['merchants_settle_in']; ?></a></li>
                </ul>
            </div>
        </div>

        <div class="about-body">
            <!--关于我们-->
            <div id="guanyuwomen" class="body-wrap n">
                <div class="body-header">
                    <span><?php echo $langs['meal_ordering_group']; ?></span>
                </div>
                <div class="body-content">
                    <span>
                        <p class="introduction">
                            <?php echo $langs['catering_O2O_platform']; ?>
                        </p>
                        <h3><?php echo $langs['development_path']; ?></h3>
                        <div class="history">
                            <?php echo $langs['2015_launched']; ?><br>
                            <?php echo $langs['201609_launched']; ?><br>
                            <?php echo $langs['201610_launched']; ?><br>
                            <?php echo $langs['201702_launched']; ?><br>
                            <?php echo $langs['201703_launched']; ?><br>
                            <?php echo $langs['202303_launched']; ?>
                            <br>
                            <?php echo $langs['developer']; ?>：<a href="https://github.com/chanson1024/dingfanzu" style="color:#0000ff;">lengqin1024</a>
                        </div>
                    </span>
                </div>
            </div>
            <!--联系我们-->
            <div id="lianxiwomen" class="body-wrap n">
                <div class="body-header">
                    <span><?php echo $langs['contact_us']; ?></span>
                </div>
                <div class="body-content">
                    <span class="bft">
                        <p><?php echo $langs['customer_service_wechat']; ?>：java2048</p>
                        <p><?php echo $langs['home_page_1']; ?>：https://github.com/chanson1024/dingfanzu</p>
                    </span>

                </div>
            </div>
            <!--投诉建议-->
            <div id="tousujianyi" class="body-wrap n">
                <div class="body-header">
                    <span><?php echo $langs['suggestion']; ?></span>
                </div>
                <div class="body-content">
                    <span class="bft"><?php echo $langs['tell_us_1']; ?></span>
                    <span>
                        <textarea id="tousu-txt" maxLength="150" /></textarea>
                    </span>
                    <span class="paddingTB-20">
                        <a id="tousu-commit" class="btn-commit"><?php echo $langs['submit']; ?></a>
                    </span>
                </div>
            </div>
            <!--加入我们-->
            <div id="jiaruwomen" class="body-wrap n">
                <div class="body-header">
                    <span><?php echo $langs['join_us']; ?></span>
                </div>
                <div class="body-content">
                    <span class="bft"><?php echo $langs['no_recruitment_plan_yet']; ?></span>
                </div>
            </div>
            <!--商家入驻-->
            <div id="shangjiaruzhu" class="body-wrap n">
                <div class="body-header">
                    <span><?php echo $langs['merchants_settle_in']; ?></span>
                </div>
                <div class="body-content">
                    <span class="bft"><?php echo $langs['meta_01']; ?></span>
                    <div class="shangjiaruzhu">
                        <span><label class="bft"><?php echo $langs['restaurant_name']; ?> </label><input id="hotelName" maxlength="20"></span>
                        <span><label class="bft"><?php echo $langs['contact_number']; ?> </label><input id="hotelPhone" maxlength="20"></span>
                        <span><label class="bft"><?php echo $langs['restaurant_location']; ?> </label><input id="hotelLocation" maxlength="30"></span>
                        <span><label class="bft"><?php echo $langs['brief_introdction']; ?> </label><input id="hotelIntroduction" maxlength="100"></span>
                        <span><a id="hotel-commit" class="btn-commit"><?php echo $langs['submit']; ?></a></span>
                    </div>
                </div>
            </div>
        </div>

        <div class="footer-wrap">
            <?php require_once 'layouts/footer.php' ?>
        </div>

    </div>



    <?php require_once 'layouts/shop_cart.php'; ?>
    </div>

    <?php require_once 'layouts/my_modal.php'; ?>

    <!--提示框-->
    <div id="alertModel" class="alertModel">
        <a id="alert" data-reveal-id="alertModel" data-animation="fade"></a>
        <span id="alert-msg"></span>
        <button id="btn-ok" class="btn"><?php echo $langs['knew']; ?></button>
        <a class="close-reveal-modal"><img src="images/icon_close.png" height="24" width="24"></a>
    </div>


    <script src="scripts/md5.js"></script>
    <script src="scripts/myInfo.js"></script>
    <script src="scripts/login.js"></script>
    <script src="scripts/cart.lib.js"></script>
    <script src="scripts/cart.js"></script>
    <script src="scripts/header.js"></script>
    <script src="scripts/footer.js"></script>
    <script src="scripts/about.js"></script>
    <script type="text/javascript">
        $(function() {

            //获取url跳转参数
            var name = getUrlParam('p');
            if (name) {
                $(".nav a[forward=" + name + "]").addClass('active');
                $('.body-wrap').hide();
                $("#" + name).fadeIn(300);
            }


            //导航切换
            $(".nav a").click(function() {
                var forward = $(this).attr('forward');
                location.href = "about.php?p=" + forward;
            });

            //初始化购物车
            initCart();

            //footer
            processFooter();

            //地址悬浮
            $(".place-cc a,.place-nav").hover(function() {
                $('.place-nav').show();
            }, function() {
                $('.place-nav').hide();
            });

            //购物车相关
            var shopCartWidth = $(".shop-cart").width();
            //默认隐藏购物车
            $(".shop-cart,.shop-bottom").css("right", -shopCartWidth);
            var mRight = -shopCartWidth;

            $("#cart").click(function() {
                $('.shop-cart').show();
                //适配购物车
                processShopItem();

                shopCartWidth = $(".shop-cart").width();
                if (mRight == '0px') {
                    mRight = -shopCartWidth;
                    $(".shop-cart,.shop-bottom").animate({
                        right: mRight
                    }, 200);
                } else {
                    mRight = '0px';
                    $(".shop-cart,.shop-bottom").animate({
                        right: mRight
                    }, 200);
                }
            });




            //中间高
            var zw = $(window).width();
            var middleWidth = $('.place-wrap').width();
            var middleHeight = $('.place-wrap').height();
            var marginLeft = (zw - middleWidth) / 2;
            $(".place-wrap-1").css("marginLeft", marginLeft);
            $(".place-wrap-1").show();

            //地址选择悬浮
            $(".place-nav").css("left", marginLeft + 32); //再加32
            //地址点击
            $('.city').click(function(event) {
                if ($(this).text() != "济南") {
                    alert("未开通");
                } else {
                    window.location.reload();
                }
            });

            //弹出动画
            $(".place-wrap").animate({
                "opacity": "0.9"
            }, 200);




            $(window).resize(function() {
                //中间高
                var zw = $(window).width();
                var middleWidth = $('.place-wrap').width();
                var middleHeight = $('.place-wrap').height();
                var marginLeft = (zw - middleWidth) / 2;
                $(".place-wrap-1").css("marginLeft", marginLeft);
                //地址选择悬浮
                $(".place-nav").css("left", marginLeft + 32);

                //适配购物车
                processShopItem();

                $('.shop-cart').hide();
                var shopCartWidth = $(".shop-cart").width();
                //默认隐藏购物车
                $(".shop-cart,.shop-bottom").css("right", -shopCartWidth);
                mRight = -shopCartWidth;

                processFooter();
            });


            //tab点击事件
            $('.place-tab a').click(function() {
                //变样式
                var cl = $(this).parents('.place-tab').find('a');
                cl.removeClass('alive');
                $(this).addClass('alive');
                var pid = $(this).attr('id');
                $('.place-names').hide();
                var n = "#" + pid.replace('t', 'n');
                $(n).show();
            });
        });

        function processFooter() {
            $(".footer-content").show();
        }


        //获取url跳转参数
        function getUrlParam(name) {
            var reg = new RegExp("(^|&)" + name + "=([^&]*)(&|$)");
            var r = window.location.search.substr(1).match(reg); //匹配目标参数
            if (r != null) return unescape(r[2]);
            return null; //返回参数值
        }
    </script>
</body>

</html>