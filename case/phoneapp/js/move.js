window.onload=function(){
	f();
	e();
	d();
	c();
	b();
	a();
	anniu();
    top1();
}
//性别
function top1(){
	document.getElementById("top1").onclick=function(){
		alert("您好！这已经是第一页")
	}
}

function a(){//选择后隐藏
	var sex=document.getElementsByClassName("x_sex_n");
	for(var i=0;i<sex.length;i++){
		sex[i].onclick=function(){
			document.getElementById("sex_z").innerHTML=this.innerHTML+" 〉";
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
//工作状态
function d(){//选择后隐藏
	var state=document.getElementsByClassName("x_state_n");
	for(var i=0;i<state.length;i++){
		state[i].onclick=function(){
			document.getElementById("state").innerHTML=this.innerHTML+" 〉";
			document.getElementById("state_s").className="state";
		}
	}
}
function e(){//点击显示
	document.getElementById("state").onclick=function(){
		document.getElementById("state_s").className="state_b";
	}
}
function f(){//点击取消隐藏
	var cc=document.getElementById("x_state_q");
	cc.onclick=function(){
		document.getElementById("state_s").className="state";
	}
}

function anniu(){
	document.getElementById("anniu").onclick=function(){
		     window.location.href="2.html";
	};
}