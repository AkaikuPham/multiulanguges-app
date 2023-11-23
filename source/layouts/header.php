<!--header部分-->
<div class="header shadow">
    <div class="search-result">
    </div>
    <div class="header-left fl">
        <div class="icon fl"></div>
        <a class="weixin-dingfan fw" href="#">微信订饭</a>
        <a class="logo" href="/"></a>
        <div class="search">
            <img class="search-icon" src="/images/icon_search.png" width="20" height="20">
            <input id="search-input" class="search-input" type="text" placeholder="请输入地点" onkeypress="onKeySearch()">
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
