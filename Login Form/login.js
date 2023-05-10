const form = document.getElementById("login-form");

form.addEventListener("submit", function(event) {
  event.preventDefault();
  const username = document.getElementById("username").value;
  const password = document.getElementById("password").value;

  // Perform validation here
  if (username === "example" && password === "password") {
    alert("Logged in successfully!");
  } else {
    alert("Invalid username or password. Please try again.");
  }
});
