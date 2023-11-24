<?php
    include('check_lang.php');
?>

<!DOCTYPE html>
<html>

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <script src="/scripts/jquery-1.8.3.js"></script>
    <script src="/scripts/jquery.reveal.js"></script>
    <script src="/scripts/jquery.cookie.js"></script>
    <link rel="icon" href="/images/favicon.ico" type="image/x-icon" />
    <!--[if lte IE 10]>
        <script src="/scripts/requestAnimationFrame.js"></script>
        <![endif]-->
    <link rel=stylesheet href="/style/reset.css">
    <link rel=stylesheet href="/style/common.css">
    <link rel=stylesheet href="/style/base.css">
    <link rel=stylesheet href="/style/account.css">
    <link rel=stylesheet href="/style/header.css">
    <link rel=stylesheet href="/style/reveal.css">
    <link rel=stylesheet href="/style/login.css">
    <link rel=stylesheet href="/style/menu02.css">
    <link rel=stylesheet href="/style/order.css">
    <link rel=stylesheet href="/style/footer_2.css">
    <link rel=stylesheet href="/style/cash.css">
    <title><?php echo $langs['meal_ordering_group']; ?></title>
</head>

<body>
    <?php require_once '../layouts/header.php'; ?>
    <div class="content">
        <!--左侧导航-->
        <div class="content-left fl">
            <div class="menu-left">
                <dl>
                    <dt><?php echo $langs['personal_center']; ?></dt>
                    <dd class=""><a href="order"><?php echo $langs['my_order']; ?></a></dd>
                    <dd class=""><a href="address"><?php echo $langs['delivery_address']; ?></a></dd>
                    <dd class=""><a href="score"><?php echo $langs['my_scores']; ?></a></dd>
                    <dd class=""><a href="balance"><?php echo $langs['my_balance']; ?></a></dd>
                    <dd class=""><a href="setting"><?php echo $langs['account_settings_02']; ?></a></dd>
                </dl>
            </div>
        </div>
        <!--右侧内容-->
        <div class="content-right fl">
            <div class="summary fl">
                <h3 class="summary-header"><?php echo $langs['payment_ticket']; ?></h3>
                <div class="summary-info">
                    <a class="ft-blk" href=""><?php echo $langs['add_voucher']; ?></a>
                    <span>|</span>
                    <a class="ft-blk" href=""><?php echo $langs['unused']; ?></a>
                </div>
            </div>
            <div class="cash">
                <ul>
                    <li>
                        <div class="fl account">
                            <div class="money">
                                ¥<span class="value">6</span>
                            </div>
                        </div>
                        <div class="fl details">
                            <div class="txt">
                                <?php echo $langs['limited_time_coupons']; ?>
                            </div>
                            <dl class="">
                                <dt><?php echo $langs['voucher_number']; ?></dt>
                                <dd>680015</dd>
                            </dl>
                            <dl class="">
                                <dt><?php echo $langs['applicable_merchants']; ?></dt>
                                <dd><?php echo $langs['qilu_building']; ?></dd>
                            </dl>
                            <dl class="">
                                <dt><?php echo $langs['available_mobile_pn']; ?></dt>
                                <dd>13581651534</dd>
                            </dl>
                        </div>
                        <div class="status">
                            <div class="status-limit">
                                <?php echo $langs['validity_period']; ?> 1天
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="fl account">
                            <div class="money">
                                ¥<span class="value">6</span>
                            </div>
                        </div>
                        <div class="fl details">
                            <div class="txt">
                                <?php echo $langs['limited_time_coupons']; ?>
                            </div>
                            <dl class="">
                                <dt><?php echo $langs['voucher_number']; ?></dt>
                                <dd>680015</dd>
                            </dl>
                            <dl class="clearfix">
                                <dt><?php echo $langs['applicable_merchants']; ?></dt>
                                <dd><?php echo $langs['qilu_building']; ?></dd>
                            </dl>
                            <dl class="clearfix">
                                <dt><?php echo $langs['available_mobile_pn']; ?></dt>
                                <dd>13581651534</dd>
                            </dl>
                        </div>
                        <div class="status">
                            <div class="status-outdate">
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="fl account">
                            <div class="money">
                                ¥<span class="value">3</span>
                            </div>
                        </div>
                        <div class="fl details">
                            <div class="txt">
                                <?php echo $langs['limited_time_coupons']; ?>
                            </div>
                            <dl class="">
                                <dt><?php echo $langs['voucher_number']; ?></dt>
                                <dd>680015</dd>
                            </dl>
                            <dl class="clearfix">
                                <dt><?php echo $langs['applicable_merchants']; ?></dt>
                                <dd><?php echo $langs['qilu_building']; ?></dd>
                            </dl>
                            <dl class="clearfix">
                                <dt><?php echo $langs['available_mobile_pn']; ?></dt>
                                <dd>13581651534</dd>
                            </dl>
                        </div>
                        <div class="status">
                            <div class="status-used">
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
        <div class="clear"></div>
    </div>
    <?php require_once '../layouts/footer.php'; ?>
    <script src="/scripts/md5.js"></script>
    <script src="/scripts/login.js"></script>
    <script src="/scripts/cart.lib.js"></script>
    <script src="/scripts/cart.js"></script>
    <script src="/scripts/header.js"></script>
    <script src="/scripts/account.js"></script>
    <script type="text/javascript">
        $(function() {});
    </script>
</body>

</html>