document.getElementById('loginForm').addEventListener('submit', function(event) {
  event.preventDefault();
  // Here you can add your login functionality using JavaScript
  // For example, you can get the email and password values and process them
  // For demonstration purposes, let's log the values to console
  const email = document.getElementById('email').value;
  const password = document.getElementById('password').value;
  console.log("Email:", email);
  console.log("Password:", password);
});

