<!--header部分-->
<div class="header shadow">
    <div class="search-result">
    </div>
    <div class="header-left fl">
        <div class="icon fl"></div>
        <a class="weixin-dingfan fw" href="#"><?php echo $langs['wechat_meal_ordering'] ?></a>
        <a class="logo" href="/"></a>
        <div class="search">
            <img class="search-icon" src="/images/icon_search.png" width="20" height="20">
            <input id="search-input" class="search-input" type="text" placeholder="<?php echo $langs['please_enter_location'] ?>" onkeypress="onKeySearch()">
            <span id="search-del" class="search-del">&times;</span>
        </div>
        <div class="clear"></div>
    </div>
    <div class="header-right fr">
        <div class="login fl">

            <span class="header-operater">
                <a href="/index.php"><?php echo $langs['home_page']; ?></a>
                <a href="/account/order"><?php echo $langs['my_order']; ?></a>
                <a href="/about.php?p=lianxiwomen"><?php echo $langs['contact_us']; ?></a>
            </span>
            <a id="header-login" class="navBtn f-radius f-select n" data-reveal-id="myModal" data-animation="fade">
                <?php echo $langs['login']; ?>
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
        <li><a href="/account/setting" target=""><?php echo $langs['account_settings']; ?></a></li>
        <li><a href="/account/order" target=""><?php echo $langs['my_order']; ?></a></li>
        <li><a href="/account/balance" target=""><?php echo $langs['my_balance']; ?></a></li>
        <li><a href="/account/score" target=""><?php echo $langs['my_scores']; ?></a></li>
        <li><a href="/account/address" target=""><?php echo $langs['my_address']; ?></a></li>
        <li><a id="sub-logout" href="" target=""><?php echo $langs['logout']; ?></a></li>
    </ul>
</div>
<!--内容部分-->