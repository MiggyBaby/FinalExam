<!DOCTYPE html>
<html lang="en">
<head>
<link rel = "shortcut icon" type = "image/png" href = "background4.png">
    <title> Cart </title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cart Contents</title>
    <link rel="stylesheet" href="cart.css">
    <script src="cart.js"></script>
    <style>
        /* Your CSS for the "View Cart" page can go here */
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #f7f7f7;
            margin: 0;
            padding: 0;
            background-image: url("login3.jpg");
        }

        header {
            background-color: #333;
            color: yellowgreen;
            text-align: center;
            padding: 20px;
        }

        nav ul {
            list-style-type: none;
            padding: 0;
            text-align: center;
        }

        nav ul li {
            display: inline;
            margin-right: 20px;
        }

        /* Add a box around navigation links */
        nav ul li a {
            text-decoration: none;
            color: black;
            font-weight: bold;
            font-size: 20px;
            padding: 5px 10px;
            border: 1px solid yellowgreen; /* Border around links */
            border-radius: 5px; /* Rounded corners for the boxes */
            transition: color 0.3s ease-in-out;
            background-color: rgba(200, 200, 200, 0.7); /* Background color with opacity */
        }

        nav ul li a:hover {
            color: #ff6b6b;
            background-color: yellowgreen; /* Change background color on hover */
            color: white;
        }

        h1 {
            font-family: 'Dancing Script', cursive;
            font-size: 48px;
            margin-bottom: 10px;
        }
        

        

        nav ul {
            list-style-type: none;
            padding: 0;
        }

        nav ul li {
            display: inline;
            margin-right: 20px;
        }

        nav ul li a {
            text-decoration: none;
            color: white;
            font-weight: bold;
            font-size: 20px;
            padding: 5px 10px;
            border: 1px solid yellowgreen; /* Border around links */
            border-radius: 5px; /* Rounded corners for the boxes */
            transition: color 0.3s ease-in-out;
            background-color: #333; /* Background color with opacity */
        }

        nav ul li a:hover {
            color: #ff6b6b;
            background-color: yellowgreen;
            color: white;
        }

        .cart-container {
            max-width: 800px;
            margin: 0 auto;
            padding: 20px;
            background-color: white;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
            border-radius: 10px;
            text-align: left;
            position: relative;
            overflow: hidden;
        }

        h2 {
            font-size: 24px;
            margin-bottom: 10px;
            color: yellowgreen;
        }

        ul#cart-items {
            list-style-type: none;
            padding: 0;
        }

        ul#cart-items li {
            display: flex;
            align-items: center;
            margin: 10px 0;
        }

        ul#cart-items li img {
            max-width: 100px;
            height: auto;
            margin-right: 20px;
        }

        #total-cost {
            font-size: 20px;
            margin: 20px 0;
        }

        #checkout-section {
            border-top: 1px solid #ccc;
            margin-top: 20px;
            padding-top: 20px;
        }

        #checkout-form label {
            display: block;
            margin-top: 10px;
            font-weight: bold;
        }

        #checkout-form input[type="text"] {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            margin-top: 5px;
        }

        #checkout-form button {
            background-color: #333;
            color: white;
            border: none;
            padding: 10px 20px;
            cursor: pointer;
            font-weight: bold;
            margin-top: 10px;
        }

        footer {
            text-align: center;
            padding: 20px;
            background-color: #333;
            color: white;
        }
    </style>
</head>
<body>
    <header>
    <h1>StreetWise OverSize</h1>
    <h5>ADDED TO CART</h5>
    </header>

    <nav>
        <ul>
            <li><a href="index.php">Home</a></li> <!-- HOME-->
            <li><a href="main.php">Shop</a></li>  <!-- SHOP -->
            <li><a href="developer.php">Developer</a></li> <!-- DEVELOPER-->
            <li><a class="cart-button" href="cart.php">View Cart</a></li>
            <li><a class="logout" href="header.php">Logout</a></li>
        </ul>
    </nav>

    <div class="cart-container">
        <h2>Cart Items</h2>
        <ul id="cart-items">
            <!-- Cart items will be displayed here -->
        </ul>

        <!-- Display the total cost here -->
        <p id="total-cost">Total Ordered: ₱0</p>

        <!-- Checkout section -->
        <div id="checkout-section">
            <h2>Checkout</h2>
            <form id="checkout-form">
                <label for="address">Shipping Address:(Street,Lot,Block,Phase,City)</label>
                <input type="text" id="address" required>
                <button type="submit">Checkout</button>
            </form>
        </div>
    </div>

    <footer>
        <p>&copy; The Official StreetWise OverSize - 2023 -</p>
    </footer>

<script>
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
                removeButton.innerHTML = "Delete"; // X symbol
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

        function updateTotalCost(cart, totalCostDisplay) {
            // Calculate the total cost based on cart items
            let totalCost = 0;
            for (const item of cart) {
                totalCost += item.price * item.quantity;
            }
            totalCostDisplay.textContent = `Total Ordered: ₱${totalCost}`;
            saveCartItems(cart);
        }

        function saveCartItems(cart) {
            // Save the updated cart in local storage
            localStorage.setItem('cart', JSON.stringify(cart));
        }

        // Rest of your code for checkout and clearing the cart
        function clearCart() {
            // Implement this function to clear the cart
            // You can reset the cart array to an empty array and update the total cost display
        }
    </script>
</body>
</html>
