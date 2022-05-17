
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

function quantityChanged(event) {
    var input = event.target
    if (isNaN(input.value) || input.value <= 0){  /* condition for input for non or nigative valuse*/
        input.value = 1
    }
    updateCartTotal()
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
