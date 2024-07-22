document.addEventListener("DOMContentLoaded", (event) => {
  const password = document.getElementById("password");
  const confirm_password = document.getElementById("confirm_password");
  const message = document.getElementById("message");

  function validatePassword() {
    if (password.value !== confirm_password.value) {
      message.textContent = "Passwords do not match";
    } else {
      message.textContent = "";
    }
  }

  password.addEventListener("input", validatePassword);
  confirm_password.addEventListener("input", validatePassword);
});
