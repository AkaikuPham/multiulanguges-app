<!DOCTYPE html>
<html>

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta name="description" content="“订饭组（）”是北京地区知名的在线外卖订餐O2O平台，是写字楼白领专属订餐网站。已覆盖北京数百个写字楼，数十万用户，聚集了数千家餐饮商户。订外卖，找订饭组。" />
    <script src="scripts/jquery-1.8.3.js"></script>
    <script src="scripts/jquery.reveal.js"></script>
    <script src="scripts/jquery.cookie.js"></script>
    <script src="scripts/common.js"></script>
    <link rel="icon" href="images/favicon.ico" type="image/x-icon" />
    <!--[if lte IE 10]>
        <script src="scripts/requestAnimationFrame.js"></script>
        <![endif]-->

    <link rel=stylesheet href="style/reset.css">
    <link rel=stylesheet href="style/common.css">
    <link rel=stylesheet href="style/base.css">
    <link rel=stylesheet href="style/header.css">
    <link rel=stylesheet href="style/shopcart.css">
    <link rel=stylesheet href="style/footer_1.css">
    <link rel=stylesheet href="style/reveal.css">
    <link rel=stylesheet href="style/login.css">
    <link rel=stylesheet href="style/order_confirm.css">
    <title>订饭组-网上订餐_外卖_订餐官网</title>
</head>

<body>

    <?php require_once 'layouts/header.php'; ?>

    <div class="order-top-info">
        <span>首页&nbsp;&gt;&nbsp;<a class="info-place"
                onclick="JavaScript:history.go(-1);"></a>&nbsp;&gt;&nbsp;确认订单</span>
    </div>

    <div class="order-confirm-content">
        <div class="checkout-info">
            <div class="checkout-title">
                <h2>订单信息</h2>
                <a onclick="JavaScript:history.go(-1);">&lt; 返回购物车修改
                </a>
            </div>
            <div class="checkout-tablehead">
                <div class="cell itemname">商品</div>
                <div class="cell itemquantity">份数</div>
                <div class="cell itemtotal">小计（元）</div>
            </div>
            <ul class="checkout-body">

            </ul>
            <div class="checkout-bottom">
                <span>实付：<a style="color:#f74342;">￥</a><a class="checkout-bottom-price">...</a>
                </span>
            </div>
        </div>

        <div class="checkout-content">
            <div class="checkout-select">
                <h2>收货地址</h2>
                <a class="checkout-noaddress " data-reveal-id="addressModal" data-animation="fade">+ 添加地址</a>
                <div class="n checkout-address">
                    <span class="address-npa"></span>
                    <a class="address-modify" data-reveal-id="addressModal" data-animation="fade">修改</a>
                </div>
            </div>
            <div class="checkout-select">
                <h2>付款方式</h2>
                <ul class="checkout-ul">
                    <li class="checkout-pay first disabled">
                        <p class="weixin-pay">微信支付</p>
                    </li>
                    <li class="checkout-pay second disabled">
                        <p class="alipay-pay"></p>
                    </li>
                    <li class="checkout-pay disabled">
                        <p class="no-pay">餐到付款</p>
                    </li>
                </ul>
            </div>
            <div class="checkout-select">
                <h2>我的优惠</h2>
                <p class="checkout-jifen">
                    <span class="jifen-label">我的积分：</span>
                    <span class="jifen-value">积分抵现：￥</span>
                </p>
                <div class="checkout-daijinjuan">
                    <ul class="daijinjuan-ul">
                        <li class="daijinjuan-item">
                            <p>￥<span>3</span></p>
                        </li>
                    </ul>
                    <span class="daijinjuan-value">代金券：￥0</span>
                </div>
            </div>
            <div class="checkout-select">
                <h2>送达时间</h2>
                <select class="select-arrived-time">
                </select>
            </div>
            <div class="checkout-select">
                <h2>留言</h2>
                <input class="liuyan-txt" placeholder="少放辣椒。少放盐。">
            </div>
            <div class="checkout-select">
                <a class="commit-btn" target="_blank">确认下单</a>
            </div>
        </div>
        <div class="clear"></div>
    </div>

    <div class="footer-wrap">
        <?php require_once 'layouts/footer.php' ?>
    </div>



    <div id="addressModal" class="reveal-modal">
        <div id="addressform" class="addressform">
            <span class="address-title">送餐地址</span>
            <div class="addressformfield">
                <label class="address-name">姓名:</label>
                <input id="address-name" placeholder="请输入姓名" maxlength="12">
                <label id="error-name" class="error"></label>
            </div>
            <div class="addressformfield">
                <label class="address-pn">手机号:</label>
                <input id="address-pn" placeholder="请输入11位手机号" maxlength="11">
                <label id="error-pn" class="error"></label>
            </div>
            <div class="addressformfield">
                <label class="address-detail">地址:</label>
                <div class="detail-2">
                    <span id="place"></span>
                    <input id="address-detail" placeholder="详细地址(如A座12层)">
                </div>
                <label id="error-detail" class="error"></label>
            </div>
            <div class="addressform-buttons">
                <a class="save-btn" href="#">保存</a>
            </div>
        </div>
        <a class="close-reveal-modal"><img src="images/icon_close.png" height="24" width="24"></a>
    </div>

    <!--提示框-->
    <div id="alertModel" class="alertModel">
        <a id="alert" data-reveal-id="alertModel" data-animation="fade"></a>
        <span id="alert-msg"></span>
        <a id="btn-ok" class="btn">知道了</a>
        <a id="btn-close" class="close-reveal-modal"><img src="images/icon_close.png" height="24" width="24"></a>
    </div>


    <script src="scripts/md5.js"></script>
    <script src="scripts/login.js"></script>
    <script src="scripts/cart.lib.js"></script>
    <script src="scripts/myInfo.js"></script>
    <script src="scripts/shopInfo.js"></script>
    <script src="scripts/order.js?v=1"></script>
    <script src="scripts/login.js"></script>
    <script src="scripts/header.js"></script>
    <script src="scripts/footer.js"></script>
    <script type="text/javascript">
        $(function () {


            $(".footer-content").show();
        });
    </script>
</body>

</html>
