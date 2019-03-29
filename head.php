<div class="topbox">
  <div class="indextop">
    <div class="logo"><img src="./sheji/logo.png">
	</div>
	<ul>
    <div class="tel"><p>
	<span><img  class="phone-icon" src="./image/dba0bdc8a65da3b1064f5fe3b3ddfba0.png">&nbsp;
	<span style="font-size:12.6316px;line-height:18.9474px;white-space:normal;">15093229116</span>&nbsp; &nbsp;</span>
	<img class="mail-icon" src="./image/91997abcae0a7b39bd1827511f56d7f5.png" style="font-size:12px;line-height:1.5;">
	<span style="font-size:12px;line-height:1.5;">&nbsp;</span><span style="font-size:12px;line-height:1.5;">515660506@qq.com &nbsp;&nbsp;</span> 
	</ul>
</p>
<p class="address-p">
	<img class="adress-icon" src="./image/7f2b5601cd473bb8b60503ff17d48960.png" style="font-size:12px;line-height:1.5;"><span style="font-size:12px;line-height:1.5;margin-left:8px;">&nbsp;上海市奉贤区望园路</span>
</p></div>

  </div>
  <div class="navbox">
    <ul class="listnone">
      
                  <?php
                  	if($page == "index"){
                  		echo '<li class="navdown"><a href="./index.php">首页</a></li>';
                  	}else{
                  		echo '<li><a href="./index.php">首页</a></li>';
                  	}
                  	if($page == "jieshao"){
                  		echo '<li class="navdown"><a href="./jieshao.php">公司介绍</a></li>';
                  	}else{
                  		echo '<li><a href="./jieshao.php">公司介绍</a></li>';
                  	}
                  	if($page == "case"){
                  		echo '<li class="navdown"><a href="./case.php">经典案例</a></li>';
                  	}else{
                  		echo '<li><a href="./case.php">经典案例</a></li>';	
                  	}
                  	if($page == "peixun"){
                  		echo '<li class="navdown"><a href="./peixun.php">墙绘培训</a></li>';
                  	}else{
                  		echo '<li><a href="./peixun.php">墙绘培训</a></li>';
                  	}
                  	if($page == "zhaopin"){
              			 echo '<li class="navdown"><a href="./zhaopin.php">人才招聘</a></li>';
                  	}else{
              			 echo '<li><a href="./zhaopin.php">人才招聘</a></li>';
                  	}
                  	if($page == "hezuo"){
                  		echo '<li class="navdown"><a href="./hezuo.php">加盟合作</a></li>';
                  	}else{
                  		echo '<li><a href="./hezuo.php">加盟合作</a></li>';
                  	}
                  	if($page == "lianxi"){
                  		echo '<li class="navdown"><a href="./lianxi.php">联系我们</a></li>';
                  	}else{
                  		echo '<li><a href="./lianxi.php">联系我们</a></li>';
                  	}
                  ?>
                </ul> 
  </div>
</div>