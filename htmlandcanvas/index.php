<!DOCTYPE html>
<html>

	<head>
		<meta charset="UTF-8">
		<title>hotwind夏日时装周</title>
		<meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1,maximum-scale=1,user-scalable=no" />
		<meta name="sharecontent" data-msg-img="http://p73n69kv5.bkt.clouddn.com/index-light-orang.png"  data-msg-title="生活是你的秀场，你是什么时尚态度？"  data-msg-content="生活是你的秀场，你是什么时尚态度？"  data-msg-callBack=""  data-line-img="http://p73n69kv5.bkt.clouddn.com/index-light-orang.png" data-line-title="生活是你的秀场，你是什么时尚态度？" data-line-callBack=""/>
		<meta name="msapplication-tap-highlight" content="no" />
		<link rel="stylesheet" type="text/css" href="css/common.css" />
		<link rel="stylesheet" type="text/css" href="css/style.css" />
		<link rel="stylesheet" type="text/css" href="css/animate.css" />
		<script src="js/jquery-2.0.3.min.js"></script>
		<script src="http://res.wx.qq.com/open/js/jweixin-1.0.0.js"></script>
		<style type="text/css">
			html,
			body {
				position: relative;
				width: 100vw;
				height: 100vh;
				background: #f2f2f2;
				overflow: hidden;
			}
		</style>

	</head>

	<body class="stopScroll" style="background: #fff;">
		<div class="load-page">
			<div class="load-container load1">
				<div class="loader">Loading...</div>
				<p class="text-center loadtxt" style="color:#009933;position: absolute;width: 100%;bottom:80px;left:0;font-size: 14px;">加载中...</p>
			</div>
		</div>
		<div class="icon-music" id="music">
			<audio id="Jaudio" class="media-audio" src="http://p73n69kv5.bkt.clouddn.com/95_min.mp3" preload loop="loop"></audio>
		</div>
		<!--进入场景-->
		<div class="loading-pag">
			<ul class="loading-txt-wp">
				<li class="text-center  loading-txt">生活是你的秀场</li>
				<li class="text-center  loading-txt">你是什么时尚态度</li>
				<li class="text-center  loading-txt">夏日大秀启动中</li>
				<li style="margin-top: 50px;">
					<p class="process-bar text-center" id="process-bar"><span></span></p>
					<p class="text-center" id="process">0%</p>
				</li>
				<!-- 	<li class="process-bar" id="process-bar"></li>
				<li class="text-center process-txt" id="process"></li> -->
			</ul>
		</div>
		<!--主场景-->
		<section class="index-main">
			<div class="top-bar-wrap">
				<div class="light-bar-wrap">
					<img src="http://p73n69kv5.bkt.clouddn.com/index-light-orang.png" alt="" width="100%" />
					<!--<span class="light light1"></span>
					<span class="light light2"></span>-->
					<span class="light light3"></span>
					<span class="light light4"></span>
					<span class="light light5"></span>
					<span class="light light6"></span>
				</div>
				<img src="http://p73n69kv5.bkt.clouddn.com/index-light-green.png" alt="" width="100%" />
			</div>
			
			<img id="index-bg" class="index-bg" src="http://p73n69kv5.bkt.clouddn.com/index-lbg3.png" alt="" />
			<a class="go-show-btn animated  pulse infinite" href="chooseBg.php"><img src="http://p73n69kv5.bkt.clouddn.com/go-show.png" alt="" width="100%" /></a>
			<!-- 我的夏日我的时装周 -->
			<p class="img-fl img-txt">
				<img class="img-txt1" src="http://p73n69kv5.bkt.clouddn.com/img-txt3.png">
				<img class="img-txt2" src="http://p73n69kv5.bkt.clouddn.com/img-txt4.png">
			</p>
			<!-- 帽子和凳子 -->
			<div class="img-fl img-group1">
				<p class="group1-1"><img src="http://p73n69kv5.bkt.clouddn.com/indexrf-an2.png" width="100%"></p>
				<img class="group1-2" src="http://p73n69kv5.bkt.clouddn.com/indexrf-an9.png">
			</div>
			<!-- 裤子 -->
			<p class="img-fl img-kz">
				<span class="img-kz2"><img src="http://p73n69kv5.bkt.clouddn.com/indexrf-an1.png" width="100%"></span>
			</p>
			
			<!-- 鞋子 -->
			<p  class="img-fl img-shoe">
				<span class="shoes-2">
					<img src="http://p73n69kv5.bkt.clouddn.com/index-an12.png" width="100%">
				</span>
			</p>

			<!-- 包和凳子眼镜 -->
			<div class="img-fl img-group2">
				<p class="img-group21">
					<img src="http://p73n69kv5.bkt.clouddn.com/indexrf-an31.png" width="100%">
				</p>
				<p class="img-group22">
					<img src="http://p73n69kv5.bkt.clouddn.com/indexrf-an5.png" width="100%">
				</p>
				<img class="img-group23" src="http://p73n69kv5.bkt.clouddn.com/indexrf-an10.png">
			</div>
		</section>
		
		<script>
			// var imgSrc=["http://p73n69kv5.bkt.clouddn.com/scene_sh.png","http://p73n69kv5.bkt.clouddn.com/scene_milan.png","http://p73n69kv5.bkt.clouddn.com/scene_paris.png","http://p73n69kv5.bkt.clouddn.com/scene_tokyo.png","http://p73n69kv5.bkt.clouddn.com/scene_newyork.png","http://p73n69kv5.bkt.clouddn.com/scene_london.png"];
			var imgSrc = [
				"http://p73n69kv5.bkt.clouddn.com/index-lbg3.png",
				"http://p73n69kv5.bkt.clouddn.com/index-light-green.png",
				"http://p73n69kv5.bkt.clouddn.com/index-light-green.png",
				"http://p73n69kv5.bkt.clouddn.com/icon-light2.png",
				"http://p73n69kv5.bkt.clouddn.com/img-txt3.png",
				"http://p73n69kv5.bkt.clouddn.com/img-txt4.png",
				"http://p73n69kv5.bkt.clouddn.com/indexrf-an2.png",
				"http://p73n69kv5.bkt.clouddn.com/indexrf-an9.png",
				"http://p73n69kv5.bkt.clouddn.com/indexrf-an1.png",
				"http://p73n69kv5.bkt.clouddn.com/index-an12.png",
				"http://p73n69kv5.bkt.clouddn.com/indexrf-an31.png",
				"http://p73n69kv5.bkt.clouddn.com/indexrf-an5.png",
				"http://p73n69kv5.bkt.clouddn.com/indexrf-an10.png"
			];
			var txtCflag = false;
			var timer = null;
			var proValue = 0;

			function audioAutoPlay(id) {
				var audio = document.getElementById(id);
				audio.play();
				document.addEventListener("WeixinJSBridgeReady", function() {
					audio.play();
				}, false);

			}
			load(imgSrc);
			$(function() {
				audioAutoPlay("Jaudio");
				loadAudio();
				$(".loading-pag").addClass('hasloading');
				var processBarW = $("#process").width();
				timer = setInterval(function() {
					proValue += 25;
					$("#process-bar span").animate({
						width: proValue + '%'
					}, 300, function() {
						$("#process").html(proValue + "%");
						if(proValue >= 100) {
							setTimeout(function() {
								//								$(".load-page").show();
								hadLoading()
							}, 300);
						}
					});
					if(proValue >= 100) {
						clearInterval(timer);
					}
				}, 1000);

				//音乐控制
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
				//				load(imgSrc, hadLoading, processBarW);
			})

			function loadAudio() {
				var audio = document.getElementById("Jaudio");
				audio.onloadedmetadata = function() {
					$("#music").addClass("playing");
				};
			};

			function load(imgSrc) {　　
				//imgSrc参数是页面中要预加载的图片的路径数组，
				//如imgSrc=['img/xx.png','img/xxx.png'...],callback就是你加载完图片之后要执行的函数
				var imgs = [];
				var c = 0;
				var rate = 0;
				for(var i = 0; i < imgSrc.length; i++) {
					imgs[i] = new Image();
					imgs[i].src = imgSrc[i];
					imgs[i].onload = function() {
						c++;
						if(c == imgSrc.length) {
							$(".load-page").hide();
						}
					}
				}
			};

			function hadLoading() {
				$(".loading-pag").fadeOut();
				$(".index-main").addClass('fadein').show();
				setTimeout(function() {
					$("body").addClass("load-end");
				}, 1500);

			};
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