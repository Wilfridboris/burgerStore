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

//search functionality

$('#search').on('click',function(e){
    e.preventDefault();
    if($('div.search-x').is(':visible')){
        $('div.search-x').delay(100).fadeOut(100)
    }else{
        $('div.search-x').delay(100).fadeIn(100)
    }
  
})
// comment functionality
$('#write-comment').on('click',function(){
    window.scroll({
        top: 0, 
        left: 0, 
        behavior: 'smooth'
      });
    if($('.burger-show-comment').is(':visible')){
        $('.burger-show-comment').hide()
    }else{
        $('.burger-show-comment').show() 
        
       
    }
})

// rating system
$('i').on('click',function(){
    if($(this).is('#rating1')){
       $('i').removeClass('checked')
       $(this).addClass('checked')
    }
        if($(this).is('#rating2')){
          
            $('i').removeClass('checked')
            $(this).addClass('checked')
            $('#rating1').addClass('checked')
           
            
         }
         if($(this).is('#rating3')){
          
            $('i').removeClass('checked')
            $(this).addClass('checked')
            $('#rating1').addClass('checked')
            $('#rating2').addClass('checked')
            
           
            
         }
         if($(this).is('#rating4')){
          
            $('i').removeClass('checked')
            $(this).addClass('checked')
            $('#rating1').addClass('checked')
            $('#rating2').addClass('checked')
            $('#rating3').addClass('checked')
            
           
            
         }
         if($(this).is('#rating5')){
          
            $('i').removeClass('checked')
            $(this).addClass('checked')
            $('#rating1').addClass('checked')
            $('#rating2').addClass('checked')
            $('#rating3').addClass('checked')
            $('#rating4').addClass('checked')
            
           
            
         }
         $('#nb_comment').val( nb_comment())

         
       
    
   
     
})
/**submit comment */
$('#submit_comments').on('click',function(e){
    var name=$('#name').val();
    var email=$('#email').val();
    var comment=$('#comment').val();
    var mailformat = /^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/;

    const inputs={'name':name,'email':email,'comment':comment}
    const messages={'name':null,'email':null,'comment':null,'emailV':null}
    function Validation(inputs,messages){
      if(inputs['name']==''){
          messages['name']='we need your name';
          $('#errors').text(messages['name']);
          return false;
      }
      if(inputs['email']==''){
        messages['email']='we need  your email';
        $('#errors').text(messages['email']);
        return false;
    }
    if(!inputs['email'].match(mailformat)){
        messages['emailV']='email not valid';
        $('#errors').text(messages['emailV']);
        return false;
    }
    if(inputs['comment']==''){
        messages['comment']='comment something';
        $('#errors').text(messages['comment']);
        return false;
    }
        return  true;
    }
   
    if(!Validation(inputs,messages)){
        e.preventDefault();
    }
})
//close the comment form and the  search from

$('p').on('click',function(){
   if($(this).is('.closeC')) {
    $('.burger-show-comment').hide()
    
   }
})
$('span').on('click',function(){
    if($(this).is('.closeS')) {
        $('div.search-x').delay(100).fadeOut(100)
    }
 })

 //computer the number of comment
 
 var elements=$('span').children()
 var nb_comment=()=>{
    let counter=0;
    elements.each(function(){
        var $this=$(this)
        if($this.is('.checked')){
            counter++
        }
    })
    
    return counter
   
 }

 //header effect
 $(window).scroll(function(){
     var header=$(document).scrollTop();
     var headerHeight=$('header').outerHeight();
     var firstSection=$('.btx-Panel').outerHeight()
     if(header>headerHeight){
         $('.BurgerStore-Menu-List').addClass('fixed')
     }else{
        $('.BurgerStore-Menu-List').removeClass('fixed')
     }
     if(header>firstSection){
        $('.BurgerStore-Menu-List').addClass('in-view')
     }else{
        $('.BurgerStore-Menu-List').removeClass('in-view')
     }
 })

// Toggle function
const toggle=$('.toggle');
const menu=$('.BurgerStore-Menu-List ');
function toggleMenu(){
    if(menu.hasClass('select')){
        menu.removeClass('select')
        toggle.children().html("<i class='fas fa-bars'></i>")
       
    }else{
        menu.addClass('select')
        toggle.children().html("<i class='fas fa-times'></i>")

    }
}
toggle.children().on('click',()=>{
    toggleMenu();
    
})




})