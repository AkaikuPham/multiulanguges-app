<?php
include('check_lang.php');
?>

<!DOCTYPE html>
<html>

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta name="description" content="<?php echo $langs['place_meta_02']; ?>" />
    <script src="scripts/baidu_js_push.js"></script>
    <script src="scripts/jquery-1.8.3.js"></script>
    <script src="scripts/jquery.reveal.js"></script>
    <script src="scripts/jquery.cookie.js"></script>
    <link rel="icon" href="images/favicon.ico" type="image/x-icon" />
    <link rel=stylesheet href="style/reset.css">
    <link rel=stylesheet href="style/common.css">
    <link rel=stylesheet href="style/base.css">
    <link rel=stylesheet href="style/header.css">
    <link rel=stylesheet href="style/shopcart.css">
    <link rel=stylesheet href="style/place.css">
    <link rel=stylesheet href="style/footer_1.css">
    <link rel=stylesheet href="style/reveal.css">
    <link rel=stylesheet href="style/login.css">
    <title><?php echo $langs['title'] ?></title>
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
    <div class="place-content">

        <div class="place-wrap-1">
            <div class="place-cc">
                <span><?php echo $langs['beijing']; ?></span>
                <a><?php echo $langs['switch_city']; ?></a>

            </div>
            <div class="place-wrap place-shadow">
                <div class="place-tab">
                    <ul>
                        <li><a id="t1" class="alive"><?php echo $langs['chaoyang_district']; ?></a></li>
                        <li><a id="t2"><?php echo $langs['haidian_district']; ?></a></li>
                        <li><a id="t3"><?php echo $langs['xicheng_district']; ?></a></li>
                        <li><a id="t4"><?php echo $langs['dongcheng_area']; ?></a></li>
                        <li><a id="t5"><?php echo $langs['daxing_district']; ?></a></li>
                        <li><a id="t6"><?php echo $langs['changping_district']; ?></a></li>
                        <li><a id="t7"><?php echo $langs['tongzhou_district']; ?></a></li>
                        <li><a id="t8"><?php echo $langs['other']; ?></a></li>
                    </ul>
                </div>
                <div id="n1" class="place-names">
                    <div class="name-item"><a class="place-link" href="shop.php"><?php echo $langs['beichen_century_center']; ?></a></div>
                    <div class="name-item"><a href="shop.php"><?php echo $langs['shitong_international_building']; ?></a></div>
                    <div class="name-item"><a href="shop.php"><?php echo $langs['huamao_center']; ?></a></div>
                    <div class="name-item"><a href="shop.php"><?php echo $langs['huateng_jinsong_business_building']; ?></a></div>
                    <div class="name-item"><a href="shop.php"><?php echo $langs['huatengjingkai_building']; ?></a></div>
                    <div class="name-item"><a href="shop.php"><?php echo $langs['jintai_international_building']; ?></a></div>
                    <div class="name-item"><a href="shop.php"><?php echo $langs['jintai_building']; ?></a></div>
                    <div class="name-item"><a href="shop.php"><?php echo $langs['jintaiyi_building']; ?></a></div>
                    <div class="name-item"><a href="shop.php"><?php echo $langs['beijing_rf_center']; ?></a></div>
                    <div class="name-item"><a href="shop.php"><?php echo $langs['huatengjingkai_office_building']; ?></a></div>
                    <div class="name-item"><a href="shop.php"><?php echo $langs['shimao_international_center']; ?></a></div>
                    <div class="name-item"><a class="new" a href="shop.php"><?php echo $langs['huateng_beiqi_business_building']; ?></a></div>
                </div>
                <div id="n2" class="place-names n">
                    <div class="name-item"><a href="shop.php"><?php echo $langs['urban_construction_building']; ?></a></div>
                    <div class="name-item"><a href="shop.php"><?php echo $langs['huateng_technology_building']; ?></a></div>
                    <div class="name-item"><a href="shop.php"><?php echo $langs['aobei_technology_park']; ?></a></div>
                    <div class="name-item"><a href="shop.php"><?php echo $langs['cuiwei_road_building']; ?></a></div>
                    <div class="name-item"><a href="shop.php"><?php echo $langs['telecom_industrial_building']; ?></a></div>
                    <div class="name-item"><a href="shop.php"><?php echo $langs['ideal_international_building']; ?></a></div>
                    <div class="name-item"><a href="shop.php"><?php echo $langs['fengyu_office_building']; ?></a></div>
                    <div class="name-item"><a href="shop.php"><?php echo $langs['zhongguancun_capital_building']; ?></a></div>
                    <div class="name-item"><a href="shop.php"><?php echo $langs['fusion_international_building']; ?></a></div>
                    <div class="name-item"><a class="new" a href="shop.php"><?php echo $langs['jin_tai_fu_di_building']; ?></a></div>
                </div>
                <div id="n3" class="place-names n">
                    <div class="name-item"><a><?php echo $langs['the_first_financial_center']; ?></a></div>
                    <div class="name-item"><a><?php echo $langs['hong_kong_china_building']; ?></a></div>
                    <div class="name-item"><a><?php echo $langs['tong_kong_building']; ?></a></div>
                    <div class="name-item"><a><?php echo $langs['desheng_real_estate_building']; ?></a></div>
                    <div class="name-item"><a><?php echo $langs['zhongzhi_jinkai_financial_building']; ?></a></div>
                    <div class="name-item"><a><?php echo $langs['maotai_building']; ?></a></div>
                    <div class="name-item"><a><?php echo $langs['yuetan_center']; ?></a></div>
                    <div class="name-item"><a><?php echo $langs['hopson_fortune_plaza']; ?></a></div>
                    <div class="name-item"><a><?php echo $langs['zhongji_building']; ?></a></div>
                    <div class="name-item"><a><?php echo $langs['cheng_ming_building']; ?></a></div>
                </div>
                <div id="n4" class="place-names n">
                    <div class="name-item"><a><?php echo $langs['juran_building']; ?></a></div>
                    <div class="name-item"><a><?php echo $langs['minmetals_plaza']; ?></a></div>
                    <div class="name-item"><a><?php echo $langs['news_building']; ?></a></div>
                    <div class="name-item"><a><?php echo $langs['shunde_jinghui_center']; ?></a></div>
                    <div class="name-item"><a><?php echo $langs['huangcheng_international_business_center']; ?></a></div>
                    <div class="name-item"><a><?php echo $langs['minsheng_financial_center']; ?></a></div>
                    <div class="name-item"><a><?php echo $langs['guosheng_center']; ?></a></div>
                    <div class="name-item"><a><?php echo $langs['beijing_jingwen_building']; ?></a></div>
                    <div class="name-item"><a><?php echo $langs['shenhua_interstate_building']; ?></a></div>
                    <div class="name-item"><a><?php echo $langs['yufe_building']; ?></a></div>
                </div>
                <div id="n5" class="place-names n">
                    <div class="name-item"><a><?php echo $langs['hongkun_plaza']; ?></a></div>
                    <div class="name-item"><a><?php echo $langs['starlight_vision_center']; ?></a></div>
                    <div class="name-item"><a><?php echo $langs['liangang_city_plaza']; ?></a></div>
                    <div class="name-item"><a><?php echo $langs['creative_harbor_causeway_bay']; ?></a></div>
                    <div class="name-item"><a><?php echo $langs['cultural_city']; ?></a></div>
                    <div class="name-item"><a><?php echo $langs['starlight_cinema_park']; ?></a></div>
                    <div class="name-item"><a><?php echo $langs['xingchuang_international_center']; ?></a></div>
                    <div class="name-item"><a><?php echo $langs['tahoe_central_plaza']; ?></a></div>
                </div>
                <div id="n6" class="place-names n">
                    <div class="name-item"><a><?php echo $langs['changping_entrepreneurship_building']; ?></a></div>
                    <div class="name-item"><a><?php echo $langs['guodong_loft']; ?></a></div>
                    <div class="name-item"><a><?php echo $langs['tbd_gathering_center']; ?></a></div>
                    <div class="name-item"><a><?php echo $langs['bbmg_vanke_plaza']; ?></a></div>
                    <div class="name-item"><a><?php echo $langs['xinyuan_technology_park']; ?></a></div>
                    <div class="name-item"><a><?php echo $langs['fuhuan_international_park']; ?></a></div>
                    <div class="name-item"><a><?php echo $langs['zhuzong_international_center']; ?></a></div>
                    <div class="name-item"><a><?php echo $langs['longguan_business_center']; ?></a></div>
                </div>
                <div id="n7" class="place-names n">
                    <div class="name-item"><a><?php echo $langs['east_asia_global_international']; ?></a></div>
                    <div class="name-item"><a><?php echo $langs['10_rf_canal']; ?></a></div>
                    <div class="name-item"><a>保利大都汇</a></div>
                    <div class="name-item"><a class="new"><?php echo $langs['jiayi_business_park']; ?></a></div>
                    <div class="name-item"><a><?php echo $langs['cocreation_industry_center']; ?></a></div>
                    <div class="name-item"><a><?php echo $langs['99_cultural_building']; ?></a></div>
                    <div class="name-item"><a><?php echo $langs['huayuan_ming_yue']; ?></a></div>
                    <div class="name-item"><a><?php echo $langs['tongzhou_wanda_plaza']; ?></a></div>
                    <div class="name-item"><a><?php echo $langs['international_health_harbor']; ?></a></div>
                    <div class="name-item"><a><?php echo $langs['beijing_one_building']; ?></a></div>
                </div>
                <div id="n8" class="place-names n">
                    <div class="name-item"><a><?php echo $langs['global_novation_harbor']; ?></a></div>
                    <div class="name-item"><a><?php echo $langs['sdic_shangke_building']; ?></a></div>
                    <div class="name-item"><a><?php echo $langs['catic_plaza']; ?></a></div>
                    <div class="name-item"><a><?php echo $langs['yicheng_technology_center']; ?></a></div>
                    <div class="name-item"><a><?php echo $langs['china_fortune_land_center']; ?></a></div>
                    <div class="name-item"><a><?php echo $langs['shell_jinghui']; ?></a></div>
                    <div class="name-item"><a><?php echo $langs['initiative_center']; ?></a></div>
                    <div class="name-item"><a><?php echo $langs['hanwei_international_plaza']; ?></a></div>
                    <div class="name-item"><a><?php echo $langs['nanfang_hongtai_building']; ?></a></div>
                    <div class="name-item"><a><?php echo $langs['shoute_steel_building']; ?></a></div>
                </div>
            </div>
        </div>


        <?php require_once 'layouts/footer.php' ?>

        <?php require_once 'layouts/shop_cart.php'; ?>

        <ul class="place-nav n">
            <li><a class="city"><?php echo $langs['beijing']; ?></a></li>
            <li><a class="city"><?php echo $langs['tianjin']; ?></a></li>
        </ul>
    </div>

    <?php require_once 'layouts/my_modal.php'; ?>

    <!--提示框-->
    <div id="alertModel" class="alertModel">
        <a id="alert" data-reveal-id="alertModel" data-animation="fade"></a>
        <span id="alert-msg"></span>
        <button id="btn-ok" class="btn"><?php echo $langs['knew']; ?></button>
        <a class="close-reveal-modal"><img src="images/icon_close.png" height="24" width="24"></a>
    </div>

    <script src="scripts/common.js"></script>
    <script src="scripts/md5.js"></script>
    <script src="scripts/myInfo.js"></script>
    <script src="scripts/login.js"></script>
    <script src="scripts/cart.lib.js"></script>
    <script src="scripts/cart.js"></script>
    <script src="scripts/header.js?v=1"></script>
    <script src="scripts/footer.js"></script>
    <script type="text/javascript">
        $(function() {


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
                if ($(this).text() != "北京") {
                    showAlert("该城市未开通");
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
            var zh = $(document.body).height();
            $(".footer-content").css('top', zh - 60);
            $(".footer-content").show();
        }
    </script>
</body>

</html>