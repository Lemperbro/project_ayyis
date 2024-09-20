function ShowPassword() {
    var password = document.getElementById("password");
    var eyeShow = document.getElementById("eyeShow");
    var eyeHidden = document.getElementById("eyeHidden");
    if (password.type === "password") {
       password.type = "text";
 
       eyeShow.classList.add('hidden')
       eyeHidden.classList.remove('hidden')
 
    } else {
       password.type = "password";
 
 
       eyeHidden.classList.add('hidden')
       eyeShow.classList.remove('hidden')
 
    }
 
    }


    function ShowPasswordConfirmation() {
        var password = document.getElementById("password_confirmation");
        var eyeShow = document.getElementById("eyeShow2");
        var eyeHidden = document.getElementById("eyeHidden2");
        if (password.type === "password") {
           password.type = "text";
     
           eyeShow.classList.add('hidden')
           eyeHidden.classList.remove('hidden')
     
        } else {
           password.type = "password";
     
     
           eyeHidden.classList.add('hidden')
           eyeShow.classList.remove('hidden')
     
        }
     
        }