<!DOCTYPE html>
<html lang="en">
<head>
<link rel = "shortcut icon" type = "image/png" href = "background4.png">
    <title> Shop </title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>StreetWise OverSize</title>
    <link rel="stylesheet" href="main.css">
    <script src="main.js"></script>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #f7f7f7;
            margin: 0;
            padding: 0;
            text-align: center;
            background-image: url("login3.jpg");
        }

        header {
            background-color: #333;
            color: yellowgreen;
            text-align: center;
            padding: 20px;
        }

        /* Add a box around navigation links and make it opaque */
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

        /* Rest of your CSS styles */
        .product-list {
            display: flex;
            flex-wrap: wrap;
            justify-content: space around;
        }

        .product {
            background-color: white;
            padding: 20px;
            margin: 20px;
            box-shadow: 0 0 5px rgba(0, 0, 0, 0.2);
            text-align: center;
        }

        .product:hover {
            transform: scale(1.1); /* (150% zoom - Note: if the zoom is too large, it will go outside of the viewport) */
        }

        .product img {
            max-width: 100%;
            height: auto;
        }

        button {
            background-color: #333;
            color: white;
            border: none;
            padding: 10px 20px;
            cursor: pointer;
        }
        
            button:hover{
                color: #ff6b6b;
            background-color: yellowgreen;
            color: white;

            
        }

        .cart {
            background-color: #f0f0f0;
            border: 1px solid #ccc;
            padding: 10px;
            margin-top: 20px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.2);
        }

        .cart h2 {
            font-size: 20px;
        }

        .cart ul {
            list-style-type: none;
            padding: 0;
        }

        .cart ul li {
            font-size: 16px;
            margin-bottom: 5px;
        }

        footer {
            text-align: center;
            padding: 20px;
            background-color: #333;
            color: white;
        }

        h1 {
            font-family: 'Dancing Script', cursive;
            font-size: 48px;
            margin-bottom: 10px;
        }

        h2 {
            font-family: 'Pacifico', cursive;
            font-size: 30px;
            color: yellowgreen; /* Artsy color for headings */
        }

        button.newItem{
            width:100%;
            height:100%;
        }
    </style>
</head>
<body>
    <header>
        <h1>StreetWise OverSize</h1>
        <h5>SHOP PAGE</h5>
    </header>

    <nav>
    <ul>
            <li><a href="index.php">Home</a></li> <!-- HOME-->
            <li><a href="main.php">Shop</a></li>  <!-- SHOP -->
            <li><a href="developer.php">Developer</a></li> <!-- DEVELOPER-->
            <li><a class="cart-button" href="cart.php">View Cart</a></li>
            <li> <a class="logout" href="header.php">Logout</a></li>
        </ul>
    </nav>

    <ul class="product-list">
        <li class="product">
            <img src="shirt1.png" alt="Oversize Shirt 1" width="400px" height="400px">
            <h2>Camping Trials</h2>
            <p>2 Kids Lost In a Creepy Forest.</p>
            <h3>Price:₱499</h3>
            <button onclick="addToCart('Camping Trials', 499)">Add to Cart</button>
        </li>

        <li class="product">
            <img src="ShiftyPlace.png" alt="Oversize Shirt 2" width="400px" height="400px">
            <h2>Shifty Place</h2>
            <p>A Guy Lost in an Unknown Place.</p>
            <h3>Price: ₱499</h3>
            <button onclick="addToCart('Shifty Place', 499)">Add to Cart</button>
        </li>

        <li class="product">
            <img src="Mysterious.png" alt="Oversize Shirt 3" width="400px" height="400px">
            <h2>Mysterious</h2>
            <p> Stranded in a Mysterious Place</p>
            <h3>Price: ₱499</h3>
            <button onclick="addToCart('Mysterious', 499)">Add to Cart</button>
        </li>

        <li class="product">
            <img src="Living The Undead.png" alt="Oversize Shirt 4" width="400px" height="400px">
            <h2>Living The Undead</h2>
            <p> A Witty Name for a T-Shirt</p>
            <h3>Price: ₱499</h3>
            <button onclick="addToCart('Living The Undead', 499)">Add to Cart</button>
        </li>

        <li class="product">
            <img src="SkulledTitan.png" alt="Oversize Shirt 5" width="400px" height="400px">
            <h2>Skulled Titan</h2>
            <p>A Combination of A Titan and a Skull</p>
            <h3>Price: ₱399</h3>
            <button onclick="addToCart('Skulled Titan', 399)">Add to Cart</button>
        </li>

        <li class="product">
            <img src="YakuzaDragon.png" alt="Oversize Shirt 6" width="400px" height="400px">
            <h2>Yakuza Dragon</h2>
            <p>Yakuza and a Dragon as One.</p>
            <h3>Price: ₱399</h3>
            <button onclick="addToCart('Yakuza Dragon', 399)">Add to Cart</button>
        </li>

        <li class="product">
            <img src="MessyDoodle.png" alt="Oversize Shirt 7" width="400px" height="400px">
            <h2>Messy Doodle</h2>
            <p>Tangled All Over The Place.</p>
            <h3>Price: ₱499</h3>
            <button onclick="addToCart('Messy Doodle', 499)">Add to Cart</button>
        </li>

        <li class="product">
            <img src="BeautyInColors.png" alt="Oversize Shirt 8" width="400px" height="400px">
            <h2>Beauty In Colors</h2>
            <p>Let Them Know Who You Are.</p>
            <h3>Price: ₱399</h3>

            <button onclick="addToCart('Beauty In Colors', 399)">Add to Cart</button>
        </li>

        <li class="product">
            <img src="SpaceTronaut.png" alt="Oversize Shirt 9" width="400px" height="400px">
            <h2>SpaceTronaut</h2>
            <p>Austronaut in Space.</p>
            <h3>Price: ₱599</h3>
            <button onclick="addToCart('Space Tronaut', 599)">Add to Cart</button>
        </li>

    
    </ul>


    <footer>
        <p>&copy; The Official StreetWise OverSize - 2023 -</p>
    </footer>
</body>
</html>
