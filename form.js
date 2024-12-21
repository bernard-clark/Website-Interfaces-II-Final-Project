// Reference to the form element
const form = document.getElementById('applicationForm');

// Add an event listener for the form's submit event
form.addEventListener('submit', function (event) {
    event.preventDefault(); // Prevent the default form submission (page reload)

    // Collect the form data using FormData
    const formData = new FormData(form);

    // Send the form data to the server using Fetch API
    fetch('', { // '' refers to the current page
        method: 'POST', // Send a POST request
        body: formData // Attach the form data
    })
    .then(response => response.text()) // Parse the response as text
    .then(html => {
        // Replace the entire page content with the updated response
        document.body.innerHTML = html;
    })
    .catch(error => {
        console.error('Error submitting form:', error); // Log any errors to the console
    });
});