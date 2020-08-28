

<?php 
	$qz = $_SERVER['HTTP_HOST'];
	$hz = $_SERVER['REQUEST_URI'];  
 ?>
<?php

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
		// echo $result;
		// echo $z;
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
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>吴欣玥JS结课答辩</title>
	    <link rel="stylesheet" type="text/css" href="./css/main.css">
    <link rel="stylesheet" type="text/css" href="./css/process.css">
    <style type="text/css">
.box_bg{
	width: 100%;
	height: 100%;
}


#tjfcf{
	margin: 0px 0px 0px 0px;
	position: relative;
	top: 200px;
	display: inline;
	color: white;
	/*border: 1px solid blue;*/
	/*width: 2000px;*/
}
/*style="width: 3440px; height: 1440px; top: -45px; left: 0px;"*/
</style>
</head>
<body>
	  <div class="wrapBox" id="wrapBox" style="top: 0px;">
        <div class="box">
            <img class="box_bg" src="http://wl.aidezy.com/2019061511594534515322.jpg" href="http://wpa.qq.com/msgrd?v=3&uin=466661699&site=qq&menu=yes" >
            <div class="box01_content">
                <div class="head_div">
                    <div class="cycle_item">
                  
<!-- <h1 style="display: inline;">自动提交百度收录:</h1> -->
                  <h1 id="tjfcf"><span id="daojishi">3</span>&nbsp;&nbsp;秒后自动提交收录...</h1>
                    </div>
                </div>
                <h1 class="title">@author:&nbsp;' 无陌然</h1>
                <h2 class="title_h2">百度自动提交收录.</h2>
                <div id="box01_text">
                <p class="box01_p" style="opacity: 1;">世间悠迹.</p>
                <p class="box01_p" style="opacity: 1;">陌路可随. </p>
                </div>
            </div>
            <div class="arrow_div">
                <img class="arrow_img" src="./css/arrowhead.png">
            </div>
        </div>
        
        <div class="box">
            <img class="box_bg" src="./css/pic_2.jpg" style="width: 1920px; height: 1080px; top: -45px; left: 0px;">
</body>
<script>
function dao(){
	var shi =  document.getElementById('daojishi');
		if (shi.innerHTML == 5) {
			shi.innerHTML = '4';
		}else if (shi.innerHTML == 4) {
			shi.innerHTML = '3';
		}else if (shi.innerHTML == 3) {
			shi.innerHTML = '2';
		}else if (shi.innerHTML == 2) {
			shi.innerHTML = '1';
		}else if (shi.innerHTML == 1) {
			shi.innerHTML = '0';
		}

		if (shi.innerHTML == 0) {
			ding();
		}
}
　　　　window.setInterval('dao();',1000);
</script>
<script type="text/javascript">
function ding(){
	// alert('ceshi');
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

</html>
