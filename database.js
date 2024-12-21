// Function to alert user when a row is clicked
document.addEventListener("DOMContentLoaded", function () {
    // Select all table rows except the header row
    const rows = document.querySelectorAll("table tr:not(:first-child)");

    rows.forEach((row) => {
        row.addEventListener("click", function () {
            const name = this.cells[1].textContent;
            const email = this.cells[2].textContent;
            alert(`You clicked on:\nName: ${name}\nEmail: ${email}`);
        });
    });

    // Example of handling a button click
    const button = document.getElementById("exampleButton");
    if (button) {
        button.addEventListener("click", function () {
            alert("Button clicked!");
        });
    }
});