<?php
require_once '../include.php';

//验证是否登录后
$ss = $_SESSION['userId'];
if (!isset($ss)) {
    $obj = new stdClass();
    $obj->code = "1";
    $obj->msg = $langs['request_illegal'];
    echo urldecode(json_encode($obj));
    return;
}

$arr['username'] = $_POST['username'];
$arr['orderId'] = $_POST['orderId'];

if (!isset($arr['username']) || !isset($arr['orderId'])) {
    $obj = new stdClass();
    $obj->code = "1";
    $obj->msg = urlencode($langs['parameter_is_empty']); //中文urlencode一下
    echo urldecode(json_encode($obj));
    return;
}

$where = "username='" . $arr['username'] . "' and orderId='" . $arr['orderId'] . "' and pay=0 and received=0"; //用户名；订单号；未支付;未被接单

$arr2['received'] = 5; //5代表用户取消

//是否已接
$sql = "select * from dfz_order where " . $where;
$row = fetchOne($sql);
if (!$row) {
    $obj = new stdClass();
    $obj->code = "1";
    $obj->msg = urlencode($langs['cannot_cancel']); //中文urlencode一下
    echo urldecode(json_encode($obj));
    return;
}

if (update("dfz_order", $arr2, $where)) {
    $obj = new stdClass();
    $obj->code = "0";
    $obj->msg = urlencode($langs['cancel_success']); //中文urlencode一下
    echo urldecode(json_encode($obj));
} else {
    $obj = new stdClass();
    $obj->code = "1";
    $obj->msg = urlencode($langs['cancellation_failed']); //中文urlencode一下
    echo urldecode(json_encode($obj));
}
