<?php 
	$qz = $_SERVER['HTTP_HOST'];
	$hz = $_SERVER['REQUEST_URI'];  
 ?>
<?php


//周级自动提交收录函数
function tj($qz,$hz){
    	// echo $z;
    	// echo substr($z,'=');
    	// $c = strrchr($z,'=');
    	// $d = ltrim($c,'=');
    	// $f = substr($d,-4);
    	$z =  'http://'.$qz.$hz;
    	// echo $z;
    	// exit();
		$urls[] = $z;
		$api = 'http://data.zz.baidu.com/urls?appid=1627076650820191&token=A7DnumKpcjFXSrkS&type=batch';
		$ch = curl_init();
		$options =  array(
		    CURLOPT_URL => $api,
		    CURLOPT_POST => true,
		    CURLOPT_RETURNTRANSFER => true,
		    CURLOPT_POSTFIELDS => implode("\n", $urls),
		    CURLOPT_HTTPHEADER => array('Content-Type: text/plain'),
		);
		curl_setopt_array($ch, $options);
		$result = curl_exec($ch);
		$zhuan = explode(",", $result);
		$zhuan2 = explode("{",$zhuan[0]);
		// var_dump($zhuan2);
		$zhuan3 = explode("\":", $zhuan2[1]);
		if ($zhuan[1] == '"success":0') {
			echo '提交收录失败';
           return false;
          exit();
		}else{
			echo '提交收录成功';
	      echo " ";
			//echo '当天剩'. $zhuan3[1] . '次';
           return false;
          exit();
		}
}
?>
<span style="color: red;" id="tjfcf"><span id="daojishi">5</span>秒后自动提交收录...</span>
<script>
function dao(){
	var shi =  document.getElementById('daojishi');
		shi.innerHTML = '<p>2</p>';
}
　　　　window.setInterval('dao();',1000);
</script>
<script type="text/javascript">
function ding(){
	  	alert('ceshi');
	var tjfcf =  document.getElementById('tjfcf');
	// alert(jxx);
	// alert(typeof(jxx));
	'<?php $qz = $_SERVER['HTTP_HOST'];
	$hz = $_SERVER['REQUEST_URI'];?>';
	// alert('ceshi');
		tjfcf.innerHTML = '<?php tj($qz,$hz); ?>';
}
//ding();
// window.onload = function(){	
// }
</script>