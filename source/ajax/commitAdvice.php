<?php
require_once '../include.php';

//验证是否登录后
$ss = $_SESSION['userId'];
if (!isset($ss)) {
    $obj = new stdClass();
    $obj->code = "1";
    $obj->msg = $langs['request_failed'];
    echo urldecode(json_encode($obj));
    return;
}


$arr = $_POST;
//合法验证
if (!isset($arr['username']) || !isset($arr['advice'])) {
    $obj = new stdClass();
    $obj->code = "1";
    $obj->msg = urlencode($langs['not_empty']); //中文urlencode一下
    echo urldecode(json_encode($obj));
}
$arr['time'] = time();
//开始插入
if (insert("dfz_advice", $arr)) {
    $obj = new stdClass();
    $obj->code = "0";
    $obj->msg = urlencode($langs['submitted_success_02']); //中文urlencode一下
    echo urldecode(json_encode($obj));
} else {
    $obj = new stdClass();
    $obj->code = "1";
    $obj->msg = urlencode($langs['submission_failed']); //中文urlencode一下
    echo urldecode(json_encode($obj));
}
