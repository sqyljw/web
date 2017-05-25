window.onload=function(){
   top1();
   setPro();
   setCity(document.getElementById("pro").value);
   setArea();
   cityb();
   cityc();
   a();
   b();
   c();
   joba();
   jobb();
   ja();
   jb();
   anniu();
}
function top1(){
	document.getElementById("top1").onclick=function(){
		window.history.go(-1);
	}
}

var pca={
				"浙江省":{
								"杭州市":["上城区","下城区","西湖区"],
								"舟山市":["临城区","定海区"],
								"温州市":[" 鹿城区","龙湾区","瓯海区"],
								"宁波市":["北仑区"," 鄞州区","海曙区","江东区","江北区"]
								},
				"直辖市":{
					            "北京市":["东城区","西城区","朝阳区"],
								"上海市":["浦东新区","徐汇"],
								"天津市":[" 和平区","河东区","河西区"],
								"重庆市":["万州区"," 涪陵区","渝中区","大渡口区"]
				},
				"广东省":{
								"深圳市":["南山区","宝安区"],
								"广州市":["越秀区","海珠区","荔湾区","天河区"],
								"东莞市":["莞城","东城","南城","万江"]
							},

				"安徽省":{
								"合肥市":["蜀山区","高新区","滨湖新区"],
								"芜湖市":["镜湖区","三山区"]
								},

				"江西省":{
								"南昌市":["东湖区","西湖区"],
								"景德镇市":["珠山区","昌江区"]
							}
			 };
function setPro(){
	for(var key in pca){
		var opE=new Option(key,key);
		document.getElementById("pro").add(opE);
	}
}
function setCity(seletedPro){
	document.getElementById("city").innerHTML="";
	for(var key in pca[seletedPro]){
		var opS="<option value='"+key+"'>"+key+"</option>";
		document.getElementById("city").innerHTML+=opS;
	}

	setArea();
}

function setArea(){
	document.getElementById("area").length=0;
	var seletedPro=document.getElementById("pro").value
	var seletedCity=document.getElementById("city").value
	for(i=0;i<pca[seletedPro][seletedCity].length;i++){
		var opE=new Option(pca[seletedPro][seletedCity][i],pca[seletedPro][seletedCity][i]);
		document.getElementById("area").add(opE);
	}
}

function cityb(){//点击显示
	document.getElementById("input_city").onclick=function(){
		document.getElementById("city_2").className="citya";
	}
}
function cityc(){//点击显示
	document.getElementById("city_s").onclick=function(){
		document.getElementById("input_city").value=document.getElementById("pro").value+document.getElementById("city").value+document.getElementById("area").value;
		document.getElementById("city_2").className="city";
	}
}
function a(){//选择后隐藏
	var sex=document.getElementsByClassName("x_sex_n");
	for(var i=0;i<sex.length;i++){
		sex[i].onclick=function(){
			document.getElementById("sex").value=this.innerHTML;
			document.getElementById("sex_s").className="x_sex";
		}
	}
}
function b(){//点击显示
	document.getElementById("sex").onclick=function(){
		document.getElementById("sex_s").className="disb";
	}
}
function c(){//点击取消隐藏
	var cc=document.getElementById("x_sex_q");
	cc.onclick=function(){
		document.getElementById("sex_s").className="x_sex";
	}
}


function joba(){//选择后隐藏
	var sex=document.getElementsByClassName("x_job_x");
	for(var i=0;i<sex.length;i++){
		sex[i].onclick=function(){
			document.getElementById("input_job").value=this.innerHTML;
			document.getElementById("job_s").className="job";
		}
	}
}
function jobb(){//点击显示
	document.getElementById("input_job").onclick=function(){
		document.getElementById("job_s").className="disb";
	}
}



function ja(){//选择后隐藏
	var sex=document.getElementsByClassName("x_j_x");
	for(var i=0;i<sex.length;i++){
		sex[i].onclick=function(){
			document.getElementById("input_j").value=this.innerHTML;
			document.getElementById("j_s").className="j_";
		}
	}
}
function jb(){//点击显示
	document.getElementById("input_j").onclick=function(){
		document.getElementById("j_s").className="disb";
	}
}
function anniu(){
	document.getElementById("anniu").onclick=function(){
		    alert("您好！后续页面，在我们加入贵公司，您将会看到更加完好的效果")
	};
}