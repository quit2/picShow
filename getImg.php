<?php
header('content-type:text/html;charset="utf-8"');
error_reporting(0);
$num = $_POST['num'];
if($num == 1){
	$img = array(
 		array('src'=>'s3.jpg','title'=>'中日驻英外交官撰文互称对家为2'),
		array('src'=>'s4.jpg','title'=>'中日驻英外交官撰文互方国家为3'),
		array('src'=>'s2.jpg','title'=>'中日驻英外交官撰文互称对方国家为4'),
		array('src'=>'s3.jpg','title'=>'中日驻英外交官撰文互称对方国家为5'),
		array('src'=>'s4.jpg','title'=>'中日驻英外交官撰文互称对方国家为6'),
		array('src'=>'s2.jpg','title'=>'中日驻英外交官撰文互称对方国家为7'),
		array('src'=>'s3.jpg','title'=>'中日驻英外交官撰文互称对方国家为8'),
		array('src'=>'s4.jpg','title'=>'中日驻英外交官撰文互称对方国家为9'),
		array('src'=>'s2.jpg','title'=>'中日驻英外交官撰文互称对方国家为0'),
		array('src'=>'s3.jpg','title'=>'中日驻英外交官撰文互称对方国家为1'),
		array('src'=>'s4.jpg','title'=>'中日驻英外交官撰文互称对方国家为2')
	);
}else if($num == 2){
	$img = array(
		array('src'=>'s2.jpg','title'=>'中日驻英外撰文互称对方国家为1'),
		array('src'=>'s3.jpg','title'=>'中日驻英外交官撰文互称对家为2'),
		array('src'=>'s4.jpg','title'=>'中日驻英外交官撰文互方国家为3'),
		array('src'=>'s2.jpg','title'=>'中日驻英外交官撰文互称对方国家为4')
	);
}else if($num == 3){
	$img = array(
		array('src'=>'s4.jpg','title'=>'中日驻英外撰文互称对方国家为1'),
 		array('src'=>'s2.jpg','title'=>'中日驻英外交官撰文互称对方国家为4')
	);
}else{
	$img = array(
		array('src'=>'s2.jpg','title'=>'中日驻英外撰文互称对方国家为1'),
		array('src'=>'s3.jpg','title'=>'中日驻英外交官撰文互称对家为2'),
		array('src'=>'s4.jpg','title'=>'中日驻英外交官撰文互方国家为3'),
		array('src'=>'s2.jpg','title'=>'中日驻英外交官撰文互称对方国家为4'),
		array('src'=>'s3.jpg','title'=>'中日驻英外交官撰文互称对方国家为5'),
		array('src'=>'s4.jpg','title'=>'中日驻英外交官撰文互称对方国家为6'),
		array('src'=>'s2.jpg','title'=>'中日驻英外交官撰文互称对方国家为7')
	);
}


echo json_encode($img);
