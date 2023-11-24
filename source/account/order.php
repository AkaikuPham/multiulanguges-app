<?php
require_once '../include.php';

//得到所有订单
$sql = "select * from dfz_order ";
$totalRows = getResultNum($sql);
$pageSize = 5;
$totalPage = ceil($totalRows / $pageSize);
$page = $_REQUEST['page'] ? (int)$_REQUEST['page'] : 1;
if ($page < 1 || $page == null || !is_numeric($page)) $page = 1;
if ($page > $totalPage) $page = $totalPage;
$offset = ($page - 1) * $pageSize;
$orderBy = "order by orderTime desc ";
$sql = "select * from dfz_order  {$orderBy} limit {$offset},{$pageSize}";
$rows = fetchAll($sql);
if (!$rows) {
    //还没有订单
}
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
        <script src="scripts/requestAnimationFrame.js"></script>
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
    <link rel=stylesheet href="/style/page.css">
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
                    <dd class="menu-item active">
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
                <h3 class="summary-header"><?php echo $langs['all_orders']; ?></h3>
            </div>
            <div class="order-content-wrap">

                <?php foreach ($rows as $row) : ?>
                    <div class="order-content">
                        <div class="order-meal">
                            <table>
                                <thead>
                                    <tr>
                                        <th colspan="3">
                                            <a href='/shop/<?php echo $row['shopId']; ?>' class="shop-name"><?php echo $row['shopName']; ?></a>
                                            <p class="shop-info">
                                                <span class="phone-icon"></span><?php echo $langs['business_phone_number']; ?><?php echo $row['shopPhone']; ?>
                                            </p>
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $arrObj = json_decode($row['items']);
                                    foreach ($arrObj as $obj) {
                                    ?>
                                        <tr>
                                            <td><?php echo $obj->name; ?></td>
                                            <td><?php echo $obj->count; ?></td>
                                            <td class="text-right">￥<?php echo $obj->price; ?></td>
                                        </tr>
                                    <?php     }
                                    ?>

                                </tbody>
                            </table>
                            <div class="order-price">
                                <?php echo $langs['total_price']; ?><span class="ft-red">￥<?php echo $row['price']; ?></span>
                            </div>
                            <div class="order-delivery">
                                <div class="receive-info">
                                    <span><?php echo $langs['order_number']; ?><?php echo $row['orderId']; ?></span>
                                    <span><?php echo $langs['delivery_address']; ?>：<?php echo $row['orderAddress']; ?></span>
                                    <span><?php echo $langs['contact_person']; ?><?php echo $row['orderName']; ?></span>
                                    <span><?php echo $langs['telephone']; ?><?php echo $row['orderPhone']; ?></span>
                                    <span><?php echo $langs['delivery_time']; ?>：<?php echo $row['orderArrivedTime']; ?></span>
                                    <span><?php echo $langs['remarks']; ?><?php echo $row['orderRemark']; ?></span>
                                </div>
                            </div>
                        </div>
                        <div class="order-info">
                            <div class="delivery-info">
                                <div class="delivery-card ">
                                    <div class="card-header nick-selected">
                                        <div class="round">
                                        </div>
                                        <div class="line-through ">
                                        </div>
                                    </div>
                                    <div class="card-body ">
                                        <div class="status-msg">
                                            <?php echo $langs['orders_submitted_success']; ?>
                                        </div>
                                        <div class="prompt"> <?php echo $langs['order_number_02']; ?><?php echo $row['orderId']; ?>
                                        </div>
                                        <div class="time">
                                            <?php echo getDate01($row['orderTime']);
                                            //计算15分钟是否支付
                                            if ($row['paymethod'] != 2 && $row['pay'] == 0 && $row['received'] == 0) {
                                                $nowTime = time();
                                                $dis = $nowTime - $row['orderTime'];
                                                if ($dis > 15 * 60) {
                                                    $row['received'] = 4;
                                                }
                                            }
                                            ?>
                                        </div>
                                    </div>
                                </div>
                                <div class="delivery-card ">
                                    <div class="card-header nick-selected">
                                        <div class="round">
                                        </div>
                                        <?php echo  $row['received'] != 0 ? "<div class=line-through></div>" : ""; ?>
                                    </div>
                                    <div class="card-body ">
                                        <div class="status-msg">
                                            <?php
                                            if ($row['paymethod'] == 2) {
                                                echo $langs['order_submitted'];
                                            } else {
                                                echo  $row['pay'] == 0 ? $langs['wait_for_payment'] : $langs['paid'];
                                            }
                                            ?>
                                        </div>
                                        <div class="prompt">
                                            <?php
                                            if ($row['paymethod'] == 2) {
                                                echo $langs['waiting_merchant_order'];
                                            } else {
                                                echo  $row['pay'] == 0 ? $langs['payment_15_minu'] : $langs['paid_order_progress'];
                                            }
                                            ?>
                                        </div>
                                        <div class="time">
                                            <?php if ($row['pay'] == 1) {
                                                if ($row['payTime']) {
                                                    echo getDate01($row['payTime']);
                                                }
                                            }
                                            ?>
                                        </div>
                                    </div>
                                </div>
                                <div <?php echo  $row['received'] == 0 ? "class='delivery-card n'" : "class='delivery-card'"; ?>>
                                    <div class="card-header nick-selected">
                                        <div class="round">
                                        </div>
                                    </div>
                                    <div class="card-body ">
                                        <div class="status-msg">
                                            <?php if ($row['received'] == 1) {
                                                echo $langs['merchant_accepted_order'];
                                            } elseif ($row['received'] == 2) {
                                                echo $langs['merchant_refuses'];
                                            } elseif ($row['received'] == 3) {
                                                echo $langs['order_completed'];
                                            } elseif ($row['received'] == 4) {
                                                echo $langs['cancel_order'];
                                            } elseif ($row['received'] == 5) {
                                                echo $langs['cancel_order'];
                                            }
                                            ?>
                                        </div>
                                        <div class="prompt">
                                            <?php if ($row['received'] == 1) {
                                                echo $langs['please_wait'];
                                            } elseif ($row['received'] == 2) {
                                                echo $langs['merchant_busy'];
                                            } elseif ($row['received'] == 3) {
                                                echo $langs['order_completed_02'];
                                            } elseif ($row['received'] == 4) {
                                                echo $langs['payment_not_made'];
                                            } elseif ($row['received'] == 5) {
                                                echo $langs['user_cancels_order'];
                                            }
                                            ?>
                                        </div>
                                        <div class="time">
                                            <?php if ($row['received'] != 0) {
                                                if ($row['receivedTime']) {
                                                    echo getDate01($row['receivedTime']);
                                                }
                                            }
                                            ?>
                                        </div>
                                    </div>
                                </div>
                                <div class="order-operator ">
                                    <div class="operator-btns">
                                        <?php
                                        if ($row['paymethod'] != 2 && $row['pay'] == 0 && $row['received'] == 0) {
                                            echo "<a class=pay-btn onclick=orderPay(" . $row['orderId'] . "," . $row['orderTime'] . ")>" . $langs['pay'] . "</a><a class=pay-btn onclick=orderCancel(" . $row['orderId'] . ",'" . $row['username'] . "')>" . $langs['cancel'] . "</a>";
                                        } else if ($row['paymethod'] == 2 && $row['received'] == 0) {
                                            echo "<a class=pay-btn onclick=orderCancel(" . $row['orderId'] . ",'" . $row['username'] . "')>" . $langs['cancel'] . "</a>";
                                        }
                                        if ($row['received'] == 1) {
                                            echo "<a class=pay-btn onclick=urgeOrder(" . $row['orderId'] . ",'" . $row['username'] . "')>" . $langs['reminders'] . "</a>";
                                        }
                                        if ($row['received'] == 3) {
                                            echo "<a class=pay-btn>评价</a><a href='/shop/" . $row['shopId'] . "' class=pay-btn>" . $langs['buy_again'] . "</a>";
                                        }

                                        ?>
                                    </div>
                                </div>
                                <div class="clear">
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
                <div class="page">
                    <?php
                    if ($totalPage > 1) {
                        echo showPage($page, $totalPage);
                    }
                    ?>
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
    <script src="/scripts/common.js"></script>
    <script src="/scripts/header.js"></script>
    <script src="/scripts/account.js"></script>
    <script src="/scripts/footer.js"></script>
    <script type="text/javascript">
        $(function() {

        });
        //取消订单
        function orderCancel(orderId, username) {
            var postUrl = "/ajax/orderCancel.php";
            $.post(postUrl, {
                    orderId: orderId,
                    username: username
                },
                function(data, status, xhr) {
                    if (status == "success") {
                        $res = $.parseJSON(data);
                        if ($res.code == "0") {
                            showAlert("取消成功", "/account/order");
                        } else if ($res.code == "1") {
                            showAlert($res.msg, "/account/order");
                        }
                    } else {
                        showAlert("服务器异常", "/account/order");
                    }
                });
        }
        //支付订单。
        function orderPay(orderId, orderTime) {
            var timestamp = Date.parse(new Date());
            var nowTime = timestamp / 1000;
            var dis = nowTime - orderTime;
            if (dis > 15 * 60) {
                showAlert("超过15分钟未支付，订单已取消", "/account/order");
            } else {
                showAlert("去支付页");
            }
        }

        //催单
        function urgeOrder(orderId, username) {
            var postUrl = "/ajax/urgeOrder.php";
            $.post(postUrl, {
                    orderId: orderId,
                    username: username
                },
                function(data, status, xhr) {
                    if (status == "success") {
                        $res = $.parseJSON(data);
                        if ($res.code == "0") {
                            showAlert("已通知商家");
                        } else if ($res.code == "1") {
                            showAlert($res.msg);
                        }
                    } else {
                        showAlert("服务器异常");
                    }
                });
        }
    </script>
</body>

</html>