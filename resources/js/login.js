const loginForm = document.getElementById("loginForm");
const emailInput = document.getElementById("email");
const passwordInput = document.getElementById("password");

loginForm.addEventListener("submit", function (event) {
  event.preventDefault();

  const email = emailInput.value;
  const password = passwordInput.value;

  if (email === "" || password === "") {
    alert("Please fill in all fields.");
    return;
  }

  if (email === "fitr@gmail.com" && password === "123") {
    alert("Login successful!");

    window.location.href = '/index';
  } else {
    alert("Invalid email or password. Please try again.");
  }
});