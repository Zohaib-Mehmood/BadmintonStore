const paymentPage = document.getElementById("payment-page");
const payOpen = document.getElementById("payOpen");
const closeButton = document.getElementById("close-button");

closeButton.addEventListener("click", function() {
  paymentPage.style.display = "none";
});

payOpen.addEventListener("click", function() {
     alert("Hello");
    paymentPage.style.display = "block";

  });

  function payOpen() {
    document.querySelector("#payment-page").style.display = "block";
  }