var searchIcon = document.getElementById("search-icon");
var searchForm = document.getElementById("search-form");

searchIcon.addEventListener("click", function() {
  if (searchForm.style.display === "none") {
    searchForm.style.display = "block";
  } else {
    searchForm.style.display = "none";
  }
});

searchIcon.addEventListener("click", function() {
    searchForm.classList.toggle("show");
});

