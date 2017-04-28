var index_i;
var play_i=0;
var set_i;
$(function(){
	autoPlay();
	mousePlay();
})
function mousePlay(){
	$(".texe-one").mouseenter(function (){
	   clearTimeout(set_i);
	   index_i=$(this).index();
	   iPlay(index_i);
	}).mouseleave(function(){
		autoPlay();
	})
}
function autoPlay(){
	play_i++;
	if(play_i==5){
	   play_i=0;
	}
	
	iPlay(play_i);
	
	set_i=setTimeout(function(){autoPlay()},2000)
}
function iPlay(n){
	$(".texe-one").eq(n).addClass("texe-one2");
	$(".texe-one").not($(".texe-one").eq(n)).removeClass("texe-one2");
	$(".text-img").eq(n).show();
	$(".text-img").not($(".text-img").eq(n)).hide();
}
