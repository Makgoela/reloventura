//RESPONSIVE NAV-BAR OPEN AND CLOSE BUTTON FUNCTIONS
const nav = document.querySelector(".nav"),
  
  navOpenBtn = document.querySelector(".navOpenBtn"),
  navCloseBtn = document.querySelector(".navCloseBtn");
  
navOpenBtn.addEventListener("click", () => {
  nav.classList.add("openNav");
  
});
navCloseBtn.addEventListener("click", () => {
  nav.classList.remove("openNav");
});

//Email Validation
function ValidateEmail() {
    var email = document.getElementById("emailAddr").value;

    if (email.trim() === "") {
        alert("Email address cannot be empty.");
        return false;
    }

    if (!email.includes("@")) {
        alert("Email address is missing the domain part (e.g., 'example@example.com').");
        return false;
    }

    var parts = email.split("@");
    if (parts.length !== 2) {
        alert("Invalid email format. Use 'example@example.com'.");
        return false;
    }

    var domain = parts[1];
    if (!domain.includes(".")) {
        alert("Email address is missing the domain part (e.g., 'example@example.com').");
        return false;
    }

    var topLevelDomain = domain.split(".");
    if (topLevelDomain.length !== 2 || topLevelDomain[1].toLowerCase() !== "com") {
        alert("Invalid or missing top-level domain (e.g., 'com').");
        return false;
    }

    alert("Successful login!");
    return true;
}

function togglePasswordVisibility() {
  const passwordInput = document.getElementById('passwordInput');
  if (passwordInput.type === 'password') {
      passwordInput.type = 'text';
  } else {
      passwordInput.type = 'password';
  }
}

//password length and characters



