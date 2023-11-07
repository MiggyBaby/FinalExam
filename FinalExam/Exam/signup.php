<!DOCTYPE html>
<html>
<head>
<link rel = "shortcut icon" type = "image/png" href = "background4.png">
    <title> Sign Up </title>
<style>
      body {
        text-align: center;
        padding: 2em 0;
        background: linear-gradient(to right, #0f1416, #2d373a, #666f73);
        background-position: auto;
        background-size: cover;
        background-image: url("login4.jpg");
        display: flex;
        justify-content: center;
        align-items: center;
        min-height: 100vh;
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
        border: 2px solid black;
        background-color: grey;
        border-radius: 5px;
      }

      .first, .Last, .Email, .Password  {
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
        padding: 8px;
        width: 100%;
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
        width: 100%;
        font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
      }

      button[type="submit"] {
        background-color: rgb(41, 38, 38);
      }

      button:hover {
            background-color: saddlebrown;
        }

      .signuperror {
        color: tomato;
        margin-top: 10px;
      }
       .signupstatus {
        color: skyblue;
        margin-top: 10px;
      }
  </style>
</head>
<main>
 <div class="container">
    <header>Sign Up</header>

    <?php
    if(isset($_GET['error'])){
        if($_GET['error'] == "emptyfields") {
            echo '<p class="signuperror">Fill in all fields!</p>';
        }
        else if($_GET['error'] == "invaliduidmail") {
            echo '<p class="signuperror">Invalid username and email!</p>';
        }
        else if($_GET['error'] == "invaliduid") {
            echo '<p class="signuperror">Invalid username!</p>';
        }
        else if($_GET['error'] == "invalidmail") {
            echo '<p class="signuperror">Invalid e-mail!</p>';
        }
        else if($_GET['error'] == "passwordcheck") {
            echo '<p class="signuperror">Your passwords do not match!</p>';
        }
        else if($_GET['error'] == "usertaken") {
            echo '<p class="signuperror">Username is already taken!</p>';
        }
    }
    if(isset($_GET['signup']) && $_GET['signup'] == "success") {
        echo '<p class="signupstatus">Signup successful!</p>';
        echo '<div class="button">
                <a class="btn" href="header.php">Log In</a>
            </div>
            <div class="button">
                <button type="submit" id="Admin" onclick="location.href=\'login.php\'">Log In as Admin</button>
            </div>';
    }
    else {
        echo '<form id="myForm" action="includes/signup-inc.php" method="post">
            <div class="first">
                <input type="text" name="uid" placeholder="Username" id="userName">
            </div>
            <div class="Last">
                <input type="text" name="mail" placeholder="Email" id="lastName">
            </div>
            <div class="Email">
                <input type="password" name="pwd"  placeholder="Password" id="email">
            </div>
            <div class="Password">
                <input type="password" name="pwd-repeat" placeholder=" Repeat Password" id="password">
            </div>
            <div class="button">
                <button type="submit" name="signup-submit">Signup</button>
            </div>
        </form>';
    }
    ?>
</div>
</main>

<?php
    require "footer.php";
?>
</html>
