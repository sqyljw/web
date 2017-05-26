$(function(){

            $(".lunbo .lunbo2 #name li").mouseover(function(){
                index=$(this).index();
                n=index;
                $(this).addClass('active').siblings().removeClass('active');
                $(".lunbo .lunbo2 #pic").stop().animate({left:-index*1180+'px'});
            });

        });
         var n=0;
             timer=setInterval(st,3000);
             function st(){
                n++;
                if(n==5){
                 n=0;
                }
                $("#pic").stop().animate({left:-n*1180+'px'});
                $(".lunbo .lunbo2 #name li").eq(n).addClass('active').siblings().removeClass("active");
             }
             $(".lunbo2").hover(function(){
                 clearInterval(timer);
             },function(){
                timer=setInterval(st,3000);
             });
/*top*/
    $(function(){
            var h=$("#lunbo").height();
            $(window).scroll(function(){
                var hescroll=$(document).scrollTop();
                if(hescroll>h){
                    $("#yincang").css({
                        position:"fixed",
                        top:0,
                        left:0,
                        display:"block"
                    });

                } else{
                    $("#yincang").css("position","static");
                    $("#yincang").css("display","none");
                }
            }
            );
        });
/*回到顶部*/
        timer=null;
        window.onscroll = function(){
        //当前滚动的高度
        scrollTop=document.body.scrollTop;
        //当高度为0，则清楚计时器
        if(scrollTop<=0){
          clearInterval(timer);
        }
        }
        //点击调用计时器
         $("#right9").click(function(){
             timer=setInterval(yjj,1);
        });
        //每调用一次yjj函数，高度就会变小
        function yjj(){
            i=scrollTop;
            i-=300;
            return window.scrollTo(0,i);
        }