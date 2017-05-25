$(function(){
    $("#ttbar-mycity .item").click(function(){
    $("#ttbar-mycity .item a").removeClass("selected");
    $(this).children().addClass("selected");
     var a=$(this).children().html();
     $("[title='北京']").html(a)
    })
$("#topbanner-close").click(function(){
    	$("#top-banner").remove();
   })
$("#categorys-a .dd-inner .item").bind(
     "mouseover",
     function(){
     	var mun=$(this).index();
     $("#categorys-a .dd-inner .item").css({"color":"#fff","background":"#c81623"})
     $("#categorys-a .dd-inner .item h3>a").css("color","#fff")
     $(this).css({"color":"#f00","background":"#f7f7f7"})
     $(this).children("h3").children().css("color","#f00")
      $("#categorys-a .item-sub").css("border-left","0")
	  $("#categorys-a .dorpdown-layer").css("display","block")
	  $("#myid2") .animate( {"marginTop":-1*mun*462},1);
	  $("#news").css("display","none")
	  $("#lifeserv").css("display","none")
 })
     $("#myid").mouseleave(function(){
	 $("#categorys-a .dorpdown-layer").css("display","none")
	   $("#news").css("display","block")
	  $("#lifeserv").css("display","block")
	  $("#categorys-a .dd-inner .item").css({"color":"#fff","background":"#c81623"})
      $("#categorys-a .dd-inner .item h3>a").css("color","#fff")
})
$("#todays .mc").mouseover(function(){
	$(this).children().eq(1).css("display","block")
	})
	$("#todays .mc").mouseleave(function(){
	$(this).children().eq(1).css("display","none")
	})
	$("#todays .mc .slider-page span").toggle(function(){
		$("#todays .mc .slider-main").addClass("qiehuan")
	},function(){
		$("#todays .mc .slider-main").removeClass("qiehuan")
		})
  })