<?php
//處理刪除資料的請求

$db = new DB("student");
$id=$_POST['id'];

echo $db->del($id);

?>