document.addEventListener('DOMContentLoaded', () => {
    const cartItemsList = document.getElementById("cart-items");
    const totalCostDisplay = document.getElementById("total-cost");

    // Retrieve cart items from local storage
    let cart = JSON.parse(localStorage.getItem('cart')) || [];

    // Display cart items on the page
    let totalCost = 0;

    function createItemContainer(item, index) {
        // Create a container for each cart item
        const itemContainer = document.createElement("div");
        itemContainer.classList.add("cart-item");

        // Create elements to display item details, including the selected size
        const itemName = document.createElement("span");
        itemName.textContent = `${item.productName} - Size: ${item.size} - Price: ₱${item.price}`;

        const quantityDisplay = document.createElement("span");
        quantityDisplay.textContent = `Quantity: ${item.quantity}`;

        // Create "Add" and "Subtract" buttons
        const addButton = document.createElement("button");
        addButton.innerHTML = "&#43;"; // Plus symbol
        addButton.addEventListener('click', () => {
            // Increase the quantity when the "Add" button is clicked
            item.quantity = parseInt(item.quantity, 10) || 0;
            item.quantity++;
            quantityDisplay.textContent = `Quantity: ${item.quantity}`;
            saveCartItems(cart);
            updateTotalCost(cart, totalCostDisplay);
        });

        const subtractButton = document.createElement("button");
        subtractButton.innerHTML = "&#8722;"; // Minus symbol
        subtractButton.addEventListener('click', () => {
            // Decrease the quantity when the "Subtract" button is clicked
            item.quantity = parseInt(item.quantity, 10) || 0;
            if (item.quantity > 0) {
                item.quantity--;
                quantityDisplay.textContent = `Quantity: ${item.quantity}`;
                saveCartItems(cart);
                updateTotalCost(cart, totalCostDisplay);
            }
        });

        // Create a button to remove the item
        const removeButton = document.createElement("button");
        removeButton.innerHTML = "&#10007;"; // X symbol
        removeButton.addEventListener('click', () => {
            // Remove the item from the cart
            cart.splice(index, 1);
            saveCartItems(cart);
            // Remove the item's container from the page
            itemContainer.remove();
            updateTotalCost(cart, totalCostDisplay);
        });

        // Calculate the total cost
        totalCost += item.price * item.quantity;

        // Append elements to the item container
        itemContainer.appendChild(itemName);
        itemContainer.appendChild(quantityDisplay);
        itemContainer.appendChild(addButton);
        itemContainer.appendChild(subtractButton);
        itemContainer.appendChild(removeButton);

        return itemContainer;
    }

    for (let i = 0; i < cart.length; i++) {
        const item = cart[i];
        const itemContainer = createItemContainer(item, i);
        cartItemsList.appendChild(itemContainer);
    }

    // Display the total cost
    updateTotalCost(cart, totalCostDisplay);
});