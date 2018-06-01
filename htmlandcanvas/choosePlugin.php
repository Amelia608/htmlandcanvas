<!DOCTYPE html>
<html>

	<head>
		<meta charset="UTF-8">
		<title>hotwind夏日时装周</title>
		<meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1,maximum-scale=1,user-scalable=no" />
		<meta name="sharecontent" data-msg-img="http://p73n69kv5.bkt.clouddn.com/index-light-orang.png"  data-msg-title="生活是你的秀场，你是什么时尚态度？"  data-msg-content="生活是你的秀场，你是什么时尚态度？"  data-msg-callBack=""  data-line-img="http://p73n69kv5.bkt.clouddn.com/index-light-orang.png" data-line-title="生活是你的秀场，你是什么时尚态度？" data-line-callBack=""/>
		<meta name="msapplication-tap-highlight" content="no" />
		<link rel="stylesheet" type="text/css" href="css/common.css" />
		<link rel="stylesheet" type="text/css" href="css/animate.css" />
		<link rel="stylesheet" type="text/css" href="css/font-awesome.min.css" />
		<link rel="stylesheet" type="text/css" href="css/style.css" />
		<link rel="stylesheet" type="text/css" href="css/swiper.css" />
		<script src="js/jquery-2.0.3.min.js"></script>
		<script src="js/swiper.min.js"></script>
		<script src="js/hammer.min.js"></script>
		<script src="js/cat.touchjs.js"></script>
		<script src="js/html2canvas.js"></script>
		<script src="http://res.wx.qq.com/open/js/jweixin-1.0.0.js"></script>
		<!-- 将canvas图片保存成图片 -->
		<script src="js/canvas2image.js"></script>
		<script src="js/base64.js"></script>
		<script src="js/exif.js"></script>
		<script src="js/pluginChoose.js"></script>
		<style type="text/css">
			html,
			body,
			.complete-wrap {
				background: #F1F0EA;
			}
		</style>
	</head>

	<body class="stopScroll">
		<div class="icon-music" id="music">
			<audio id="Jaudio" class="media-audio" src="http://p73n69kv5.bkt.clouddn.com/95_min.mp3" preload loop="loop"></audio>
		</div>
		<section class="main-plugin" id="main-plugin">
			<img class="main-img" width="100%">
			<span class="cameria-btn">
				<img src="http://p73n69kv5.bkt.clouddn.com/icon_cameria_k.png" class="cameria-kuang animated infinite pulse">
				<img src="http://p73n69kv5.bkt.clouddn.com/icon_cameria.png" class="cameria">
				<input type="file" accept="image/*" id="input" onchange="selectFileImage(this);" />
			</span>
			<div class="pic" id="pic">
				<img id="myImage" width="100%" style="display: none;">
			</div>
			<img id="last-img" />
		</section>
		<div class="foot-wrap">
			<div class="plugin-tap1">
				<!-- Swiper -->
				<div class="swiper-container">
					<div class="swiper-wrapper">
						<div class="swiper-slide active" data-id="1"><img src="http://p73n69kv5.bkt.clouddn.com/icon_yj.png" width="30"></div>
						<div class="swiper-slide" data-id="2"><img src="http://p73n69kv5.bkt.clouddn.com/icon_bag.png" width="25"></div>
						<div class="swiper-slide" data-id="3"><img src="http://p73n69kv5.bkt.clouddn.com/icon_hat.png" width="30"></div>
						<div class="swiper-slide" data-id="4"><img src="http://p73n69kv5.bkt.clouddn.com/icon_hair.png" width="30"></div>
						<div class="swiper-slide" data-id="5"><img src="http://p73n69kv5.bkt.clouddn.com/icon_ball.png" width="22"></div>
					</div>
				</div>
			</div>
			<div class="plugin-content">
				<!-- st:plugin content1 -->
				<div class="content1">
					<!-- Swiper -->
					<!-- 眼镜 -->
					<div class="swiper-container">
						<ul class="swiper-wrapper" data-group="0">
							<li class="swiper-slide" data-num="0">
								<img src="http://p73n69kv5.bkt.clouddn.com/icon-group0-01.png">
							</li>
							<li class="swiper-slide" data-num="1">
								<img src="http://p73n69kv5.bkt.clouddn.com/icon-group0-02.png">
							</li>
							<li class="swiper-slide" data-num="2">
								<img src="http://p73n69kv5.bkt.clouddn.com/icon-group0-03.png">
							</li>
							<li class="swiper-slide" data-num="3">
								<img src="http://p73n69kv5.bkt.clouddn.com/icon-group0-04.png">
							</li>
							<li class="swiper-slide" data-num="4">
								<img src="http://p73n69kv5.bkt.clouddn.com/icon-group0-05.png">
							</li>
						</ul>
						<!-- Add Pagination -->
						<div class="swiper-pagination"></div>
					</div>
				</div>
				<!-- end:plugin content1 -->

				<!-- st:plugin content2 -->
				<div class="content2">
					<!-- Swiper -->
					<!-- 包包 -->
					<div class="swiper-container">
						<ul class="swiper-wrapper" data-group="1">
							<li class="swiper-slide" data-num="0">
								<img src="http://p73n69kv5.bkt.clouddn.com/plugin1.png">
							</li>
							<li class="swiper-slide" data-num="1">
								<img src="http://p73n69kv5.bkt.clouddn.com/plugin2.png">
							</li>
							<li class="swiper-slide" data-num="2">
								<img src="http://p73n69kv5.bkt.clouddn.com/plugin7.png">
							</li>
							<li class="swiper-slide" data-num="3">
								<img src="http://p73n69kv5.bkt.clouddn.com/plugin5.png">
							</li>
							<li class="swiper-slide" data-num="4">
								<img src="http://p73n69kv5.bkt.clouddn.com/icon-group1-05.png">
							</li>
							<li class="swiper-slide" data-num="5">
								<img src="http://p73n69kv5.bkt.clouddn.com/plugin3.png">
							</li>
						</ul>
						<!-- Add Pagination -->
						<div class="swiper-pagination"></div>
					</div>
				</div>
				<!-- end:plugin content2 -->

				<!-- st:plugin content3 -->
				<div class="content3">
					<!-- 帽子 -->
					<!-- Swiper -->
					<div class="swiper-container">
						<ul class="swiper-wrapper" data-group="2">
							<li class="swiper-slide" data-num="0">
								<img src="http://p73n69kv5.bkt.clouddn.com/plugin6.png">
							</li>
							<li class="swiper-slide" data-num="1">
								<img src="http://p73n69kv5.bkt.clouddn.com/plugin8.png">
							</li>
							<li class="swiper-slide" data-num="2">
								<img src="http://p73n69kv5.bkt.clouddn.com/plugin9.png">
							</li>
							<li class="swiper-slide" data-num="3">
								<img src="http://p73n69kv5.bkt.clouddn.com/plugin10.png">
							</li>
							<li class="swiper-slide" data-num="4">
								<img src="http://p73n69kv5.bkt.clouddn.com/plugin11.png">
							</li>
							<li class="swiper-slide" data-num="5">
								<img src="http://p73n69kv5.bkt.clouddn.com/plugin12.png">
							</li>
						</ul>
						<!-- Add Pagination -->
						<div class="swiper-pagination"></div>
					</div>
				</div>
				<!-- end:plugin content3 -->

				<!-- st:plugin content4 -->
				<div class="content4">
					<!-- 头饰 -->
					<!-- Swiper -->
					<div class="swiper-container">
						<ul class="swiper-wrapper" data-group="3">
							<li class="swiper-slide" data-num="0">
								<img src="http://p73n69kv5.bkt.clouddn.com/plugin13.png">
							</li>
							<li class="swiper-slide" data-num="1">
								<img src="http://p73n69kv5.bkt.clouddn.com/plugin15.png">
							</li>
							<li class="swiper-slide" data-num="2">
								<img src="http://p73n69kv5.bkt.clouddn.com/plugin16.png">
							</li>
							<li class="swiper-slide" data-num="3">
								<img src="http://p73n69kv5.bkt.clouddn.com/plugin18.png">
							</li>
							<li class="swiper-slide" data-num="4">
								<img src="http://p73n69kv5.bkt.clouddn.com/plugin22.png">
							</li>
							<li class="swiper-slide" data-num="5">
								<img src="http://p73n69kv5.bkt.clouddn.com/icon-group3-01.png">
							</li>
							<li class="swiper-slide" data-num="6">
								<img src="http://p73n69kv5.bkt.clouddn.com/icon-group3-02.png">
							</li>
							<li class="swiper-slide" data-num="7">
								<img src="http://p73n69kv5.bkt.clouddn.com/plugin40.png">
							</li>
						</ul>
						<!-- Add Pagination -->
						<div class="swiper-pagination"></div>
					</div>
				</div>
				<!-- end:plugin content4 -->

				<!-- st:plugin content5 -->
				<div class="content5">
					<!-- 运动 -->
					<!-- Swiper -->
					<div class="swiper-container">
						<ul class="swiper-wrapper" data-group="4">
							<li class="swiper-slide" data-num="0">
								<img src="http://p73n69kv5.bkt.clouddn.com/plugin17.png">
							</li>
							<li class="swiper-slide" data-num="1">
								<img src="http://p73n69kv5.bkt.clouddn.com/plugin19.png" style="width: 20px;">
							</li>
							<li class="swiper-slide" data-num="2">
								<img src="http://p73n69kv5.bkt.clouddn.com/plugin20.png" style="width: 25px;">
							</li>
							<li class="swiper-slide" data-num="3">
								<img src="http://p73n69kv5.bkt.clouddn.com/plugin21.png" style="width: 25px;">
							</li>
							<li class="swiper-slide" data-num="4">
								<img src="http://p73n69kv5.bkt.clouddn.com/plugin23.png">
							</li>
							<li class="swiper-slide" data-num="5">
								<img src="http://p73n69kv5.bkt.clouddn.com/plugin24.png">
							</li>
							<li class="swiper-slide" data-num="6">
								<img src="http://p73n69kv5.bkt.clouddn.com/plugin25.png">
							</li>
							<li class="swiper-slide" data-num="7">
								<img src="http://p73n69kv5.bkt.clouddn.com/plugin26.png">
							</li>
							<li class="swiper-slide" data-num="8">
								<img src="http://p73n69kv5.bkt.clouddn.com/plugin14.png">
							</li>
						</ul>
						<!-- Add Pagination -->
						<div class="swiper-pagination"></div>
					</div>
				</div>
				<!-- end:plugin content5 -->

			</div>
			<p class="text-center">
				<span class="btn-complete"><img src="http://p73n69kv5.bkt.clouddn.com/btn-complete.png" width="100%"></span>
			</p>
		</div>

		<div id="canvas-wp"></div>

		<!-- 最终生成的HTML -->

		<div class="complete-wrap" style="display: none;">
			<div class="top-show text-center" id="top-show">
				<div style="padding:5px;background: #F1F0EA;">
					<span class="msk"><img src="http://p73n69kv5.bkt.clouddn.com/bg-line2.png" width="100%" height="100%"></span>
					<div class="show-last-wp">
						<img id="last-show" class="last-img" width="100%" src="http://p73n69kv5.bkt.clouddn.com/scene_sh_on.png">
						<p class="location-dl">
							<img src="http://p73n69kv5.bkt.clouddn.com/icon_location.png" width="24" style="vertical-align: middle;">
							<span id="dly-location" class="dly-location">new york</span>
						</p>
					</div>
					<div class="slogan-wrap">
						<img id="slogan-img" class="slogan-img" src="http://p73n69kv5.bkt.clouddn.com/ccc-foot1.png">
					</div>
				</div>

			</div>
			<div style="display: none;" id="footer-pro">
				<p class="text-center">
					<a onclick="window.location='chooseBg.php'"><img src="http://p73n69kv5.bkt.clouddn.com/btn-update1.png" width="100"></a>
				</p>
				<p class="text-center" style="padding:0 20px;"><img src="http://p73n69kv5.bkt.clouddn.com/pro_title.png" style="max-width: 100%;"></p>
				<ul class="pro-wrap" style="padding:0 15px;">
					<li>
						<a href="https://wx.hotwind.net/wxhd/activity/main.do?methodName=getProductNavPromotion&storeid=544&salesid=&id=400&name=%E5%B8%83%E9%9E%8B">
							<img src="http://p73n69kv5.bkt.clouddn.com/pro_1.png" width="100%">
						</a>
					</li>
					<li>
						<a href="https://wx.hotwind.net/wxhd/activity/main.do?methodName=getProductNavPromotion&storeid=544&salesid=&id=353&name=%E5%B0%8F%E7%99%BD%E9%9E%8B">
							<img src="http://p73n69kv5.bkt.clouddn.com/pro_2.png" width="100%">
						</a>
					</li>
					<li>
						<a href="https://wx.hotwind.net/wxhd/activity/main.do?methodName=getProductNavPromotion&storeid=544&salesid=&id=244&name=%E5%87%89%E9%9E%8B">
							<img src="http://p73n69kv5.bkt.clouddn.com/pro_3.png" width="100%">
						</a>
					</li>
				</ul>
			</div>

			<div id="canvas-wp2" class="canvas-wp2"></div>
		</div>
		<div class="msg-msk"></div>
		<div class="loading-msk plugin-loading"></div>
		<div class="loading-content plugin-loading-cnt text-center">
			<i class="fa fa-spinner fa-pulse fa-2x fa-fw margin-bottom"></i>
			<p class="text-center">数据加载中......</p>
		</div>
		<script>
			function audioAutoPlay(id) {
				var audio = document.getElementById(id);
				audio.play();
				document.addEventListener("WeixinJSBridgeReady", function() {
					audio.play();
				}, false);
			};
			
			function loadAudio() {
				var audio = document.getElementById("Jaudio");
				audio.onloadedmetadata = function() {
					$("#music").addClass("playing");
				};
			};
			
			$(function() {
				loadAudio();
				audioAutoPlay("Jaudio");
				var music = document.getElementById("music");
				var audio = document.getElementsByTagName("audio")[0];
				music.addEventListener("touchstart", function() {
					if(audio.paused) {
						audio.play();
						this.setAttribute("class", "icon-music playing");
					} else {
						audio.pause();
						this.setAttribute("class", "icon-music");
					};
				}, false);
			})
		</script>
	</body>
	<?php
	require_once "jssdk.php";
	$jssdk = new JSSDK("wxd893ad8a75aaae3a", "e61b1d51e2c74c0ba9e8a27adc2e724b");
	$signPackage = $jssdk->GetSignPackage();
	?>
	<!--<script src="http://res.wx.qq.com/open/js/jweixin-1.0.0.js"></script>-->
	<script>
		wx.config({
		    debug: false,
		    appId: '<?php echo $signPackage["appId"];?>',
		    timestamp: <?php echo $signPackage["timestamp"];?>,
		    nonceStr: '<?php echo $signPackage["nonceStr"];?>',
		    signature: '<?php echo $signPackage["signature"];?>',
	    	jsApiList: [
	       		'onMenuShareTimeline',
	        	'onMenuShareAppMessage'
	      	]
		});
		wx.ready(function(){
			var desc_str  = "生活是你的秀场，你是什么时尚态度？";
			var title_str = "hotwind夏日时装周";
			var share_url = "http://hotwind.xiruiad.com/";
			var share_img = "http://p73n69kv5.bkt.clouddn.com/share-img.jpg";

			//分享朋友圈
			wx.onMenuShareTimeline({
			    title: "我已在时装周杀出一条血路，你来了吗？", // 分享标题
	            // desc: desc_str, // 分享描述
	            link: share_url, // 分享链接
	            imgUrl: share_img, // 分享图标
	            success: function () { 
	                // 用户确认分享后执行的回调函数
	            },
	            cancel: function () { 
	                // 用户取消分享后执行的回调函数
	            }
			});

			//分享朋友
			wx.onMenuShareAppMessage({
			    title: title_str, // 分享标题
	            desc: desc_str, // 分享描述
	            link: share_url, // 分享链接
	            imgUrl: share_img, // 分享图标
			    success: function () {
			        // 用户确认分享后执行的回调函数
			    },
			    cancel: function () {
			        // 用户取消分享后执行的回调函数
			    }
			});
		});
	</script>
	<script type="text/javascript" src="//js.users.51.la/19453979.js"></script>
</html>