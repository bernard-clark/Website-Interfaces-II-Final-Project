// Fetch service data from the backend
fetch('services.php') // Call the PHP file to retrieve services
.then(response => response.json()) // Convert the response to JSON
.then(data => {
    // Loop through the service data and create cards for each service
    data.forEach(service => {
        const card = document.createElement('div'); // Create a new div for the service card
        card.className = 'service-card'; // Add CSS class for styling
        card.setAttribute('data-title', service.title); // Store the title as a data attribute
        card.setAttribute('data-description', service.description); // Store the description as a data attribute
        card.setAttribute('data-schedule', JSON.stringify(service.schedule)); // Store the schedule as a JSON string

        // Populate the card's inner HTML with service details
        card.innerHTML = `
            <h2>${service.title}</h2> <!-- Service title -->
            <p>${service.description.substring(0, 50)}...</p> <!-- Shortened description -->
        `;

        // Add an event listener to handle clicks on the card
        card.addEventListener('click', () => {
            // Set the popup title and description
            popupTitle.textContent = service.title; // Populate popup with service title
            popupDescription.textContent = service.description; // Populate popup with full description

            // Parse the schedule data and populate the schedule list
            const schedule = JSON.parse(card.getAttribute('data-schedule')); // Parse JSON string into an object
            const scheduleList = document.getElementById('popup-schedule'); // Get the schedule list element
            scheduleList.innerHTML = ''; // Clear any existing list items

            // Loop through the schedule object and create list items
            for (const [day, time] of Object.entries(schedule)) {
                const listItem = document.createElement('li'); // Create a new list item
                listItem.textContent = `${day}: ${time}`; // Populate list item with day and time
                scheduleList.appendChild(listItem); // Add the list item to the schedule list
            }

            // Display the popup and overlay
            popup.style.display = 'block'; // Show the popup
            overlay.style.display = 'block'; // Show the overlay
        });

        // Append the card to the container element
        container.appendChild(card);
    });
})
.catch(error => console.error('Error fetching services:', error)); // Log any errors that occur

// Function to close the popup
function closePopup() {
popup.style.display = 'none'; // Hide the popup
overlay.style.display = 'none'; // Hide the overlay
}