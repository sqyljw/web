$.fn.extend({
	myZoomMaxImgSrc:{"active":""},
	myZoom:function(tomaxDiv,maxDiv,maxImg,middImg){
	//(1)用户的选择：
		 //在中图容器上进行鼠标移动：先进入/后移动
		$(this).mouseenter(function(event){
			
			//(2) 信息的载体：
			// (2.1)中图容器内，出现了一个半透明层
			// (2.2)大图容器内，显示了一张放大的图
			tomaxDiv.css("zIndex",100)
			maxDiv.css("zIndex",100)	
				//将大图路径载入

				maxImg.attr("src",$(this).myZoomMaxImgSrc['active'])
		}).mousemove(function (event){
			//(3) 载体的表达形式
			//	 (3.1)中图容器内的放大镜层，在一定范围内，会跟随鼠标移动
			//	 (3.2)大图容器内的大图：会跟随鼠标，做相反移动

			//鼠标：在window的绝对坐标
			var nx=event.pageX;
			var ny=event.pageY;
			//中图层：在window的绝对坐标
			var middX=$(this).offset().left;
			var middY=$(this).offset().top;
			//得到当前鼠标，在中图层的坐标
			var l=nx-middX
			var t=ny-middY
			//将该坐标 减去 放大镜层本身 宽高的一半
			l=l-tomaxDiv.outerWidth()/2
			t=t-tomaxDiv.outerHeight()/2
			
			l=Math.max(l,0);//约束范围
			t=Math.max(t,0);
			l=Math.min(l,$(this).innerWidth()-tomaxDiv.outerWidth());
			t=Math.min(t,$(this).innerHeight()-tomaxDiv.outerHeight());
			tomaxDiv.css({"left":l+"px","top":t+"px"});//移动放大镜


			//比例：
			//大图的宽/中图的宽度
			//大图的高/中图的高
			var l2=-1*l*(maxImg.outerWidth()/middImg.outerWidth());
			var t2=-1*t*(maxImg.outerHeight()/middImg.outerHeight());
			maxImg.css({"left":l2+"px","top":t2+"px"});//移动大图

		}).mouseleave(function(){
			tomaxDiv.css("zIndex",-100)
			maxDiv.css("zIndex",-100)
		})
	}
})