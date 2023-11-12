document.addEventListener("DOMContentLoaded", function () {
    const loginForm = document.getElementById("loginForm");
    const errorMessage = document.getElementById("errorMessage");

    loginForm.addEventListener("submit", function (e) {
        e.preventDefault(); // Prevent the default form submission behavior

        // Get input values
        const username = document.getElementById("username").value;
        const password = document.getElementById("password").value;

        // Check login credentials
        if (username === "admin" && password === "admin") {
            // If login is successful for admin, redirect to admin page
            window.location.href = "home2.php";
            
        } else {
            // If login fails, display an error message
            errorMessage.style.display = "block";
            errorMessage.textContent = "Invalid username or password.";
        }
    });
});
