<?php
require_once '../include.php';


$arr['username'] = $_POST['username'];



if ($arr['username']) {
    $sql = "select * from dfz_userinfo where username='" . $arr['username'] . "'";

    $row = fetchOne($sql);
    if ($row) {
        $obj = new stdClass();
        $obj->code = "0";
        $obj->msg = urlencode($langs['get_success']); //中文urlencode一下
        $obj->jifen = $row['jifen'];
        echo urldecode(json_encode($obj));
    } else {
        $obj = new stdClass();
        $obj->code = "1";
        $obj->msg = urlencode($langs['exceeded_sending']); //中文urlencode一下
        echo urldecode(json_encode($obj));
    }
}
