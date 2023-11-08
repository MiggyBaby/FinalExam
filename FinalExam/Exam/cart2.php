<!DOCTYPE html>
<html lang="en">
<head>
<link rel = "shortcut icon" type = "image/png" href = "background4.png">
    <title> Cart </title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cart Contents</title>
    <link rel="stylesheet" href="cart.css">
    <script src="cart2.js"></script>
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
            color: #333;
            font-weight: bold;
            font-size: 20px;
            padding: 5px 10px;
            border: 1px solid yellowgreen;
            border-radius: 5px;
            transition: color 0.3s ease-in-out;
            background-color: rgba(200, 200, 200, 0.7);
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
            <li><a href="home2.php">Home</a></li> <!-- HOME-->
            <li><a href="main2.php">Shop</a></li>  <!-- SHOP -->
            <li><a href="developer2.php">Developer</a></li> <!-- DEVELOPER-->
            <li><a class="cart-button" href="cart2.php">View Cart</a></li>
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
</body>
</html>
