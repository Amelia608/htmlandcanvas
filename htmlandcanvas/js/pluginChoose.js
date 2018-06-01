var listData = [
	// group0
	[
		'http://p73n69kv5.bkt.clouddn.com/icon-group0-01.png',
		'http://p73n69kv5.bkt.clouddn.com/icon-group0-02.png',
		'http://p73n69kv5.bkt.clouddn.com/icon-group0-03.png',
		'http://p73n69kv5.bkt.clouddn.com/icon-group0-04.png',
		'http://p73n69kv5.bkt.clouddn.com/icon-group0-05.png'
	],
	// group1
	[
		//plugin group1
		'http://p73n69kv5.bkt.clouddn.com/plugin1.png',
		'http://p73n69kv5.bkt.clouddn.com/plugin2.png',
		'http://p73n69kv5.bkt.clouddn.com/plugin7.png',
		'http://p73n69kv5.bkt.clouddn.com/plugin5.png',
		"http://p73n69kv5.bkt.clouddn.com/icon-group1-05.png",
		'http://p73n69kv5.bkt.clouddn.com/plugin3.png'
	],
	// group2
	[
		'http://p73n69kv5.bkt.clouddn.com/plugin6.png',
		'http://p73n69kv5.bkt.clouddn.com/plugin8.png',
		'http://p73n69kv5.bkt.clouddn.com/plugin9.png',
		'http://p73n69kv5.bkt.clouddn.com/plugin10.png',
		'http://p73n69kv5.bkt.clouddn.com/plugin11.png',
		'http://p73n69kv5.bkt.clouddn.com/plugin12.png'
	],
	// group3
	[
		'http://p73n69kv5.bkt.clouddn.com/plugin13.png',
		'http://p73n69kv5.bkt.clouddn.com/plugin15.png',
		'http://p73n69kv5.bkt.clouddn.com/plugin16.png',
		'http://p73n69kv5.bkt.clouddn.com/plugin18.png',
		'http://p73n69kv5.bkt.clouddn.com/plugin22.png',
		'http://p73n69kv5.bkt.clouddn.com/icon-group3-01.png',
		'http://p73n69kv5.bkt.clouddn.com/icon-group3-02.png',
		'http://p73n69kv5.bkt.clouddn.com/plugin40.png'
	],
	// group4
	[
		'http://p73n69kv5.bkt.clouddn.com/plugin17.png',
		'http://p73n69kv5.bkt.clouddn.com/plugin19.png',
		'http://p73n69kv5.bkt.clouddn.com/plugin20.png',
		'http://p73n69kv5.bkt.clouddn.com/plugin21.png',
		'http://p73n69kv5.bkt.clouddn.com/plugin23.png',
		'http://p73n69kv5.bkt.clouddn.com/plugin24.png',
		'http://p73n69kv5.bkt.clouddn.com/plugin25.png',
		'http://p73n69kv5.bkt.clouddn.com/plugin26.png',
		'http://p73n69kv5.bkt.clouddn.com/plugin14.png'
	]
];

var slogans = [
	"http://p73n69kv5.bkt.clouddn.com/ccc-foot1.png",
	"http://p73n69kv5.bkt.clouddn.com/ccc-foot2.png",
	"http://p73n69kv5.bkt.clouddn.com/ccc-foot3.png",
	"http://p73n69kv5.bkt.clouddn.com/ccc-foot4.png",
	"http://p73n69kv5.bkt.clouddn.com/ccc-foot5.png",
	"http://p73n69kv5.bkt.clouddn.com/ccc-foot6.png",
	"http://p73n69kv5.bkt.clouddn.com/ccc-foot7.png"
];
var id = parseInt(getQueryString('id')),
	pluginList = ['scene_sh_on.png', 'scene_milan_on.png', 'scene_paris_on.png', 'scene_tokyo_on.png', 'scene_newyork_on.png', 'scene_london_on.png'];
if(id > pluginList.length || id < 0 || !id) {
	id = 0;
}
var $win_w, $win_h, $header_h, $foot_h, $img_box_h, box;
var bgSrc = 'http://p73n69kv5.bkt.clouddn.com/' + pluginList[id];
var imgList = [
	bgSrc,
	"http://p73n69kv5.bkt.clouddn.com/btn-complete.png",
	"http://p73n69kv5.bkt.clouddn.com/btn-update1.png",
	//拍照图icon
	"http://p73n69kv5.bkt.clouddn.com/icon_cameria_k.png",
	"http://p73n69kv5.bkt.clouddn.com/icon_cameria.png",
	//solgans
	"http://p73n69kv5.bkt.clouddn.com/ccc-foot1.png",
	"http://p73n69kv5.bkt.clouddn.com/ccc-foot2.png",
	"http://p73n69kv5.bkt.clouddn.com/ccc-foot3.png",
	"http://p73n69kv5.bkt.clouddn.com/ccc-foot4.png",
	"http://p73n69kv5.bkt.clouddn.com/ccc-foot5.png",
	"http://p73n69kv5.bkt.clouddn.com/ccc-foot6.png",
	"http://p73n69kv5.bkt.clouddn.com/ccc-foot7.png",

	//plugin group0
	'http://p73n69kv5.bkt.clouddn.com/icon-group0-01.png',
	'http://p73n69kv5.bkt.clouddn.com/icon-group0-02.png',
	'http://p73n69kv5.bkt.clouddn.com/icon-group0-03.png',
	'http://p73n69kv5.bkt.clouddn.com/icon-group0-04.png',
	'http://p73n69kv5.bkt.clouddn.com/icon-group0-05.png',
	
	//plugin group1
	'http://p73n69kv5.bkt.clouddn.com/plugin1.png',
	'http://p73n69kv5.bkt.clouddn.com/plugin2.png',
	'http://p73n69kv5.bkt.clouddn.com/plugin7.png',
	'http://p73n69kv5.bkt.clouddn.com/plugin5.png',
	"http://p73n69kv5.bkt.clouddn.com/icon-group1-05.png",
	'http://p73n69kv5.bkt.clouddn.com/plugin3.png',


	//plugin group2
	'http://p73n69kv5.bkt.clouddn.com/plugin6.png',
	'http://p73n69kv5.bkt.clouddn.com/plugin8.png',
	'http://p73n69kv5.bkt.clouddn.com/plugin9.png',
	'http://p73n69kv5.bkt.clouddn.com/plugin10.png',
	'http://p73n69kv5.bkt.clouddn.com/plugin11.png',
	'http://p73n69kv5.bkt.clouddn.com/plugin12.png',

	//plugin group3
	'http://p73n69kv5.bkt.clouddn.com/plugin13.png',
	'http://p73n69kv5.bkt.clouddn.com/plugin15.png',
	'http://p73n69kv5.bkt.clouddn.com/plugin16.png',
	'http://p73n69kv5.bkt.clouddn.com/plugin18.png',
	'http://p73n69kv5.bkt.clouddn.com/plugin22.png',
	'http://p73n69kv5.bkt.clouddn.com/icon-group3-01.png',
	'http://p73n69kv5.bkt.clouddn.com/icon-group3-02.png',
	'http://p73n69kv5.bkt.clouddn.com/plugin40.png',
	

	//plugin group4
	'http://p73n69kv5.bkt.clouddn.com/plugin17.png',
	'http://p73n69kv5.bkt.clouddn.com/plugin19.png',
	'http://p73n69kv5.bkt.clouddn.com/plugin20.png',
	'http://p73n69kv5.bkt.clouddn.com/plugin21.png',
	'http://p73n69kv5.bkt.clouddn.com/plugin23.png',
	'http://p73n69kv5.bkt.clouddn.com/plugin24.png',
	'http://p73n69kv5.bkt.clouddn.com/plugin25.png',
	'http://p73n69kv5.bkt.clouddn.com/plugin26.png',
	'http://p73n69kv5.bkt.clouddn.com/plugin14.png'
];

var locationDly = ["Shanghai", "Milan", "Paris", "Tokyo", "New York", "London"];
var rotateVal = 0; //旋转值  
var scaleVal = 1; //缩放值  
var cFlag = false; //拍照上传标志

var catHammer = {
	init: function(objHammer) {
		objHammer.add(new Hammer.Pan({
			threshold: 0,
			pointers: 0
		}));
		objHammer.add(new Hammer.Swipe()).recognizeWith(objHammer.get('pan'));
		objHammer.add(new Hammer.Rotate({
			threshold: 0
		})).recognizeWith(objHammer.get('pan'));
		objHammer.add(new Hammer.Pinch({
			threshold: 0
		})).recognizeWith([objHammer.get('pan'), objHammer.get('rotate')]);

		objHammer.add(new Hammer.Tap({
			event: 'doubletap',
			taps: 2
		}));
		objHammer.add(new Hammer.Tap());
	},
	//拖动  
	drag: function(objHammer, element, boxW, boxH) {
		var START_X = 0,
			START_Y = 0,
			dX = 0,
			dY = 0,
			offX,
			offY;

		objHammer.on('panstart panmove', function(event) { //拖动开始、移动  
			offX = boxW - parseInt($(element).outerWidth());
			offY = boxH - parseInt($(element).outerHeight());
			event.preventDefault();
			dX = START_X + event.deltaX;
			dY = START_Y + event.deltaY;
			if(dX < 0) {
				// dX = 0;
			}
			if(dY < 0) {
				// dY = 0;
			}
			if(dX >= offX) {
				//				console.log("右侧超出范围:dx==="+dX+"offX==="+offX);
				// dX = offX;
			}
			if(dY >= offY) {
				//				console.log("底部侧超出范围:dx==="+dY+"offX==="+offY);
				dY = offY;
			}
			element.style.left = dX + 'px';
			element.style.top = dY + 'px';
		});
		objHammer.on('panend', function(event) { //拖动结束  
			event.preventDefault();
			START_X += event.deltaX;
			START_Y += event.deltaY;
			//			console.log("START_X===" + START_X);
			//			console.log("START_Y===" + START_Y);
		});
	},
	//旋转  
	setrotate: function(objHammer, element) {
		var initAngle = 0;
		objHammer.on('rotatestart rotatemove', function(event) {
			event.preventDefault();
			rotateVal = initAngle + event.rotation
			element.style.transform = 'rotate(' + rotateVal + 'deg) scale(' + scaleVal + ')';
			//element.rotate(rotateVal * Math.PI / 180);
		});
		objHammer.on('rotateend', function(event) {
			event.preventDefault();
			initAngle = initAngle + event.rotation;
		})
	},
	//缩放  
	setScale: function(objHammer, element) {
		var initScale = 1;
		var currentScale;
		objHammer.on('pinchstart pinchmove ', function(event) {
			event.preventDefault();
			currentScale = event.scale - 1;
			currentScale = initScale + currentScale
			scaleVal = currentScale;
			element.style.transform = 'rotate(' + rotateVal + 'deg) scale(' + scaleVal + ')';
		});
		objHammer.on('pinchend', function(event) {
			event.preventDefault();
			initScale = currentScale;
		})
	},
	//解除事件  
	setoff: function(objHammer) {
		// objHammer.off("");  
		console.log('off');
		objHammer.off("panstart panmove panend pinchstart pinchmove  pinchend rotatestart rotatemove pinchend")
	}
}

//自定义一个方法获取超链接的参数
function getQueryString(name) {
	var reg = new RegExp("(^|&)" + name + "=([^&]*)(&|$)", "i");
	var r = window.location.search.substr(1).match(reg);
	if(r != null) return decodeURIComponent(r[2]);
	return null;
}


window.onload = function() {
	//变量值获取
	$win_w = $(window).width();
	$win_h = $(window).height();
	$header_h = $('.img-view').height(); //顶部配件区域的height
	$foot_h = $('#foot-box').height(); //底部操作栏height
	$img_box_h = $('#main-plugin').height(); //绘图区域的高度
	$img_box_w = $('#main-plugin').width(); //绘图区域的宽度
	box = document.getElementById('main-plugin');
}
$(function() {
	var sloganRandom = parseInt((slogans.length) * Math.random());
//	console.log(sloganRandom);
	$('.main-img').attr('src', 'http://p73n69kv5.bkt.clouddn.com/' + pluginList[id]);
	$('#slogan-img').attr('src', slogans[sloganRandom]);
	$("#dly-location").html(locationDly[id]);



	load(imgList, loadEnd);

	// 初始化plugin tap
	var swiperPluginTap = new Swiper('.plugin-tap1 .swiper-container', {
		slidesPerView: 5,
		slidesPerColumn: 1,
		paginationClickable: true,
		spaceBetween: 0
	});
	var initPerColumn = $('.content1  .swiper-slide').length <= 6 ? 1 : 2;

	//配件种类选择
	$(".plugin-tap1").on('click', '.swiper-slide', function() {
		var pluginId = $(this).attr("data-id"),
			pluginWp = '.content' + pluginId + '  .swiper-container',
			pluginLi = $('.content' + pluginId + '  .swiper-slide').length <= 6 ? 1 : 2,
			pluginName = 'swiperCnt' + pluginId;
		$(this).addClass('active').siblings().removeClass('active');
		$('.plugin-content  .content' + pluginId).show().siblings().hide();

		initSwiper(pluginName, pluginWp, pluginLi);
	});

	initSwiper('swiperCnt1', '.content1 .swiper-container', initPerColumn);



	//配件选择
	$('.plugin-content').on('click', '.swiper-slide', function() {
		if(!cFlag) {
			remindMsg('.msg-msk', "请先拍照上传", 1);
			return false;
		}
		var img_index = 1,
			plugin_group = parseInt($(this).parent().attr('data-group')),
			plgun_num = parseInt($(this).attr('data-num')),
			hammer_name = "hammer" + img_index,
			current_src = listData[plugin_group][plgun_num],
			creat_div = document.createElement('div'),
			creat_span = document.createElement('span'),
			current_img = document.createElement('img');
		$(this).addClass('active').siblings().removeClass('active');
		creat_div.className = 'ps-box';
		creat_span.className = 'close-btn';
		// creat_span.innerHTML = '&times';
		creat_div.id = 'ps-box' + img_index;
		current_img.src = current_src;
		creat_div.appendChild(current_img);
		creat_div.appendChild(creat_span);
		box.appendChild(creat_div);
		$(creat_div).addClass('active').siblings().removeClass('active');
		//新添加的配件实例化Hammer
		hammer_name = new Hammer(creat_div);
		initHammer(hammer_name, creat_div, $img_box_w, $img_box_h);
	});

	//给配件添加删除事件
	$('#main-plugin').on('touchend', '.close-btn', function() {
		$(this).parent().remove();
	});


	$('#main-plugin').click(function(event) {
		var target = event.target || event.srcElement;
		if($(target).is('.main-img') || $(target).is('#myImage')) {
			$('.ps-box').removeClass('active');
		}

	});

	// 点击保存图片功能
	$('.btn-complete').click(function() {
		if(!cFlag) {
			remindMsg('.msg-msk', '快来上传吧...', 1);
			return false;
		}
		loadSt("图片生成中......");
		$('.main-plugin .ps-box').removeClass('active');
		$('canvas').remove();
		var canvas2 = document.createElement("canvas");
		var _canvas = document.getElementById("main-plugin");
		var w = parseInt(window.getComputedStyle(_canvas).width);
		var h = parseInt(window.getComputedStyle(_canvas).height);
		//将canvas画布放大若干倍，然后盛放在较小的容器内，就显得不模糊了
		canvas2.width = w * 3;
		canvas2.height = h * 3;
		canvas2.style.width = w + "px";
		canvas2.style.height = h + "px";
		//可以按照自己的需求，对context的参数修改,translate指的是偏移量
		//  var context = canvas.getContext("2d");
		//  context.translate(0,0);
		var context = canvas2.getContext("2d");
		// context.scale(2, 2);
		html2canvas(document.querySelector('#main-plugin'), {
			canvas: canvas2,
			useCORS: true,
			logging: true
		}).then(function(canvas) {
			canvas.setAttribute('id', 'thecanvas');
			$('#canvas-wp').append(canvas);
			var oCanvas = document.getElementById("thecanvas");
			// 获取图片资源
			var img_data1 = Canvas2Image.saveAsPNG(oCanvas, true).getAttribute('src');
			//canvas转换成url，然后利用a标签的download属性，直接下载，绕过上传服务器再下载
			$('.main-plugin div,.main-img').remove();
			$('.main-plugin #last-img').attr('src', img_data1).show();
			$('#last-show').attr('src', img_data1);
			$('#main-plugin,.foot-wrap').hide();
			$('.complete-wrap').show();
			$(".loading-msk").show();
			$(".loading-content").show();
			setTimeout(function() {
				html2ToCanvas();
				$("#footer-pro").show();
			}, 1000);

		});

	});

});

//生成最后的分享图
function html2ToCanvas() {
	$('#canvas-wp2').empty();
	var canvas2 = document.createElement("canvas");
	var _canvas = document.getElementById("top-show");
	var w = parseInt(window.getComputedStyle(_canvas).width);
	var h = parseInt(window.getComputedStyle(_canvas).height);
	//将canvas画布放大若干倍，然后盛放在较小的容器内，就显得不模糊了
	canvas2.width = w * 3;
	canvas2.height = h * 3;
	canvas2.style.width = w + "px";
	canvas2.style.height = h + "px";
	var context = canvas2.getContext("2d");
	// context.scale(2, 2);
	html2canvas(document.querySelector('#top-show'), {
		canvas: canvas2,
		useCORS: true,
		logging: true
	}).then(function(canvas) {
		canvas.setAttribute('id', 'thecanvas2');
		//						document.body.appendChild(canvas);
		$('#canvas-wp2').append(canvas);
		var oCanvas = document.getElementById("thecanvas2");
		// 获取图片资源
		var img_data2 = Canvas2Image.saveAsPNG(oCanvas, true).getAttribute('src');
		//		console.log(img_data2);
		//canvas转换成url，然后利用a标签的download属性，直接下载，绕过上传服务器再下载
		$('#top-show').empty();
		var SHOW = document.createElement("img");
		SHOW.setAttribute('src', img_data2);
		SHOW.className="share-show";
		$('#top-show').append(SHOW);
		$('#main-plugin,.foot-wrap').hide();
		$('.complete-wrap').show();
		$('body').removeClass('stopScroll');
		loadEnd();
	});
}

//按钮点击效果
$(document).on("touchstart", ".ps-box", function(e) {
	$(this).addClass('active').siblings().removeClass('active');
});

//初始化swiper
function initSwiper(name, wrap, perColumn) {
	var name = new Swiper(wrap, {
		pagination: wrap + '   .swiper-pagination',
		slidesPerView: 5,
		slidesPerGroup: 5,
		slidesPerColumn: 1,
		paginationClickable: true,
		spaceBetween: 0,
		slidesPerColumnFill: 'row',
		breakpoints: {
			//当宽度小于等于480
			320: {
				slidesPerView: 5,
				slidesPerColumn: 1
			}
		}
	});
}

// 初始化元素Hammer
function initHammer(hammer, obj, boxW, boxH) {
	catHammer.init(hammer); //初始化  
	catHammer.drag(hammer, obj, boxW, boxH); //拖曳  
	catHammer.setrotate(hammer, obj); //旋转  
	catHammer.setScale(hammer, obj); //缩放
}

//拍照上传
function selectFileImage(fileObj) {
	var file = fileObj.files['0'];
	//图片方向角 added by lzk  
	var Orientation = null;
	if(file) {
		//console.log("正在上传,请稍后...");
		$(".loading-content p").html("照片上传中......");
		$(".loading-msk,.loading-content").show();
		var rFilter = /^(image\/jpeg|image\/png)$/i; // 检查图片格式  
		if(!rFilter.test(file.type)) {
			//showMyTips("请选择jpeg、png格式的图片", false);  
			return;
		}
		//获取照片方向角属性，用户旋转控制  
		EXIF.getData(file, function() {
			// alert(EXIF.pretty(this));  
			EXIF.getAllTags(this);
			//alert(EXIF.getTag(this, 'Orientation'));   
			Orientation = EXIF.getTag(this, 'Orientation');
			//return;  
		});
		
		
		var oReader = new FileReader();
		oReader.onload = function(e){
			var image = new Image();
			image.src = e.target.result;
			image.onload = function() {
				var expectWidth = this.naturalWidth;
				var expectHeight = this.naturalHeight;
				if(this.naturalWidth > this.naturalHeight && this.naturalWidth > 800) {
					expectWidth = 800;
					expectHeight = expectWidth * this.naturalHeight / this.naturalWidth;
				} else if(this.naturalHeight > this.naturalWidth && this.naturalHeight > 1200) {
					expectHeight = 1200;
					expectWidth = expectHeight * this.naturalWidth / this.naturalHeight;
				}
				var canvas = document.createElement("canvas");
				var ctx = canvas.getContext("2d");
				canvas.width = expectWidth;
				canvas.height = expectHeight;
				ctx.drawImage(this, 0, 0, expectWidth, expectHeight);
				var base64 = null;
				//alert(Orientation);  
				if(Orientation != "" && Orientation != 1) {
					//alert('旋转处理');  
					switch(Orientation) {
						case 6: //需要顺时针（向左）90度旋转  
							//								alert('需要顺时针（向左）90度旋转');
							rotateImg(this, 'left', canvas);
							break;
						case 8: //需要逆时针（向右）90度旋转  
							//								alert('需要顺时针（向右）90度旋转');
							rotateImg(this, 'right', canvas);
							break;
						case 3: //需要180度旋转  
							//								alert('需要180度旋转');
							rotateImg(this, 'right', canvas); //转两次  
							rotateImg(this, 'right', canvas);
							break;
					}
				}
				base64 = canvas.toDataURL("image/jpeg", 0.8);
				console.log('图片上传完成');
				$(".loading-msk,.loading-content").hide();
				$(".loading-content p").html("");
				$('.cameria-btn').hide();
				$('#myImage').show();
				cFlag = true;
				$("#myImage").attr("src", base64);
			};
		};
		oReader.readAsDataURL(file);

	}
}

//对图片旋转处理 added by lzk  
function rotateImg(img, direction, canvas) {
	//alert(img);  
	//最小与最大旋转方向，图片旋转4次后回到原方向    
	var min_step = 0;
	var max_step = 3;
	//var img = document.getElementById(pid);    
	if(img == null) return;
	//img的高度和宽度不能在img元素隐藏后获取，否则会出错    
	var height = img.height;
	var width = img.width;
	//var step = img.getAttribute('step');    
	var step = 2;
	if(step == null) {
		step = min_step;
	}
	if(direction == 'right') {
		step++;
		//旋转到原位置，即超过最大值    
		step > max_step && (step = min_step);
	} else {
		step--;
		step < min_step && (step = max_step);
	}
	//旋转角度以弧度值为参数    
	var degree = step * 90 * Math.PI / 180;
	var ctx = canvas.getContext('2d');
	switch(step) {
		case 0:
			canvas.width = width;
			canvas.height = height;
			ctx.drawImage(img, 0, 0);
			break;
		case 1:
			canvas.width = height;
			canvas.height = width;
			ctx.rotate(degree);
			ctx.drawImage(img, 0, -height);
			break;
		case 2:
			canvas.width = width;
			canvas.height = height;
			ctx.rotate(degree);
			ctx.drawImage(img, -width, -height);
			break;
		case 3:
			canvas.width = height;
			canvas.height = width;
			ctx.rotate(degree);
			ctx.drawImage(img, -width, 0);
			break;
	}
}
//提示框弹出
function remindMsg(wrap, msg, time) {
	var time = time * 1000;
	$(wrap).html('');
	$(wrap).html(msg).fadeIn();
	setTimeout(function() {
		$(wrap).fadeOut();
	}, time);
}

//判断多张图片加载完成
function load(imgs, callback) {　　
	var img = [],
		flag = 0,
		mulitImg = imgs;
	var imgTotal = mulitImg.length;
	for(var i = 0; i < imgTotal; i++) {
		img[i] = new Image()
		img[i].src = mulitImg[i]
		img[i].onload = function() {
			//第i张图片加载完成
			flag++
			if(flag == imgTotal) {
				//全部加载完成
				if(callback) {
					callback();
				}
			}
		}
	}
};

//加载完成
function loadEnd() {
	$(".loading-msk,.loading-content").fadeOut();
	$(".loading-content p").html("");
}

//加载中....
function loadSt(msg) {
	$(".loading-msk,.loading-content").fadeIn();
	$(".loading-content p").html(msg);
}