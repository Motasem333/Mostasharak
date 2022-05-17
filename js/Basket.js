
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

function updateCartTotal(){
    var cartItemContainer=document.getElementsByClassName('cart-items')[0]
    var cartRows = cartItemContainer.getElementsByClassName('cart-row')
    for (var i = 0; i < cartRows.length; i++){
        var cartRow = cartRows[i]
        var priceElement = cartRow.getElementsByClassName("cart-price")[0]
        var quantityElement = cartRow.getElementsByClassName("cart-quantity-input")[0]
        console.log(priceElement)
    }
}
