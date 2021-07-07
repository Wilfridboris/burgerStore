$(function(){
    var Total=0;

   $('#order-btx').on('click',function(e){
      //$(this).parent().hide();
     
      $(this).parent().text('Loading..')
      $(this).remove();
   })
    

   $('a').on('click',function(){
       var $quantity=parseInt($(this).next().text());
       if($(this).is('#plus')){
        $(this).next().text($quantity+1);
        $(this).children().html('..');
       }
     
       //console.log($quantity);
       UpdateRecord($('#total'),$('#subtotal'));
   })   
   $('a').on('click',function(){
    var $quantity=parseInt($(this).prev().text());
       if($(this).is('#minus')){
           if($quantity==0){
            $(this).prev().text(0);
           }else{
            $(this).prev().text($quantity-1);
            $(this).children().text('..');
           }
      
       }
       UpdateRecord($('#total'),$('#subtotal'));
    
    //console.log($quantity);
})
var TotalOrder=function getTotalOrder(a){
    $('.checkout-infos').each(function(){    
         a=a+(parseInt($(this).children().children('#quantity').text())*
       parseInt( $(this).children('.quantity').next().children('#price').text()))
    
       
       
    })
     return a;
    

}
function UpdateRecord(total,subtotal){
    total.text(`$${TotalOrder(Total)}`);
    subtotal.text(`$${TotalOrder(Total+10.64)}`);
}

$('a').on('click',function(){
    if($(this).is('#panel-menu1')){
        $('.panel-tab-menu div').removeClass('tab-select')
        $(this).parent().addClass('tab-select')
        $('.panel-tab-text1').show();
        $('.panel-tab-text2').hide();
    }
    if($(this).is('#panel-menu2')){
        $('.panel-tab-menu div').removeClass('tab-select')
        $(this).parent().addClass('tab-select')
        $('.panel-tab-text2').show();
        $('.panel-tab-text1').hide();
    }
})



})