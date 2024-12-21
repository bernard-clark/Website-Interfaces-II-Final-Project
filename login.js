// Add event listener for form submission
document.getElementById("loginForm").addEventListener("submit", function(event) {
    // Clear previous error messages
    const errorMessage = document.getElementById("error-message");
    errorMessage.textContent = "";
    // Get form input values
    const username = document.getElementById("username").value;
    const password = document.getElementById("password").value;
    // Validate inputs (basic example)
    if (username === "" || password === "") {
        // Display an error message if fields are empty
        errorMessage.textContent = "Both fields are required.";
        event.preventDefault(); // Prevent form submission
    }
});
// Function to generate a random password
function generatePassword(length = 12) {
    // Define characters to include in the password
    const characters = "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789!@#$%^&*()_+[]{}|;:,.<>?";
    let password = "";
    // Loop to select random characters
    for (let i = 0; i < length; i++) {
        const randomIndex = Math.floor(Math.random() * characters.length);
        password += characters[randomIndex];
    }
    return password; // Return the generated password
}
// Example usage of the password generator
console.log("Generated Password:", generatePassword());