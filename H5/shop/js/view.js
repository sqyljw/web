define(function(require, exports, module){
    /*require('jquery');*/
    require('bs');
    return{
        index:function(){
            $('#lb').carousel({
                interval:3000
            });
        },
        add:function(obj){
            var num=obj.prev().val();
            var max=$('.num').attr('max');
            if(num<max){
                num++;
            }
            obj.prev().val(num);
        },
        desc:function(obj){
            var num=obj.next().val();
            var min=$('.num').attr('min');
            if(num>min){
                num--;
            }
            obj.next().val(num);
        }
    }
});