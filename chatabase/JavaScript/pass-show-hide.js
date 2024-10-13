const paswrdField =  document.querySelector(".form .fieled input[type='password']");
const toggleBtn = document.querySelector(".form .fieled i");

toggleBtn.onclick = () => {
    // Assuming paswrdField is a reference to the password input field
    if (paswrdField.type === "password") {
        paswrdField.type = "text";  // Change input type to text (show password)
        paswrdField.classList.add("active");  // Add a CSS class to style the field as active
    } else {        
        paswrdField.type = "password";  // Change input type back to password (hide password)
        paswrdField.classList.remove("active");  // Remove the active class
    }
}
