
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>吴欣玥JS结课答辩</title>
	    <link rel="stylesheet" type="text/css" href="http://cdn.aidezy.com/js/css/main.css">
    <link rel="stylesheet" type="text/css" href="http://cdn.aidezy.com/js/css/process.css">
    <style type="text/css">


#kuang{
	height: 500px;
	width: 600px;
	/*background: red;*/
	/*overflow:scroll;*/
	border: 1px solid red;
	margin: 0px 0px 0px -122px;
}

#xie{
	height: 120px;
	width: 600px;
	/*background: blue;*/
	margin: 0px 0px 0px -122px;
}


</style>

    <style type="text/css">
.box_bg{
	width: 100%;
	height: 100%;
}



.wenzi{
		text-align: center;
	float: left;
	display: inline;
	width: 112px;
	line-height: 48px;
}
.wenzi2{
    text-align: center;
    float: left;
    display: inline;
    width: 112px;
    line-height: 58px;
    position: relative;
    /* top: 20px; */
    left: -50px;
}

.wenzi3{
    text-align: center;
    margin: 0px 0px 0px 0px;
    line-height: 50px;
    margin: 0 0px 0px -30px;
}
.cycle_item a {
    position: absolute;
    display: block;
    border-radius: 25px;
    width: 120px;
    height: 50px;
    left: 247px;
    top: -45px;
}
.blog_b {
    position: relative;
    top: 20px;
    left: 20px;
    background-color: #FFD39B;
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
<div>

<div id="kuang">
<!-- 	<?php foreach($shuju as $v){?>
<p><?php echo $v['xinxi']?></p>

1

<?php }?>
 -->


</div>


<div id="xie">

<form action="" method="post">


<input id="nr" type="text" style="height: 114px;" name="nr" value="">
<input id="fasong" type="submit" name="" value="发送" style="margin: 0px 0px 0px 300px">

<!-- <input type="button" name="" value="获取聊天内容" id="huoqu"> -->

</form>





</div>


</div>
                    </div>
 
                </div>
                <h1 class="title">@author:&nbsp;' 无陌然</h1>
                <h2 class="title_h2">Ajax聊天室.</h2>
                <div id="box01_text">
                <p class="box01_p" style="opacity: 1;">世间悠迹.</p>
                <p class="box01_p" style="opacity: 1;">陌路可随. </p>
                </div>
            </div>
           
        </div>
        
        <div class="box">
            <img class="box_bg" src="./css/pic_2.jpg" style="width: 1920px; height: 1080px; top: -45px; left: 0px;">
</body>


<script type="text/javascript">
var nr = document.getElementById('nr');
var fasong = document.getElementById('fasong');
var fm = document.getElementsByTagName('form')[0];
fm.onsubmit = function(){
	var formdata = new FormData(this);
	var data = 'nr=' + nr.value;
	// alert('1');

	// var xhr = new XMLHttpRequst();
	
	var xhr = new XMLHttpRequest();
	xhr.onreadystatechange = function(){
		if (this.readyState == 4) {
			// alert(this.responseText);
		}
	}

xhr.open('post','liaotianshi.php',true);
xhr.setRequestHeader('Content-type','application/x-www-form-urlencoded');
xhr.send(data);
return false;
}

function shuaxin(){
	xhr = new XMLHttpRequest();
		xhr.onreadystatechange = function(){
			if (this.readyState == 4) {
				// alert(this.responseText);
					var kuang = document.getElementById('kuang');
					kuang.innerHTML = this.responseText;
				
			}
		}

		xhr.open('get','liaotianshi.php',true);
		xhr.send(null);

}
		

setInterval('shuaxin();',10);
</script>

</html>