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
    <title>订饭组</title>
</head>

<body>
    <?php require_once '../layouts/header.php'; ?>
    <div class="content">
        <!--左侧导航-->
        <div class="content-left fl">
            <div class="menu-left">
                <dl>
                    <dt>个人中心</dt>
                    <dd class=""><a href="order">我的订单</a></dd>
                    <dd class=""><a href="address">送餐地址</a></dd>
                    <dd class=""><a href="score">我的积分</a></dd>
                    <dd class=""><a href="balance">我的余额</a></dd>
                    <dd class=""><a href="setting">账户设置</a></dd>
                </dl>
            </div>
        </div>
        <!--右侧内容-->
        <div class="content-right fl">
            <div class="summary fl">
                <h3 class="summary-header">代金券</h3>
                <div class="summary-info">
                    <a class="ft-blk" href="">添加代金券</a>
                    <span>|</span>
                    <a class="ft-blk" href="">未使用(0)</a>
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
                                限时代金券
                            </div>
                            <dl class="">
                                <dt>代金券号：</dt>
                                <dd>680015</dd>
                            </dl>
                            <dl class="">
                                <dt>适用商家：</dt>
                                <dd>齐鲁大厦</dd>
                            </dl>
                            <dl class="">
                                <dt>可用下单手机号：</dt>
                                <dd>13581651534</dd>
                            </dl>
                        </div>
                        <div class="status">
                            <div class="status-limit">
                                有效期: 1天
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
                                限时代金券
                            </div>
                            <dl class="">
                                <dt>代金券号：</dt>
                                <dd>680015</dd>
                            </dl>
                            <dl class="clearfix">
                                <dt>适用商家：</dt>
                                <dd>齐鲁大厦</dd>
                            </dl>
                            <dl class="clearfix">
                                <dt>可用下单手机号：</dt>
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
                                限时代金券
                            </div>
                            <dl class="">
                                <dt>代金券号：</dt>
                                <dd>680015</dd>
                            </dl>
                            <dl class="clearfix">
                                <dt>适用商家：</dt>
                                <dd>齐鲁大厦</dd>
                            </dl>
                            <dl class="clearfix">
                                <dt>可用下单手机号：</dt>
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
