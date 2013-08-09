<?php
  $page = "sponsor";
  $title = "贊助商介紹";
  $og_descr = "感謝全球各地關注行動應用的贊助單位支持 MOPCON";
  $page_file = $_SERVER['PHP_SELF'];
?>
<html lang="zh-TW" class="">
  <head><?php include_once("header.php");?></head>
  <body data-twttr-rendered="true" data-spy="scroll" data-target=".subnav" data-offset="50">
    <?php include_once("navbar.php");?>
    <div class="container" id="all">
      <div class="article">
	      <div id="sponsorList">
		      <div class="offset1 span9 main well-large">
            <h3>徵求贊助商</h3>
            <p>強力徵求贊助廠商，請快與我們（ sponsor [at] mopcon.org ）聯繫</p>
		      </div>
		      <div class="offset1 span9 second well-large">
            <h3>執行單位：</h3>
            <ul class="thumbnails">
				      <li class="thumbnail"><a rel="external" href="http://www.facebook.com/groups/KSDGroup/"><img alt="Kaohsiung Software Developer Group logo" src="img/logo/ksdg.png" /></a></li>
				      <li class="thumbnail"><a rel="external" href="http://www.facebook.com/groups/cocoaheads.kaohsiung/"><img alt="CocoaHeads Kaohsiung logo" src="img/logo/cocoaheads-logo.png" /></a></li>
				      <li class="thumbnail"><a rel="external" href="http://www.facebook.com/groups/mosut"><img alt="MOSUT logo" src="img/logo/mosut-logo.png" /></a></li>
              <li class="thumbnail"><a rel="external" href=""><img alt="KIMU logo" src="img/logo/kimu.jpeg" /></a></li>
              <li class="thumbnail"><a rel="external" href="http://kalug.linux.org.tw/"><img alt="KaLUG logo" src="img/logo/kalug.png"/></a></li>
            </ul>
          </div>
		      <div class="offset1 span9 second well-large">
            <h3>Geek級贊助商</h3>
            <p>感謝以下各贊助單位</p>
            <ul class="thumbnails">
              <li class="thumbnail"><a id="kkbox" rel="external" href="http://www.kkbox.com"><img src="img/logo/kkbox-logo2.png" alt="KKBOX" /></a>
            </ul>
		      </div>
		      <div class="offset1 span9 second well-large">
            <h3>Developer級贊助商</h3>
            <p>感謝以下各贊助單位</p>
            <ul class="thumbnails">
              <li class="thumbnail"><a id="kdan" rel="external" href="http://www.kdanmobile.com/"><img src="img/logo/Kdan-logo.png" alt="Kdan" /></a>
            </ul>
		      </div>
		      <div class="offset1 span9 second well-large">
            <h3>Coder級贊助商</h3>
            <p>感謝以下各贊助單位</p>
            <ul class="thumbnails">
              <li class="thumbnail"><a id="kny" rel="external" href="http://kny.tw"><img src="img/logo/kny_logo.jpg" alt="KNY" /></a>
            </ul>
		      </div>
		      <div class="offset1 span9 second well-large">
            <h3>特別感謝</h3>
            <p>感謝以下單位協助與支持</p>
            <ul class="thumbnails">
              <li class="thumbnail"><a rel="external" href="http://www.ecc.stu.edu.tw/"><img src="img/logo/stu_logo.png" alt="樹德科技大學 電算中心" /></a>
            </ul>
		      </div>
          <div class="hidden_box"></div>
        </div>
      </div>
    </div>
    <?php include_once("footer.html");?>
  </body>
</html>
