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
    <link rel=stylesheet href="/style/form.css">
    <title>订饭组</title>
</head>

<body>
    <!--header部分-->
    <div class="header shadow">
        <div class="search-result">
        </div>
        <div class="header-left fl">
            <div class="icon fl"></div>
            <a class="weixin-dingfan fw" href="#">微信订饭</a>
            <a class="logo" href="/"></a>
            <div class="search">
                <img class="search-icon" src="/images/icon_search.png" width="22" height="22">
                <input id="search-input" class="search-input" type="text" placeholder="请输入地点"
                    onkeypress="onKeySearch()">
                <span id="search-del" class="search-del">&times;</span>
            </div>
            <div class="clear"></div>
        </div>
        <div class="header-right fr">
            <div class="login fl">

                <span class="header-operater">
                    <a href="/index.php">首页</a>
                    <a href="/account/order">我的订单</a>
                    <a href="/about.php?p=lianxiwomen">联系我们</a>
                </span>
                <a id="header-login" class="navBtn f-radius f-select n" data-reveal-id="myModal" data-animation="fade">
                    登录
                </a>
            </div>
            <div id="cart" class="cart fr">
                <img class="cart-icon" src="/images/icon_cart_22_22.png">
            </div>
            <div id="user" class="user fr n">
                <img class="user-icon" src="/images/icon_my.png">
            </div>
        </div>
        <ul id="subnav" class="subnav subnav-shadow n">
            <li><a href="/account/setting" target="">账号设置</a></li>
            <li><a href="/account/order" target="">我的订单</a></li>
            <li><a href="/account/balance" target="">我的余额</a></li>
            <li><a href="/account/score" target="">我的积分</a></li>
            <li><a href="/account/address" target="">我的地址</a></li>
            <li><a id="sub-logout" href="" target="">退出</a></li>
        </ul>
    </div>
    <!--主体-->
    <div class="content">
        <!--左侧导航-->
        <div class="content-left fl">
            <div class="menu-left">
                <dl>
                    <dt>个人中心</dt>
                    <dd class="menu-item">
                        <span class="left-icon">
                            <img src="/images/icon_order.png" width="18px" height="18px">
                        </span>
                        <a href="order">我的订单</a>
                    </dd>
                    <dd class="menu-item active">
                        <span class="left-icon">
                            <img src="/images/icon_address.png" width="18px" height="18px">
                        </span>
                        <a href="address">送餐地址</a>
                    </dd>
                    <dd class="menu-item">
                        <span class="left-icon">
                            <img src="/images/icon_score.png" width="18px" height="18px">
                        </span>
                        <a href="score">我的积分</a>
                    </dd>
                    <dd class="menu-item">
                        <span class="left-icon">
                            <img src="/images/icon_balance.png" width="18px" height="18px">
                        </span>
                        <a href="balance">我的余额</a>
                    </dd>
                    <dd class="menu-item ">
                        <span class="left-icon">
                            <img src="/images/icon_settings.png" width="18px" height="18px">
                        </span>
                        <a href="setting">账户设置</a>
                    </dd>
                </dl>
            </div>
        </div>
        <!--右侧内容-->
        <div class="content-right fl">
            <div class="summary fl">
                <h3 class="summary-header">送餐地址</h3>
            </div>
            <div class="accountform">
                <div>
                    <div class="accountformfield">
                        <label>我的饭组</label> <span id="myFanzu">&nbsp;</span>
                    </div>
                    <div class="accountformfield">
                        <label>姓名</label><input id="name" placeholder="请输入您的姓名">
                        <div class="accountformfield-hint form-error">
                            <span id="error-name"></span>
                        </div>
                    </div>
                    <div class="accountformfield phonefield">
                        <label>手机号</label><input id="pn" placeholder="请输入您的手机号">
                        <div class="accountformfield-hint form-error">
                            <span id="error-pn"></span>
                        </div>
                    </div>
                    <div class="accountformfield">
                        <label>地点</label>
                        <span><span id="place"></span>&nbsp;&nbsp;
                        </span>
                    </div>
                    <div class="accountformfield">
                        <label>详细地址</label>
                        <input id="address-detail" placeholder="详细地址">
                        <div class="accountformfield-hint form-error">
                            <span id="error-detail"></span>
                        </div>
                    </div>
                </div>
                <div class="accountform-buttons">
                    <a id="save-address" class="save-btn" href="#">保存</a>
                </div>
            </div>
        </div>
        <div class="clear"></div>
    </div>
    <div class="footer-content">
        <div class="footer-content-entrance">
            <a class="footer-content-link" href="/about.php?p=guanyuwomen">关于我们</a>
            <span class="footer-content-separator">|</span>
            <a class="footer-content-link footer-content-weixing">关注微信
                <img class="weixin-pic" src="/images/qr_code.jpg">
            </a>
            <span class="footer-content-separator">|</span>
            <a class="footer-content-link" href="/about.php?p=tousujianyi">投诉建议</a>
            <span class="footer-content-separator">|</span>
            <a class="footer-content-link kaidian_address" href="/about.php?p=shangjiaruzhu">商家入驻</a>

        </div>
        <div class="footer-content-copyright">©2023 <a target="_blank">京ICP证020666号</a> </div>
    </div>
    <!--提示框-->
    <div id="alertModel" class="alertModel">
        <a id="alert" data-reveal-id="alertModel" data-animation="fade"></a>
        <span id="alert-msg"></span>
        <button id="btn-ok" class="btn">知道了</button>
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
    <script src="/scripts/shopInfo.js"></script>
    <script src="/scripts/footer.js"></script>
    <script type="text/javascript">
        $(function () {

            //点击保存
            $("#save-address").click(function (event) {
                saveMyAddress();
            });


            //初始化
            var shopName = shop_GetValue("shopName");
            var place = my_GetValue("place");
            var addressDetail = my_GetValue("address-detail");

            //看是否换shop了。
            if (shopName != "" && shopName != place) {
                $("#myFanzu,#place").html(shopName);
                $("#name,#phone").val("");

            } else {
                var name = my_GetValue("name");
                var pn = my_GetValue("pn");
                var block = my_GetValue("block");
                var floor = my_GetValue("floor");

                if (place) {
                    $("#myFanzu,#place").html(place);
                }

                $("#name").val(name);
                $("#pn").val(pn);
                $("#address-detail").val(addressDetail);
            }

        });




        //保存地址
        function saveMyAddress() {
            var address = "";
            var name = $('#name').val().trim();
            var pn = $('#pn').val().trim();
            var place = $('#place').text();
            var addressDetail = $('#address-detail').val().trim();

            $('#error-name,#error-pn,#error-detail').text("");
            //验证合法性
            if (name == "") {
                $('#error-name').text("请输入姓名");
                return;
            }
            if (pn == "") {
                $('#error-pn').text("请输入手机号");
                return;
            }
            if (addressDetail == "") {
                $('#error-detail').text("请输入详细地址");
                return;
            }
            uploadMyAddress(pn, name, place, addressDetail);
        }

        function uploadMyAddress(pn, name, place, addressDetail) {
            $username = $.cookie('userId');
            if (!$username) {
                showAlert("用户未登录");
                return;
            }
            var postUrl = "/ajax/saveUserInfo.php";
            $.post(postUrl,
                {
                    username: $username,
                    pn: pn,
                    name: name,
                    place: place,
                    addressDetail: addressDetail
                },
                function (data, status, xhr) {
                    if (status == "success") {
                        $res = $.parseJSON(data);
                        if ($res.code == "0") {
                            my_SaveValue("pn", pn);
                            my_SaveValue("name", name);
                            my_SaveValue("place", place);
                            my_SaveValue("address-detail", addressDetail);
                            showAlert("保存成功");

                        } else if ($res.code == "1") {
                            showAlert("保存失败");
                        }
                    } else {
                        showAlert("服务器异常,请重试");
                    }
                });
        }

    </script>
</body>

</html>