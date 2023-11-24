<?php
include('check_lang.php');
?>

<!DOCTYPE html>
<html>

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta name="description" content=<?php echo $langs['meta_description'] ?> />
    <script src="/scripts/jquery-1.8.3.js"></script>
    <script src="/scripts/jquery.reveal.js"></script>
    <script src="/scripts/jquery.cookie.js"></script>
    <script src="/scripts/jquery.fly.min.js"></script>
    <script src="/scripts/common.js"></script>
    <link rel="icon" href="images/favicon.ico" type="image/x-icon" />
    <!--[if lte IE 10]>
        <script src="scripts/requestAnimationFrame.js"></script>
        <![endif]-->

    <link rel=stylesheet href="/style/reset.css">
    <link rel=stylesheet href="/style/common.css">
    <link rel=stylesheet href="/style/base.css">
    <link rel=stylesheet href="/style/shop.css">
    <link rel=stylesheet href="/style/header.css">
    <link rel=stylesheet href="/style/shopcart.css">
    <link rel=stylesheet href="/style/leftmenu.css">
    <link rel=stylesheet href="/style/reveal.css">
    <link rel=stylesheet href="/style/login.css">
    <title><?php echo $langs['meal_ordering_group']; ?></title>
</head>

<body>

    <!--菜品展示-->
    <div class="content-middle n">
        <div id="m1" class="menu-wrap">
            <div class="menu-item" item-id="1466524398193">
                <div class="item-wrap">
                    <img src="images/test01.jpg" height="130" width="130">
                    <div class="item-detail">
                        <span class="name "><?php echo $langs['chicken_egg_beef']; ?></span>
                        <span class="price" item-price="15">￥15</span>
                        <img class="buy" src="images/icon_buy.png">

                        <ul class="stars" data-node="star">
                            <li data-value="1" class="active"></li>
                            <li data-value="2" class="active"></li>
                            <li data-value="3" class="active"></li>
                            <li data-value="4" class="active"></li>
                            <li data-value="5" class=""></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="menu-item" item-id="1466606555960">
                <div class="item-wrap">
                    <img src="images/test01.jpg" height="130" width="130">
                    <div class="item-detail">
                        <span class="name "><?php echo $langs['chicken']; ?></span>
                        <span class="price" item-price="15">￥15</span>
                        <img class="buy" src="images/icon_buy.png">

                        <ul class="stars" data-node="star">
                            <li data-value="1" class="active"></li>
                            <li data-value="2" class="active"></li>
                            <li data-value="3" class="active"></li>
                            <li data-value="4" class="active"></li>
                            <li data-value="5" class="active"></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="menu-item" item-id="1470673228126">
                <div class="item-wrap">
                    <img src="images/test01.jpg" height="130" width="130">
                    <div class="item-detail">
                        <span class="name "><?php echo $langs['chicken_egg_beef']; ?></span>
                        <span class="price" item-price="15">￥15</span>
                        <img class="buy" src="images/icon_buy.png">

                        <ul class="stars" data-node="star">
                            <li data-value="1" class="active"></li>
                            <li data-value="2" class="active"></li>
                            <li data-value="3" class="active"></li>
                            <li data-value="4" class="active"></li>
                            <li data-value="5" class=""></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="menu-item" item-id="104">
                <div class="item-wrap">
                    <img src="images/test01.jpg" height="130" width="130">
                    <div class="item-detail">
                        <span class="name "><?php echo $langs['chicken_egg_beef']; ?></span>
                        <span class="price" item-price="15">￥15</span>
                        <img class="buy" src="images/icon_buy.png">

                        <ul class="stars" data-node="star">
                            <li data-value="1" class="active"></li>
                            <li data-value="2" class="active"></li>
                            <li data-value="3" class="active"></li>
                            <li data-value="4" class=""></li>
                            <li data-value="5" class=""></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="menu-item" item-id="105">
                <div class="item-wrap">
                    <img src="images/test01.jpg" height="130" width="130">
                    <div class="item-detail">
                        <span class="name "><?php echo $langs['chicken_egg_beef']; ?></span>
                        <span class="price" item-price="15">￥15</span>
                        <img class="buy" src="images/icon_buy.png">

                        <ul class="stars" data-node="star">
                            <li data-value="1" class="active"></li>
                            <li data-value="2" class="active"></li>
                            <li data-value="3" class="active"></li>
                            <li data-value="4" class=""></li>
                            <li data-value="5" class=""></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="menu-item" item-id="106">
                <div class="item-wrap">
                    <img src="images/test01.jpg" height="130" width="130">
                    <div class="item-detail">
                        <span class="name "><?php echo $langs['chicken_egg_beef']; ?></span>
                        <span class="price" item-price="15">￥15</span>
                        <img class="buy" src="images/icon_buy.png">

                        <ul class="stars" data-node="star">
                            <li data-value="1" class="active"></li>
                            <li data-value="2" class="active"></li>
                            <li data-value="3" class="active"></li>
                            <li data-value="4" class="active"></li>
                            <li data-value="5" class=""></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="menu-item" item-id="107">
                <div class="item-wrap">
                    <img src="images/test01.jpg" height="130" width="130">
                    <div class="item-detail">
                        <span class="name "><?php echo $langs['chicken_egg_beef']; ?></span>
                        <span class="price" item-price="15">￥15</span>
                        <img class="buy" src="images/icon_buy.png">

                        <ul class="stars" data-node="star">
                            <li data-value="1" class="active"></li>
                            <li data-value="2" class="active"></li>
                            <li data-value="3" class="active"></li>
                            <li data-value="4" class=""></li>
                            <li data-value="5" class=""></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="menu-item" item-id="108">
                <div class="item-wrap">
                    <img src="images/test01.jpg" height="130" width="130">
                    <div class="item-detail">
                        <span class="name "><?php echo $langs['chicken_egg_beef']; ?></span>
                        <span class="price" item-price="15">￥15</span>
                        <img class="buy" src="images/icon_buy.png">

                        <ul class="stars" data-node="star">
                            <li data-value="1" class="active"></li>
                            <li data-value="2" class="active"></li>
                            <li data-value="3" class="active"></li>
                            <li data-value="4" class=""></li>
                            <li data-value="5" class=""></li>
                        </ul>
                    </div>
                </div>
            </div>


        </div>
        <div id="m2" class="menu-wrap n">
            <div class="menu-item" item-id="1466524398194">
                <div class="item-wrap">
                    <img src="images/test01.jpg" height="130" width="130">
                    <div class="item-detail">
                        <span class="name "><?php echo $langs['chicken_egg_beef']; ?></span>
                        <span class="price" item-price="15">￥15</span>
                        <img class="buy" src="images/icon_buy.png">

                        <ul class="stars" data-node="star">
                            <li data-value="1" class="active"></li>
                            <li data-value="2" class="active"></li>
                            <li data-value="3" class="active"></li>
                            <li data-value="4" class="active"></li>
                            <li data-value="5" class=""></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="menu-item" item-id="1466606555960">
                <div class="item-wrap">
                    <img src="images/test01.jpg" height="130" width="130">
                    <div class="item-detail">
                        <span class="name "><?php echo $langs['chicken']; ?></span>
                        <span class="price" item-price="15">￥15</span>
                        <img class="buy" src="images/icon_buy.png">

                        <ul class="stars" data-node="star">
                            <li data-value="1" class="active"></li>
                            <li data-value="2" class="active"></li>
                            <li data-value="3" class="active"></li>
                            <li data-value="4" class="active"></li>
                            <li data-value="5" class="active"></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="menu-item" item-id="1470673228126">
                <div class="item-wrap">
                    <img src="images/test01.jpg" height="130" width="130">
                    <div class="item-detail">
                        <span class="name "><?php echo $langs['chicken_egg_beef']; ?></span>
                        <span class="price" item-price="15">￥15</span>
                        <img class="buy" src="images/icon_buy.png">

                        <ul class="stars" data-node="star">
                            <li data-value="1" class="active"></li>
                            <li data-value="2" class="active"></li>
                            <li data-value="3" class="active"></li>
                            <li data-value="4" class="active"></li>
                            <li data-value="5" class=""></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="menu-item" item-id="104">
                <div class="item-wrap">
                    <img src="images/test01.jpg" height="130" width="130">
                    <div class="item-detail">
                        <span class="name "><?php echo $langs['chicken_egg_beef']; ?></span>
                        <span class="price" item-price="15">￥15</span>
                        <img class="buy" src="images/icon_buy.png">

                        <ul class="stars" data-node="star">
                            <li data-value="1" class="active"></li>
                            <li data-value="2" class="active"></li>
                            <li data-value="3" class="active"></li>
                            <li data-value="4" class=""></li>
                            <li data-value="5" class=""></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="menu-item" item-id="105">
                <div class="item-wrap">
                    <img src="images/test01.jpg" height="130" width="130">
                    <div class="item-detail">
                        <span class="name "><?php echo $langs['chicken_egg_beef']; ?></span>
                        <span class="price" item-price="15">￥15</span>
                        <img class="buy" src="images/icon_buy.png">

                        <ul class="stars" data-node="star">
                            <li data-value="1" class="active"></li>
                            <li data-value="2" class="active"></li>
                            <li data-value="3" class="active"></li>
                            <li data-value="4" class=""></li>
                            <li data-value="5" class=""></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="menu-item" item-id="106">
                <div class="item-wrap">
                    <img src="images/test01.jpg" height="130" width="130">
                    <div class="item-detail">
                        <span class="name "><?php echo $langs['chicken_egg_beef']; ?></span>
                        <span class="price" item-price="15">￥15</span>
                        <img class="buy" src="images/icon_buy.png">

                        <ul class="stars" data-node="star">
                            <li data-value="1" class="active"></li>
                            <li data-value="2" class="active"></li>
                            <li data-value="3" class="active"></li>
                            <li data-value="4" class="active"></li>
                            <li data-value="5" class=""></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="menu-item" item-id="107">
                <div class="item-wrap">
                    <img src="images/test01.jpg" height="130" width="130">
                    <div class="item-detail">
                        <span class="name "><?php echo $langs['chicken_egg_beef']; ?></span>
                        <span class="price" item-price="15">￥15</span>
                        <img class="buy" src="images/icon_buy.png">

                        <ul class="stars" data-node="star">
                            <li data-value="1" class="active"></li>
                            <li data-value="2" class="active"></li>
                            <li data-value="3" class="active"></li>
                            <li data-value="4" class=""></li>
                            <li data-value="5" class=""></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="menu-item" item-id="108">
                <div class="item-wrap">
                    <img src="images/test01.jpg" height="130" width="130">
                    <div class="item-detail">
                        <span class="name "><?php echo $langs['chicken_egg_beef']; ?></span>
                        <span class="price" item-price="15">￥15</span>
                        <img class="buy" src="images/icon_buy.png">

                        <ul class="stars" data-node="star">
                            <li data-value="1" class="active"></li>
                            <li data-value="2" class="active"></li>
                            <li data-value="3" class="active"></li>
                            <li data-value="4" class=""></li>
                            <li data-value="5" class=""></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div id="m3" class="menu-wrap n">
            <div class="menu-item" item-id="1466524398195">
                <div class="item-wrap">
                    <img src="images/test01.jpg" height="130" width="130">
                    <div class="item-detail">
                        <span class="name "><?php echo $langs['chicken_egg_beef']; ?></span>
                        <span class="price" item-price="15">￥15</span>
                        <img class="buy" src="images/icon_buy.png">

                        <ul class="stars" data-node="star">
                            <li data-value="1" class="active"></li>
                            <li data-value="2" class="active"></li>
                            <li data-value="3" class="active"></li>
                            <li data-value="4" class="active"></li>
                            <li data-value="5" class=""></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="menu-item" item-id="1466606555960">
                <div class="item-wrap">
                    <img src="images/test01.jpg" height="130" width="130">
                    <div class="item-detail">
                        <span class="name "><?php echo $langs['chicken']; ?></span>
                        <span class="price" item-price="15">￥15</span>
                        <img class="buy" src="images/icon_buy.png">

                        <ul class="stars" data-node="star">
                            <li data-value="1" class="active"></li>
                            <li data-value="2" class="active"></li>
                            <li data-value="3" class="active"></li>
                            <li data-value="4" class="active"></li>
                            <li data-value="5" class="active"></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="menu-item" item-id="1470673228126">
                <div class="item-wrap">
                    <img src="images/test01.jpg" height="130" width="130">
                    <div class="item-detail">
                        <span class="name "><?php echo $langs['chicken_egg_beef']; ?></span>
                        <span class="price" item-price="15">￥15</span>
                        <img class="buy" src="images/icon_buy.png">

                        <ul class="stars" data-node="star">
                            <li data-value="1" class="active"></li>
                            <li data-value="2" class="active"></li>
                            <li data-value="3" class="active"></li>
                            <li data-value="4" class="active"></li>
                            <li data-value="5" class=""></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="menu-item" item-id="104">
                <div class="item-wrap">
                    <img src="images/test01.jpg" height="130" width="130">
                    <div class="item-detail">
                        <span class="name "><?php echo $langs['chicken_egg_beef']; ?></span>
                        <span class="price" item-price="15">￥15</span>
                        <img class="buy" src="images/icon_buy.png">

                        <ul class="stars" data-node="star">
                            <li data-value="1" class="active"></li>
                            <li data-value="2" class="active"></li>
                            <li data-value="3" class="active"></li>
                            <li data-value="4" class=""></li>
                            <li data-value="5" class=""></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="menu-item" item-id="105">
                <div class="item-wrap">
                    <img src="images/test01.jpg" height="130" width="130">
                    <div class="item-detail">
                        <span class="name "><?php echo $langs['chicken_egg_beef']; ?></span>
                        <span class="price" item-price="15">￥15</span>
                        <img class="buy" src="images/icon_buy.png">

                        <ul class="stars" data-node="star">
                            <li data-value="1" class="active"></li>
                            <li data-value="2" class="active"></li>
                            <li data-value="3" class="active"></li>
                            <li data-value="4" class=""></li>
                            <li data-value="5" class=""></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="menu-item" item-id="106">
                <div class="item-wrap">
                    <img src="images/test01.jpg" height="130" width="130">
                    <div class="item-detail">
                        <span class="name "><?php echo $langs['chicken_egg_beef']; ?></span>
                        <span class="price" item-price="15">￥15</span>
                        <img class="buy" src="images/icon_buy.png">

                        <ul class="stars" data-node="star">
                            <li data-value="1" class="active"></li>
                            <li data-value="2" class="active"></li>
                            <li data-value="3" class="active"></li>
                            <li data-value="4" class="active"></li>
                            <li data-value="5" class=""></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="menu-item" item-id="107">
                <div class="item-wrap">
                    <img src="images/test01.jpg" height="130" width="130">
                    <div class="item-detail">
                        <span class="name "><?php echo $langs['chicken_egg_beef']; ?></span>
                        <span class="price" item-price="15">￥15</span>
                        <img class="buy" src="images/icon_buy.png">

                        <ul class="stars" data-node="star">
                            <li data-value="1" class="active"></li>
                            <li data-value="2" class="active"></li>
                            <li data-value="3" class="active"></li>
                            <li data-value="4" class=""></li>
                            <li data-value="5" class=""></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="menu-item" item-id="108">
                <div class="item-wrap">
                    <img src="images/test01.jpg" height="130" width="130">
                    <div class="item-detail">
                        <span class="name "><?php echo $langs['chicken_egg_beef']; ?></span>
                        <span class="price" item-price="15">￥15</span>
                        <img class="buy" src="images/icon_buy.png">

                        <ul class="stars" data-node="star">
                            <li data-value="1" class="active"></li>
                            <li data-value="2" class="active"></li>
                            <li data-value="3" class="active"></li>
                            <li data-value="4" class=""></li>
                            <li data-value="5" class=""></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div id="m4" class="menu-wrap n">
            <div class="menu-item" item-id="1466524398196">
                <div class="item-wrap">
                    <img src="images/test01.jpg" height="130" width="130">
                    <div class="item-detail">
                        <span class="name "><?php echo $langs['chicken_egg_beef']; ?></span>
                        <span class="price" item-price="15">￥15</span>
                        <img class="buy" src="images/icon_buy.png">

                        <ul class="stars" data-node="star">
                            <li data-value="1" class="active"></li>
                            <li data-value="2" class="active"></li>
                            <li data-value="3" class="active"></li>
                            <li data-value="4" class="active"></li>
                            <li data-value="5" class=""></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="menu-item" item-id="1466606555960">
                <div class="item-wrap">
                    <img src="images/test01.jpg" height="130" width="130">
                    <div class="item-detail">
                        <span class="name "><?php echo $langs['chicken']; ?></span>
                        <span class="price" item-price="15">￥15</span>
                        <img class="buy" src="images/icon_buy.png">

                        <ul class="stars" data-node="star">
                            <li data-value="1" class="active"></li>
                            <li data-value="2" class="active"></li>
                            <li data-value="3" class="active"></li>
                            <li data-value="4" class="active"></li>
                            <li data-value="5" class="active"></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="menu-item" item-id="1470673228126">
                <div class="item-wrap">
                    <img src="images/test01.jpg" height="130" width="130">
                    <div class="item-detail">
                        <span class="name "><?php echo $langs['chicken_egg_beef']; ?></span>
                        <span class="price" item-price="15">￥15</span>
                        <img class="buy" src="images/icon_buy.png">

                        <ul class="stars" data-node="star">
                            <li data-value="1" class="active"></li>
                            <li data-value="2" class="active"></li>
                            <li data-value="3" class="active"></li>
                            <li data-value="4" class="active"></li>
                            <li data-value="5" class=""></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="menu-item" item-id="104">
                <div class="item-wrap">
                    <img src="images/test01.jpg" height="130" width="130">
                    <div class="item-detail">
                        <span class="name "><?php echo $langs['chicken_egg_beef']; ?></span>
                        <span class="price" item-price="15">￥15</span>
                        <img class="buy" src="images/icon_buy.png">

                        <ul class="stars" data-node="star">
                            <li data-value="1" class="active"></li>
                            <li data-value="2" class="active"></li>
                            <li data-value="3" class="active"></li>
                            <li data-value="4" class=""></li>
                            <li data-value="5" class=""></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="menu-item" item-id="105">
                <div class="item-wrap">
                    <img src="images/test01.jpg" height="130" width="130">
                    <div class="item-detail">
                        <span class="name "><?php echo $langs['chicken_egg_beef']; ?></span>
                        <span class="price" item-price="15">￥15</span>
                        <img class="buy" src="images/icon_buy.png">

                        <ul class="stars" data-node="star">
                            <li data-value="1" class="active"></li>
                            <li data-value="2" class="active"></li>
                            <li data-value="3" class="active"></li>
                            <li data-value="4" class=""></li>
                            <li data-value="5" class=""></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="menu-item" item-id="106">
                <div class="item-wrap">
                    <img src="images/test01.jpg" height="130" width="130">
                    <div class="item-detail">
                        <span class="name "><?php echo $langs['chicken_egg_beef']; ?></span>
                        <span class="price" item-price="15">￥15</span>
                        <img class="buy" src="images/icon_buy.png">

                        <ul class="stars" data-node="star">
                            <li data-value="1" class="active"></li>
                            <li data-value="2" class="active"></li>
                            <li data-value="3" class="active"></li>
                            <li data-value="4" class="active"></li>
                            <li data-value="5" class=""></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="menu-item" item-id="107">
                <div class="item-wrap">
                    <img src="images/test01.jpg" height="130" width="130">
                    <div class="item-detail">
                        <span class="name "><?php echo $langs['chicken_egg_beef']; ?></span>
                        <span class="price" item-price="15">￥15</span>
                        <img class="buy" src="images/icon_buy.png">

                        <ul class="stars" data-node="star">
                            <li data-value="1" class="active"></li>
                            <li data-value="2" class="active"></li>
                            <li data-value="3" class="active"></li>
                            <li data-value="4" class=""></li>
                            <li data-value="5" class=""></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="menu-item" item-id="108">
                <div class="item-wrap">
                    <img src="images/test01.jpg" height="130" width="130">
                    <div class="item-detail">
                        <span class="name "><?php echo $langs['chicken_egg_beef']; ?></span>
                        <span class="price" item-price="15">￥15</span>
                        <img class="buy" src="images/icon_buy.png">

                        <ul class="stars" data-node="star">
                            <li data-value="1" class="active"></li>
                            <li data-value="2" class="active"></li>
                            <li data-value="3" class="active"></li>
                            <li data-value="4" class=""></li>
                            <li data-value="5" class=""></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div id="m5" class="menu-wrap n">
            <div class="menu-item" item-id="1466524398197">
                <div class="item-wrap">
                    <img src="images/test01.jpg" height="130" width="130">
                    <div class="item-detail">
                        <span class="name "><?php echo $langs['chicken_egg_beef']; ?></span>
                        <span class="price" item-price="15">￥15</span>
                        <img class="buy" src="images/icon_buy.png">

                        <ul class="stars" data-node="star">
                            <li data-value="1" class="active"></li>
                            <li data-value="2" class="active"></li>
                            <li data-value="3" class="active"></li>
                            <li data-value="4" class="active"></li>
                            <li data-value="5" class=""></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="menu-item" item-id="1466606555960">
                <div class="item-wrap">
                    <img src="images/test01.jpg" height="130" width="130">
                    <div class="item-detail">
                        <span class="name "><?php echo $langs['chicken']; ?></span>
                        <span class="price" item-price="15">￥15</span>
                        <img class="buy" src="images/icon_buy.png">

                        <ul class="stars" data-node="star">
                            <li data-value="1" class="active"></li>
                            <li data-value="2" class="active"></li>
                            <li data-value="3" class="active"></li>
                            <li data-value="4" class="active"></li>
                            <li data-value="5" class="active"></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="menu-item" item-id="1470673228126">
                <div class="item-wrap">
                    <img src="images/test01.jpg" height="130" width="130">
                    <div class="item-detail">
                        <span class="name "><?php echo $langs['chicken_egg_beef']; ?></span>
                        <span class="price" item-price="15">￥15</span>
                        <img class="buy" src="images/icon_buy.png">

                        <ul class="stars" data-node="star">
                            <li data-value="1" class="active"></li>
                            <li data-value="2" class="active"></li>
                            <li data-value="3" class="active"></li>
                            <li data-value="4" class="active"></li>
                            <li data-value="5" class=""></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="menu-item" item-id="104">
                <div class="item-wrap">
                    <img src="images/test01.jpg" height="130" width="130">
                    <div class="item-detail">
                        <span class="name "><?php echo $langs['chicken_egg_beef']; ?></span>
                        <span class="price" item-price="15">￥15</span>
                        <img class="buy" src="images/icon_buy.png">

                        <ul class="stars" data-node="star">
                            <li data-value="1" class="active"></li>
                            <li data-value="2" class="active"></li>
                            <li data-value="3" class="active"></li>
                            <li data-value="4" class=""></li>
                            <li data-value="5" class=""></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="menu-item" item-id="105">
                <div class="item-wrap">
                    <img src="images/test01.jpg" height="130" width="130">
                    <div class="item-detail">
                        <span class="name "><?php echo $langs['chicken_egg_beef']; ?></span>
                        <span class="price" item-price="15">￥15</span>
                        <img class="buy" src="images/icon_buy.png">

                        <ul class="stars" data-node="star">
                            <li data-value="1" class="active"></li>
                            <li data-value="2" class="active"></li>
                            <li data-value="3" class="active"></li>
                            <li data-value="4" class=""></li>
                            <li data-value="5" class=""></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="menu-item" item-id="106">
                <div class="item-wrap">
                    <img src="images/test01.jpg" height="130" width="130">
                    <div class="item-detail">
                        <span class="name "><?php echo $langs['chicken_egg_beef']; ?></span>
                        <span class="price" item-price="15">￥15</span>
                        <img class="buy" src="images/icon_buy.png">

                        <ul class="stars" data-node="star">
                            <li data-value="1" class="active"></li>
                            <li data-value="2" class="active"></li>
                            <li data-value="3" class="active"></li>
                            <li data-value="4" class="active"></li>
                            <li data-value="5" class=""></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="menu-item" item-id="107">
                <div class="item-wrap">
                    <img src="images/test01.jpg" height="130" width="130">
                    <div class="item-detail">
                        <span class="name "><?php echo $langs['chicken_egg_beef']; ?></span>
                        <span class="price" item-price="15">￥15</span>
                        <img class="buy" src="images/icon_buy.png">

                        <ul class="stars" data-node="star">
                            <li data-value="1" class="active"></li>
                            <li data-value="2" class="active"></li>
                            <li data-value="3" class="active"></li>
                            <li data-value="4" class=""></li>
                            <li data-value="5" class=""></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="menu-item" item-id="108">
                <div class="item-wrap">
                    <img src="images/test01.jpg" height="130" width="130">
                    <div class="item-detail">
                        <span class="name "><?php echo $langs['chicken_egg_beef']; ?></span>
                        <span class="price" item-price="15">￥15</span>
                        <img class="buy" src="images/icon_buy.png">

                        <ul class="stars" data-node="star">
                            <li data-value="1" class="active"></li>
                            <li data-value="2" class="active"></li>
                            <li data-value="3" class="active"></li>
                            <li data-value="4" class=""></li>
                            <li data-value="5" class=""></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div id="m6" class="menu-wrap n">
            <div class="menu-item" item-id="1466524398198">
                <div class="item-wrap">
                    <img src="images/test01.jpg" height="130" width="130">
                    <div class="item-detail">
                        <span class="name "><?php echo $langs['chicken_egg_beef']; ?></span>
                        <span class="price" item-price="15">￥15</span>
                        <img class="buy" src="images/icon_buy.png">

                        <ul class="stars" data-node="star">
                            <li data-value="1" class="active"></li>
                            <li data-value="2" class="active"></li>
                            <li data-value="3" class="active"></li>
                            <li data-value="4" class="active"></li>
                            <li data-value="5" class=""></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="menu-item" item-id="1466606555960">
                <div class="item-wrap">
                    <img src="images/test01.jpg" height="130" width="130">
                    <div class="item-detail">
                        <span class="name "><?php echo $langs['chicken']; ?></span>
                        <span class="price" item-price="15">￥15</span>
                        <img class="buy" src="images/icon_buy.png">

                        <ul class="stars" data-node="star">
                            <li data-value="1" class="active"></li>
                            <li data-value="2" class="active"></li>
                            <li data-value="3" class="active"></li>
                            <li data-value="4" class="active"></li>
                            <li data-value="5" class="active"></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="menu-item" item-id="1470673228126">
                <div class="item-wrap">
                    <img src="images/test01.jpg" height="130" width="130">
                    <div class="item-detail">
                        <span class="name "><?php echo $langs['chicken_egg_beef']; ?></span>
                        <span class="price" item-price="15">￥15</span>
                        <img class="buy" src="images/icon_buy.png">

                        <ul class="stars" data-node="star">
                            <li data-value="1" class="active"></li>
                            <li data-value="2" class="active"></li>
                            <li data-value="3" class="active"></li>
                            <li data-value="4" class="active"></li>
                            <li data-value="5" class=""></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="menu-item" item-id="104">
                <div class="item-wrap">
                    <img src="images/test01.jpg" height="130" width="130">
                    <div class="item-detail">
                        <span class="name "><?php echo $langs['chicken_egg_beef']; ?></span>
                        <span class="price" item-price="15">￥15</span>
                        <img class="buy" src="images/icon_buy.png">

                        <ul class="stars" data-node="star">
                            <li data-value="1" class="active"></li>
                            <li data-value="2" class="active"></li>
                            <li data-value="3" class="active"></li>
                            <li data-value="4" class=""></li>
                            <li data-value="5" class=""></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="menu-item" item-id="105">
                <div class="item-wrap">
                    <img src="images/test01.jpg" height="130" width="130">
                    <div class="item-detail">
                        <span class="name "><?php echo $langs['chicken_egg_beef']; ?></span>
                        <span class="price" item-price="15">￥15</span>
                        <img class="buy" src="images/icon_buy.png">

                        <ul class="stars" data-node="star">
                            <li data-value="1" class="active"></li>
                            <li data-value="2" class="active"></li>
                            <li data-value="3" class="active"></li>
                            <li data-value="4" class=""></li>
                            <li data-value="5" class=""></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="menu-item" item-id="106">
                <div class="item-wrap">
                    <img src="images/test01.jpg" height="130" width="130">
                    <div class="item-detail">
                        <span class="name "><?php echo $langs['chicken_egg_beef']; ?></span>
                        <span class="price" item-price="15">￥15</span>
                        <img class="buy" src="images/icon_buy.png">

                        <ul class="stars" data-node="star">
                            <li data-value="1" class="active"></li>
                            <li data-value="2" class="active"></li>
                            <li data-value="3" class="active"></li>
                            <li data-value="4" class="active"></li>
                            <li data-value="5" class=""></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="menu-item" item-id="107">
                <div class="item-wrap">
                    <img src="images/test01.jpg" height="130" width="130">
                    <div class="item-detail">
                        <span class="name "><?php echo $langs['chicken_egg_beef']; ?></span>
                        <span class="price" item-price="15">￥15</span>
                        <img class="buy" src="images/icon_buy.png">

                        <ul class="stars" data-node="star">
                            <li data-value="1" class="active"></li>
                            <li data-value="2" class="active"></li>
                            <li data-value="3" class="active"></li>
                            <li data-value="4" class=""></li>
                            <li data-value="5" class=""></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="menu-item" item-id="108">
                <div class="item-wrap">
                    <img src="images/test01.jpg" height="130" width="130">
                    <div class="item-detail">
                        <span class="name "><?php echo $langs['chicken_egg_beef']; ?></span>
                        <span class="price" item-price="15">￥15</span>
                        <img class="buy" src="images/icon_buy.png">

                        <ul class="stars" data-node="star">
                            <li data-value="1" class="active"></li>
                            <li data-value="2" class="active"></li>
                            <li data-value="3" class="active"></li>
                            <li data-value="4" class=""></li>
                            <li data-value="5" class=""></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--header部分-->
    <div class="header shadow">
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
                    <a href="/index.html">首页</a>
                    <a href="/account/order.php">我的订单</a>
                    <a>联系我们</a>
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
        </div>
        <!--内容部分-->
    <div class="shop-content">

        <div class="gonggao-wrap">
            <div class="gonggao">
                <b><?php echo $langs['announcement']; ?></b>
            </div>
        </div>


        <div class="leftmenu">
            <dl>
                <dt>
                    <img class="shop-icon" src="images/test02.jpg">
                    <span class="shop-name" shopId="0001">
                        <?php echo $langs['beijing_international_building']; ?>
                    </span>
                    <span class="switch-address">
                        <a class="switch-address" href="index.php"><?php echo $langs['switch_address']; ?></a>
                    </span>
                </dt>
                <dd id="i1" class="active leftmenu-item"><a href="#"><?php echo $langs['popular_dishes']; ?></a></dd>
                <dd id="i2" class="leftmenu-item"><a href="#"><?php echo $langs['three_quality_products']; ?></a></dd>
                <dd id="i3" class="leftmenu-item"><a href="#"><?php echo $langs['premium_double_combination']; ?></a></dd>
                <dd id="i4" class="leftmenu-item"><a href="#"><?php echo $langs['rice_bowl']; ?></a></dd>
                <dd id="i5" class="leftmenu-item"><a href="#"><?php echo $langs['staple_food']; ?></a></dd>
                <dd id="i6" class="leftmenu-item"><a href="#"><?php echo $langs['drinks']; ?></a></dd>
            </dl>
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
        <ul id="subnav" class="subnav subnav-shadow n">
            <li><a href="account/setting.php" target=""><?php echo $langs['account_settings']; ?></a></li>
            <li><a href="account/order.php" target=""><?php echo $langs['my_order']; ?></a></li>
            <li><a href="account/balance.php" target=""><?php echo $langs['my_balance']; ?></a></li>
            <li><a href="account/cash.php" target=""><?php echo $langs['payment_ticket']; ?></a></li>
            <li><a href="account/balance.php" target=""><?php echo $langs['my_address']; ?></a></li>
            <li><a id="sub-logout" href="" target=""><?php echo $langs['logout']; ?></a></li>
        </ul>
    </div>

    <?php require_once 'layouts/my_modal.php'; ?>

    <script src="scripts/md5.js"></script>
    <script src="scripts/myInfo.js"></script>
    <script src="scripts/shopInfo.js"></script>
    <script src="scripts/login.js"></script>
    <script src="scripts/cart.lib.js"></script>
    <script src="scripts/cart.js"></script>
    <script src="scripts/header.js"></script>
    <script src="scripts/shop.js"></script>
    <script type="text/javascript">
        $(function() {
            //存商家信息到cookie
            var shopId = $('.shop-name').attr('shopId');
            var shopName = $('.shop-name').attr('shopName');
            var shopPhone = $('.shop-name').attr('shopPhone');
            $.cookie('shopId', shopId, {
                expires: 365,
                path: '/'
            }); //写cookie
            //初始化购物车
            initCart();
            $('.shop-cart').show();

            //左侧导航
            var zh = $(window).height();
            var leftHeight = zh - 55;
            $(".leftmenu").height(leftHeight);
            //公告宽度
            processGonggao();

            //菜品div宽度
            processMenuItems();

            //购物车
            processShopItem();


            $('.gonggao').show();
            $('.content-middle').show();


            //监听窗口尺寸
            $(window).resize(function() {
                //设置左侧的高
                var zh = $(window).height();
                var leftHeight = zh - 55;
                $(".leftmenu").height(leftHeight);
                //公告宽度
                processGonggao();

                //菜品div宽度
                processMenuItems();

                //购物车
                processShopItem();

            });



            //左侧点击
            $('.leftmenu-item a').click(function() {
                //变样式
                $(this).parents('.leftmenu').find('.leftmenu-item').removeClass('active');
                $(this).parent().addClass('active');
                //变菜品
                var i = $(this).parents('dd').attr('id');
                $('.menu-wrap').hide();
                var m = "#" + i.replace('i', 'm');
                $(m).fadeIn(600);
            });


            //菜品相关
            function processMenuItems() {
                var zw = $(window).width();
                var shopCartWidth = $('.shop-cart').width();
                var leftMenuWidth = $('.leftmenu').width();
                var mw = zw - shopCartWidth - leftMenuWidth;
                $(".content-middle").width(mw);
                $(".content-middle").css('left', leftMenuWidth);
                $(".menu-wrap").width(mw);

                var percent = '48%';
                var marginLeft = 0;

                if (mw >= 700) {
                    percent = '48%';
                    marginLeft = mw - mw * 0.48 * 2;
                    if (zw < 1240) {
                        $(".stars").css('bottom', 40);
                        $(".price").css('left', 140);
                        // $(".buy").css('left', 180);
                        $(".price").css('right', '');
                        $(".buy").css('right', 10);
                    } else {
                        //样式归位
                        $(".stars").css('bottom', 5);
                        $(".price").css('left', '');
                        // $(".buy").css('left', '');
                        $(".price").css('right', 50);
                        $(".buy").css('right', 10);
                    }
                } else if (mw < 700) {
                    percent = '96%';
                    marginLeft = mw - mw * 0.96;

                    if (zw < 660) {
                        $(".stars").css('bottom', 40);
                        $(".price").css('left', 140);
                        // $(".buy").css('left', 180);
                        $(".price").css('right', '');
                        $(".buy").css('right', 10);
                    } else {
                        //样式归位
                        $(".stars").css('bottom', 5);
                        $(".price").css('left', '');
                        // $(".buy").css('left', '');
                        $(".price").css('right', 50);
                        $(".buy").css('right', 10);
                    }
                }

                $(".menu-item").css('width', percent);
                $(".item-wrap").css('margin-left', marginLeft);


            }

            //公告宽度
            function processGonggao() {
                var zw = $(window).width();
                var shopCartWidth = $('.shop-cart').width();
                var leftMenuWidth = $('.leftmenu').width();
                var gw = zw - shopCartWidth - leftMenuWidth - 40;
                var gw_wrap = gw + 50;
                $(".gonggao").width(gw);
                $(".gonggao").css('left', leftMenuWidth + 10);
                $(".gonggao-wrap").width(gw_wrap);
                $(".gonggao-wrap").css('left', leftMenuWidth);
            }




        });
    </script>
</body>

</html>
