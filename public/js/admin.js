$(function(){
    $("a").on('click',function(){
        if($(this).is('#update')){
            $(this).next().animate({width:'toggle'},350);
           
        }
     })
     $("a").on('click',function(){
        if($(this).is('#back')){
            $(this).parent().animate({width:'toggle'},350);
        }
     })
  
     


$('#newProduct').on('click',()=>{
    $('.newProduct').animate({width:'toggle'},350);
})
$('.newProduct .back').on('click',()=>{
    $('.newProduct').animate({width:'toggle'},350);
})
$('#newProductType').on('click',()=>{
    $('.newProductType ').animate({width:'toggle'},350);
})
$('.newProductType .back').on('click',()=>{
    $('.newProductType').animate({width:'toggle'},350);
})

//toggle the head menu

const toggle=$('.user');
const menu=$('.admin-bar ');
function toggleMenu(){
    if(menu.hasClass('select')){
        menu.removeClass('select')
      
       
    }else{
        menu.addClass('select')
       

    }
}
toggle.on('click',()=>{
    toggleMenu();
    
})

// update section functionality

});