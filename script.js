var button = document.getElementById("status-button");
var display = document.getElementById("status-display");

button.addEventListener("click", function() {
  display.innerHTML = "Your order is currently being processed.";
});
