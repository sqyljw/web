   window.onload=function(){

        


   /* function showDate(){
          var d=new Date();
          var yy=d.getFullYear();
          var mm=d.getMonth()+1;
          var dd=d.getDate();
          var h=d.getHours();
          var n=d.getMinutes();
          var s=d.getSeconds();
          if(h<10){
              h="0"+h;
          }
          if(n<10){
              n="0"+n;
          }
          if(s<10){
              s="0"+s;
          }
          var result=yy+"年"+mm+"月"+dd+"日"+h+":"+n+":"+s;
          document.getElementById("myTime").innerHTML=result;
      }

        setInterval(showDate,1000);*/

        //轮播图
        var left=document.getElementById("left");
        var right=document.getElementById("right");
        var box1=document.getElementById("box1");
        var spans=box2.getElementsByTagName("span");
        var box=document.getElementById("box");

        var k=0,num=0,num1=0,n=1,j=0;
    //左右点击效果
        right.onclick=function(){
            
            num1=-k*720; 
            if(k==5){k=-1}  
            k++;
        }

        left.onclick=function(){
            if(j==-1){j=5}  
            num1=-j*720; 
            j--;          
        }
    fun();
    //经过点点的样式，图片的移动
            for(var i=0;i<spans.length;i++){
                spans[i].index=i;
                spans[i].onmouseover=function(){
                    
                    
                    for(var j=0;j<spans.length;j++){
                        spans[j].className="";
                    }
                    this.className="current";
                    num1=-720*(this.index);
                }
            } 
            fun(); 
    //图片的轮播
             var box1=document.getElementById("box1");
               function pic(){
                  num1=-720*n;
                   n++
                  if(n==6){n=0}

                 setInterval(function(){
                    num=num+(num1-num)/30;
                    box1.children[0].style.left=num+"px";
              },30);
            }
             startPic(); 

    //清除定时器函数

      function stopPic(){
                clearInterval(timer1);
              }
     function startPic(){
                timer1=setInterval(pic,2000);   
              }
      box.onmouseover=function(){
                stopPic();
              }
      box.onmouseout=function(){
                startPic();
              }
      
    //定时器函数

            function fun(){
                timer=setInterval(function(){
                  num=num+(num1-num)/30;
                  box1.children[0].style.left=num+"px";
              },30);
}
}