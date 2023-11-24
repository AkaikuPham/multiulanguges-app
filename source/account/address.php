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
    <link rel=stylesheet href="/style/form.css">
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
                    <dd class="menu-item active">
                        <span class="left-icon">
                            <img src="/images/icon_address.png" width="18px" height="18px">
                        </span>
                        <a href="address"><?php echo $langs['delivery_address']; ?></a>
                    </dd>
                    <dd class="menu-item">
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
                <h3 class="summary-header"><?php echo $langs['delivery_address']; ?></h3>
            </div>
            <div class="accountform">
                <div>
                    <div class="accountformfield">
                        <label><?php echo $langs['my_rice_set']; ?></label> <span id="myFanzu">&nbsp;</span>
                    </div>
                    <div class="accountformfield">
                        <label><?php echo $langs['name']; ?></label><input id="name" placeholder="<?php echo $langs['enter_your_name']; ?>">
                        <div class="accountformfield-hint form-error">
                            <span id="error-name"></span>
                        </div>
                    </div>
                    <div class="accountformfield phonefield">
                        <label><?php echo $langs['phonenumber']; ?></label><input id="pn" placeholder="<?php echo $langs['placeholder_phonenumber']; ?>">
                        <div class="accountformfield-hint form-error">
                            <span id="error-pn"></span>
                        </div>
                    </div>
                    <div class="accountformfield">
                        <label><?php echo $langs['place']; ?></label>
                        <span><span id="place"></span>&nbsp;&nbsp;
                        </span>
                    </div>
                    <div class="accountformfield">
                        <label><?php echo $langs['address_02']; ?></label>
                        <input id="address-detail" placeholder="<?php echo $langs['address_02']; ?>">
                        <div class="accountformfield-hint form-error">
                            <span id="error-detail"></span>
                        </div>
                    </div>
                </div>
                <div class="accountform-buttons">
                    <a id="save-address" class="save-btn" href="#"><?php echo $langs['keep']; ?></a>
                </div>
            </div>
        </div>
        <div class="clear"></div>
    </div>
    <?php require_once '../layouts/footer.php'; ?>
    <!--提示框-->
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
    <script src="/scripts/shopInfo.js"></script>
    <script src="/scripts/footer.js"></script>
    <script type="text/javascript">
        $(function() {

            //点击保存
            $("#save-address").click(function(event) {
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
            $.post(postUrl, {
                    username: $username,
                    pn: pn,
                    name: name,
                    place: place,
                    addressDetail: addressDetail
                },
                function(data, status, xhr) {
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