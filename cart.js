let cartItemCount = 0;
const cartCloseButton = document.getElementById("cart-close-button");
const cartOpenButton = document.getElementById("cart-open-button");
const cart = document.getElementById("cart-button");

function addToCart() {
  cartItemCount++;
  document.querySelector(".cart-item-count").innerHTML = cartItemCount;
}

cartOpenButton.addEventListener("click", function() {
    cart.style.display = "block";
  });

function openCartPage() {
    document.querySelector("#cart-page").style.display = "block";
  }
  
function closeCartPage() {
    document.querySelector("#cart-page").style.display = "none";
}
  
cartCloseButton.addEventListener("click", function() {
    // alert("Hello");
    cart.style.display = "none";

  });