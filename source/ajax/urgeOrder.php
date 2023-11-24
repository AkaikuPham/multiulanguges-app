<?php
require_once '../include.php';

//验证是否登录后
$ss = $_SESSION['userId'];
if (!isset($ss)) {
    $obj = new stdClass();
    $obj->code = "1";
    $obj->msg = $langs['api_request_illegal'];
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

$where = "username='" . $arr['username'] . "' and orderId='" . $arr['orderId'] . "'"; //用户名；订单号

$sql = "select * from dfz_order where " . $where;

$row = fetchOne($sql);

if ($row) {
    $urgeCount = $row['urgeCount'] + 1; //催单次数加1
    $arr['urgeCount'] = $urgeCount;
    if (update("dfz_order", $arr, $where)) {
        $obj = new stdClass();
        $obj->code = "0";
        $obj->msg = urlencode($langs['order_reminder_success']); // 
        echo urldecode(json_encode($obj));
    } else {
        $obj = new stdClass();
        $obj->code = "1";
        $obj->msg = urlencode($langs['order_reminder_failed']); // 
        echo urldecode(json_encode($obj));
    }
} else {
    $obj = new stdClass();
    $obj->code = "1";
    $obj->msg = urlencode($langs['order_not_exist']); // 
    echo urldecode(json_encode($obj));
}
