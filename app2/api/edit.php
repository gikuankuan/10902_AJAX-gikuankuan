<?php
$db = new DB("student");

$id=$_POST['id'];

$row=$db->find($id);


?>



<div id='editblock'>
      <h3>新增學生資料</h3>
      <form id="edit">
        <ul>
          <li>姓　　名:<input type="text" name="name" id="name" value="<?=$row['name']?>" /></li>
          <li>學　　號:<input type="text" name="uni_id" id="uni_id" value="<?=$row['uni_id']?>"/></li>
          <li>
            班級座號:<input type="text" name="class_num" id="class_num" value="<?=$row['class_num']?>" />
          </li>
          <li>
            出生年月日:<input type="text" name="birthday" id="birthday" value="<?=$row['birthday']?>"/>
          </li>
          <li>身分證字號:<input type="text" name="nat_id" id="nat_id" value="<?=$row['nat_id']?>"/></li>
          <li>住　　址:<input type="text" name="addr" id="addr" value="<?=$row['addr']?>" /></li>
          <li>父　　母:<input type="text" name="parent" id="parent" value="<?=$row['parent']?>"/></li>
          <li>電　　話:<input type="text" name="tel" id="tel" value="<?=$row['tel']?>"/></li>
          <li>科　　別:<input type="text" name="dept" id="dept" value="<?=$row['dept']?>"/></li>
          <li>畢業國中:<input type="text" name="grad_at" id="grad_at" value="<?=$row['grad_at']?>"/></li>
        </ul>
        <div><input type="button" value="確定新增" onclick="editstudent()" /></div>
      </form>
    </div>