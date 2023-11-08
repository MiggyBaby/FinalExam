// main.js
function addToCart(productName, price, sizeId = null) {
    // Retrieve the existing cart items from local storage or initialize an empty array
    let cart = JSON.parse(localStorage.getItem('cart')) || [];

    if (sizeId !== null) {
        // Size is provided, handle the case with size
        // Retrieve the selected size
        const size = document.querySelector(`#${sizeId}:checked`).value;

        // Check if the item is already in the cart
        const existingItemIndex = cart.findIndex((item) => item.productName === productName && item.size === size);

        if (existingItemIndex !== -1) {
            // Item already exists, update the quantity
            cart[existingItemIndex].quantity += 1;
        } else {
            // Item doesn't exist in the cart, add it with size
            cart.push({
                productName,
                price,
                size,
                quantity: 1,
            });
        }
    } else {
        // No size provided, handle the case without size
        const existingItemIndex = cart.findIndex((item) => item.productName === productName);

        if (existingItemIndex !== -1) {
            // Item already exists, update the quantity
            cart[existingItemIndex].quantity += 1;
        } else {
            // Item doesn't exist in the cart, add it without size
            cart.push({
                productName,
                price,
                quantity: 1,
            });
        }
    }

    // Save the updated cart in local storage
    localStorage.setItem('cart', JSON.stringify(cart));

    // Update the cart button to show the number of items in the cart
    updateCartButton();
}
    
        // Save the cart in local storage
        saveCartItems(cart);
    
        // Optional: You can update the cart display here
        // ...
    
        // You may also update the total cost display
        updateTotalCost(cart, totalCostDisplay);

function updateCartButton() {
    const cartButton = document.querySelector('.cart-button');
    const cart = JSON.parse(localStorage.getItem('cart')) || [];
    cartButton.textContent = `View Cart (${cart.length})`;
}

function showNewItemForm() {
    const newItemForm = document.getElementById("new-item-form");
    newItemForm.style.display = "block";
}

function addNewItem() {
    const productNameInput = document.getElementById("product-name");
    const productPriceInput = document.getElementById("product-price");
    const productName = productNameInput.value;
    const productPrice = parseFloat(productPriceInput.value);

    if (productName && !isNaN(productPrice)) {
        addToCart(productName, productPrice);
        hideNewItemForm();
    }
}

function hideNewItemForm() {
    const newItemForm = document.getElementById("new-item-form");
    newItemForm.style.display = "none";
    clearNewItemFormInputs();
}

function clearNewItemFormInputs() {
    document.getElementById("product-name").value = "";
    document.getElementById("product-price").value = "";
}

document.addEventListener('DOMContentLoaded', () => {
    // ...

    // Create a function to update the placeholder
    function updatePlaceholder() {
        const placeholder = document.getElementById("placeholder");
        const emptySlot = cart.length === 0;

        if (emptySlot) {
            placeholder.style.display = "block";
        } else {
            placeholder.style.display = "none";
        }
    }

    // ...

    function addNewItem() {
        const productNameInput = document.getElementById("product-name");
        const productPriceInput = document.getElementById("product-price");
        const productName = productNameInput.value;
        const productPrice = parseFloat(productPriceInput.value);

        if (productName && !isNaN(productPrice)) {
            addToCart(productName, productPrice);
            hideNewItemForm();
            updatePlaceholder(); // Update the placeholder when an item is added
        }
    }

    // ...

    // Ensure the placeholder is updated when the page loads
    updatePlaceholder();
    function addToCart(productName, price) {
        const item = { productName, price };
        
        const selectedSize = document.querySelector('input[name="size"]:checked');
        
        if (selectedSize) {
            const size = selectedSize.value;
            
            // Create a query string with the product details
            const query = `product=${productName}&price=${price}&size=${size}`;
            
            // Redirect to the cart2.php page with the query string
            window.location.href = `cart2.php?${query}`;
        } else {
            alert("Please select a size.");
        }
    }

    
    
});

