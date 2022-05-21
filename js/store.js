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


/*add to cart*/

let carts = document.querySelectorAll('.add-to-cart')

let products = [

    {
        name: "Motasem" ,
        tag: 'khashan',
        price: 15 ,
        inCart : 0
    },

    {
        name: "Nadeem" ,
        tag: 'naddaf',
        price: 55 ,
        inCart : 0
    },

    {
        name: "Ahmed" ,
        tag: 'Abuali',
        price: 78 ,
        inCart : 0
    }

];




for (let i =0; i < carts.length; i++){
    carts[i].addEventListener('click' , () => {
        cartNumbers(products[i]);
        
    })
}
  
// make number of carts constant after loading
function onLoadCart() {
    let productNumber = localStorage.getItem('cartNumbers');

    if (productNumber){
        document.querySelector('.cartt span').textContent = productNumber;
    }
}

function cartNumbers() {
    let productNumber = localStorage.getItem('cartNumbers')
    productNumber = parseInt(productNumber);

    if (productNumber){
        localStorage.setItem('cartNumbers' , productNumber + 1 );
        document.querySelector('.cartt span').textContent = productNumber + 1;

    } else {
        localStorage.setItem('cartNumbers' ,1)
        document.querySelector('.cartt span').textContent = 1;
    }
}




onLoadCart();



/*---------------------Basket---------------------*/

var removeCartItem = document.getElementsByClassName('btn-danger')
console.log(removeCartItem)
for (var i = 0; i < removeCartItem.length; i++){
    var button = removeCartItem[i]
    button.addEventListener('click',function(event){
        var buttonClicked = event.target
        buttonClicked.parentNode.parentNode.parentNode.removeChild(buttonClicked.parentNode.parentNode);
        updateCartTotal()
        
    })
}

var quantityInput = document.getElementsByClassName('cart-quantity-input')
for (var i = 0; i < quantityInput.length; i++){
    var input = quantityInput[i]
    input.addEventListener('change' ,quantityChanged)
}

var addToCartbuutons = document.getElementsByClassName('add-to-cart')
for (var i = 0; i <addToCartbuutons.length; i++){
    var button = addToCartbuutons[i]
    button.addEventListener('click' ,addToCartClicked)
}

document.getElementsByClassName('btn-purchase')[0].addEventListener('click', purchaseClicked)


function purchaseClicked() {
    alert('Thank you for your purchase')
    var cartItemss = document.getElementsByClassName('cart-items')[0]
    while(cartItemss.hasChildNodes()){
        cartItemss.removeChild(cartItemss.firstChild)
    }
    updateCartTotal()
}

function quantityChanged(event) {
    var input = event.target
    if (isNaN(input.value) || input.value <= 0){  /* condition for input for non or nigative valuse*/
        input.value = 1
    }
    updateCartTotal()
}

function addToCartClicked(event){
    var  button = event.target
    var shopItem = button.parentElement.parentElement.parentElement
    var title =shopItem.getElementsByClassName("product-type")[0].innerText
    var price =shopItem.getElementsByClassName("product-price")[0].innerText
    
    var image =shopItem.getElementsByClassName("shope-item-image")[0].src
    addItemToCart(title,price ,image)
    updateCartTotal()
}

function addItemToCart(title , price , image){
    var cartRow = document.createElement('div')
    cartRow.classList.add('cart-row')
    cartRow.innerText=title
    var cartItemss = document.getElementsByClassName('cart-items')[0]
    var cartItemNames = cartItemss.getElementsByClassName('cart-item-title')
    for (var i = 0; i< cartItemNames.length; i++){
        if (cartItemNames[i].innerHTML == title){
            alert('This item is already added to the cart')
            return
        }
    }
    var cartRowContets = `
    <div class="cart-item cart-column">
    <img class="cart-item-image" src="${image}" width="100" height="100">
    <span class="cart-item-title">${title}</span>
</div>
<span class="cart-price cart-column">${price}</span>
<div class="cart-quantity cart-column">
    <input class="cart-quantity-input" type="number" value="1">
    <button class="btn btn-danger">Remove</button>

</div>
    
    `
    cartRow.innerHTML=cartRowContets
    cartItemss.append(cartRow)
    cartRow.getElementsByClassName('btn-danger')[0].addEventListener('click',function(event){
        var buttonClicked = event.target
        buttonClicked.parentNode.parentNode.parentNode.removeChild(buttonClicked.parentNode.parentNode);
        updateCartTotal()
        
    })
    cartRow.getElementsByClassName('cart-quantity-input')[0].addEventListener('change',quantityChanged)
}

function updateCartTotal(){
    var cartItemContainer=document.getElementsByClassName('cart-items')[0]
    var cartRows = cartItemContainer.getElementsByClassName('cart-row')
    var total = 0
    for (var i = 0; i < cartRows.length; i++){
        var cartRow = cartRows[i]
        var priceElement = cartRow.getElementsByClassName("cart-price")[0]
        var quantityElement = cartRow.getElementsByClassName("cart-quantity-input")[0]
        var price = parseFloat(priceElement.innerText.replace('$',''))
        var quantity = quantityElement.value
        total = total + (price * quantity) 
    }
    total = Math.round(total * 100) / 100 /* round total number*/
    document.getElementsByClassName('cart-total-price')[0].innerText = '$' + total
}
