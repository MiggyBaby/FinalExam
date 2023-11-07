<!DOCTYPE html>
<html lang="en">
<head>
<link rel = "shortcut icon" type = "image/png" href = "background4.png">
    <title> Developer </title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Developer Page</title>
    <style>
        /* Your CSS code here */

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
            color: yellowgreen; /* Artsy color for headings */
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

        /* Additional CSS styles can be added here */
    </style>
</head>
<body>
    <header>
        <h1>StreetWise OverSize</h1>
        <h5>DEVELOPER PAGE</h5>
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

    <main>
        <section>
            <h2>Developer Information</h2>
            <details>
                <summary><h3>The Information You Need to Know About the Developer</h3></summary>
                <p>
                    Company Name: StreetWise OverSize<br>
                    Individual Developer: George Miguel V. Batalan<br>
                    Contact Information: 09282657001<br>
                    Email: miggybatalan1@gmail.com<br>
                    About the Developer: A Third Year Irregular Student At Mapua Colleges Of Mindanao<br>
                    Portfolio: <a href="https://www.instagram.com/miggybinggy/">View Portfolio</a><br>
                </p>     
            </details>
        </section>
        <section>
            <h2>Meet The Web Developer</h2>
            <ul>
                <li>
                    <summary><h3> George Miguel V. Batalan<h3></summary>
                    <p> Role: Front-end Developer<br>
                        Email: miggybatalan1@gmail.com<br>
                    </p>
                    <summary> Open to see developer</summary>
                    <details>
                        <img src="miggy.jpg" width="440px" height="400px">
                    </details>
                </li>
                <li>
                <summary> <h3>Georgino Therasus <h3> </summary>
                    <p> Role: Back-end Developer<br>

                        Email: TO BE ANNOUNCE *SHY TYPE KASI*<br>
                    </p>
                    <summary> Open to see developer</summary>
                    <details>
                        <img src="georgino.jpg" width="250px" height="250px">
                    </details>
                    
                </li>
                <!-- Add more developer information as needed -->
            </ul>
        </section>
    </main>

    <footer>
        <p>&copy; The Official StreetWise OverSize - 2023 -</p>
    </footer>
</body>
</html>