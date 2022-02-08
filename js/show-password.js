const togglePassword = document.querySelector("#showPwd");
const password = document.querySelector("#pwd");

togglePassword.addEventListener("click", function (e) {

    // toggle the type attribute
    const type = password.getAttribute("type") === "password" ? "text" : "password";
    password.setAttribute("type", type);
    
    // toggle the icon
    this.classList.toggle("fa-eye");
    this.classList.toggle("fa-eye-slash");

});
