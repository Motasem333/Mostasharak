$('.owl-carousel').owlCarousel({
    loop:true,
    margin:10,
    nav:true,
    responsive:{
        0:{
            items:1
        },
        600:{
            items:3
        },
        1000:{
            items:5
        }
    }
})


$(function () {
    'use strict';
    $(window).scroll(function () {
        window.console.log($('.navbar').height())
        console.log(window.scrollY)
        var navbar = $('.navbar');
        if (window.scrollY >= navbar.height()) {
            navbar.addClass('scrolled');
        }
         
        else{
            navbar.removeClass('scrolled');
        }
    });
})



/*---------------------Basket---------------------*/

var removeCartItem = document.getElementsByClassName('remove')
console.log(removeCartItem)
for (var i = 0; i < removeCartItem.length; i++){
    var button = removeCartItem[i]
    button.addEventListener('click',function(event){
        var buttonClicked = event.target
        buttonClicked.parentNode.parentNode.parentNode.removeChild(buttonClicked.parentNode.parentNode);
    })
}