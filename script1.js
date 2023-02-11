var button = document.getElementById("delivery-button");
var display = document.getElementById("delivery-display");

button.addEventListener("click", function() {
  display.innerHTML = "Your order is currently being delivered, it will be delivered on next 5 working days";
});
