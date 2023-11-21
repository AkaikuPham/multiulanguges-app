<!DOCTYPE html>
<html>

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta name="description" content="订饭组是北京地区知名的在线外卖订餐O2O平台，是写字楼白领专属订餐网站。已覆盖北京数百个写字楼，数十万用户，聚集了数千家餐饮商户。订外卖，找订饭组~" />
    <script src="scripts/jquery-1.8.3.js"></script>
    <script src="scripts/jquery.reveal.js"></script>
    <script src="scripts/jquery.cookie.js"></script>
    <script src="scripts/baidu_js_push.js"></script>
    <script src="scripts/common.js"></script>
    <link rel="icon" href="images/favicon.ico" type="image/x-icon" />
    <link rel=stylesheet href="style/reset.css">
    <link rel=stylesheet href="style/common.css">
    <link rel=stylesheet href="style/base.css">
    <link rel=stylesheet href="style/header.css">
    <link rel=stylesheet href="style/shopcart.css">
    <link rel=stylesheet href="style/footer_1.css">
    <link rel=stylesheet href="style/reveal.css">
    <link rel=stylesheet href="style/login.css">
    <link rel=stylesheet href="style/about.css">
    <title>关于-订饭组-写字楼外卖_订餐组_订餐官网</title>
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
                <input id="search-input" class="search-input" type="text" placeholder="请输入地点" onkeypress="onKeySearch()">
                <span id="search-del" class="search-del">&times;</span>
            </div>
            <div class="clear"></div>
        </div>
        <div class="header-right fr">
            <div class="login fl">

                <span class="header-operater">
                    <a href="/">首页</a>
                    <a href="/account/order">我的订单</a>
                    <a href="/about.php?p=lianxiwomen">联系我们</a>
                </span>
                <a id="header-login" class="navBtn f-radius f-select n" data-reveal-id="myModal" data-animation="fade">
                    登录
                </a>
            </div>
            <div id="cart" class="cart fr">
                <img class="cart-icon" src="images/icon_cart_22_22.png">
            </div>
            <div id="user" class="user fr n">
                <img class="user-icon" src="images/icon_my.png">
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
    <!--内容部分-->
    <div class="about-content">
        <div class="about-header">
            <div class="header-text-bg">
            </div>
        </div>
        <div class="about-nav">
            <div class="nav">
                <ul>
                    <li><a forward="guanyuwomen" class="static">关于我们</a></li>
                    <li><a forward="lianxiwomen" class="static">联系我们</a></li>
                    <li><a forward="tousujianyi" class="static">投诉建议</a></li>
                    <li><a forward="jiaruwomen" class="static">加入我们</a></li>
                    <li><a forward="shangjiaruzhu" class="static">商家入驻</a></li>
                </ul>
            </div>
        </div>

        <div class="about-body">
            <!--关于我们-->
            <div id="guanyuwomen" class="body-wrap n">
                <div class="body-header">
                    <span>订饭组</span>
                </div>
                <div class="body-content">
                    <span>
                        <p class="introduction">
                            “订饭组”是中国专业的餐饮O2O平台
                        </p>
                        <h3>发展历程</h3>
                        <div class="history">
                            2015年04月 “订饭组”网站正式上线<br>
                            2016年09月 推出餐厅运营一体化解决方案<br>
                            2016年10月 日均订单突破500单<br>
                            2017年02月 项目宣布失败（资金不足）<br>
                            2017年03月 项目开源<br>
                            2023年03月 项目更新
                            <br>
                            开发者：<a href="https://github.com/chanson1024/dingfanzu" style="color:#0000ff;">lengqin1024</a>
                        </div>
                    </span>
                </div>
            </div>
            <!--联系我们-->
            <div id="lianxiwomen" class="body-wrap n">
                <div class="body-header">
                    <span>联系我们</span>
                </div>
                <div class="body-content">
                    <span class="bft">
                        <p>客服微信：java2048</p>
                        <p>网站主页：https://github.com/chanson1024/dingfanzu</p>
                    </span>

                </div>
            </div>
            <!--投诉建议-->
            <div id="tousujianyi" class="body-wrap n">
                <div class="body-header">
                    <span>投诉建议</span>
                </div>
                <div class="body-content">
                    <span class="bft">任何问题和建议，可以告诉我们哦~</span>
                    <span>
                        <textarea id="tousu-txt" maxLength="150" /></textarea>
                    </span>
                    <span class="paddingTB-20">
                        <a id="tousu-commit" class="btn-commit">提交</a>
                    </span>
                </div>
            </div>
            <!--加入我们-->
            <div id="jiaruwomen" class="body-wrap n">
                <div class="body-header">
                    <span>加入我们</span>
                </div>
                <div class="body-content">
                    <span class="bft">暂无招聘计划</span>
                </div>
            </div>
            <!--商家入驻-->
            <div id="shangjiaruzhu" class="body-wrap n">
                <div class="body-header">
                    <span>商家入驻</span>
                </div>
                <div class="body-content">
                    <span class="bft">您好，订饭组正在需要寻找更多的外卖店，他需要味道好，服务好，干净卫生，价格合理，当然最好是中式快餐哦，如果您有合适的餐馆推荐，一定要告诉我们哦~我们会去沟通考察。</span>
                    <div class="shangjiaruzhu">
                        <span><label class="bft">餐馆名称： </label><input id="hotelName" maxlength="20"></span>
                        <span><label class="bft">联系电话： </label><input id="hotelPhone" maxlength="20"></span>
                        <span><label class="bft">餐馆位置： </label><input id="hotelLocation" maxlength="30"></span>
                        <span><label class="bft">简单介绍： </label><input id="hotelIntroduction" maxlength="100"></span>
                        <span><a id="hotel-commit" class="btn-commit">提交</a></span>
                    </div>
                </div>
            </div>
        </div>

        <div class="footer-wrap">
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
                <div class="footer-content-copyright">©2017 <a target="_blank">京ICP证020666号</a> </div>
            </div>
        </div>

    </div>



    <div class="shop-cart shadow n">
        <div class="shop-head">
            购物车<a class="shop-clear">[清空]</a>
        </div>
        <div class="shop-body">


            <div class="isnull">
                <span></span>
                <b>购物车空空如也</b>
            </div>
        </div>
        <div class="shop-bottom">
            <div class="bottom-price fl">总计：￥<label>32</label>
            </div>
            <div class="bottom-icon"></div>
            <div class="bottom-pay fr">
                <a id="cart-pay">结算</a>
            </div>
        </div>
    </div>
    </div>

    <div id="myModal" class="reveal-modal">
        <div id="loginform" class="loginform n">
            <div>
                <div class="loginformfield">
                    <span class="form-icon"><img src="images/logo-50-50.jpg"></span>
                </div>
                <div class="loginformfield">
                    <span class="form-title">
                        <h2>使用手机号登录订饭组</h2>
                    </span>
                </div>
                <div class="loginformfield">
                    <label class="field-name">手机号:</label>
                    <input id="phone-1" placeholder="请输入您的手机号">
                    <div class="loginformfield-hint form-error">
                        <span id="login-phone-error"></span>
                    </div>
                </div>
                <div class="loginformfield">
                    <label class="field-name">密码:</label>
                    <span class="fp"><a href="#" id="forget-password" class="forget-password">忘记密码？</a></span>
                    <input id="login-pwd" type="password" placeholder="密码">
                    <div class="loginformfield-hint form-error">
                        <span id="login-pwd-error"></span>
                    </div>
                </div>
            </div>
            <div class="loginform-buttons">
                <a id="checkin" class="save-btn" href="#">登录</a>
                <span>还没有账号？<a id="register">创建一个</a></span>
            </div>
        </div>
        <div id="registerform" class="registerform n">
            <div>
                <div class="loginformfield">
                    <span class="form-icon"><img src="images/logo-50-50.jpg"></span>
                </div>
                <div class="loginformfield">
                    <span class="form-title">
                        <h2>创建新账号</h2>
                    </span>
                </div>
                <div class="loginformfield">
                    <label class="field-name">手机号:</label>
                    <input id="phone-2" placeholder="请输入您的手机号">
                    <div class="loginformfield-hint form-error">
                        <span id="register-phone-error"></span>
                    </div>
                </div>
                <!--                <div class="loginformfield field-confirm-code">-->
                <!--                    <label class="field-name">验证码:</label>-->
                <!--                    <input   id="register-confirm-code" placeholder="请输入验证码">-->
                <!--                    <button id="register-code" class="phone-code-btn">获取验证码</button>-->
                <!--                    <input type="hidden" id="register-hid-code">-->
                <!--                    <div class="loginformfield-code-hint form-error">-->
                <!--                        <span id="register-code-error"></span>-->
                <!--                    </div>-->
                <!--                </div>-->
                <div class="loginformfield">
                    <label class="field-name">请输入密码:</label>
                    <input id="register-pwd" type="password" placeholder="请输入6位以上字母或数字密码">
                    <div class="loginformfield-hint form-error">
                        <span id="register-pwd-error"></span>
                    </div>
                </div>
            </div>
            <div class="loginform-buttons">
                <a id="create" class="save-btn" href="#">创建</a>
                <span>已经有账号？<a id="login">登录</a></span>
            </div>
        </div>
        <div id="chpwdform" class="chpwdform n">
            <div>
                <div class="loginformfield">
                    <span class="form-icon"><img src="images/logo-50-50.jpg"></span>
                </div>
                <div class="loginformfield">
                    <span class="form-title">
                        <h2>修改密码</h2>
                    </span>
                </div>
                <div class="loginformfield">
                    <label class="field-name">手机号:</label>
                    <input id="phone-3" placeholder="请输入您的手机号">
                    <div class="loginformfield-hint form-error">
                        <span id="chpwd-phone-error"></span>
                    </div>
                </div>
                <div class="loginformfield field-confirm-code">
                    <label class="field-name">验证码:</label>
                    <input id="chpwd-confirm-code" placeholder="请输入验证码">
                    <button id="chpwd-code" class="phone-code-btn">获取验证码</button>
                    <input type="hidden" id="chpwd-hid-code">
                    <div class="loginformfield-code-hint form-error">
                        <span id="chpwd-code-error"></span>
                    </div>
                </div>
                <div class="loginformfield">
                    <label class="field-name">新密码:</label>
                    <input id="chpwd-pwd" type="password" placeholder="请输入6位以上字母或数字密码">
                    <div class="loginformfield-hint form-error">
                        <span id="chpwd-pwd-error"></span>
                    </div>
                </div>
            </div>
            <div class="loginform-buttons">
                <a id="chpwd" class="save-btn" href="#">确定</a>
                <span>没有忘记密码？<a id="back-login">返回</a></span>
            </div>
        </div>


        <a class="close-reveal-modal"><img src="images/icon_close.png" height="24" width="24"></a>
    </div>

    <!--提示框-->
    <div id="alertModel" class="alertModel">
        <a id="alert" data-reveal-id="alertModel" data-animation="fade"></a>
        <span id="alert-msg"></span>
        <button id="btn-ok" class="btn">知道了</button>
        <a class="close-reveal-modal"><img src="images/icon_close.png" height="24" width="24"></a>
    </div>


    <script src="scripts/md5.js"></script>
    <script src="scripts/myInfo.js"></script>
    <script src="scripts/login.js"></script>
    <script src="scripts/cart.lib.js"></script>
    <script src="scripts/cart.js"></script>
    <script src="scripts/header.js"></script>
    <script src="scripts/footer.js"></script>
    <script src="scripts/about.js"></script>
    <script type="text/javascript">
        $(function() {

            //获取url跳转参数
            var name = getUrlParam('p');
            if (name) {
                $(".nav a[forward=" + name + "]").addClass('active');
                $('.body-wrap').hide();
                $("#" + name).fadeIn(300);
            }


            //导航切换
            $(".nav a").click(function() {
                var forward = $(this).attr('forward');
                location.href = "about.php?p=" + forward;
            });

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
                if ($(this).text() != "济南") {
                    alert("未开通");
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
            $(".footer-content").show();
        }


        //获取url跳转参数
        function getUrlParam(name) {
            var reg = new RegExp("(^|&)" + name + "=([^&]*)(&|$)");
            var r = window.location.search.substr(1).match(reg); //匹配目标参数
            if (r != null) return unescape(r[2]);
            return null; //返回参数值
        }
    </script>
</body>

</html>