<?php
session_start();
$data=$_POST['data'];
$arr=explode(" ",$data);
$re=array_pop($arr);
$unique=array_unique($arr);
$res=sort($unique);
$n=$_SESSION['ans'];
$d=explode(" ", $n);
$rs=sort($d);
if ($d==$unique){
	echo "ok";
}else{
	echo "no";

}
?>