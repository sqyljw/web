$.fn.extend({
	//进行实际图片移动
	changeImgMove:function(val,listImg,listImgMove){
		//判断下标是否存在
		if(!$(this).changeImgNum_i[listImgMove.attr("class")]){
			$(this).changeImgNum_i[listImgMove.attr("class")]=0;
		}

		//自动累计的序号
		//点击右边按钮，让图片容器，左移动
		//将图片容器 marginLeft 向 更小的负数 改变
		if(val<0){
			$(this).changeImgNum_i[listImgMove.attr("class")]++;

			if($(this).changeImgNum_i[listImgMove.attr("class")]==listImg.length){
				$(this).changeImgNum_i[listImgMove.attr("class")]=0
			}

		//点击左边按钮，让图片容器，右移动
		//将图片容器 marginLeft 趋向 0 改变
		}else{
			$(this).changeImgNum_i[listImgMove.attr("class")]--;
			if($(this).changeImgNum_i[listImgMove.attr("class")]<0){
				$(this).changeImgNum_i[listImgMove.attr("class")]=listImg.length-1;
			}
		}

		//得到图片宽度
		var imgW=listImg.eq(0).outerWidth();
		//得到移动 到的位置
		var nl=imgW*$(this).changeImgNum_i[listImgMove.attr("class")]*-1

		//移动图片层
		listImgMove.animate({"marginLeft":nl+"px"},1000)
	},
	//定义存放句柄的属性
	changeImgAuto_i:{},
	//定义存放序号的属性
	changeImgNum_i:{},
	//定义存放 是否要自动轮播
	changeImgAutoTrue:{},

	//自动，切换图片
	changeImgAuto:function(listImg,listImgMove){
		//存储是否自动轮播
		$(this).changeImgAutoTrue[listImgMove.attr("class")]=true;

		$(this).changeImgMove(-1,listImg,listImgMove);//执行了图片移动

		//存储句柄的集合的下标，使用的是：图片容器的class名称
		$(this).changeImgAuto_i[listImgMove.attr("class")]=setTimeout(function(){//调用延时器，2秒后，再次调用自己
			$(this).changeImgAuto(listImg,listImgMove);
		},2000)
	},

	//为某些元素，绑定手工切换图片
	changeImg:function(val,listImg,listImgMove){
		$(this).click(function(){
				$(this).changeImgMove(val,listImg,listImgMove);
		}).mouseenter(function(){//鼠标进入右按钮，终止定时器
			if($(this).changeImgAutoTrue[listImgMove.attr("class")]==true){
				//存储句柄的集合的下标，使用的是：图片容器的class名称
				clearTimeout($(this).changeImgAuto_i[listImgMove.attr("class")]);
			}
		}).mouseleave(function(){//鼠标离开右按钮，启动定时器
			if($(this).changeImgAutoTrue[listImgMove.attr("class")]==true){
				$(this).changeImgAuto(listImg,listImgMove);
			}
		})
	}
})