<?php
include('check_lang.php');
?>

<!DOCTYPE html>
<html>

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta name="description" content=<?php echo $langs['meta_description'] ?> />
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
    <title><?php echo $langs['order_confirm_title']; ?></title>
</head>

<body>

    <?php require_once 'layouts/header.php'; ?>

    <div class="order-top-info">
        <span><?php echo $langs['home_page']; ?>&nbsp;&gt;&nbsp;<a class="info-place" onclick="JavaScript:history.go(-1);"></a>&nbsp;&gt;&nbsp;<?php echo $langs['confirm_order']; ?></span>
    </div>

    <div class="order-confirm-content">
        <div class="checkout-info">
            <div class="checkout-title">
                <h2><?php echo $langs['order_information']; ?></h2>
                <a onclick="JavaScript:history.go(-1);">&lt; <?php echo $langs['return_cart_modify']; ?>
                </a>
            </div>
            <div class="checkout-tablehead">
                <div class="cell itemname"><?php echo $langs['merchandise']; ?></div>
                <div class="cell itemquantity"><?php echo $langs['number_of_copies']; ?></div>
                <div class="cell itemtotal"><?php echo $langs['subtotal']; ?></div>
            </div>
            <ul class="checkout-body">

            </ul>
            <div class="checkout-bottom">
                <span><?php echo $langs['actually_paid']; ?><a style="color:#f74342;">￥</a><a class="checkout-bottom-price">...</a>
                </span>
            </div>
        </div>

        <div class="checkout-content">
            <div class="checkout-select">
                <h2><?php echo $langs['shipping_address']; ?></h2>
                <a class="checkout-noaddress " data-reveal-id="addressModal" data-animation="fade">+ <?php echo $langs['add_address']; ?></a>
                <div class="n checkout-address">
                    <span class="address-npa"></span>
                    <a class="address-modify" data-reveal-id="addressModal" data-animation="fade"><?php echo $langs['revise']; ?></a>
                </div>
            </div>
            <div class="checkout-select">
                <h2><?php echo $langs['payment_method']; ?></h2>
                <ul class="checkout-ul">
                    <li class="checkout-pay first disabled">
                        <p class="weixin-pay"><?php echo $langs['wechat_pay']; ?></p>
                    </li>
                    <li class="checkout-pay second disabled">
                        <p class="alipay-pay"></p>
                    </li>
                    <li class="checkout-pay disabled">
                        <p class="no-pay"><?php echo $langs['pay_on_delivery']; ?></p>
                    </li>
                </ul>
            </div>
            <div class="checkout-select">
                <h2><?php echo $langs['my_offers']; ?></h2>
                <p class="checkout-jifen">
                    <span class="jifen-label"><?php echo $langs['my_scores']; ?>：</span>
                    <span class="jifen-value"><?php echo $langs['point_cash']; ?></span>
                </p>
                <div class="checkout-daijinjuan">
                    <ul class="daijinjuan-ul">
                        <li class="daijinjuan-item">
                            <p>￥<span>3</span></p>
                        </li>
                    </ul>
                    <span class="daijinjuan-value"><?php echo $langs['price_ticket']; ?>￥0</span>
                </div>
            </div>
            <div class="checkout-select">
                <h2><?php echo $langs['delivery_time']; ?></h2>
                <select class="select-arrived-time">
                </select>
            </div>
            <div class="checkout-select">
                <h2><?php echo $langs['message']; ?></h2>
                <input class="liuyan-txt" placeholder="<?php echo $langs['placeholder_less_salt']; ?>">
            </div>
            <div class="checkout-select">
                <a class="commit-btn" target="_blank"><?php echo $langs['confirm_order_02']; ?></a>
            </div>
        </div>
        <div class="clear"></div>
    </div>

    <div class="footer-wrap">
        <?php require_once 'layouts/footer.php' ?>
    </div>



    <div id="addressModal" class="reveal-modal">
        <div id="addressform" class="addressform">
            <span class="address-title"><?php echo $langs['delivery_address']; ?></span>
            <div class="addressformfield">
                <label class="address-name"><?php echo $langs['name']; ?>:</label>
                <input id="address-name" placeholder="<?php echo $langs['placeholder_type_name']; ?>" maxlength="12">
                <label id="error-name" class="error"></label>
            </div>
            <div class="addressformfield">
                <label class="address-pn"><?php echo $langs['phonenumber']; ?>:</label>
                <input id="address-pn" placeholder="<?php echo $langs['placeholder_phone_number']; ?>" maxlength="11">
                <label id="error-pn" class="error"></label>
            </div>
            <div class="addressformfield">
                <label class="address-detail"><?php echo $langs['address']; ?>:</label>
                <div class="detail-2">
                    <span id="place"></span>
                    <input id="address-detail" placeholder="<?php echo $langs['placeholder_address']; ?>">
                </div>
                <label id="error-detail" class="error"></label>
            </div>
            <div class="addressform-buttons">
                <a class="save-btn" href="#"><?php echo $langs['keep']; ?></a>
            </div>
        </div>
        <a class="close-reveal-modal"><img src="images/icon_close.png" height="24" width="24"></a>
    </div>

    <!--提示框-->
    <div id="alertModel" class="alertModel">
        <a id="alert" data-reveal-id="alertModel" data-animation="fade"></a>
        <span id="alert-msg"></span>
        <a id="btn-ok" class="btn"><?php echo $langs['knew']; ?></a>
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
        $(function() {


            $(".footer-content").show();
        });
    </script>
</body>

</html>