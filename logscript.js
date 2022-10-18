const container = document.querySelector(".container"),
    pwShowHide = document.querySelectorAll(".showHidePw"),
    pwFields = document.querySelectorAll(".password"),
    signUp = document.querySelector(".signup-link"),
    login = document.querySelector(".login-link");

//   js code to show/hide password and change icon
pwShowHide.forEach(eyeIcon => {
    eyeIcon.addEventListener("click", () => {
        pwFields.forEach(pwField => {
            if (pwField.type === "password") {
                pwField.type = "text";

                pwShowHide.forEach(icon => {
                    icon.classList.replace("uil-eye-slash", "uil-eye");
                })
            } else {
                pwField.type = "password";

                pwShowHide.forEach(icon => {
                    icon.classList.replace("uil-eye", "uil-eye-slash");
                })
            }
        })
    })
})

// js code to appear signup and login form
signUp.addEventListener("click", () => {
    container.classList.add("active");
});
login.addEventListener("click", () => {
    container.classList.remove("active");
});

function validate($check) {
    // var log_uid = document.login.email;
    // var log_password = document.login.password;
    // var rname = document.regform.rname;
    // var remail = document.regform.remail;
    // var phone = document.regform.phone;
    // var password = document.login.password;
    // var password = document.login.password;

    var reg_firstname = document.getElementById("reg_firstname");
    var reg_lastname = document.getElementById("reg_lastname");
    var reg_email = document.getElementById("reg_email");
    var reg_phone = document.getElementById("reg_phone");
    var reg_password = document.getElementById("reg_password");
    var reg_confpassword = document.getElementById("reg_confpassword");
    var regterm = document.getElementById("regterm");
    if (reg_password.value != reg_confpassword.value) {
        alert("Both passwords don't match !!");
        reg_password.value = "";
        reg_confpassword.value = "";
        reg_password.focus();
        return false;

    } else if (!regterm.checked) {
        alert("please accept the terms and conditions to register");
        return false;
    } else {
        return true;
    }



}