<!DOCTYPE html>
<html lang="en">
<head>
<link rel = "shortcut icon" type = "image/png" href = "background4.png">
    <title> Admin Login </title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <style>
        body {
            font-family: 'monospace', sans-serif;
            background-color: #e4a470;
            background-image: url("login4.jpg");
            background-repeat:no-repeat;
           background-size: cover;
            margin: auto;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
        }

        .login-container {
            background-color: #fff;
            border-radius: 50px;
            padding: 20px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.2);
            text-align: center;
        }

        h1 {
            font-size: 24px;
            color: #333;
            /* Graffiti background */
            background-image: url("background5.png");
            background-blend-mode: overlay;
            background-color: #ff0000; /* Graffiti text color */
            -webkit-background-clip: text;
            background-clip: text;
            color: transparent;
            padding: 10px;
        }

        .form-group {
            margin: 20px auto;
            max-width: 400px;
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
            background-color: white;
        }

        /* Rest of your existing CSS styles */

        label {
            display: block;
            font-size: 18px;
            color: #333;
            margin-bottom: 5px;
        }

        input[type="text"],
        input[type="password"] {
            width: 100%;
            padding: center;
            border: 1px solid #ccc;
            border-radius: 5px;
            font-size: 16px;
            margin-bottom: 10px;
        }

        button {
            width: 100%;
            padding: 10px;
            background-color: #333;
            color: #fff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 18px;
            transition: background-color 0.3s ease;
        }

        button:hover {
            background-color: yellowgreen;
        }

        .error {
            color: #ff6b6b;
            font-size: 16px;
            margin-top: 10px;
        }

        .success {
            color: #4caf50;
            font-size: 18px;
            margin-top: 10px;
            display: none;
        }
    </style>
</head>
<body>
    <div class="login-container">
        <h1>Administration Login</h1>
        <form id="loginForm">
            <div class="form-group">
                <label for="username">Username:</label>
                <input type="text" id="username" name="username" required>
            </div>
            <div class="form-group">
                <label for="password">Password:</label>
                <input type="password" id="password" name="password" required>
            </div>
            <button type="submit">Login</button>
        </form>
        <div id="errorMessage" class="error"></div>

<!-- Extra button with a link to a new page -->
<a href="header.php"><button>Login as Customer</button></a>
</div>
<div id="successMessage" class="success"></div>
<script src="login.js"></script>
</body>
</html>
