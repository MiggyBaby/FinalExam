<?php
session_start();
?>

<!DOCTYPE html>
<html>
<head>
<link rel = "shortcut icon" type = "image/png" href = "background4.png">
    <title> Log in </title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Log In</title>
    <link rel="icon" type="image/x-icon" href="1.png">
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
            text-align: center;
        }

      header {
        font-size: 50px;
        color: yellowgreen;
        padding: 20px;
        font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
        
      }

      .container {
        width: 300px;
        padding: 20px;
        border: 5px solid black;
        background-color: grey;
        border-radius: 5px;
      }

      .Email, .Password {
        margin: 10px 0;
      }

      input {
        width: 50%;
        padding: 10px;
        border: none;
        border-radius: 5px;
        background-color: rgba(255, 255, 255, 0.9);
      }
      .btn {
    background-color: rgb(41, 38, 38);
    text-decoration: none;
    margin-top: 10px;
    color: yellowgreen;
    border: none;
    border-radius: 5px;
    padding: 5px;
    width: 50%;
    font-size: ;
    font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
}


      .button {
        margin-top: 10px;
      }

      button {
        color: yellowgreen;
        border: none;
        border-radius: 5px;
        cursor: pointer;
        padding: 10px;
        width: 50%;
        font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
      }

      button[type="submit"] {
        background-color: rgb(41, 38, 38);
      }

      button:hover {
            background-color: saddlebrown;
        }


      .error-message {
        color: tomato;
        margin-top: 10px;
      }

      .login-status {
        color: skyblue;
        margin-top: 10px;
      }

  </style>
</head>
<body>
    
<div class="container">
    <header>Log In</header>
    <?php
       if (isset($_GET['error'])) {
        if ($_GET['error'] == "emptyfields") {
            echo '<p class="error-message">Fill in all fields!</p>';
        } elseif ($_GET['error'] == "sqlerror") {
            echo '<p class="error-message">SQL error occurred!</p>';
        } elseif ($_GET['error'] == "wrongpwd") {
            echo '<p class="error-message">Wrong password!</p>';
        } elseif ($_GET['error'] == "nouser") {
            echo '<p class="error-message">No user found!</p>';
        }
    }

    echo '</form>';
    if (isset($_SESSION['userId'])) {
        echo '<p class="login-status">You are logged in!</p>';
        echo '<form id="logout" action="includes/logout.inc.php" method="post">
        <div class="button">
            <button type="submit" name="logout-submit" id="logout">Log out</button>
        </div>
        </form>';
        echo '<div class="button">
        <button type = "submit" onclick="redirectToAnotherPage()">Home</button>
      </div>';

echo '<script>
      function redirectToAnotherPage() {
          window.location.href = "index.php"; //
      }
      </script>';

    }
     else  {
        echo ' <form id="myForm" action="includes/login.inc.php" method="post">
        <div class="Email">
            <input type="text" name="mailuid" placeholder="Username or Email" id="email">
        </div>
        <div class="Password">
            <input type="password" name="pwd" placeholder="Password" id="password">
        </div>
        <div class="button">
            <button type="submit" name="login-submit">Log In</button>
        </div>';

        echo '<div class="button">
    <a class="btn" href="login.php">Login in as Admin</a>
</div>';

        
        echo '<div class="button">
        <a class="btn" href="signup.php">Sign Up</a>
    </div>';


     
    }
    ?>
</div>
</body>
</html>
