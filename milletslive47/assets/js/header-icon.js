// Retrieve email from URL
const queryString = window.location.search;
const urlParams = new URLSearchParams(queryString);
const email = urlParams.get('email');

// Extract first two letters from email
const initials = email.substring(0, 1).toUpperCase();

// Update profile icon with initials
const profileIcon = document.querySelector('.profile-icon');
profileIcon.innerText = initials;