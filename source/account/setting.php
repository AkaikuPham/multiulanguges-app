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
                    <dd class="menu-item">
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
                    <dd class="menu-item active">
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
                <h3 class="summary-header"><?php echo $langs['account_settings_02']; ?></h3>
            </div>
            <div class="accountform" id="form-settings">
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
                        <label><?php echo $langs['phonenumber']; ?></label><span id="pn"></span>
                        <div class="accountformfield-hint">
                            <span></span>
                        </div>
                    </div>
                    <div class="accountformfield passwordfield">
                        <label><?php echo $langs['password']; ?></label><span>******</span>
                        <button id="btn-update-pwd"><?php echo $langs['change_pass']; ?></button>
                        <div class="accountformfield-hint">
                            <span></span>
                        </div>
                    </div>
                    <div class="accountformfield emailfield">
                        <label><?php echo $langs['mail_box']; ?></label><input id="email" placeholder="<?php echo $langs['please_input_email']; ?>">
                        <div class="accountformfield-hint">
                            <span></span>
                        </div>
                    </div>
                </div>
                <div class="accountform-buttons">
                    <a id="save-settings" class="save-btn" href="#"><?php echo $langs['keep']; ?></a>
                </div>
            </div>

            <div class="accountform n" id="form-pwd">
                <div>
                    <div class="accountformfield">
                        <label><?php echo $langs['old_pass']; ?></label><input id="pwd" placeholder="">
                        <div class="accountformfield-hint form-error">
                            <span id="error-pwd"></span>
                        </div>
                    </div>
                    <div class="accountformfield">
                        <label><?php echo $langs['new_pass']; ?></label><input id="pwd2" placeholder="">
                        <div class="accountformfield-hint form-error">
                            <span id="error-pwd2"></span>
                        </div>
                    </div>
                    <div class="accountformfield">
                        <label><?php echo $langs['confirm_new_pass']; ?></label><input id="pwd3" placeholder="">
                        <div class="accountformfield-hint form-error">
                            <span id="error-pwd3"></span>
                        </div>
                    </div>
                </div>
                <div class="accountform-buttons">
                    <a id="save-new-pwd" class="save-btn" href="#"><?php echo $langs['revise']; ?></a>
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
    <script src="/scripts/footer.js"></script>
    <script type="text/javascript">
        $(function() {
            initSettings();

            //修改密码
            $("#btn-update-pwd").click(function(event) {
                $("#form-settings").hide();
                $("#form-pwd").show();
            });

            //保存设置
            $("#save-settings").click(function(event) {
                saveSettings();
            });

            //保存新密码
            $("#save-new-pwd").click(function(event) {
                saveNewPwd();
            });

        });

        function initSettings() {
            var userId = $.cookie("userId");
            var name = my_GetValue("name");
            var place = my_GetValue("place");
            var email = my_GetValue("email");

            if (place) {
                $("#myFanzu").html(place);
            }

            $("#pn").html(userId);
            if (name && name.length > 0) {
                $("#name").val(name);
            }
            if (email && email.length > 0) {
                $("#email").val(email);
            }
        }

        function saveSettings() {
            var username = $.cookie("userId");
            var name = $("#name").val().trim();
            var email = $("#email").val().trim();
            if (name.length <= 0) {
                $("#error-name").html("请输入姓名");
                return;
            }
            var postUrl = "/ajax/saveSettings.php";
            $.post(postUrl, {
                    username: username,
                    name: name,
                    email: email
                },
                function(data, status, xhr) {
                    if (status == "success") {
                        $res = $.parseJSON(data);
                        if ($res.code == "0") {
                            my_SaveValue("name", name);
                            my_SaveValue("email", email);
                            showAlert("保存成功");

                        } else if ($res.code == "1") {
                            showAlert("保存失败");
                        }
                    } else {
                        showAlert("服务器异常,请重试");
                    }
                });
        }


        //保存新密码
        function saveNewPwd() {
            var username = $.cookie("userId");
            var pwd = $("#pwd").val().trim();
            var pwd2 = $("#pwd2").val().trim();
            var pwd3 = $("#pwd3").val().trim();

            $("#error-pwd,#error-pwd2,#error-pwd3").html("");
            if (pwd.length < 6) {
                $("#error-pwd").html("密码长度必须大于6位");
                return;
            } else if (pwd2.length < 6) {
                $("#error-pwd2").html("密码长度必须大于6位");
                return;
            } else if (pwd2 != pwd3) {
                $("#error-pwd3").html("两次密码不一致");
                return;
            }

            var postUrl = "/ajax/saveNewPwd.php";
            $.post(postUrl, {
                    username: username,
                    pwd: pwd,
                    pwd2: pwd2
                },
                function(data, status, xhr) {
                    if (status == "success") {
                        var res = $.parseJSON(data);
                        if (res.code == "0") {
                            showAlert("修改成功");

                        } else if (res.code == "1") {
                            showAlert(res.msg);
                        }
                    } else {
                        showAlert("服务器异常,请重试");
                    }
                });
        }
    </script>
</body>

</html>