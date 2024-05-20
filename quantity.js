const increaseQuantityBtn = document.getElementById("increase-quantity");
const quantityDisplay = document.getElementById("quantity-display");

// Set an initial quantity value
let quantity = 1;

// Add a click event listener to the button
increaseQuantityBtn.addEventListener("click", function() {
  // Increment the quantity value
  quantity++;
  
  // Update the quantity display with the new value
  quantityDisplay.textContent = quantity;
});