<!DOCTYPE html>
<html>

	<head>
		<meta charset="UTF-8">
		<title>hotwind夏日时装周</title>
		<meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1,maximum-scale=1,user-scalable=no" />
		<meta name="sharecontent" data-msg-img="http://p73n69kv5.bkt.clouddn.com/index-light-orang.png" data-msg-title="生活是你的秀场，你是什么时尚态度？" data-msg-content="生活是你的秀场，你是什么时尚态度？" data-msg-callBack="" data-line-img="http://p73n69kv5.bkt.clouddn.com/index-light-orang.png" data-line-title="生活是你的秀场，你是什么时尚态度？" data-line-callBack="" />
		<meta name="msapplication-tap-highlight" content="no" />
		<link rel="stylesheet" type="text/css" href="css/common.css" />
		<link rel="stylesheet" type="text/css" href="css/font-awesome.min.css" />
		<link rel="stylesheet" type="text/css" href="css/style.css" />
		<link rel="stylesheet" type="text/css" href="css/swiper.css" />
		<script src="js/jquery-2.0.3.min.js"></script>
		<script src="js/swiper2.min.js"></script>
		<style type="text/css">
			html,
			body {
				min-height: 100%;
			}
			
			body {
				background: url('http://p73n69kv5.bkt.clouddn.com/choose-bg.jpg') no-repeat center center;
				background-size: 100% 100%;
			}
		</style>
	</head>

	<body>
		<div class="icon-music" id="music">
			<audio id="Jaudio" class="media-audio" src="http://p73n69kv5.bkt.clouddn.com/95_min.mp3" preload loop="loop"></audio>
		</div>
		<section class="main-choose">
			<div class="bg-choose-wp">
				<!-- Swiper -->
				<!--<div class="swiper-container gallery-thumbs">
					<div class="swiper-wrapper" id="swiper-choose">
						<div class="swiper-slide" data-url="scene_sh" data-id="0">上海</div>
						<div class="swiper-slide" data-url="scene_milan" data-id="1">米兰</div>
						<div class="swiper-slide" data-url="scene_paris" data-id="2">巴黎</div>
						<div class="swiper-slide" data-url="scene_tokyo" data-id="3">东京</div>
						<div class="swiper-slide" data-url="scene_newyork" data-id="4">纽约</div>
						<div class="swiper-slide" data-url="scene_london" data-id="5">伦敦</div>
					</div>
				</div>-->
				<div class="item active" data-url="scene_sh" data-id="0">上海</div>
				<div class="item" data-url="scene_milan" data-id="1">米兰</div>
				<div class="item" data-url="scene_paris" data-id="2">巴黎</div>
				<div class="item" data-url="scene_tokyo" data-id="3">东京</div>
				<div class="item" data-url="scene_newyork" data-id="4">纽约</div>
				<div class="item" data-url="scene_london" data-id="5">伦敦</div>
			</div>

			<div class="scene-show text-center">
				<!-- Swiper -->
				<div class="swiper-container gallery-top" style="margin:20px auto; width: 70%;">
					<div class="swiper-wrapper">
						<div class="swiper-slide" data-id="0"><img src="http://p73n69kv5.bkt.clouddn.com/scene_sh.png" /></div>
						<div class="swiper-slide" data-id="1"><img src="http://p73n69kv5.bkt.clouddn.com/scene_milan.png" /></div>
						<div class="swiper-slide" data-id="2"><img src="http://p73n69kv5.bkt.clouddn.com/scene_paris.png" /></div>
						<div class="swiper-slide" data-id="3"><img src="http://p73n69kv5.bkt.clouddn.com/scene_tokyo.png" /></div>
						<div class="swiper-slide" data-id="4"><img src="http://p73n69kv5.bkt.clouddn.com/scene_newyork.png" /></div>
						<div class="swiper-slide" data-id="5"><img src="http://p73n69kv5.bkt.clouddn.com/scene_london.png" /></div>
					</div>
					<!-- Add Arrows -->
					<!--<div class="swiper-button-next swiper-button-white"></div>
					<div class="swiper-button-prev swiper-button-white"></div>-->
				</div>
				<a class="btn-sure-go"><img src="http://p73n69kv5.bkt.clouddn.com/btn-sure-go.png" width="100%"></a>
			</div>
		</section>
		<div class="loading-msk"></div>
		<div class="loading-content text-center">
			<i class="fa fa-spinner fa-pulse fa-2x fa-fw margin-bottom" style="color: #fff;margin-bottom:10px ;"></i>
			<p class="text-center" style="color:#fff;font-size: 14px;">数据加载中......</p>
		</div>
		<script>
			var data_id = 0;

			function audioAutoPlay(id) {
				var audio = document.getElementById(id);
				audio.play();
				document.addEventListener("WeixinJSBridgeReady", function() {
					audio.play();
				}, false);
			}

			function load() {　　
				var img = [],
					flag = 0,
					mulitImg = [
						"http://p73n69kv5.bkt.clouddn.com/scene_sh.png",
						"http://p73n69kv5.bkt.clouddn.com/scene_milan.png",
						"http://p73n69kv5.bkt.clouddn.com/scene_paris.png",
						"http://p73n69kv5.bkt.clouddn.com/scene_tokyo.png",
						"http://p73n69kv5.bkt.clouddn.com/scene_newyork.png",
						"http://p73n69kv5.bkt.clouddn.com/scene_london.png"
					];
				var imgTotal = mulitImg.length;
				for(var i = 0; i < imgTotal; i++) {
					img[i] = new Image()
					img[i].src = mulitImg[i]
					img[i].onload = function() {
						//第i张图片加载完成
						flag++
						if(flag == imgTotal) {
							//全部加载完成
							$(".loading-msk,.loading-content").hide();
						}
					}
				}
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
				load();
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
				var galleryTop = new Swiper('.gallery-top', {
					nextButton: '.swiper-button-next',
					prevButton: '.swiper-button-prev',
					spaceBetween: 10,
					on: {
						slideChange: function() {
							//							alert(this.activeIndex);
							var activeIndex = this.activeIndex
							$(".bg-choose-wp .item").eq(activeIndex).addClass("active").siblings().removeClass("active");
						}
					}
				});
				//				var galleryThumbs = new Swiper('.gallery-thumbs', {
				//					spaceBetween: 10,
				//					centeredSlides: true,
				//					slidesPerView: 5,
				//					touchRatio: 0.2,
				//					slideToClickedSlide: true
				//				});
				//				galleryTop.params.control = galleryThumbs;
				//				galleryThumbs.params.control = galleryTop;
				$(".bg-choose-wp .item").on("click", function() {
					var index = $(this).index();
					$(this).addClass("active").siblings().removeClass("active");
					galleryTop.slideTo(index, 500, false); //切换到第一个slide，速度为1秒
					//					console.log(index);
				});
				$('.btn-sure-go').click(function(event) {
					//					console.log(galleryTop.activeIndex);
					data_id = galleryTop.activeIndex;
					window.location.href = 'choosePlugin.php?id=' + data_id;
				});
			})
		</script>
	</body>

<?php
require_once "jssdk.php";
$jssdk = new JSSDK("wxd893ad8a75aaae3a", "e61b1d51e2c74c0ba9e8a27adc2e724b");
$signPackage = $jssdk->GetSignPackage();
?>
<script src="http://res.wx.qq.com/open/js/jweixin-1.0.0.js"></script>
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
