<?php
    include('check_lang.php');
?>

<!DOCTYPE html>
<html>

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta name="description" content="<?php echo $langs['template_shop_meta']; ?>" />
    <script src="/scripts/jquery-1.8.3.js"></script>
    <script src="/scripts/jquery.reveal.js"></script>
    <script src="/scripts/jquery.cookie.js"></script>
    <script src="/scripts/jquery.fly.min.js"></script>
    <script src="/scripts/common.js"></script>
    <link rel="icon" href="/images/favicon.ico" type="image/x-icon" />
    <!--[if lte IE 10]>
        <script src="scripts/requestAnimationFrame.js"></script>
        <![endif]-->

    <link rel=stylesheet href="/style/reset.css">
    <link rel=stylesheet href="/style/common.css">
    <link rel=stylesheet href="/style/base.css">
    <link rel=stylesheet href="/style/shop.css">
    <link rel=stylesheet href="/style/header.css">
    <link rel=stylesheet href="/style/shopcart.css">
    <link rel=stylesheet href="/style/leftmenu.css">
    <link rel=stylesheet href="/style/reveal.css">
    <link rel=stylesheet href="/style/login.css">
    <title><?php echo $langs['meal_ordering_website']; ?></title>
</head>

<body>

    <!--菜品展示-->
    <div class="content-middle n">
        #middle#
    </div>
    <?php require_once 'layouts/header.php'; ?>
    <div class="shop-content">

        <div class="gonggao-wrap">
            <div class="gonggao">
                <b> #shopTip#</b>
            </div>
        </div>


        <div class="leftmenu">
            <dl>
                <dt>
                    #shopInfo#
                </dt>
                #leftmenu#
            </dl>
        </div>
        <div class="shop-cart shadow n">
            <div class="shop-head">
                <?php echo $langs['shopping_cart']; ?><a class="shop-clear"><?php echo $langs['clear']; ?></a>
            </div>
            <div class="shop-body">


                <div class="isnull">
                    <span></span>
                    <b><?php echo $langs['shopping_cart_is_empty']; ?></b>
                </div>
            </div>
            <div class="shop-bottom">
                <div class="bottom-price fl"><?php echo $langs['total']; ?>：￥<label>32</label>
                </div>
                <div class="bottom-icon"></div>
                <div class="bottom-pay fr">
                    <a id="cart-pay"><?php echo $langs['settlement']; ?></a>
                </div>
            </div>
        </div>
        <ul id="subnav" class="subnav subnav-shadow n">
            <li><a href="/account/setting.php" target=""><?php echo $langs['account_settings']; ?></a></li>
            <li><a href="/account/order.php" target=""><?php echo $langs['my_order']; ?></a></li>
            <li><a href="/account/balance.php" target=""><?php echo $langs['my_balance']; ?></a></li>
            <li><a href="/account/cash.php" target=""><?php echo $langs['payment_ticket']; ?></a></li>
            <li><a href="/account/balance.php" target=""><?php echo $langs['my_address']; ?></a></li>
            <li><a id="sub-logout" href="" target=""><?php echo $langs['logout']; ?></a></li>
        </ul>
    </div>

    <?php require_once 'layouts/my_modal.php'; ?>

    <script src="/scripts/md5.js"></script>
    <script src="/scripts/myInfo.js"></script>
    <script src="/scripts/shopInfo.js"></script>
    <script src="/scripts/login.js"></script>
    <script src="/scripts/cart.lib.js"></script>
    <script src="/scripts/cart.js"></script>
    <script src="/scripts/header.js"></script>
    <script src="/scripts/shop.js"></script>
    <script type="text/javascript">
        $(function() {
            //存商家信息到cookie
            var shopId = $('.shop-name').attr('shopId');
            var shopName = $('.shop-name').attr('shopName');
            var shopPhone = $('.shop-name').attr('shopPhone');
            $.cookie('shopId', shopId, {
                expires: 365,
                path: '/'
            }); //写cookie
            //初始化购物车
            initCart();
            $('.shop-cart').show();

            //左侧导航
            var zh = $(window).height();
            var leftHeight = zh - 55;
            $(".leftmenu").height(leftHeight);
            //公告宽度
            processGonggao();

            //菜品div宽度
            processMenuItems();

            //购物车
            processShopItem();


            $('.gonggao').show();
            $('.content-middle').show();


            //监听窗口尺寸
            $(window).resize(function() {
                //设置左侧的高
                var zh = $(window).height();
                var leftHeight = zh - 55;
                $(".leftmenu").height(leftHeight);
                //公告宽度
                processGonggao();

                //菜品div宽度
                processMenuItems();

                //购物车
                processShopItem();

            });



            //左侧点击
            $('.leftmenu-item a').click(function() {
                //变样式
                $(this).parents('.leftmenu').find('.leftmenu-item').removeClass('active');
                $(this).parent().addClass('active');
                //变菜品
                var i = $(this).parents('dd').attr('id');
                $('.menu-wrap').hide();
                var m = "#" + i.replace('i', 'm');
                $(m).fadeIn(600);
            });


            //菜品相关
            function processMenuItems() {
                var zw = $(window).width();
                var shopCartWidth = $('.shop-cart').width();
                var leftMenuWidth = $('.leftmenu').width();
                var mw = zw - shopCartWidth - leftMenuWidth;
                $(".content-middle").width(mw);
                $(".content-middle").css('left', leftMenuWidth);
                $(".menu-wrap").width(mw);

                var percent = '48%';
                var marginLeft = 0;

                if (mw >= 700) {
                    percent = '48%';
                    marginLeft = mw - mw * 0.48 * 2;
                    if (zw < 1240) {
                        $(".stars").css('bottom', 40);
                        $(".price").css('left', 140);
                        $(".buy").css('left', 180);
                        $(".price").css('right', '');
                        $(".buy").css('right', '');
                    } else {
                        //样式归位
                        $(".stars").css('bottom', 5);
                        $(".price").css('left', '');
                        $(".buy").css('left', '');
                        $(".price").css('right', 50);
                        $(".buy").css('right', 10);
                    }
                } else if (mw < 700) {
                    percent = '96%';
                    marginLeft = mw - mw * 0.96;

                    if (zw < 593) {
                        $(".stars").css('bottom', 40);
                        $(".price").css('left', 140);
                        $(".buy").css('left', 180);
                        $(".price").css('right', '');
                        $(".buy").css('right', '');
                    } else {
                        //样式归位
                        $(".stars").css('bottom', 5);
                        $(".price").css('left', '');
                        $(".buy").css('left', '');
                        $(".price").css('right', 50);
                        $(".buy").css('right', 10);
                    }
                }

                $(".menu-item").css('width', percent);
                $(".item-wrap").css('margin-left', marginLeft);


            }

            //公告宽度
            function processGonggao() {
                var zw = $(window).width();
                var shopCartWidth = $('.shop-cart').width();
                var leftMenuWidth = $('.leftmenu').width();
                var gw = zw - shopCartWidth - leftMenuWidth - 40;
                var gw_wrap = gw + 50;
                $(".gonggao").width(gw);
                $(".gonggao").css('left', leftMenuWidth + 10);
                $(".gonggao-wrap").width(gw_wrap);
                $(".gonggao-wrap").css('left', leftMenuWidth);
            }


        });
    </script>
</body>

</html>