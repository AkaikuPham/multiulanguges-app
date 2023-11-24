<?php
require_once '../include.php';
checkLogined();




//按时间排序
$orderBy = "order by orderTime desc ";
//where条件
$shopId = $_SESSION['shopId'];
$where = "where shopId='" . $shopId . "' and (pay=1 or paymethod=2) and received=0";
//得到数据库中所有商品
$sql = "select * from dfz_order {$where} ";
$totalRows = getResultNum($sql);
$pageSize = 5;
$totalPage = ceil($totalRows / $pageSize);
$page = $_REQUEST['page'] ? (int)$_REQUEST['page'] : 1;
if ($page < 1 || $page == null || !is_numeric($page)) $page = 1;
if ($page > $totalPage) $page = $totalPage;
$offset = ($page - 1) * $pageSize;
$sql = "select * from dfz_order {$where} {$orderBy} limit 1";
$rows = fetchAll($sql);
?>

<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <title>-.-</title>
    <link rel="stylesheet" href="styles/reset.css">
    <link rel="stylesheet" href="styles/bootstrap-admin.css">
    <link rel="stylesheet" href="styles/backstage.css">
    <link rel=stylesheet href="styles/order.css">
</head>

<body>

    <span class="main-title">开始接单</span>
    <div class="details">
        <div class="details_operation clearfix">

            <div class="fl">
            </div>

            <div class="fr">
                <span id="tip"></span>
            </div>
        </div>

        <div class="order-content-wrap">
            <?php if (isset($rows)) : ?>
                <?php foreach ($rows as $row) : ?>
                    <div class="order-content">
                        <div class="order-meal">
                            <table>
                                <thead>
                                    <tr>
                                        <th colspan="3">
                                            <a href="#" class="shop-name"><?php echo $row['shopName']; ?></a>
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
                                    <?php echo $langs['order_number']; ?><?php echo $row['orderId']; ?><br>
                                    <?php echo $langs['delivery_address']; ?>：<?php echo $row['orderAddress']; ?><br>
                                    <?php echo $langs['contact_person']; ?><?php echo $row['orderName']; ?><br>
                                    <?php echo $langs['telephone']; ?><?php echo $row['orderPhone']; ?><br>
                                    <?php echo $langs['delivery_time']; ?>：<?php echo $row['orderArrivedTime']; ?><br>
                                    <?php echo $langs['remarks']; ?><?php echo $row['orderRemark']; ?>
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
                                                echo "等待商家接单(餐到付款)";
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
                                <div <?php echo  $row['received'] == 0 ? "class='delivery-card n'" : "class='delivery-card '"; ?>>
                                    <div class="card-header nick-selected">
                                        <div class="round ">
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
                                        if (($row['pay'] == 1 && $row['received'] == 0)
                                            || ($row['paymethod'] == 2 && $row['received'] == 0)
                                        ) {
                                            echo "<a class=pay-btn onclick=takeOrder(" . $row['orderId'] . ")>接单</a><a class=pay-btn onclick=cancelOrder(" . $row['orderId'] . ")>拒绝</a>";
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
        </div>
    <?php endif; ?>
    </div>
    <!--提示框-->
    <div class="modal fade" id="mymodal">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button id="btn-close" type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                    <h4 id="alert-title" class="modal-title">标题</h4>
                </div>
                <div class="modal-body">
                    <p id="alert-body">内容</p>
                </div>
                <div class="modal-footer">
                    <button id="btn-ok" type="button" class="btn btn-default" data-dismiss="modal"><?php echo $langs['knew']; ?></button>
                </div>
            </div>
        </div>
    </div>
    <script src="scripts/jquery-1.8.3.js"></script>
    <script src="scripts/bootstrap.min.js"></script>
    <script src="scripts/common.js"></script>
    <script src="scripts/jquery.jqprint-0.3.js"></script>
    <script>
        $(document).ready(function() {

            var hasNewOrder = "<?php if ($rows) echo '1';
                                else echo '0'; ?>";
            if (hasNewOrder != 1) {
                startRequest();
            }

            //轮询器
            setInterval("startRequest()", 5000);
        });

        function startRequest() {
            var requestUrl = 'checkOrder.php?shopId=<?php echo $shopId; ?>';

            $.ajax({
                url: requestUrl,
                type: 'post',
                async: true,
                timeout: 3000,
                success: function(data) {
                    if (data == "success") {
                        window.location = "moniterOrder.php?orderFlag=1";
                    }
                },
                error: function(data) {}
            });
        }

        function takeOrder(id) {
            $(".order-delivery").jqprint();
            alert("接单");
            var postUrl = "/admin/ajax/operateOrder.php";
            $.post(postUrl, {
                    type: "take",
                    id: id
                },
                function(data, status, xhr) {
                    if (status == "success") {
                        $res = $.parseJSON(data);
                        if ($res.code == "0") {
                            //  showAlert("提示","接单成功","/admin/moniterOrder.php");
                        } else {
                            showAlert("提示", $res.msg, "/admin/moniterOrder.php");
                        }
                    } else {
                        showAlert("提示", "服务器异常");
                    }
                });
        }

        function cancelOrder(id) {
            alert("拒单");
            var postUrl = "/admin/ajax/operateOrder.php";
            $.post(postUrl, {
                    type: "cancel",
                    id: id
                },
                function(data, status, xhr) {
                    if (status == "success") {
                        $res = $.parseJSON(data);
                        if ($res.code == "0") {
                            showAlert("提示", "已拒绝", "/admin/moniterOrder.php");
                        } else {
                            showAlert("提示", $res.msg, "/admin/moniterOrder.php");
                        }
                    } else {
                        showAlert("提示", "服务器异常");
                    }
                });
        }
    </script>
</body>

</html>