var removeBtn = document.getElementsByClassName("btn-remove");
var myCartItem = document.getElementById("my-cart-item")

for (var i=0; i<removeBtn.length; i++) {
    removeBtn[i].addEventListener("click", function(){
        var id = this.getAttribute("data-id");
        var removeElement = document.getElementById("product-item-" + id);
        myCartItem.removeChild(removeElement);
    })
}