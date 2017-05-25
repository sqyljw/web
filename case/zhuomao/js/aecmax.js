var index_i;
var play_i=0;
var set_i;
$(function(){
	$(function(){
	    $(".txt-left-en").each(function(i){
		  $(this).mouseenter(function(){
		  $(".txt-one").eq(i).show();
		  $(".txt-one").not($(".txt-one").eq(i)).hide();
		  $(".txt-left-en").eq(i).css("background","#fff");
		  $(".txt-left-en").not($(".txt-left-en").eq(i)).css("background","#29a9e1");
		  $(".txt-left-a").eq(i).children("span").css("color","#2f9af5");
		  $(".txt-left-a").not($(".txt-left-a").eq(i)).children("span").css("color","#fff");
		  $(".txt-left-b").eq(i).children("span").css("color","#2f9af5");
		  $(".txt-left-b").not($(".txt-left-b").eq(i)).children("span").css("color","#fff");
          
	      })
		})
	      $(".txt-left").mouseleave(function(){
	      $(".txt-one").hide();
		  $(".txt-left-en").css("background","#29a9e1")
		  $(".txt-1").css("color","#fff");
		  $(".txt-left-a").children().css("color","#fff");
		  })
	  })
	  
	  
	  $(".txt-1").mouseenter(function(){
			  $(this).css("color","#f7931e");
			 
		      })
		 $(".txt-1").mouseleave(function(){
			  $(this).css("color","#2f9af5");
			 
		      })
	autoPlay();
	mousePlay();
	
	$(".pop-right-right").mouseenter(function(){
		$(".pop-right-n").show();
	  }).mouseleave(function(){
	    $(".pop-right-n").hide();
	})
	$(".ter-3").mouseenter(function(){
		$(".ter-a").show();
	  })
	$(".ter-3").mouseleave(function(){
	    $(".ter-a").hide();
	})
	
	$(".ter-1").mouseenter(function(){
		index_i=$(this).index();
		$(".ter-2").eq(index_i).show();
		$(".ter-2").not($(".ter-2").eq(index_i)).hide();
	  })
	$(".ter").mouseleave(function(){
	    $(".ter-2").hide();
	})
	$(".reh").click(function(){
		$(".reh").removeClass("reh2")
		$(this).addClass("reh2")
	  })
	$(".cavshi-left").mouseenter(function(){
		$(".w1").addClass("w5");
		$(".w2").removeClass("w5");
		$(".cavshi-left-3").show();
	})
	
	$(".cavshi-1").mouseleave(function(){
	    $(".cavshi-left-3").hide();
		$(".w2").addClass("w5");
		$(".w1").removeClass("w5");
	})
	$(".w3").click(function(){
		$(".w3").removeClass("w4")
		$(this).addClass("w4")
		$("#u").innerHTML=$(this).innerHTML;
	  })
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

