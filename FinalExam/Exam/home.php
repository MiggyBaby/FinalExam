<!DOCTYPE html>
<html lang="en">
<head>
    <link rel = "shortcut icon" type = "image/png" href = "background4.png">
    <title> Home </title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>StreetWise OverSize - Explanation</title>
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
            background-color: cornsilk;
            color: rgb(0, 0, 0);
            text-align: center;
            padding: 20px;
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
            color: #ffffff;
            font-weight: bold;
            font-size: 18px;
            transition: color 0.3s ease-in-out;
        }

        nav ul li a:hover {
            color: #ff6b6b; /* Change to an artsy color on hover */
        }

        main {
            max-width: 800px;
            margin: 0 auto;
            padding: 20px;
        }

        section {
            margin-bottom: 40px;
            background-color: #fff;
            padding: 20px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
            border-radius: 10px;
        }

        h1 {
            font-family: 'Dancing Script', cursive;
            font-size: 48px;
            margin-bottom: 10px;
        }

        h2 {
            font-family: 'Pacifico', cursive;
            font-size: 30px;
            color: #ff6b6b; /* Artsy color for headings */
        }

        p {
            font-size: 18px;
            line-height: 1.5;
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
        <h5>HOME PAGE</h5>
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

    <main>
        <section>
            <h2>About StreetWise OverSize</h2>
            <p>
                Welcome to StreetWise OverSize! We specialize in providing high-quality oversize shirts for fashion-conscious individuals.
                Our mission is to offer comfortable, stylish, and trendy oversize clothing that fits your unique style.
            </p>
        </section>

        <section>
            <h2>Our Products</h2>
            <p>
                At StreetWise OverSize, we offer a wide range of oversize shirts in various colors, designs, and sizes.
                Whether you're looking for a casual everyday look or something more unique, we have you covered.

                <details>
                    <summary> Sample Designs </summary>
                    
                        <img src = "home1.png" width="150px" height="150px">
                        <img src = "home2.png" width="150px" height="150px">
                        <img src = "home3.png" width="150px" height="150px">
                        <img src = "home4.png" width="150px" height="150px">
                </details>

            </p> 
        </section>

        <section>
            <h2>Why Choose Us?</h2>
            <details>
                <summary> Interested to Know? </summary>
                <p> - High-quality materials<br>
                    - Trendy and unique designs<br>
                    - New Designs<br>
                    - Affordable prices<br>
                    - Excellent customer support<br>
                    - All are OverSized Shirt!<br>
                </p>
            </details>
        </section>
    </main>

    <footer>
        <p>&copy; The Official StreetWise OverSize -2023-</p>
    </footer>
</body>
</html>
