const users = {
    "user1": { username: "user1", password: "pass1", role: "Role 1 Functions" },
    "user2": { username: "user2", password: "pass2", role: "Role 2 Functions" },
    "user3": { username: "user3", password: "pass3", role: "Role 3 Functions" },
    "user4": { username: "user4", password: "pass4", role: "Role 4 Functions" }
};

function validateLogin() {
    const position = document.getElementById("position").value;
    const username = document.getElementById("username").value;
    const password = document.getElementById("password").value;

    if (users[position] && username === users[position].username && password === users[position].password) {
        alert(`Welcome, ${username}! You have access to ${users[position].role}.`);
        // Redirect or perform other actions after successful login
    } else {
        document.getElementById("error-message").innerText = "Invalid username or password. Please try again.";
    }
}

function resetCredentials() {
    const newUsername = document.getElementById("newUsername").value;
    const newPassword = document.getElementById("newPassword").value;
    const position = document.getElementById("position").value;

    if (users[position]) {
        // Reset username and password for the selected user position
        users[position].username = newUsername;
        users[position].password = newPassword;
        document.getElementById("reset-message").innerText = "Credentials reset successfully!";
    } else {
        document.getElementById("reset-message").innerText = "Invalid user position. Please try again.";
    }
}
