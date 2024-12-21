$(document).ready(function () {
    // Select the form element
    const $form = $("form");
  
    // Message container for displaying feedback (success, error, etc.)
    const $messageContainer = $("<div></div>").prependTo($form);
  
    // Attach a submit event handler to the form
    $form.on("submit", function (event) {
      event.preventDefault(); // Prevent the default form submission behavior
  
      // Clear any previous messages
      $messageContainer.text("").removeClass("success error info");
  
      // Get the values of the form fields
      const name = $("#name").val().trim(); // Name field value
      const email = $("#email").val().trim(); // Email field value
      const message = $("#message").val().trim(); // Message field value
  
      // Client-side validation
      if (!name) {
        // If the name field is empty
        displayMessage("Name is required.", "error");
        return; // Stop further execution
      }
  
      if (!email) {
        // If the email field is empty
        displayMessage("Email is required.", "error");
        return;
      }
  
      if (!validateEmail(email)) {
        // If the email format is invalid
        displayMessage("Please enter a valid email address.", "error");
        return;
      }
  
      if (!message) {
        // If the message field is empty
        displayMessage("Message cannot be empty.", "error");
        return;
      }
  
      // If all validations pass, show a processing message
      displayMessage("Processing your request...", "info");
  
      // Simulate asynchronous submission using a timeout
      setTimeout(function () {
        // Simulate successful form submission
        displayMessage(
          "Thank you for your message! We'll get back to you soon.",
          "success"
        );
  
        // Reset the form fields after successful submission
        $form[0].reset();
      }, 1000); // Simulate a 1-second delay
    });
  
    /**
     * Function to display a message to the user
     * @param {string} text - The message text to display
     * @param {string} type - The type of message: 'success', 'error', or 'info'
     */
    function displayMessage(text, type) {
      $messageContainer
        .text(text) // Set the message text
        .removeClass("success error info") // Remove any previous classes
        .addClass(type); // Add the new class (e.g., success, error, info)
    }
  
    /**
     * Function to validate the email format
     * @param {string} email - The email address to validate
     * @returns {boolean} True if the email format is valid, false otherwise
     */
    function validateEmail(email) {
      // Regular expression to validate an email address
      const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
      return emailRegex.test(email);
    }
  });