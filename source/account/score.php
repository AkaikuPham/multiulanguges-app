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
                    <dd class="menu-item">
                        <span class="left-icon">
                            <img src="/images/icon_order.png" width="18px" height="18px">
                        </span>
                        <a href="order"><?php echo $langs['my_order']; ?></a>
                    </dd>
                    <dd class="menu-item">
                        <span class="left-icon">
                            <img src="/images/icon_address.png" width="18px" height="18px">
                        </span>
                        <a href="address"><?php echo $langs['delivery_address']; ?></a>
                    </dd>
                    <dd class="menu-item active">
                        <span class="left-icon">
                            <img src="/images/icon_score.png" width="18px" height="18px">
                        </span>
                        <a href="score"><?php echo $langs['my_scores']; ?></a>
                    </dd>
                    <dd class="menu-item">
                        <span class="left-icon">
                            <img src="/images/icon_balance.png" width="18px" height="18px">
                        </span>
                        <a href="balance"><?php echo $langs['my_balance']; ?></a>
                    </dd>
                    <dd class="menu-item ">
                        <span class="left-icon">
                            <img src="/images/icon_settings.png" width="18px" height="18px">
                        </span>
                        <a href="setting"><?php echo $langs['account_settings_02']; ?></a>
                    </dd>
                </dl>
            </div>
        </div>
        <!--右侧内容-->
        <div class="content-right fl">
            <div class="summary fl">
                <h3 class="summary-header"><?php echo $langs['my_scores']; ?></h3>
            </div>
            <div>
                <div class="account-balance fl">
                    <?php echo $langs['remaining_points']; ?><span><span id="score-value"></span></span>
                </div>
            </div>
        </div>
        <div class="clear"></div>
    </div>
    <?php require_once '../layouts/footer.php'; ?>
    <div id="alertModel" class="alertModel">
        <a id="alert" data-reveal-id="alertModel" data-animation="fade"></a>
        <span id="alert-msg"></span>
        <button id="btn-ok" class="btn"><?php echo $langs['knew']; ?></button>
        <a id="btn-close" class="close-reveal-modal"><img src="/images/icon_close.png" height="24" width="24"></a>
    </div>

    <script src="/scripts/common.js"></script>
    <script src="/scripts/md5.js"></script>
    <script src="/scripts/login.js"></script>
    <script src="/scripts/cart.lib.js"></script>
    <script src="/scripts/cart.js"></script>
    <script src="/scripts/header.js"></script>
    <script src="/scripts/account.js"></script>
    <script src="/scripts/myInfo.js"></script>
    <script src="/scripts/footer.js"></script>
    <script type="text/javascript">
        $(function() {

            //初始化积分
            var score = my_GetValue("jifen");
            if (score > 0) {
                $("#score-value").html(score);
            } else {
                $("#score-value").html("0");
            }
        });
    </script>
</body>

</html>