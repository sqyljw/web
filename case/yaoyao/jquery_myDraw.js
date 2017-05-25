$.fn.extend({
	myDraw:function (prize,cjImg,fun){

		var pDeg=360/prize.length;//每个奖项多少度
		var p_i=0;//点击的次数
		var prizeIndex;//奖项序号
		var nowDeg;//当前旋转到的度数
		var clickTrue=false;//是否在抽奖中
		var rMax=1/100;//定义1等奖 中奖的几率
		var r_i=0;//1等奖一共被抽取过几次

		$(this).click(function (){
			if(clickTrue==true){//判断是否在抽奖中
				return false;
			}
			clickTrue=true;//将是否抽奖的变量，设置为真

			p_i++;//累积点击次数
			prizeIndex=Math.floor(Math.random()*prize.length);//随机获得奖项序号

			while(true){//用循环，处理1等奖的约束
				if(prizeIndex==0){//若抽中的是1等奖
					//若 (原1等奖次数+1) / 一共抽的次数 < 约束的比例
					if((r_i+1)/p_i < rMax){//满足义务条件：跳出循环
						r_i++;//将1等奖获得次数 累加
						break;
					}else{
						prizeIndex=Math.floor(Math.random()*prize.length);//随机获得奖项序号
					}
				}else{//若抽取的不是1等奖：跳出循环
					break;
				}
			}

			//当前需要旋转到的度数=奖项序号*每个奖项多少度
			nowDeg=(prizeIndex*pDeg+pDeg/2 +360*p_i*10)*-1

			//进行旋转和动画
			cjImg.css("transform","rotate("+nowDeg+"deg)")
			cjImg.css("transition","all 4.8s ease")

		})

		//对旋转元素，绑定动画结束事件监听器
		cjImg.bind(
			"transitionend",
			function (){
				clickTrue=false;//将是否抽奖中的变量，设置为false

				fun(prizeIndex,prize,nowDeg);//调用了 外部传入的匿名函数
			}
		)
	}

})