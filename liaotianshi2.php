<?php 



class Mysql{
public function __construct(){
$this->conn();
}
public $link;
//链接数据库信息
public function conn(){
$cfg = include('./config.php');
$this->link = new mysqli($cfg['host'],$cfg['user'],$cfg['pwd'],$cfg['db']);
$this->query('use names'.$cfg['charset']);
}

//发送一条sql语句
public function query($sql){
// $lian = $this->conn();
return $this->link->query($sql);

}
//获取全部数据
public function getAll($sql){
$res = $this->query($sql);
$data = [];
while ( $row = $res->fetch_assoc() ) {
$data[] = $row;
}

return $data;
}
//获取一条数据
public function getRow($sql){
$res = $this->query($sql);
$row = $res->fetch_assoc();
return $row;
}
//获取单个数据
public function getOne($sql){
$res = $this->query($sql);
$row = $res->fetch_row()[0];
return $row;
}

}
$mysql = new Mysql();
$shuju = $mysql -> getAll('SELECT xinxi FROM xinxi ORDER BY id ASC');
foreach($shuju as $v){
	echo "<p><span>消息内容:</span>$v[xinxi]</p>";
}
// echo $_POST['nr'];
// echo $shuju;
if (!empty($_POST)) {
	$shuju = $_POST['nr'];
	$sql = "INSERT INTO xinxi (xinxi) VALUES ('$shuju')";
	$mysql -> query($sql);

}
$shuju2 = $mysql -> getAll('SELECT xinxi FROM xinxi');
$hang = count($shuju2);
if ($hang >= 15) {
	$sql = "SELECT id FROM xinxi ORDER BY id DESC";
	// $zuixin = $mysql -> query($sql);
	$zuixin =  $mysql -> getOne($sql);
	$zuixin = $zuixin - 5;
	$sql = "DELETE FROM xinxi WHERE id < '$zuixin'";
	$mysql-> query($sql);
}
// include('liaotianshi.html');
// echo mt_rand(1,100);
 ?>