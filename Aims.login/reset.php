<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="reset.css">
    <title>Reset Password and Username</title>
</head>

<body>
    <div class="reset-container">
        <h2>Reset Password and Username</h2>
        <form id="resetForm">
            <div class="form-group">
                <label for="newUsername">New Username:</label>
                <input type="text" id="newUsername" name="newUsername" required>
            </div>
            <div class="form-group">
                <label for="newPassword">New Password:</label>
                <input type="password" id="newPassword" name="newPassword" required>
            </div>
            <button type="button" onclick="resetCredentials()">Reset</button>
            <p id="reset-message"></p>
        </form>
    </div>

    <script src="script.js"></script>
</body>

</html>