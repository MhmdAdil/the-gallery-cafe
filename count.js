// Set the date we're counting down to
const promotionEndDate = new Date("Sep 15, 2024 23:59:59").getTime();

// Update the countdown every 1 second
const x = setInterval(function() {
    const now = new Date().getTime(); // Get today's date and time
    const distance = promotionEndDate - now; // Find the distance between now and the countdown date

    // Time calculations for days, hours, minutes, and seconds
    const days = Math.floor(distance / (1000 * 60 * 60 * 24));
    const hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
    const minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
    const seconds = Math.floor((distance % (1000 * 60)) / 1000);

    // Display the results in the respective elements
    document.getElementById("days").innerHTML = days;
    document.getElementById("hours").innerHTML = hours;
    document.getElementById("minutes").innerHTML = minutes;
    document.getElementById("seconds").innerHTML = seconds;

    // If the countdown is finished, display a message
    if (distance < 0) {
        clearInterval(x);
        document.getElementById("countdown-covering").innerHTML = "Promotion has ended!";
    }
}, 1000);
