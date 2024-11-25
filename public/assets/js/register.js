function validateForm(event) {
    event.preventDefault(); // Prevent form submission to validate first

    // Get values from the form fields
    const email = document.getElementById('email').value;
    const password = document.getElementById('password').value;
    const doublePassword = document.getElementById('doublePassword').value;

    // Validate email format
    const emailRegex = /^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/;
    if (!emailRegex.test(email)) {
      alert('Please enter a valid email address.');
      return false;
    }

    // Check if the passwords match
    if (password !== doublePassword) {
      alert('Passwords do not match.');
      return false;
    }

    // Check if any field is empty
    if (!email || !password || !doublePassword) {
      alert('Please fill out all fields.');
      return false;
    }

    // If everything is fine, submit the form
    alert('Form submitted successfully!');
    window.location.href = '/index'; 
    return true;
  }