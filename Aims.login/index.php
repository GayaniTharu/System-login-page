


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>Login Page</title>
</head>

<body>
    <div class="login-container">
        <h2>Login</h2>
        <form id="loginForm">
            <div class="form-group">
                <label for="position">Select Position:</label>
                <select id="position" name="position">
                <option value="user1"> Senior Development Officer</option>
                <option value="user2">Development Officer</option>
                <option value="user3">Agriculture instructor</option>
                <option value="user4">Agriculture Research & production Assistant </option> 
                </select>
            </div>
            <div class="form-group">
                <label for="username">Username:</label>
                <input type="text" id="username" name="username" required>
            </div>
            <div class="form-group">
                <label for="password">Password:</label>
                <input type="password" id="password" name="password" required>
            </div>
            <div class="button-group">
                <button type="button" onclick="validateLogin()">Login</button>
                <button type="button" onclick="window.location.href = 'reset.php'">Reset Password & Username</button>
                <!-- <button type="button" onclick="resetCredentials()">Reset Password & Username</button> -->
            </div>
            <p id="error-message"></p>
        </form>
    </div>

    <script src="script.js"></script>
</body>

</html>
                