/* Function to update the clock in real-time */
    function updateClock() {
    // Create a new Date object to get the current local time
    const now = new Date();

    // Extract hours, minutes, and seconds
    // Use padStart to ensure each value is always two digits
    const hours = String(now.getHours()).padStart(2, '0');
    const minutes = String(now.getMinutes()).padStart(2, '0');
    const seconds = String(now.getSeconds()).padStart(2, '0');

    // Combine the values into a single time string
    const currentTime = `${hours}:${minutes}:${seconds}`;

    // Update the content of the clock element with the new time
    document.getElementById('clock').textContent = currentTime;
}

// Call updateClock every second to keep the clock accurate
setInterval(updateClock, 1000);

// Initialize the clock immediately when the page loads
updateClock();